<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cau_chuyen extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');

		$this->load->view('v_cau_chuyen');
	}
}
