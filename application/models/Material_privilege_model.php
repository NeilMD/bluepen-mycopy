<?php

class Material_privilege_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	/* Adds a new material privilege for a given group.
	Returns: true if the opeation is successful and false otherwise. */
	public function add_material_privilege($group_name, $material_name) {
		$data = array(
			"group_name" => $group_name,
			"material_name" => $material_name
		);
		if ($this->db->insert("materialprivilege", $data)) {
			return true;
		}
		return false;
	}

	/* Removes a material privilege from a certain group
	Returns: true if the operation was successful and false otherwise. */
	public function remove_material_privilege($group_name, $material_name) {
		$this->db->delete("materialprivilege", array("group_name" => $group_name, "material_name" => $material_name));
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	/* Gets all the material privileges for a given user.
	Returns: A string array containing the material priveleges. */
	public function get_material_privileges($group_name) {
		$this->db->select("material_name");
		$this->db->where("group_name", $group_name);
		$query = $this->db->get("materialprivilege");
		if ($query) {
			return $query->result_array();
		}
		return array();
	}

	public function get_material_privileges_distinct() {
		$this->db->distinct();
		$this->db->select("material_name");
		$query = $this->db->get("materialprivilege");
		if ($query) {
			return $query->result_array();
		}
		return array();
	}

	public function update_material_privilege($group_name, $materials) {
		$add = array();
		$rem = array();
		for ($i = 0; $i < count($materials); $i++) {
			array_push($add, array("group_name" => $group_name, "material_name"=> $materials[$i]));
		}
		$this->db->trans_start();
		$this->db->delete("materialprivilege", array("group_name" => $group_name));
		$this->db->insert_batch("materialprivilege", $add);
		$affected = $this->db->affected_rows();
		$this->db->trans_complete();

		if ($affected > 0) {
			return true;
		}
		return false;
	}

	public function remove_all_material_privileges($group_name) {
		$this->db->delete("materialprivilege", array("group_name" => $group_name));
		$res = $this->db->affected_rows();
		if ($res > 0) {
			return true;
		}
		return false;
	}
}

?>
