<?php

class Article_control extends CI_Controller {

	public function __construct() {
		parent::__construct();	
	}

	public function get($id = -1) {
		echo "article $id";
	}

};

?>
