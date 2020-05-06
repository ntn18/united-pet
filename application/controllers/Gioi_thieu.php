<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gioi_thieu extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');

		$this->load->view('v_gioi_thieu');
	}
}
