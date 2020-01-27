<?php

class myindex_model extends CI_Model
{
	public function firstname()
	{
		$firstname="Labib";
		$a=$this->fname();
		return $a;
	}
	private function fname()
	{
		$firstname="Labib";
		return $firstname;
	}
}

?>