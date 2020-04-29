<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_san_pham extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('email')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}
	}
	
	public function index()
	{
		$this->load->view('admin/v_quan_tri_san_pham');
	}
}