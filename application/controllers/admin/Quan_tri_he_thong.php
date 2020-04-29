<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_he_thong extends CI_Controller {
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
		// Khai báo tiêu đề của trang
		$data['title'] = "Quản trị United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_quan_tri_he_thong');
	}
}