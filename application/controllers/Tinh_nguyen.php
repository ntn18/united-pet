<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tinh_nguyen extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$data['title'] = "Tình nguyện | United Pets";
		$this->load->view('v_tinh_nguyen',$data);
	}
}
