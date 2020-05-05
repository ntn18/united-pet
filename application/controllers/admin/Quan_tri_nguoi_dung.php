<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quan_tri_nguoi_dung extends CI_Controller {
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
		$this->load->model('m_nguoi_dung');
		$this->load->model('m_gioi_tinh');

		// // Load thư viện session
		// $this->load->library('session');

		// if ($this->session->userdata('email')=="") {
		// 	redirect(base_url()."admin/dang_nhap.html");
		// }
	}

	public function index()
	{
		// $data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Quản trị người dùng | United Pets";

		// Lấy ra danh sách tin tức
		$data['danh_sach'] = $this->m_nguoi_dung->lay_danh_sach_nguoi_dung1();

        //get vi_tri
        $data['viTri'] = $this->m_nguoi_dung->getViTri();

        //get sex
        $data['gioiTinh'] = $this->m_nguoi_dung->getSex();

       	//test phan trang 
       	$config['total_rows'] = $this->m_nguoi_dung->countAll();
        $config['base_url'] = base_url() . "admin/Quan_tri_nguoi_dung/index";
        $config['per_page'] = 3;

		$start = $this->uri->segment(4);
        $data['listUser'] = $this->m_nguoi_dung->getListHasPaginate($config['per_page'], $start);

		$this->pagination->initialize($config);
        $paginator = $this->pagination->create_links();
        $data['paginator'] = $paginator;

		// // Tạo phân trang - chưa hoàn chỉnh, đang nghiên cứu
  //       $this->db->from('tbl_news');
  //       $offset=$this->uri->segment(2);    
  //       $limit= 2;        
  //       $this->db->limit($limit, $offset);
  //       $query_poster = $this->db->get();   
		// 	// pagination        
  //       $config['base_url'] = site_url() . '/phantrang/';
  //       $config['total_rows'] = $this->db->count_all('tbl_user');
  //       $config['uri_segment']  = 2;
  //       $config['per_page'] = $limit;
  //       $config['prev_link']  = '&lt;';
  //       $config['next_link']  = '&gt;';
  //       $config['last_link']  = 'Cuối';
  //       $config['first_link'] = 'Đầu';
  //       $this->pagination->initialize($config);
  //       $paginator=$this->pagination->create_links();  
		// 	// End pagination                      
  //        $data['paginator'] = $paginator;     

		// Hiển thị dữ liệu ra view
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_quan_tri_nguoi_dung', $data);
		
	}

	

	// Hàm này có tác dụng LOAD ra form nhập liệu
	public function them_moi_nguoi_dung()
	{
		//$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Thêm mới người dùng | United Pets";
		
		//get vi_tri
        $data['viTri'] = $this->m_nguoi_dung->getViTri();

        //get sex
        $data['gioiTinh'] = $this->m_nguoi_dung->getSex();

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_nguoi_dung_them_moi', $data);
	}


	// Hàm này có tác dụng thực hiện thêm mới người dùng vào CSDL
	public function thuc_hien_them_moi_nguoi_dung()
	{
		// Thêm mới người dùng thông qua qua MODEL
		$this->m_nguoi_dung->them_moi_nguoi_dung();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_nguoi_dung");
	}

	// Hàm này có tác dụng LOAD tin tức có ID cụ thể ra form để sửa thông tin
	public function sua()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['nguoi_dung'] = $this->m_nguoi_dung->getUserById($id);

		//$data['email']=$this->session->userdata('email');
		// Khai báo tiêu đề của trang
		$data['title'] = "Sửa thông tin người dùng | United Pets";

		//get vi_tri
        $data['viTri'] = $this->m_nguoi_dung->getViTri();

        //get sex
        $data['gioiTinh'] = $this->m_nguoi_dung->getSex();
		// Load ra được giao diện quản trị hệ thống
		$this->load->view('admin/v_header', $data);
		$this->load->view('admin/v_menu');
		$this->load->view('admin/v_nguoi_dung_sua', $data);
	}


	// Hàm này có tác dụng thực hiện sửa tin tức, cập nhật vào CSDL
	public function thuc_hien_sua_nguoi_dung()
	{
		// Sửa tin tức thông qua MODEL
		$this->m_nguoi_dung->sua_nguoi_dung();
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_nguoi_dung");
	}

	// Hàm này có tác dụng xóa tin tức
	public function xoa()
	{
		// Lấy ra ID của tin tức cần xóa
		$id = $this->uri->segment(4);

		// Xóa tin tức thông qua MODEL
		$this->m_nguoi_dung->xoa_nguoi_dung($id);
	
		// Cho các bạn quay về trang Quản trị tin tức
		redirect(base_url()."admin/Quan_tri_nguoi_dung");
	}

}