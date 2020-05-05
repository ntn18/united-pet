<?php 
	class m_tinh_nguyen_vien extends CI_Model {
		
		// Lấy toàn bộ tin tức
		public function lay_danh_sach_tinh_nguyen_vien()
		{
			$query= $this->db->query("
				SELECT * FROM tbl_dki_tnv ORDER BY id DESC
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
			$id = $_POST['txtID'];
			$ho_ten = $_POST['txtHoten'];
			$sdt = $_POST['txtsdt'];
			$email = $_POST['txtemail'];
			$dia_chi = $_POST['txtdiachi'];
			$dob = $_POST['txtdob'];
			$mo_ta = $_POST['txtMoTa'];
			
			
		   
			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'id'=>$id,

				'ho_ten' => $ho_ten,
				'sdt' => $sdt,
				'email' => $email,
				'dia_chi' => $dia_chi,
				'dob' => $dob,

				'email' => $this->session->userdata('email')
			);

			// Thực hiện chèn dữ liệu vào bảng TÌNH NGUYỆN VIÊN
			$this->db->insert('tbl_dki_tnv', $data);
        }

		public function sua_tinh_nguyen_vien()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$id = $_POST['txtID'];
			$ho_ten = $_POST['txtHoten'];
			$sdt = $_POST['txtsdt'];
			$email = $_POST['txtemail'];
			$dia_chi = $_POST['txtdiachi'];
			$dob = $_POST['txtdob'];
			$mo_ta = $_POST['txtMoTa'];

		
			

			// Đẩy dữ liệu này vào CSDL

		    
				$data = array(
				// 'id'=>$id,
				'ho_ten' => $ho_ten,
				'sdt' => $sdt,
				'email' => $email,
				'dia_chi' => $dia_chi,
				'dob' => $dob,

				'email' => $this->session->userdata('email')
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

	}
;?>