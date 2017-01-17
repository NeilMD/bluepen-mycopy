<?php

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("User_account_model");
		$this->load->model("User_group_model");
		$this->load->model("Home_model");
		$this->load->model("Featured_model");
		$this->load->model("Site_field_privilege_model");
		$this->load->library("session");
	}

	private function redirect_to_site_view() {
		if ($this->session->userdata("monitoring_group")) {
			redirect(base_url() . "index.php/site/view/monitoring");
		}
		else if ($this->session->userdata("competitive_group")) {
			redirect(base_url() . "index.php/site/view/competitive");
		}
		else if ($this->session->userdata("site_sourcing_group")) {
			redirect(base_url() . "index.php/site/view/site_sourcing");
		}
		else {
			redirect(base_url() . "index.php/home/logout");
		}
	}

	public function index() {
		if ($this->session->userdata("user")) {
			$this->redirect_to_site_view();
		}
		else {
			$messages = $this->Home_model->get_message();
			$featured = $this->Featured_model->get_featured_sites();
			$data = array(
				"messages" => $messages,
				"featured" => $featured
			);
			$this->load->view("user/home", $data);
		}
	}

	public function login() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		if (!$username || !$password) {
			redirect(base_url() . "index.php/home");
		}

		$res = $this->User_account_model->login($username, $password);
		if (!$res) {
			redirect(base_url() . "index.php/home");
		}
		else {
			$user = $res;
			$this->session->set_userdata("user", $user["user_name"]);
			$monitoring_group = $this->User_group_model->get_user_group($user["monitoring_group"]);
			$this->session->set_userdata("monitoring_group", $monitoring_group);
			$competitive_group = $this->User_group_model->get_user_group($user["competitive_group"]);
			$this->session->set_userdata("competitive_group", $competitive_group);
			$site_sourcing_group = $this->User_group_model->get_user_group($user["site_sourcing_group"]);
			$this->session->set_userdata("site_sourcing_group", $site_sourcing_group);
			$this->redirect_to_site_view();
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url() . "index.php/home");
	}

}
