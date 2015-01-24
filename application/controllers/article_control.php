<?php

class Article_control extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	

		$this->load->model('article_model');
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
