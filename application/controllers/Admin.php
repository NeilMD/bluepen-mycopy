<?php
	class Admin extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library("session");
			$this->load->model("User_account_model");
			$this->load->model("User_group_model");
			$this->load->model("Site_field_privilege_model");
			$this->load->model("Home_model");
		}

		public function logout() {
			if ($this->session->userdata("admin")) {
				$this->session->sess_destroy();
			}
			redirect(base_url() . "index.php/admin/login");
		}

		public function login() {
			if ($this->session->userdata("admin")) {
				redirect(base_url() . "index.php/admin/user");
			}
			if (isset($_POST["login"])) {
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				if ($username == "admin" && $password == "1234") {
					$this->session->set_userdata("admin", "admin");
					redirect(base_url() . "index.php/admin/user");
				}
				else {
					$this->load->view("admin/login");
				}
			}
			else {
				$this->load->view("admin/login");
			}
		}

		public function user() {
			if (!$this->session->userdata("admin")) {
				redirect(base_url() . "index.php/admin/login" );
			}
			$users = $this->User_account_model->get_all_users();
			$groups = $this->User_group_model->get_all_groups();
			$data = array();
			$data["users"] = $users;
			$data["groups"] = $groups;
			$this->load->view("admin/user", $data);
		}

		public function group() {
			if (!$this->session->userdata("admin")) {
				redirect(base_url() . "index.php/admin/login");
			}
			$groups = $this->User_group_model->get_all_groups();
			$privilege = $this->Site_field_privilege_model->get_all_site_field_privileges();
			$data = array();
			$groupdata = array();
			for ($i = 0; $i < count($groups); $i++) {
				$groupdata[$groups[$i]["group_name"]] = array(false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false, false, false,false,false);
			}
			for ($i = 0; $i < count($privilege); $i++) {
				$groupdata[$privilege[$i]["group_name"]][$privilege[$i]["column_id"]] = true;
			}
			$data["groupdata"] = $groupdata;
			$data["groups"] = $groups;
			// print_r($groupdata);
			$this->load->view("admin/group", $data);
		}
		public function site() {
			if (!$this->session->userdata("admin")) {
				redirect(base_url() . "index.php/admin/login");
			}
			$groups = $this->User_group_model->get_all_groups();
			$privilege = $this->Site_field_privilege_model->get_all_site_field_privileges();
			$data = array();
			$groupdata = array();
			for ($i = 0; $i < count($groups); $i++) {
				$groupdata[$groups[$i]["group_name"]] = array(false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false, false, false,false,false);
			}
			for ($i = 0; $i < count($privilege); $i++) {
				$groupdata[$privilege[$i]["group_name"]][$privilege[$i]["column_id"]] = true;
			}
			$data["groupdata"] = $groupdata;
			$data["groups"] = $groups;
			// print_r($groupdata);
			$this->load->view("admin/site", $data);
		}

		public function upload() {
			if (!$this->session->userdata("admin")) {
				redirect(base_url() . "index.php/admin/login");
			}
			$this->load->view("admin/upload");
		}

		public function edithome() {
			if (!$this->session->userdata("admin")) {
				redirect(base_url() . "index.php/admin/login");
			}
			$messages = $this->Home_model->get_message();
			$data = array(
				"messages" => $messages
			);
			$this->load->view("admin/edithome", $data);
		}
	}
?>
