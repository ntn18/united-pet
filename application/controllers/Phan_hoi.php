<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phan_hoi extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$data['title'] = "Liên hệ | United Pets";
		$this->load->view('v_phan_hoi', $data); 
	}
}
