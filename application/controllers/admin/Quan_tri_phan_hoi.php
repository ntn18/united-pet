<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_phan_hoi extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// connect to model
		$this->load->model('m_phan_hoi');

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('email')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}
	}
	
	public function index()
	{
		$data['title'] = "Quản trị phản hồi | United Pets";

		  // Phân trang
        $config['total_rows'] = $this->m_phan_hoi->countAll();
        $config['base_url'] = base_url() . "admin/Quan_tri_phan_hoi/index";
        $config['per_page'] = 3;

		$start = $this->uri->segment(4);
        $data['danh_sach'] = $this->m_phan_hoi->getListHasPaginate($config['per_page'], $start);
		
		$this->pagination->initialize($config);
        $paginator = $this->pagination->create_links();
        $data['paginator'] = $paginator;

		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_quan_tri_phan_hoi');
	}
	// public function index()
 //    {
 //        $data['email'] = $this->session->userdata('email');
 //        // Khai báo tiêu đề của trang
 //        $data['title'] = "Quản trị tin tức | United Pets";
 //        // Phân trang
 //        $config['total_rows'] = $this->m_tin_tuc->countAll();
 //        $config['base_url'] = base_url() . "admin/Quan_tri_tin_tuc/index";
 //        $config['per_page'] = 3;
 //        // Lấy danh sách
 //        $start = $this->uri->segment(4);
 //        $data['danh_sach'] = $this->m_tin_tuc->getListHasPaginate($config['per_page'], $start);

 //        $this->pagination->initialize($config);
 //        $paginator = $this->pagination->create_links();
 //        $data['paginator'] = $paginator;

 //        // Hiển thị dữ liệu ra view
 //        $this->load->view('admin/v_header', $data);
 //        $this->load->view('admin/v_menu');
 //        $this->load->view('admin/v_quan_tri_tin_tuc', $data);

 //    }

	// Hàm này có tác dụng thực hiện thêm mới phản hoi vào CSDL
	public function thuc_hien_them_moi_phan_hoi()
	{
		// Thêm mới tin tức thông qua qua MODEL
		$this->m_phan_hoi->them_moi_phan_hoi();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."Phan_hoi");
	}

	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_phan_hoi->xoa_phan_hoi($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_phan_hoi");
	}

}