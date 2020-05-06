<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trang_chu extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$data['title'] = "United Pets | Trạm cứu hộ động vật";
		$this->load->view('v_trang_chu',$data);
	}
}
