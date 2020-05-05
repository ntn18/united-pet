<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_tinh_nguyen_vien extends CI_Controller {
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
		$this->load->model('m_tinh_nguyen_vien');

		// Load thư viện session
		$this->load->library('session');

		if ($this->session->userdata('email')=="") {
			redirect(base_url()."admin/dang_nhap.html");
		}
	}

	public function index()
	{
		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Quản trị tình nguyện viên | United Pets";

		// Lấy ra danh sách tin tức
		$data['danh_sach'] = $this->m_tinh_nguyen_vien->lay_danh_sach_tinh_nguyen_vien();

		// Tạo phân trang - chưa hoàn chỉnh, đang nghiên cứu
        $this->db->from('tbl_dki_tnv');
        $offset=$this->uri->segment(2);    
        $limit= 2;        
        $this->db->limit($limit, $offset);
        $query_poster = $this->db->get();   
			// pagination        
        $config['base_url'] = site_url() . '/phantrang/';
        $config['total_rows'] = $this->db->count_all('tbl_story');
        $config['uri_segment']  = 2;
        $config['per_page'] = $limit;
        $config['prev_link']  = '&lt;';
        $config['next_link']  = '&gt;';
        $config['last_link']  = 'Cuối';
        $config['first_link'] = 'Đầu';
        $this->pagination->initialize($config);
        $paginator=$this->pagination->create_links();  
			// End pagination                      
         $data['paginator'] = $paginator;     

		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_quan_tri_tinh_nguyen_vien', $data);
		
	}

	// Hiển thị trang chi tiết tin tức
	public function xem()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['cau_chuyen'] = $this->m_tinh_nguyen_vien->lay_tinh_nguyen_vien_theo_ID($id);

		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Thông tin chi tiết về tình nguyện viên | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_thong_tin_tinh_nguyen_vien', $data);
	}

	// Hàm này có tác dụng LOAD ra form nhập liệu
	public function them_moi_cau_chuyen()
	{
		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Đăng kí ting nguyện viên | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_tinh_nguyen_vien_them_moi', $data);
	}


	// Hàm này có tác dụng thực hiện thêm mới tin tức vào CSDL
	public function thuc_hien_them_moi_tinh_nguyen_vien()
	{
		// Thêm mới tin tức thông qua qua MODEL
		$this->m_cau_chuyen->them_moi_tinh_nguyen_vien();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_tinh_nguyen_vien");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['cau_chuyen'] = $this->m_tinh_nguyen_vien->lay_tinh_nguyen_vien_theo_ID($id);

		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Sửa thông tin tình nguyện viên | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_tinh_nguyen_vien_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_thong_tin_tinh_nguyen_vien()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_cau_chuyen->sua_cau_chuyen();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_tinh_nguyen_vien");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_cau_chuyen->xoa_tinh_nguyen_vien($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_tinh_nguyen_vien");
	}

}