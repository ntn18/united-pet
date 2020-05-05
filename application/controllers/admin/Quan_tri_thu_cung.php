<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_thu_cung extends CI_Controller {
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
		$this->load->model('m_thu_cung');

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
		$data['title'] = "Quản trị thú cưng | United Pets";

		// Lấy ra danh sách tin tức
		$data['danh_sach'] = $this->m_thu_cung->lay_danh_sach_thu_cung();

		// Tạo phân trang - chưa hoàn chỉnh, đang nghiên cứu
        $this->db->from('tbl_pet');
        $offset=$this->uri->segment(2);    
        $limit= 2;        
        $this->db->limit($limit, $offset);
        $query_poster = $this->db->get();   
			// pagination        
        $config['base_url'] = site_url() . '/phantrang/';
        $config['total_rows'] = $this->db->count_all('tbl_pet');
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
		$this->load->view('admin/v_quan_tri_thu_cung', $data);
		
	}

	// Hiển thị trang chi tiết tin tức
	public function xem()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['thu_cung'] = $this->m_thu_cung->lay_thu_cung_theo_ID($id);

		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Thú cưng chi tiết | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_thu_cung_chi_tiet', $data);
	}

	// Hàm này có tác dụng LOAD ra form nhập liệu
	public function them_moi_thu_cung()
	{
		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Thêm mới thú cưng | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_thu_cung_them_moi', $data);
	}


	// Hàm này có tác dụng thực hiện thêm mới tin tức vào CSDL
	public function thuc_hien_them_moi_thu_cung()
	{
		// Thêm mới tin tức thông qua qua MODEL
		$this->m_thu_cung->them_moi_thu_cung();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_thu_cung");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['thu_cung'] = $this->m_thu_cung->lay_thu_cung_theo_ID($id);

		$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Sửa thú cưng | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_thu_cung_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_thu_cung()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_thu_cung->sua_thu_cung();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_thu_cung");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_thu_cung->xoa_thu_cung($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_thu_cung");
	}

}