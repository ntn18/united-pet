<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_cau_chuyen extends CI_Controller {
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
		$this->load->model('m_cau_chuyen');

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('email')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}
	}

	public function index()
    {
        $data['email'] = $this->session->userdata('email');
        // Khai báo tiêu đề của trang
        $data['title'] = "Quản trị câu chuyện | United Pets";
        // Phân trang
        $config['total_rows'] = $this->m_cau_chuyen->countAll();
        $config['base_url'] = base_url() . "admin/Quan_tri_cau_chuyen/index";
        $config['per_page'] = 3;
        // Lấy danh sách
        $start = $this->uri->segment(4);
        $data['danh_sach'] = $this->m_cau_chuyen->getListHasPaginate($config['per_page'], $start);

        $this->pagination->initialize($config);
        $paginator = $this->pagination->create_links();
        $data['paginator'] = $paginator;

        // Hiển thị dữ liệu ra view
        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_menu');
        $this->load->view('admin/v_quan_tri_cau_chuyen', $data);

    }

	// Hiển thị trang chi tiết tin tức
	public function xem()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['cau_chuyen'] = $this->m_cau_chuyen->lay_cau_chuyen_theo_ID($id);

		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Câu chuyện chi tiết | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_cau_chuyen_chi_tiet', $data);
	}

	// Hàm này có tác dụng LOAD ra form nhập liệu
	public function them_moi_cau_chuyen()
	{
		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Thêm mới câu chuyện | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_cau_chuyen_them_moi', $data);
	}


	// Hàm này có tác dụng thực hiện thêm mới tin tức vào CSDL
	public function thuc_hien_them_moi_cau_chuyen()
	{
		// Thêm mới tin tức thông qua qua MODEL
		$this->m_cau_chuyen->them_moi_cau_chuyen();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_cau_chuyen");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['cau_chuyen'] = $this->m_cau_chuyen->lay_cau_chuyen_theo_ID($id);

		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Sửa câu chuyện | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_cau_chuyen_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_cau_chuyen()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_cau_chuyen->sua_cau_chuyen();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_cau_chuyen");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_cau_chuyen->xoa_cau_chuyen($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_cau_chuyen");
	}

}