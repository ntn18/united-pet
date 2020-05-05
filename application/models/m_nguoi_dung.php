<?php 
	class m_nguoi_dung extends CI_Model {
		// Mục đích đếm xem có bao nhiêu người trùng khớp?
		public function dem_so_ban_ghi_thu_duoc($email, $password)
        {
			// Viết câu lệnh truy vấn SQL check xem có người dùng có thông tin Email & Password như trên hay không?
			$query = $this->db->query("
				SELECT * 
				FROM tbl_user
				WHERE email='".$email."' AND mat_khau='".$password."'
			");

			// Trả kết quả truy vấn dữ liệu
            return $query->num_rows();
		}
		
		public function lay_thong_tin_nguoi_dung($email, $password)
		{
			$query = $this->db->query("
				SELECT * 
				FROM tbl_user
				WHERE email='".$email."' AND mat_khau='".$password."'
			");

			return $query->row();
		}
		public function lay_danh_sach_nguoi_dung1()
		{
			$query = $this->db->query("select * from tbl_user");

			return $query->result();
		}

		public function getUserById($id)
		{
			$query = $this->db->query("
				SELECT * 
				FROM tbl_user
				WHERE id=".$id
			);

			return $query->row();
		}


		// public function lay_danh_sach_nguoi_dung() {
	 //      $query = $this->db->query("Select * from tbl_user inner join tbl_gioi_tinh on tbl_user.gioi_tinh_id = tbl_gioi_tinh.gioi_tinh_id");
	 //      return $query->result();
	 //    }
		public function them_moi_nguoi_dung()
        {
			// Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$dia_chi = $_POST['txtDiaChi'];
			$sdt = $_POST['txtSDT'];
			$vi_tri = $_POST['txtViTri'];
			$gioi_tinh = $_POST['txtGioiTinh'];

			// Xử lý đoạn UPLOAD ảnh minh họa
			// if (!empty($_FILES['txtAnhMinhHoa']['name'])) {
		 //        $config['upload_path'] = 'assets\images';
		 //        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		 //        $config['file_name'] = $_FILES['txtAnhMinhHoa']['name'];

		 //        $this->load->library('upload', $config);
		 //        $this->upload->initialize($config);

		 //        if ($this->upload->do_upload('txtAnhMinhHoa')) {
		 //          $uploadData = $this->upload->data();
		 //          $data["image"] = $uploadData['file_name'];
		 //        } else{
		 //          $data["image"] = '';
		 //        }
		 //      } else {
		 //        $data["image"] = '';
		 //      }

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ho_ten' => $ho_ten,
				'gioi_tinh_id' => $gioi_tinh,
				'dia_chi' => $dia_chi,
				'sdt' => $sdt,
				'email' => $email,
				'vi_tri_id' => $vi_tri
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_user', $data);
        }

        public function xoa_nguoi_dung($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_user');
        }

        //get sex
        public function getSex(){
        	$query = $this->db->query("
				SELECT * 
				FROM tbl_gioi_tinh
			");

            return $query->result();
        }

        public function getViTri(){
        	$query= $this->db->query("
				SELECT * FROM tbl_vi_tri
			");

			return $query->result();
        }

        public function sua_nguoi_dung()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
        	$id = $_POST['txtID'];
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$dia_chi = $_POST['txtDiaChi'];
			$sdt = $_POST['txtSDT'];
			$vi_tri = $_POST['txtViTri'];
			$gioi_tinh = $_POST['txtGioiTinh'];

			// // Xử lý đoạn UPLOAD ảnh minh họa
			// if (!empty($_FILES['txtAnhMinhHoa']['name'])) {
		 //        $config['upload_path'] = 'assets\images';
		 //        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		 //        $config['file_name'] = $_FILES['txtAnhMinhHoa']['name'];

		 //        $this->load->library('upload', $config);
		 //        $this->upload->initialize($config);

		 //        if ($this->upload->do_upload('txtAnhMinhHoa')) {
		 //          $uploadData = $this->upload->data();
		 //          $data["image"] = $uploadData['file_name'];
		 //        } else{
		 //          $data["image"] = '';
		 //        }
		 //      } else {
		 //        $data["image"] = '';
		 //      }

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ho_ten' => $ho_ten,
				'gioi_tinh_id' => $gioi_tinh,
				'dia_chi' => $dia_chi,
				'sdt' => $sdt,
				'email' => $email,
				'vi_tri_id' => $vi_tri
			);

		 //    if($data["image"] == '')
		 //    {
			// 	$data = array(
			// 		'tieu_de' => $tieu_de,
			// 		'mo_ta' => $mo_ta,
			// 		'noi_dung' => $noi_dung
			// 	);
			// } else {
			// 	$data = array(
			// 		'tieu_de' => $tieu_de,
			// 		'anh_minh_hoa' => $data["image"],
			// 		'mo_ta' => $mo_ta,
			// 		'noi_dung' => $noi_dung
			// 	);
			// }

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('id', $id);
			$this->db->update('tbl_user', $data);
        }

        public function getListHasPaginate($total, $start)
		{
			$this->db->limit($total, $start);
			$query = $this->db->get('tbl_user');
			return $query->result();
		}

		public function countAll() 
		{
			return $this->db->count_all('tbl_user');
		}


	}


;?>