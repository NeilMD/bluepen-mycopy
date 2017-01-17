<?php

class Site_field_privilege_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	/* Adds or removes site privileges for a given group. For the second parameter, pass in a boolean array containing
  28 elements corresponding to the fields. Indices set to true will be added, while indices set to false will be
	removed. Please refer to database-design.txt document for the indices.
	Returns: true if the operation was successful and false otherwise. */
	public function update_site_field_privilege($group_name, $privileges) {
		$add = array();
		$rem = array();
		for ($i = 0; $i < 27; $i++) {
			if ($privileges[$i] == "true") {
				array_push($add, array("group_name" => $group_name, "column_id"=> $i));
			}
			else {
				array_push($rem, $i);
			}
		}

		$this->db->trans_start();
		$this->db->delete("sitefieldprivilege", array("group_name" => $group_name));
		$this->db->insert_batch("sitefieldprivilege", $add);
		$affected = $this->db->affected_rows();
		$this->db->trans_complete();

		if ($affected > 0) {
			return true;
		}
		return false;
	}

	/* Gets the site field privileges of the given group.
	Returns: the array of site field priveleges */
	public function get_site_field_privileges($group_name) {
		$this->db->select("column_id");
		$this->db->where("group_name", $group_name);
		$query = $this->db->get("sitefieldprivilege");
		if ($query) {
			return $query->result_array();
		}
		return array();
	}

	/* Gets all site field privileges
	Returns: the array of site field privileges */
	public function get_all_site_field_privileges() {
		$query = $this->db->get("sitefieldprivilege");
		if ($query) {
			return $query->result_array();
		}
		return array();
	}

	public function remove_all_site_field_privileges($group_name) {
		$this->db->delete("sitefieldprivilege", array("group_name" => $group_name));
		$res = $this->db->affected_rows();
		if ($res > 0) {
			return true;
		}
		return false;
	}

}

?>
