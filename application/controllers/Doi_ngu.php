<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doi_ngu extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');

		$this->load->view('v_doi_ngu');
	}
}
