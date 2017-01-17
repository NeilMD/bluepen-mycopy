<?php
	class Adminoperations extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model("User_account_model");
			$this->load->model("User_group_model");
			$this->load->model("Material_placement_model");
			$this->load->model("Site_field_privilege_model");
			$this->load->model("Material_privilege_model");
			$this->load->model("Site_model");
			$this->load->library("session");
			$this->load->helper("form");
		}

		private function checkadminloginstatus() {
			if ($this->session->userdata("admin")) {
				return true;
			}
			return false;
		}

		public function getmaterialsofgroup() {
			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			$groupname = $this->input->post("group_name");
			if (!$groupname) {
				echo "0";
				return;
			}
			$arr = $this->Material_privilege_model->get_material_privileges($groupname);
			$mode = $this->User_group_model->get_user_group($groupname)["mode"];

			if (!$arr) {
				$arr = array();
				
			}

			$res = array(
				"materials" => array(),
				"mode" => $mode
			);
			for ($i = 0; $i < count($arr); $i++) {
				array_push($res["materials"], $arr[$i]["material_name"]);
			}
			header("Content-type: application/json");
			echo json_encode($res);
		}

		public function getdistinctmaterials() {
			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			header("Content-type: application/json");
			$res = $this->Material_placement_model->get_material_placement_distinct();
			$res2 = $this->Material_privilege_model->get_material_privileges_distinct();
			$res = array_merge($res, $res2);
			$materials = array();
			foreach ($res as $material) {
				array_push($materials, $material["material_name"]);
			}
			$final = array();
			$materials = array_unique($materials);
			foreach ($materials as $material) {
				array_push($final, array("id" => $material, "text" => $material));
			}
			echo json_encode($final);
		}

		public function adduser() {
			$success = array("result" => "success");
			$failure = array("result" => "failure");

			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			$user = $this->input->post("user");
			$status = $this->input->post("status");
			if (!$user || !$status) {
				echo "0";
				return;
			}

			$username = $user[2];
			$password = $user[3];
			$firstname = $user[0];
			$lastname = $user[1];
			$email = $user[4];
			$monitoring_group = $user[5];
			if ($monitoring_group == "none") {
				$monitoring_group = null;
			}
			$competitive_group = $user[6];
			if ($competitive_group == "none") {
				$competitive_group = null;
			}
			$site_sourcing_group = $user[7];
			if ($site_sourcing_group == "none") {
				$site_sourcing_group = null;
			}
			$status1 = $user[8];

			if ($status == "add") {
				$res = $this->User_account_model->add_user_account($username,$password,$lastname,$firstname,$email,$monitoring_group,$competitive_group,$site_sourcing_group, $status1);

				if ($res) {
					echo "1";
				}
				else {
					echo "0";
				}
				return;
			}
			else if ($status == "edit") {
				$targetuser = $this->input->post("targetuser");
				if (!$targetuser) {
					echo "0";
					return;
				}
				$res = $this->User_account_model->update_user_account($targetuser, $username, $password, $lastname, $firstname,$email, $monitoring_group, $competitive_group, $site_sourcing_group, $status1);
				if ($res) {
					echo "1";
				}
				else {
					echo "0";
				}
				return;
			}
			echo "0";
		}

		public function removeuser() {
			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			$targetuser = $this->input->post("targetuser");
			if (!$targetuser) {
				echo "0";
				return;
			}

			$res = $this->User_account_model->remove_user_account($targetuser);
			if ($res) {
				echo "1";
			}
			else {
				echo "0";
			}
		}

		/* Used for adding / updating sites in the database.
		Expected POST paramters:
		{
			"site_ref", "province", "city", "street", "location", "supplier_contact", supplier_email", "height", "width",
			"avg_height", "avg_width", "cost", "CPSF", "avg_CPSF", "CPM, "avg_CPM", "format", "x", "y", "traffic_count", "score", "net_audience", "remarks",
			"material", "category", "subcategory"

			"status" -> add or edit
			"year", "month"
		} */
		public function addsite() {
			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			$site_ref = $this->input->post("site_ref");
			if (!$site_ref) $site_ref = null;
			$province = $this->input->post("province");
			if (!$province) $province = null;
			$city = $this->input->post("city");
			if (!$city) $city = null;
			$street = $this->input->post("street");
			if (!$street) $street = null;
			$location = $this->input->post("location");
			if (!$location) $location = null;
			$supplier_contact = $this->input->post("supplier_contact");
			if (!$supplier_contact) $supplier_contact = null;
			$supplier_email = $this->input->post("supplier_email");
			if (!$supplier_email) $supplier_email = null;
			$height = $this->input->post("height");
			if (!$height) $height = null;
			$width = $this->input->post("width");
			if (!$width) $width = null;
			$avg_height = $this->input->post("avg_height");
			if (!$avg_height) $avg_height = null;
			$avg_width = $this->input->post("avg_width");
			if (!$avg_width) $avg_width = null;
			$cost = $this->input->post("cost");
			if (!$cost) $cost = null;
			$CPSF = $this->input->post("CPSF");
			if (!$CPSF) $CPSF = null;
			$avg_CPSF = $this->input->post("avg_CPSF");
			if (!$avg_CPSF) $avg_CPSF = null;
			$CPM = $this->input->post("CPM");
			if (!$CPM) $CPM = null;
			$avg_CPM = $this->input->post("avg_CPM");
			if (!$avg_CPM) $avg_CPM = null;
			$format = $this->input->post("format");
			if (!$format) $format = null;
			$x = $this->input->post("x");
			if (!$x) $x = null;
			$y = $this->input->post("y");
			if (!$y) $y = null;
			$traffic_count = $this->input->post("traffic_count");
			if (!$traffic_count) $traffic_count = null;
			$score = $this->input->post("score");
			if (!$score) $score = null;
			$net_audience = $this->input->post("net_audience");
			if (!$net_audience) $net_audience = null;
			$remarks = $this->input->post("remarks");
			if (!$remarks) $remarks = null;
			$material = $this->input->post("material");
			if (!$material) $material = null;
			$category = $this->input->post("category");
			if (!$category) $category = null;
			$subcategory = $this->input->post("subcategory");
			if (!$subcategory) $subcategory = null;
			$year = $this->input->post("year");
			$month = $this->input->post("month");
			if (intval($month) < 10) {
				$month = "0" . $month;
			}
			$time_of_placement = $year . "-" . $month . "-01";

			$res = $this->Site_model->add_site($site_ref, $province, $city, $street, $location, $supplier_contact, $supplier_email, $height, $width,
				$avg_height, $avg_width, $cost, $CPSF, $avg_CPSF, $CPM, $avg_CPM, $format, $x, $y, $traffic_count, $score, $net_audience, $remarks);
			$res2 = $this->Material_placement_model->add_material_placement($site_ref, $time_of_placement, $material, $category, $subcategory);
			if ($res || $res2) {
				echo "1";
				return;
			}
			echo "0";
		}

		/* Used for adding / updating groups in the database.
		Exoected POST parameters:
   	{
			"groupname": the group name
			"groupinfo" : the group info
			"privileges" : an array of 28 boolean values representing the columns (true if visible)
			"materials" : an array of Strings representing the material privileges
			"mode" : "include" or "exclude"
			"status" : "add" or "edit"
			"target" : the group name to edit, ignored if status is add.
		} */
		public function addgroup() {
			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			$groupname = $this->input->post("groupname");
			$groupinfo = $this->input->post("groupinfo");

			$privileges = $this->input->post("privileges");
			$materials = $this->input->post("materials");
			$mode = $this->input->post("mode");
			$status = $this->input->post("status");

			if (!$groupname || !$groupinfo || !$status || !$privileges || count($privileges) != 27) {
				echo "0";
				return;
			}
			if (!$materials) {
				$materials = array();
			}
			if ($mode != "include" && $mode != "exclude") {
				echo "0";
				return;
			}
			if ($status == "add") {
				$res = $this->User_group_model->add_user_group($groupname, $groupinfo, $mode);
				if ($res) {
					$this->Site_field_privilege_model->update_site_field_privilege($groupname, $privileges);
					$this->Material_privilege_model->update_material_privilege($groupname, $materials);
					echo "1";
					return;
				}
				else {
					echo "0";
					return;
				}
			}
			else if ($status == "edit") {
				$target = $this->input->post("target");
				if (!$target) {
					echo "0";
					return;
				}
				$res1 = $this->User_group_model->update_user_group($target, $groupname, $groupinfo, $mode);
				$res2 = $this->Site_field_privilege_model->update_site_field_privilege($groupname, $privileges);
				$res3 =	$this->Material_privilege_model->update_material_privilege($groupname, $materials);

				if ($res1 || $res2 || $res3) {
					echo "1";
					return;
				}
				else {
					echo "0";
					return;
				}
			}
			echo "0";
		}

		/* Used for removing groups in the database.
		Exoected POST parameters:
   	{
			"target" : the group name to remove, ignored if status is add.
		} */
		public function removegroup() {
			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			$target = $this->input->post("target");
			if (!$target) {
				echo "0";
				return;
			}
			$this->Material_privilege_model->remove_all_material_privileges($target);
			$this->Site_field_privilege_model->remove_all_site_field_privileges($target);
			$res = $this->User_group_model->remove_user_group($target);
			if ($res) {
				echo "1";
				return;
			}
			echo "0";
		}

		public function uploadsites() {
			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			$site_list = $this->input->post("site_list");
			$time = $this->input->post("time");
			if (!$site_list || !$time) {
				echo "0";
				return;
			}
			$time .= "-01";
			$toadd = $site_list;
			for ($i = 0; $i < count($toadd); $i++) {
				unset($toadd[$i]["material"]);
				unset($toadd[$i]["category"]);
				unset($toadd[$i]["subcategory"]);
				$toadd[$i]["ref_audience"] = $toadd[$i]["net_audience"];
				unset($toadd[$i]["net_audience"]);
				$toadd[$i]["CPM"] = $toadd[$i]["CPSM"];
				unset($toadd[$i]["CPSM"]);
				$toadd[$i]["avg_CPM"] = $toadd[$i]["avg_CPSM"];
				unset($toadd[$i]["avg_CPSM"]);
			}

			$materialplacements = array();
			for ($i = 0; $i < count($site_list); $i++) {
				$data = array(
					"site_ref" => $site_list[$i]["site_ref"],
					"time_of_placement" => $time,
					"material_name" => $site_list[$i]["material"],
					"category" => $site_list[$i]["category"],
					"subcategory" => $site_list[$i]["subcategory"]
				);
				array_push($materialplacements, $data);
			}
			$res = $this->Site_model->add_sites($toadd);
			$res2 = $this->Material_placement_model->add_material_placements($materialplacements, $time);
			if ($res || $res2) {
				echo "1";
				return;
			}
			echo "0";
		}

		/*
		public function setactiveuser() {
			if (!$this->checkadminloginstatus()) {
				echo "0";
				return;
			}
			$targetuser = $this->input->post("targetuser");
			$active = $this->input->post("active");
			if (!$targetuser || !$active) {
				echo "0";
				return;
			}
			if ($active == 1) {
				$res = $this->User_account_model->set_active($targetuser);
			}
			else if ($active == 0) {
				$res = $this->User_account_model->set_inactive($targetuser);
			}

			if ($res) {
				echo "1";
			}
			else {
				echo "0";
			}
		}
		*/
	}
?>
