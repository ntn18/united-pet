<?php 
	class m_tinh_nguyen_vien extends CI_Model {
		
		// Lấy toàn bộ tin tức
		public function lay_danh_sach_tinh_nguyen_vien()
		{
			$query= $this->db->query("
				SELECT  tbl_dki_tnv.id, tbl_dki_tnv.ho_ten, tbl_dki_tnv.gioi_tinh_id, tbl_vi_tri.ten_vi_tri, tbl_dki_tnv.dob
				FROM tbl_dki_tnv 
				INNER JOIN tbl_vi_tri ON tbl_dki_tnv.vi_tri_id = tbl_vi_tri.vi_tri_id ORDER BY id DESC
			");

			return $query->result();
		}

        // Mục đích Lấy tin tức theo ID
		public function lay_tinh_nguyen_vien_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức
			$query = $this->db->query("
				SELECT * 
				FROM tbl_dki_tnv
				WHERE id=".$id
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }

		public function them_moi_tinh_nguyen_vien()
        {
			// Dữ liệu thu được từ FORM nhập dữ liệu
			
			$ho_ten = $_POST['txthoten'];
			$gioi_tinh = $_POST['txtgioitinh'];
			$ngay_sinh = $_POST['txtngaysinh'];
			$chuc_vu = $_POST['txtchucvu'];
			
		   
			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ho_ten' => $ho_ten,
				'gioi_tinh_id'=>$gioi_tinh,
				'dob' => $ngay_sinh,
				'vi_tri_id'=>$chuc_vu,

			);

			// Thực hiện chèn dữ liệu vào bảng TÌNH NGUYỆN VIÊN
			$this->db->insert('tbl_dki_tnv', $data);
        }

		public function sua_tinh_nguyen_vien()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$id = $_POST['txtID'];
	        $ho_ten = $_POST['txthoten'];
			$gioi_tinh = $_POST['txtgioitinh'];
			$ngay_sinh = $_POST['txtngaysinh'];
			$chuc_vu = $_POST['txtchucvu'];
			
		
			

			// Đẩy dữ liệu này vào CSDL

		    
			$data = array(
				'ho_ten' => $ho_ten,
				'gioi_tinh_id'=>$gioi_tinh,
				'dob' => $ngay_sinh,
				'vi_tri_id'=>$chuc_vu,

			);
			


			// Thực hiện cập nhật dữ liệu vào bảng tình nguyện viên

			$this->db->where('id', $id);
			$this->db->update('tbl_dki_tnv', $data);
        }

		public function xoa_tinh_nguyen_vien($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_dki_tnv');
        }

        public function getViTri(){
        	$query= $this->db->query("
				SELECT * FROM tbl_vi_tri
			");

			return $query->result();
        }

         public function getListHasPaginate($total, $start)
    {
        $this->db->limit($total, $start);
        $query = $this->db->get('tbl_dki_tnv');
        return $query->result();
    }

    public function countAll()
     {
      return $this->db->count_all('tbl_dki_tnv');
    }


	}
;?>