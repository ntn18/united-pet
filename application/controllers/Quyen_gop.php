<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quyen_gop extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');

		$this->load->view('v_quyen_gop');
	}
}
