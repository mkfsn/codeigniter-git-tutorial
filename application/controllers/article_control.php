<?php

class Article_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	

		$this->load->model('article_model');
	}

	public function get($id = -1)
	{
		if ($id == -1)
			$result = $this->article_model->article_list($id);
		else
			$result = $this->article_model->article_get($id);

		print_r($result);
	}

};

?>
