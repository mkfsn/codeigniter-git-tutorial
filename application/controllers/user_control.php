<?php

class User_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function login()
	{
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
				echo "Login successfully";
			} else {
				$this->load->view('user_view/login.php');
			}
		}
	}

};

?>
