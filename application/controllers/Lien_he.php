<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lien_he extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');

		$this->load->view('v_lien_he');
	}
}
