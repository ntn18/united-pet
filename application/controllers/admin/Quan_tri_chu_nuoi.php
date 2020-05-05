<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_chu_nuoi extends CI_Controller {
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
		$this->load->model('m_chu_nuoi');

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
        $data['title'] = "Quản trị thông tin chủ nuôi | United Pets";
        // Phân trang
        $config['total_rows'] = $this->m_chu_nuoi->countAll();
        $config['base_url'] = base_url() . "admin/Quan_tri_chu_nuoi/index";
        $config['per_page'] = 3;
        // Lấy danh sách
        $start = $this->uri->segment(4);
        $data['danh_sach'] = $this->m_chu_nuoi->getListHasPaginate($config['per_page'], $start);

        $this->pagination->initialize($config);
        $paginator = $this->pagination->create_links();
        $data['paginator'] = $paginator;

        // Hiển thị dữ liệu ra view
        $this->load->view('admin/v_header', $data);
        $this->load->view('admin/v_menu');
        $this->load->view('admin/v_quan_tri_chu_nuoi', $data);

    }

	// Hiển thị trang chi tiết tin tức
	public function xem()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['chu_nuoi'] = $this->m_chu_nuoi->lay_chu_nuoi_theo_ID($id);

		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Thông tin chủ nuôi chi tiết | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_chu_nuoi_chi_tiet', $data);
	}

	// Hàm này có tác dụng LOAD ra form nhập liệu
	public function them_moi_chu_nuoi()
	{
		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Thêm mới chủ nuôi | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_chu_nuoi_them_moi', $data);
	}


	// Hàm này có tác dụng thực hiện thêm mới tin tức vào CSDL
	public function thuc_hien_them_moi_chu_nuoi()
	{
		// Thêm mới tin tức thông qua qua MODEL
		$this->m_chu_nuoi->them_moi_chu_nuoi();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_chu_nuoi");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['chu_nuoi'] = $this->m_chu_nuoi->lay_chu_nuoi_theo_ID($id);

		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Sửa tin tức | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_chu_nuoi_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_chu_nuoi()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_chu_nuoi->sua_chu_nuoi();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_chu_nuoi");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_chu_nuoi->xoa_chu_nuoi($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_chu_nuoi");
	}

}