<?php 
	class m_thu_cung extends CI_Model {
		
		// Lấy toàn bộ tin tức
		public function lay_danh_sach_thu_cung()
		{
			$query= $this->db->query("
				SELECT * FROM tbl_pet ORDER BY pet_id DESC
			");

			return $query->result();
		}

        // Mục đích Lấy tin tức theo ID
		public function lay_tin_tuc_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức
			$query = $this->db->query("
				SELECT * 
				FROM tbl_pet
				WHERE pet_id=".$id
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }

		public function them_moi_thu_cung()
        {
			// Dữ liệu thu được từ FORM nhập dữ liệu
			$ten_pet = $_POST['txtTenPet'];
			$loai_pet = $_POST['txtLoaiPet']
			$da_nhan_nuoi_id = $_POST['txtDaNhanNuoiID']
			$mo_ta = $_POST['txtMoTa'];
			$chu_nuoi = $_POST['txtChuNuoi'];

			// Xử lý đoạn UPLOAD ảnh minh họa
			if (!empty($_FILES['txtAnh']['name'])) {
		        $config['upload_path'] = 'assets\images';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['txtAnh']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('txtAnh')) {
		          $uploadData = $this->upload->data();
		          $data["image"] = $uploadData['file_name'];
		        } else{
		          $data["image"] = '';
		        }
		      } else {
		        $data["image"] = '';
		      }

			// Đẩy dữ liệu này vào CSDL
			$data = array(
				'ten_pet' => $ten_pet,
				'loai_pet_id' => $loai_pet,
				'da_nhan_nuoi_id' => $da_nhan_nuoi_id,
				'mo_ta' => $mo_ta,
				'chu_nuoi' => $chu_nuoi
				'anh' => $data["image"],
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_pet', $data);
        }

		public function sua_thu_cung()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$ten_pet = $_POST['txtTenPet'];
			$loai_pet = $_POST['txtLoaiPet']
			$da_nhan_nuoi_id = $_POST['txtDaNhanNuoiID']
			$mo_ta = $_POST['txtMoTa'];
			$chu_nuoi = $_POST['txtChuNuoi'];

			// Xử lý đoạn UPLOAD ảnh minh họa
			if (!empty($_FILES['txtAnh']['name'])) {
		        $config['upload_path'] = 'assets\images';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['txtAnh']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('txtAnh')) {
		          $uploadData = $this->upload->data();
		          $data["image"] = $uploadData['file_name'];
		        } else{
		          $data["image"] = '';
		        }
		      } else {
		        $data["image"] = '';
		      }

			// Đẩy dữ liệu này vào CSDL

		    if($data["image"] == '')
		    {
				$data = array(
				'ten_pet' => $ten_pet,
				'loai_pet_id' => $loai_pet,
				'da_nhan_nuoi_id' => $da_nhan_nuoi_id,
				'mo_ta' => $mo_ta,
				'chu_nuoi' => $chu_nuoi
				);
			} else {
				$data = array(
				'ten_pet' => $ten_pet,
				'loai_pet_id' => $loai_pet,
				'da_nhan_nuoi_id' => $da_nhan_nuoi_id,
				'mo_ta' => $mo_ta,
				'chu_nuoi' => $chu_nuoi
				'anh' => $data["image"],
				);
			}

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('pet_id', $id);
			$this->db->update('tbl_pet', $data);
        }

		public function xoa_thu_cung
		{
			// Thực hiện việc xóa dữ liệu
			$this->db->where('pet_id', $id);
			$this->db->delete('tbl_pet');
        }

	}
;?>