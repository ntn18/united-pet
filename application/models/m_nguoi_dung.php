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
		public function lay_danh_sach_nguoi_dung()
		{
			$query = $this->db->query("select * from tbl_user inner join tbl_gioi_tinh on tbl_user.gioi_tinh_id=tbl_gioi_tinh.gioi_tinh_id
				");

			return $query->result();
		}
		
	}
;?>