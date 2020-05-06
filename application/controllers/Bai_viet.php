<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bai_viet extends CI_Controller {
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
		$this->load->model('m_tin_tuc');

	}

	public function index()
	{
		// Khai báo tiêu đề của trang
        $data['title'] = "Bài viết | United Pets";
        // Phân trang
        $config['total_rows'] = $this->m_tin_tuc->countAll();
        $config['base_url'] = base_url() . "bai_viet/index";
        $config['per_page'] = 4;
        // Lấy danh sách
        $start = $this->uri->segment(4);
		$data['danh_sach'] = $this->m_tin_tuc->getListHasPaginate($config['per_page'], $start);
		
		//$data['tin_tuc'] = $this->m_tin_tuc->lay_tin_tuc_theo_ID($id);


        $this->pagination->initialize($config);
        $paginator = $this->pagination->create_links();
        $data['paginator'] = $paginator;

        // Hiển thị dữ liệu ra view
		$this->load->view('v_bai_viet',$data);
	}

	// Hiển thị trang chi tiết tin tức
	public function xem()
	{
		// Lấy ra ID của tin tức cần cập nhật
		$id = $this->uri->segment(4);

		// Lấy thông tin về tin tức thông qua qua MODEL
		$data['tin_tuc'] = $this->m_tin_tuc->lay_tin_tuc_theo_ID($id);

		// Khai báo tiêu đề của trang
		$data['title'] = "Tin tức chi tiết | United Pets";

		// Load ra được giao diện quản trị hệ thống
		$this->load->view('v_bai_viet_chi_tiet', $data);
	}
}
