<?php

class User_account_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}	
	
	/* This function adds a user account. The password passed to this function should already be encrypted.
		 Returns: true if the operation was successful and false otherwise. */
	public function add_user_account($user_name, $password, $last_name, $first_name, $email, $monitoring_group, $competitive_group, $site_sourcing_group, $status) {
		$data = array(
			"user_name" => $user_name,
			"password" => $password,
			"last_name" => $last_name,
			"first_name" => $first_name,
			"email" => $email,
			"monitoring_group" => $monitoring_group,
			"competitive_group" => $competitive_group,
			"site_sourcing_group" => $site_sourcing_group,
			"status" => $status
		);
		
		if ($this->db->insert("useraccount", $data)) {
			return true;
		}
		return false;
	}
	
	/* This function updates a user account. It will check if there is an existing user name. If yes, it will update the details
	of that user. If the user does not exist, it will fail. If the user exists but no data was changed, it will also fail.
	Returns: true if the update was successful and false otherwise. */
	public function update_user_account($target_user_name, $user_name, $password, $last_name, $first_name, $email, $monitoring_group, $competitive_group, $site_sourcing_group, $status) {
		$data = array(
			"user_name" => $user_name,
			"password" => $password,
			"last_name" => $last_name,
			"first_name" => $first_name,
			"email" => $email,
			"monitoring_group" => $monitoring_group,
			"competitive_group" => $competitive_group,
			"site_sourcing_group" => $site_sourcing_group,
			"status" => $status
		);
		$this->db->where("user_name", $target_user_name);
		$this->db->update("useraccount", $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	
	/* This function checks if the given user name and password exists.
	Returns: the user_account row if login was successful or false if it does not. */
	public function login($user_name, $password) {
		$data = array (
			"user_name" => $user_name,
			"password" => $password
		);
		$query = $this->db->get_where("useraccount", $data);
		$result = $query->result_array();
		
		if (count($result) == 1) {
			return $result[0];
		}
		return false;
	}
	
	/* This function removes a user account with the given user name. If the user does not exist,
	it will fail.
	Returns: true if the deletion is successful, and false otherwise. */
	public function remove_user_account($target_user_name) {
		$this->db->delete("useraccount", array("user_name" => $target_user_name));
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	
	/* This function sets a user account to inactive.
	Returns: true if the operation is successful, and false otherwise. */
	public function set_inactive($target_user_name) {
		$this->db->where("user_name", $target_user_name);
		$this->db->update("useraccount", array("active" => 0));
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	
	/* This function sets a user account to active.
	Returns: true if the operation is successful, and false otherwise. */
	public function set_active($target_user_name) {
		$this->db->where("user_name", $target_user_name);
		$this->db->update("useraccount", array("active" => 1));
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		return false;
	}
	
	/* This function gets all the users.
	Returns: the array of users. */
	public function get_all_users() {
		$query = $this->db->get("useraccount");
		if ($query) {
			return $query->result_array();
		}
		return array();
	}
	
	/* This function gets all the users filtered by the active field.
	Returns: the array of users. */
	public function get_all_users_filter_by_active($active) {
		$query = $this->db->get_where("useraccount", array("active" => $active));
		if ($query) {
			return $query->result_array();
		}
		return array();
	}

}

?>
