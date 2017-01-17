<?php

class Site extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("Site_model");
		$this->load->model("User_group_model");
		$this->load->model("Site_field_privilege_model");
		$this->load->model("Material_privilege_model");
		$this->load->model("Featured_model");
		$this->load->library("session");
	}

	public function cimage($site_ref, $month, $year) {
		$count = 1;
		$cont = true;
		while ($cont) {
			$filename=$_SERVER['DOCUMENT_ROOT'] . "/siteimages/" . $year . "/" . $month . "/" . $site_ref . "_" . $count . ".jpg";
			if(!file_exists($filename)){
				$cont = false;
			}
			$count++;
		}
		echo ($count - 2);
	}

	public function fimage($site_ref) {
		$featured = $this->Featured_model->get_featured_sites();
		for ($i = 0; $i < count($featured); $i++) {
			if ($featured[$i]["site_ref"] == $site_ref) {
				$year = 3000;
				while ($year >= 0) {
					$month = 12;
					while ($month >= 0) {
						$filename=$_SERVER['DOCUMENT_ROOT'] . "/siteimages/" . $year . "/" . $month . "/" . $site_ref . "_1.jpg";
						if(file_exists($filename)){
							header('Content-Length: '.filesize($filename)); //<-- sends filesize header
							header('Content-Type: image/jpg'); //<-- send mime-type header
							header('Content-Disposition: inline; filename="'.$filename.'";'); //<-- sends filename header
							readfile($filename); //<--reads and outputs the file onto the output buffer
							return;
						}
						$month--;
					}
					$year--;
				}
			}
		}
		echo "0";
	}

	public function images($site_ref, $month, $year, $count) {
		$user = $this->session->userdata("user");
		if (!$user) {
			echo "0";
		}


		$filename=$_SERVER['DOCUMENT_ROOT'] . "/siteimages/" . $year . "/" . $month . "/" . $site_ref . "_" . $count . ".jpg"; //<-- specify the image  file
		if(file_exists($filename)){
			header('Content-Length: '.filesize($filename)); //<-- sends filesize header
			header('Content-Type: image/jpg'); //<-- send mime-type header
			header('Content-Disposition: inline; filename="'.$filename.'";'); //<-- sends filename header
			readfile($filename); //<--reads and outputs the file onto the output buffer
			//die(); //<--cleanup
			//exit; //and exit
		}
		else {
			echo "0";
			return;
		}
	}

	public function view($type = "monitoring") {
		$user = $this->session->userdata("user");
		$group = $this->session->userdata($type . "_group");
		if (!$user) {
			redirect(base_url() . "index.php/home");
		}

		$material_privileges = $this->Material_privilege_model->get_material_privileges($group["group_name"]);
		$matprivileges = array();

		$filters = array();
		$dateString = $this->input->post("filter-date");
		$place = $this->input->post("filter-place");
		$material = $this->input->post("filter-material");
		$format = $this->input->post("filter-format");
		$supplier = $this->input->post("filter-supplier");
		$heightMax = $this->input->post("filter-height-max");
		$heightMin = $this->input->post("filter-height-min");
		$widthMax = $this->input->post("filter-width-max");
		$widthMin = $this->input->post("filter-width-min");
		$aveHeightMax = $this->input->post("filter-ave-height-max");
		$aveHeightMin = $this->input->post("filter-ave-height-min");
		$aveWidthMax = $this->input->post("filter-ave-width-max");
		$aveWidthMin = $this->input->post("filter-ave-width-min");
		$costMax = $this->input->post("filter-cost-max");
		$costMin = $this->input->post("filter-cost-min");
		$cpsfMax = $this->input->post("filter-cpsf-max");
		$cpsfMin = $this->input->post("filter-cpsf-min");
		$aveCpsfMax = $this->input->post("filter-ave-cpsf-max");
		$aveCpsfMin = $this->input->post("filter-ave-cpsf-min");
		$cpmMax = $this->input->post("filter-cpm-max");
		$cpmMin = $this->input->post("filter-cpm-min");
		$aveCpmMax = $this->input->post("filter-ave-cpm-max");
		$aveCpmMin = $this->input->post("filter-ave-cpm-min");
		$trafficMax = $this->input->post("filter-traffic-max");
		$trafficMin = $this->input->post("filter-traffic-min");
		$scoreMax = $this->input->post("filter-score-max");
		$scoreMin = $this->input->post("filter-score-min");
		$netAudienceMax = $this->input->post("filter-net-audience-max");
		$netAudienceMin = $this->input->post("filter-net-audience-min");
		$remarks = $this->input->post("remarks");

		if ($dateString) {
			$filters["dateString"] = $dateString;
		}
		if ($place) {
			$filters["place"] = $place;
		}
		if ($material) {
			$filters["material"] = $material;
		}
		if ($format) {
			$filters["format"] = $format;
		}
		if ($supplier) {
			$filters["supplier"] = $supplier;
		}
		if ($heightMax) {
			$filters["heightMax"] = $heightMax;
		}
		if ($heightMin) {
			$filters["heightMin"] = $heightMin;
		}
		if ($widthMax) {
			$filters["widthMax"] = $widthMax;
		}
		if ($widthMin) {
			$filters["widthMin"] = $widthMin;
		}
		if ($aveHeightMax) {
			$filters["aveHeightMax"] = $aveHeightMax;
		}
		if ($aveHeightMin) {
			$filters["aveHeightMin"] = $aveHeightMin;
		}
		if ($aveWidthMax) {
			$filters["aveWidthMax"] = $aveWidthMax;
		}
		if ($aveWidthMin) {
			$filters["aveWidthMin"] = $aveWidthMin;
		}
		if ($costMax) {
			$filters["costMax"] = $costMax;
		}
		if ($cpsfMax) {
			$filters["cpsfMax"] = $cpsfMax;
		}
		if ($cpsfMin) {
			$filters["cpsfMin"] = $cpsfMin;
		}
		if ($aveCpsfMax) {
			$filters["aveCpsfMax"] = $aveCpsfMax;
		}
		if ($aveCpsfMin) {
			$filters["aveCpsfMin"] = $aveCpsfMin;
		}
		if ($cpmMax) {
			$filters["cpmMax"] = $cpmMax;
		}
		if ($cpmMin) {
			$filters["cpmMin"] = $cpmMin;
		}
		if ($aveCpmMax) {
			$filters["aveCpmMax"] = $aveCpmMax;
		}
		if ($aveCpsfMin) {
			$filters["aveCpmMin"] = $aveCpmMin;
		}
		if ($trafficMax) {
			$filters["trafficMax"] = $trafficMax;
		}
		if ($trafficMin) {
			$filters["trafficMin"] = $trafficMin;
		}
		if ($scoreMax) {
			$filters["scoreMax"] = $scoreMax;
		}
		if ($scoreMin) {
			$filters["scoreMin"] = $scoreMin;
		}
		if ($netAudienceMax) {
			$filters["netAudienceMax"] = $netAudienceMax;
		}
		if ($netAudienceMin) {
			$filters["netAudienceMin"] = $netAudienceMin;
		}
		if ($remarks) {
			$filters["remarks"] = $remarks;
		}

		foreach ($material_privileges as $x) {
			array_push($matprivileges, $x["material_name"]);
		}
		$sites = $this->Site_model->get_sites($matprivileges, $filters, $group["mode"]);

		$site_field_privileges = $this->Site_field_privilege_model->get_site_field_privileges($group["group_name"]);
		$privileges = array();
		foreach ($site_field_privileges as $x) {
			array_push($privileges, $x["column_id"]);
		}
		$data = array(
			"sites" => $sites,
			"privileges" => $privileges,
			"monitoring_group" => $group = $this->session->userdata("monitoring_group"),
			"competitive_group" => $group = $this->session->userdata("competitive_group"),
			"site_sourcing_group" => $group = $this->session->userdata("site_sourcing_group")
		);

		$this->load->view("user/search", $data);
	}
}
