<?php

class Article_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function article_list ($from_id=-1)
	{
		$this->db->select('*')->from('articles');
		if ($from_id != -1) {
			$this->where('id <', $from_id);
		}
		$this->db->limit(10)->order_by('id', 'desc');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function article_get ($id)
	{
		$this->db->select('*')->from('articles')->where('id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

};

?>
