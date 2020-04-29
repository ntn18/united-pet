<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_tin_tuc extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_tin_tuc');
		$this->load->model('m_loai_tin_tuc');

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('email')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}
	}

	public function index()
	{
		// Khai báo tiêu đề của trang
		$data['title'] = "Quản trị tin tức | United Pets";

		// Lấy kết quả tin tức sự kiện qua MODEL
		$data['tin_su_kien'] = $this->m_tin_tuc->lay_tin_tuc_theo_loai_tin(1);

		// Lấy kết quả tin tức công nghệ qua MODEL
		$data['tin_cong_nghe'] = $this->m_tin_tuc->lay_tin_tuc_theo_loai_tin(2);

		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_quan_tri_tin_tuc', $data);
		
		
	}


	// Hàm này có tác dụng LOAD ra form nhập liệu
	public function them_moi_tin_tuc()
	{
		// Lấy danh sách loại tin để hiển thị bên View
		$data['loai_tin_tuc'] = $this->m_loai_tin_tuc->lay_danh_sach_loai_tin_tuc();

		// Khai báo tiêu đề của trang
		$data['title'] = "Thêm mới tin tức | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_tin_tuc_them_moi', $data);
	}


	// Hàm này có tác dụng thực hiện thêm mới tin tức vào CSDL
	public function thuc_hien_them_moi_tin_tuc()
	{
		// Thêm mới tin tức thông qua qua MODEL
		$this->m_tin_tuc->them_moi_tin_tuc();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_tin_tuc.html");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['tin_tuc'] = $this->m_tin_tuc->lay_tin_tuc_theo_ID($id);

		// Lấy danh sách loại tin để hiển thị bên View
		$data['loai_tin_tuc'] = $this->m_loai_tin_tuc->lay_danh_sach_loai_tin_tuc();

		// Khai báo tiêu đề của trang
		$data['title'] = "Sửa tin tức | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_tin_tuc_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_tin_tuc()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_tin_tuc->sua_tin_tuc();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_tin_tuc.html");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_tin_tuc->xoa_tin_tuc($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/quan_tri_tin_tuc.html");
	}

}