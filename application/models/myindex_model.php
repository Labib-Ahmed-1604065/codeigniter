<?php

class myindex_model extends CI_Model
{
	public function db()
	{
		$this->load->database();
		$a=$this->db->query("SELECT * FROM `users`");
		$a->result_array();
		return $a;
	}
}
?>