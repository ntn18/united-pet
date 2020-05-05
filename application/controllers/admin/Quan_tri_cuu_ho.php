<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_cuu_ho extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Tạo phân trang
		$this->load->library('pagination');

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Kết nối đến MODEL
		$this->load->model('m_cuu_ho');
		$this->load->model('m_loai_pet');
		$this->load->model('m_muc_do');
		$this->load->model('m_tiep_nhan');

		// // Load thư viện session
		// $this->load->library('session');

		// if ($this->session->userdata('email')=="") {
		// 	redirect(base_url()."admin/dang_nhap.html");
		// }
	}

	public function index()
    {
        //$data['email'] = $this->session->userdata('email');
        // Khai báo tiêu đề của trang
        $data['title'] = "Quản trị cứu hộ | United Pets";
        // Phân trang
        $config['total_rows'] = $this->m_cuu_ho->countAll();
        $config['base_url'] = base_url() . "admin/Quan_tri_cuu_ho/index";
        $config['per_page'] = 3;
        // Lấy danh sách
        $start = $this->uri->segment(4);
        $data['danh_sach'] = $this->m_cuu_ho->getListHasPaginate($config['per_page'], $start);

        $this->pagination->initialize($config);
        $paginator = $this->pagination->create_links();
        $data['paginator'] = $paginator;

        // Hiển thị dữ liệu ra view
        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_menu');
        $this->load->view('admin/v_quan_tri_cuu_ho', $data);

    }

	

	// Hàm này có tác dụng LOAD ra form nhập liệu
	public function them_moi_case()
	{
		//$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Thêm mới ca cứu hộ | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_cuu_ho_them_moi', $data);
	}


	// Hàm này có tác dụng thực hiện thêm mới người dùng vào CSDL
	public function thuc_hien_them_moi_case()
	{
		// Thêm mới người dùng thông qua qua MODEL
		$this->m_cuu_ho->them_moi_case();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_cuu_ho");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);


		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['cuu_ho'] = $this->m_cuu_ho->lay_cuu_ho_theo_ID($id);

		// Lấy thông tin về tin tức thông qua qua MODEL
		//$data['cuu_ho'] = $this->m_cuu_ho->lay_thong_tin_theo_ID($id);

		//$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Sửa thông tin ca cứu hộ | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_cuu_ho_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_case()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_cuu_ho->sua_case();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_cuu_ho");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_cuu_ho->xoa_case($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_cuu_ho");
	}

}