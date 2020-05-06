<?php 
	class m_phan_hoi extends CI_Model {
		// Mục đích đếm xem có bao nhiêu người trùng khớp?
		// public function dem_so_ban_ghi_thu_duoc($email, $password)
  //       {
		// 	// Viết câu lệnh truy vấn SQL check xem có người dùng có thông tin Email & Password như trên hay không?
		// 	$query = $this->db->query("
		// 		SELECT * 
		// 		FROM tbl_user
		// 		WHERE email='".$email."' AND mat_khau='".$password."'
		// 	");
 
		// 	// Trả kết quả truy vấn dữ liệu
  //           return $query->num_rows();
		// }
		 
		public function lay_danh_sach_phan_hoi()
		{
			$query = $this->db->query("
				SELECT * 
				FROM tbl_phan_hoi
				
			");

			return $query->result();
		}

		// public function lay_danh_sach_nguoi_dung1()
		// {
		// 	$query = $this->db->query("select * from tbl_user");

		// 	return $query->result();
		// }

		public function lay_phan_hoi_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức
			$query = $this->db->query("
				SELECT * 
				FROM tbl_phan_hoi
				WHERE id=".$id
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }

		public function them_moi_phan_hoi()  
        {
			//Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$email = $_POST['txtEmail'];
			$tieu_de = $_POST['txtTieuDe'];
			$loi_nhan = $_POST['txtLoiNhan'];

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ten' => $ho_ten,
				'email' => $email,
				'tieu_de' => $tieu_de,
				'noi_dung' => $loi_nhan,
			);

			//Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_phan_hoi', $data);
        }
 
        public function xoa_phan_hoi($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_phan_hoi');
        }

       public function getListHasPaginate($total, $start)
    	{
        	$this->db->limit($total, $start);
        	$query = $this->db->get('tbl_phan_hoi');
        	return $query->result();
    	}

    	public function countAll() {
      		return $this->db->count_all('tbl_phan_hoi');
    		}


          
    }

;?>