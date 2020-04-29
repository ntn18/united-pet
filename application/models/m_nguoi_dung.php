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
	}
;?>