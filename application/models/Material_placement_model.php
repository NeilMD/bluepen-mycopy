<?php

class Material_placement_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function add_material_placements($data, $time_of_placement) {
		$affected = 0;
		$this->db->trans_start();
		$toadd = array();
		$toupdate = array();

		$this->db->select("site_ref");
		$res = $this->db->get_where("materialplacement", array("time_of_placement" => $time_of_placement))->result_array();

		for ($i = 0; $i < count($res); $i++) {
			$res[$i] = $res[$i]["site_ref"];
		}

		for ($i = 0; $i < count($data); $i++) {
			if (in_array($data[$i]["site_ref"], $res)) {
				array_push($toupdate, $data[$i]);
			}
			else {
				array_push($toadd, $data[$i]);
			}
		}

		$this->db->flush_cache();
		$this->db->insert_batch("materialplacement", $toadd);
		$this->db->flush_cache();
		$this->db->where("time_of_placement", $time_of_placement);
		$this->db->update_batch("materialplacement", $toupdate, "site_ref");
		$affected = $this->db->affected_rows();
		$this->db->trans_complete();

		if ($affected > 0) {
			return true;
		}
		return false;
	}

	/* This function adds a new material placement. The date should be in yyyy-mm-dd format.
	Returns: true if the add is successful or false if not. */
	public function add_material_placement($site_ref, $time_of_placement, $material_name, $category, $subcategory) {
		$data = array(
			"site_ref" => $site_ref,
			"time_of_placement" => $time_of_placement,
			"material_name" => $material_name,
			"category" => $category,
			"subcategory" => $subcategory
		);

		if ($this->db->insert("materialplacement", $data)) {
			return true;
		}
		return false;
	}

	/* This function updates a material placement. The date should be in yyyy-mm-dd format.
	Returns: true if the update is successful or false if it is not. */
	public function update_material_placement($target_site_ref, $site_ref, $time_of_placement, $material_name, $category, $subcategory) {
		$data = array(
			"site_ref" => $site_ref,
			"time_of_placement" => $time_of_placement,
			"material_name" => $material_name,
			"category" => $category,
			"subcategory" => $subcategory
		);

		$this->db->where("site_ref", $target_site_ref);
		$this->db->update("materialplacement", $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	/* This function removes a material placement.
	Returns: true if the update is successful or false if it is not. */
	public function remove_material_placement($target_site_ref) {
		$this->db->delete("materialplacement", array("site_ref" => $target_site_ref));
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	/* This function gets all material placements in the database.
	Returns: the array of material placements */
	public function get_material_placement() {
		$query = $this->db->get("materialplacement");
		if ($query) {
			return $query->result_array();
		}
		return array();
	}

	public function get_material_placement_distinct() {
		$this->db->distinct();
		$this->db->select("material_name");
		$query = $this->db->get("materialplacement");
		if ($query) {
			return $query->result_array();
		}
		return array();
	}

	/* This function gets all material placements in the database that have the given site ref.
	Returns: the array of material placements */
	public function get_material_placement_by_site_ref($site_ref) {
		$query = $this->db->get_where("materialplacement", array("site_ref", $site_ref));
		if ($query) {
			return $query->result_array();
		}
		return array();
	}
}

?>
