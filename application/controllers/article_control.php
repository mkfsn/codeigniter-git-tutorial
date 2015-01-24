<?php

class Article_control extends CI_Controller {

	private $username;

	public function __construct()
	{
		parent::__construct();	

		$this->load->model('article_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->username = $this->session->userdata('username');

		if (!$this->username)
			redirect('/login');
	}

	public function get($id = -1)
	{
		$name = $this->input->post('name');
		$content = $this->input->post('content');

		if ($name != NULL and $content != NULL) {
			$this->article_model->article_create($name, $content);
		}

		if ($id == -1)
			$result = $this->article_model->article_list($id);
		else
			$result = $this->article_model->article_get($id);

		$this->load->view('article_view/list', array('articles' => $result));
	}

};

?>
