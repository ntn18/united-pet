<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuu_ho extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');

		$this->load->view('v_cuu_ho');
	}
}
