<?php

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function check_user_password($name='', $password='')
	{
		$valid_name = "mkfsn";
		$valid_password = "a777049f6bd702902df09ce5d83d79c5";

		return ($name == $valid_name) && ($this->hash($password) == $valid_password);
	}

	private function hash($plain='')
	{
		return md5($plain);
	}
};

?>
