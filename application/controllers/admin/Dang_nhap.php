<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dang_nhap extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		// Load thư viện URL
		$this->load->helper('url');

		// Kết nối đến CSDL
		$this->load->database();

		// Load thư viện session
		$this->load->library('session');

		// Kết nối đến MODEL
		$this->load->model('m_nguoi_dung');

	}

	public function index()
	{		
		$this->load->view('admin/v_dang_nhap');
	}

	public function kiem_tra_dang_nhap()
	{
		// Lấy được thông tin đăng nhập của người dùng
		$email = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		debug_zval_dump(password);
		
		// Kiểm tra xem thông tin đó có KHỚP với thông tin đã lưu trong CSDL hay không?
		if ($this->m_nguoi_dung->dem_so_ban_ghi_thu_duoc($email, $password)!=0) {
			// Tạo phiên làm việc (session); mục đích của việc tạo session giúp chúng ta xác minh 1 người có được phép truy cập vào các trang quản trị của chúng ta hay không - đảm bảo tính bảo an
			$this->session->set_userdata('email', $email);

			// Thông báo cho người dùng đăng nhập thành công
			echo 
			"
				<script type='text/javascript'>
					window.alert('Đăng nhập thành công! Chào mừng bạn đến phần quản trị hệ thống');
				</script>
			";

			// Chuyển người dùng vào trang quản trị
			echo 
			"
				<script type='text/javascript'>
					window.location.href = '".base_url()."admin/quan_tri_he_thong.html'
				</script>
			";

			// redirect(base_url()."admin/quan_tri_he_thong.html");
		} else {
			// Thông báo cho người dùng đăng nhập không thành công
			echo 
			"
				<script type='text/javascript'>
					window.alert('Thông tin tài khoản không chính xác. Vui lòng kiểm tra lại.');
				</script>
			";

			// Chuyển người dùng ra trang đăng nhập
			echo 
			"
				<script type='text/javascript'>
					window.location.href = '".base_url()."admin/dang_nhap.html'
				</script>
			";

			// redirect(base_url()."admin/dang_nhap.html");
		}	
	}

	public function dang_xuat()
	{
		// Thực hiện xóa toàn bộ dữ liệu phiên làm việc của người dùng
		session_destroy();

		// Chuyển người dùng ra trang đăng nhập
		redirect(base_url()."admin/dang_nhap.html");
	}
} 