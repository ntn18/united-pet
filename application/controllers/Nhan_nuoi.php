<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nhan_nuoi extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$data['title'] = "Nhận nuôi | United Pets";
		$this->load->view('v_nhan_nuoi',$data);
	}
}
