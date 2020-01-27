<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller
{/*
	public function view($page='home')
	{
		if(!file_exists(APPPATH.'views/page/'.$page.'.php'))
		{
			show_404();

		}
		
		$data['title']=ucfirst($page);
		$this->load->view('pages/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('pages/footer');
		
	}
*/
	public function index()
	{
		echo "hi";
	}
	public function myindex()
	{
		$this->load->view('page/about');
		$this->load->model('myindex_model');
		$a=$this->myindex_model->db();
		print_r($a);
	}
}

