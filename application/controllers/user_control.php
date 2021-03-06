<?php

class User_control extends CI_Controller {

	private $username;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->username = $this->session->userdata('username');
	}

	public function login()
	{
		if ($this->username) {
			redirect('/article');
		}

		if ($_SERVER['REQUEST_METHOD'] == 'GET') {
			$this->load->view('user_view/login.php');
		} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($username == NULL || $password == NULL)
				$success = false;
			else
				$success = $this->user_model->check_user_password($username, $password);

			if ($success) {
				$this->username = $username;
				$this->session->set_userdata('username', $username);
				redirect('/article');
			} else {
				$this->load->view('user_view/login.php');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('/login');
	}

};

?>
