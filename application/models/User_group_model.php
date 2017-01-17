<?php

class User_group_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	/* This function adds a user group.
		 Returns: true if the operation was successful and false otherwise. */
	public function add_user_group($group_name, $group_info, $mode) {
		$data = array(
			"group_name" => $group_name,
			"group_info" =>$group_info,
			"mode" => $mode
		);
		if ($this->db->insert("usergroup", $data)) {
			return true;
		}
		return false;
	}

	/* This function updates a user group. It will check if there is an existing user group. If yes, it will update the details
	of that group. If the group does not exist, it will fail. If the groups exists but no data was changed, it will also fail.
	Returns: true if the update was successful and false otherwise. */
	public function update_user_group($target_group_name, $group_name, $group_info, $mode) {
		$data = array(
			"group_name" => $group_name,
			"group_info" => $group_info,
			"mode" => $mode
		);

		$this->db->where("group_name", $target_group_name);
		$this->db->update("usergroup", $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	/* This function removes a user group with the given group name. If the group does not exist,
	it will fail.
	Returns: true if the deletion is successful, and false otherwise. */
	public function remove_user_group($target_group_name) {
		$this->db->delete("usergroup", array("group_name" => $target_group_name));
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}

	/* This function gets all the user groups.
	Returns: the array of user groups. */
	public function get_all_groups() {
		$query = $this->db->get("usergroup");
		if ($query) {
			return $query->result_array();
		}
		return array();
	}

	/* This function gets the user group with the given name.
	Returns: the user group */
	public function get_user_group($name) {
		$query = $this->db->get_where("usergroup", array("group_name" => $name));
		if ($query) {
			return $query->result_array()[0];
		}
		return null;
	}
}


?>
