<?php

class Site_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	/* This function adds sites by batch.
	   Returns: true if the operation was successful and false otherwise. */
	public function add_sites($site_list) {
		$affected = 0;
		$this->db->trans_start();
		$this->db->select("site_ref");
		$res = $this->db->get("site");
		$res = $res->result_array();
		for ($i = 0; $i < count($res); $i++) {
			$res[$i] = $res[$i]["site_ref"];
		}

		$toupdate = array();
		$toadd = array();
		for ($i = 0; $i < count($site_list); $i++) {
			if (in_array($site_list[$i]["site_ref"], $res)) {
				array_push($toupdate, $site_list[$i]);
			}
			else {
				array_push($toadd, $site_list[$i]);
			}
		}


		$this->db->flush_cache();
		$this->db->insert_batch("site", $toadd);
		$this->db->update_batch("site", $toupdate, "site_ref");
		$affected = $this->db->affected_rows();
		$this->db->trans_complete();
		if ($affected > 0) {
			return true;
		}
		return false;
	}

	/* This function adds a site.
		 Returns: true if the operation was successful and false otherwise. */
	public function add_site($site_ref, $province, $city, $street, $location, $supplier_contact, $supplier_email, $height, $width,
		$avg_height, $avg_width, $cost, $CPSF, $avg_CPSF, $CPM, $avg_CPM, $format, $x, $y, $traffic_count, $score, $ref_audience, $remarks) {
		$data = array (
			"site_ref" => $site_ref,
			"province" => $province,
			"city" => $city,
			"street" => $street,
			"location" => $location,
			"supplier_contact" => $supplier_contact,
			"supplier_email" => $supplier_email,
			"height" => $height,
			"width" => $width,
			"avg_height" => $avg_height,
			"avg_width" => $avg_width,
			"cost" => $cost,
			"CPSF" => $CPSF,
			"avg_CPSF" => $avg_CPSF,
			"CPM" => $CPM,
			"avg_CPM" => $avg_CPM,
			"format" => $format,
			"x" => $x,
			"y" => $y,
			"traffic_count" => $traffic_count,
			"score" => $score,
			"ref_audience" => $ref_audience,
			"remarks" => $remarks
		);
		if ($this->db->insert("site", $data)) {
			return true;
		}
		return false;
	}

	/* This function updates a site. It will check if there is an existing site. If yes, it will update the details
	of that site. If the site does not exist, it will fail. If the site exists but no data was changed, it will also fail.
	Returns: true if the update was successful and false otherwise. */
	public function update_site($target_site_ref, $site_ref, $province, $city, $street, $location, $supplier_contact,
		$supplier_email, $height, $width,	$avg_height, $avg_width, $cost, $CPSF, $avg_CPSF, $CPM, $avg_CPM, $format, $x, $y,
		$traffic_count, $score, $ref_audience, $remarks) {
		$data = array (
			"site_ref" => $site_ref,
			"province" => $province,
			"city" => $city,
			"street" => $street,
			"location" => $location,
			"supplier_contact" => $supplier_contact,
			"supplier_email" => $supplier_email,
			"height" => $height,
			"width" => $width,
			"avg_height" => $avg_height,
			"avg_width" => $avg_width,
			"cost" => $cost,
			"CPSF" => $CPSF,
			"avg_CPSF" => $avg_CPSF,
			"CPM" => $CPM,
			"avg_CPM" => $avg_CPM,
			"format" => $format,
			"x" => $x,
			"y" => $y,
			"traffic_count" => $traffic_count,
			"score" => $score,
			"ref_audience" => $ref_audience,
			"remarks" => $remarks
		);

		$this->db->where("site_ref", $site_ref);
		$this->db->update("site", $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	/* This function removes a site with the given group name. If the site does not exist,
	it will fail.
	Returns: true if the deletion is successful, and false otherwise. */
	public function remove_site($target_site_ref) {
		$this->db->delete("site", array("site_ref" => $target_site_ref));
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	/* This function gets all the sites from the database. Please take note of the following paramters:
	FIRST PARAMETER: MATERIAL_LIST
	- a string array representing the list of materials that will be visible
	SECOND PARAMETER: FILTER_LIST
	- an associative array in the following format:
	array(
		"place" => "Cavite",
	)
*/
	public function get_sites($material_list, $filter_list, $mode) {
		$this->db->join("materialplacement", "site.site_ref = materialplacement.site_ref", "inner");
		if ($mode == "include") {
			$this->db->where_in("material_name", $material_list);
		}
		else if ($mode == "exclude") {
			$this->db->where_not_in("material_name", $material_list);
		}
		else {
			$this->db->where_in("material_name", $material_list);
		}

		if (isset($filter_list["dateString"])) {
			$dateString = $filter_list["dateString"];
			$actualDateString = $dateString . "-01";
			$this->db->group_start()->where("time_of_placement", $actualDateString)->group_end();
		}
		if (isset($filter_list["place"])) {
			$place = $filter_list["place"];
			$this->db->group_start()->like("street", $place)->or_like("city", $place)->or_like("province", $place)->or_like("location", $place)->group_end();
		}
		if (isset($filter_list["material"])) {
			$material = $filter_list["material"];
			$this->db->group_start()->like("material_name", $material)->or_like("category", $material)->or_like("subcategory", $material)->group_end();
		}
		if (isset($filter_list["format"])) {
			$format = $filter_list["format"];
			$this->db->group_start()->like("format", $format)->group_end();
		}
		if (isset($filter_list["supplier"])) {
			$supplier = $filter_list["supplier"];
			$this->db->group_start()->like("supplier_name", $supplier)->or_like("supplier_contact", $supplier)->or_like("supplier_email", $supplier)->group_end();
		}
		if (isset($filter_list["heightMax"])) {
			$heightMax = $filter_list["heightMax"];
			$this->db->group_start()->where("height <=", $heightMax)->group_end();
		}
		if (isset($filter_list["heightMin"])) {
			$heightMin = $filter_list["heightMin"];
			$this->db->group_start()->where("height >=", $heightMin)->group_end();
		}
		if (isset($filter_list["widthMax"])) {
			$widthMax = $filter_list["widthMax"];
			$this->db->group_start()->where("width <=", $widthMax)->group_end();
		}
		if (isset($filter_list["widthMin"])) {
			$widthMin = $filter_list["widthMin"];
			$this->db->group_start()->where("width >=", $widthMin)->group_end();
		}
		if (isset($filter_list["aveHeightMax"])) {
			$aveHeightMax = $filter_list["aveHeightMax"];
			$this->db->group_start()->where("ave_height <=", $aveHeightMax)->group_end();
		}
		if (isset($filter_list["aveHeightMin"])) {
			$aveHeightMin = $filter_list["aveHeightMin"];
			$this->db->group_start()->where("ave_height >=", $aveHeightMin)->group_end();
		}
		if (isset($filter_list["aveWidthMax"])) {
			$aveWidthMax = $filter_list["aveWidthMax"];
			$this->db->group_start()->where("ave_width <=", $aveWidthMax)->group_end();
		}
		if (isset($filter_list["aveWidthMin"])) {
			$aveWidthMin = $filter_list["aveWidthMin"];
			$this->db->group_start()->where("ave_width >=", $aveWidthMin)->group_end();
		}
		if (isset($filter_list["costMax"])) {
			$costMax = $filter_list["costMax"];
			$this->db->group_start()->where("cost <=", $costMax)->group_end();
		}
		if (isset($filter_list["costMin"])) {
			$costMin = $filter_list["costMin"];
			$this->db->group_start()->where("cost >=", $costMin)->group_end();
		}
		if (isset($filter_list["cpsfMax"])) {
			$cpsfMax = $filter_list["cpsfMax"];
			$this->db->group_start()->where("CPSF <=", $cpsfMax)->group_end();
		}
		if (isset($filter_list["cpsfMin"])) {
			$cpsfMin = $filter_list["cpsfMin"];
			$this->db->group_start()->where("CPSF >=", $cpsfMin)->group_end();
		}
		if (isset($filter_list["cpmMax"])) {
			$cpmMax = $filter_list["cpmMax"];
			$this->db->group_start()->where("CPM <=", $cpmMax)->group_end();
		}
		if (isset($filter_list["cpmMin"])) {
			$cpmMin = $filter_list["cpmMin"];
			$this->db->group_start()->where("CPM >=", $cpmMin)->group_end();
		}
		if (isset($filter_list["aveCpsfMax"])) {
			$aveCpsfMax = $filter_list["aveCpsfMax"];
			$this->db->group_start()->where("ave_CPSF <=", $aveCpsfMax)->group_end();
		}
		if (isset($filter_list["aveCpsfMin"])) {
			$aveCpsfMin = $filter_list["aveCpsfMin"];
			$this->db->group_start()->where("ave_CPSF >=", $aveCpsfMin)->group_end();
		}
		if (isset($filter_list["aveCpmMax"])) {
			$aveCpmMax = $filter_list["aveCpmMax"];
			$this->db->group_start()->where("ave_CPM <=", $aveCpmMax)->group_end();
		}
		if (isset($filter_list["aveCpmMin"])) {
			$aveCpmMin = $filter_list["aveCpmMin"];
			$this->db->group_start()->where("ave_CPM >=", $aveCpmMin)->group_end();
		}
		if (isset($filter_list["trafficMax"])) {
			$trafficMax = $filter_list["trafficMax"];
			$this->db->group_start()->where("traffic_count <=", $trafficMax)->group_end();
		}
		if (isset($filter_list["trafficMin"])) {
			$trafficMin = $filter_list["trafficMin"];
			$this->db->group_start()->where("traffic_count >=", $trafficMin)->group_end();
		}
		if (isset($filter_list["scoreMax"])) {
			$scoreMax = $filter_list["scoreMax"];
			$this->db->group_start()->where("score <=", $scoreMax)->group_end();
		}
		if (isset($filter_list["scoreMin"])) {
			$scoreMin = $filter_list["scoreMin"];
			$this->db->group_start()->where("score >=", $scoreMin)->group_end();
		}
		if (isset($filter_list["netAudienceMax"])) {
			$netAudienceMax = $filter_list["netAudienceMax"];
			$this->db->group_start()->where("ref_audience <=", $netAudienceMax)->group_end();
		}
		if (isset($filter_list["netAudienceMin"])) {
			$netAudienceMin = $filter_list["netAudienceMin"];
			$this->db->group_start()->where("ref_audience >=", $netAudienceMin)->group_end();
		}
		if (isset($filter_list["remarks"])) {
			$remarks = $filter_list["remarks"];
			$this->db->group_start()->like("remarks", $remarks)->group_end();
		}

		$query = $this->db->get("site");
		//print($this->db->last_query());
		if ($query) {
			return $query->result_array();
		}
		return false;
	}
}

?>
