<?php 
	class m_loai_tin_tuc extends CI_Model {
		// Mục đích lấy tin tức theo loại tin
		public function lay_danh_sach_loai_tin_tuc()
        {
			// Viết câu lệnh truy vấn SQL lấy ra được danh sách các loại tin tức
			$query = $this->db->query("
				SELECT * 
				FROM tbl_news_type
			");

			// Trả kết quả truy vấn dữ liệu
            return $query->result();
        }
	}
;?>