<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quyen_gop extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$data['title'] = "Quyên góp | United Pets";
		$this->load->view('v_quyen_gop', $data);
	}
}
