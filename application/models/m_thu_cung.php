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
		public function lay_thu_cung_theo_ID($id)
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
			$loai_pet = $_POST['txtLoaiPet'];
			$giong = $_POST['txtGiong'];
			$xu_ly_id = $_POST['txtXuLyID'];
			$mo_ta = $_POST['txtMoTa'];
			$chu_nuoi_id = $_POST['txtChuNuoi'];

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
				'giong' => $giong,
				'xu_ly_id' => $xu_ly_id,
				'mo_ta' => $mo_ta,
				'chu_nuoi_id' => $chu_nuoi_id,
				'anh' => $data["image"],
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_pet', $data);
        }

		public function sua_thu_cung()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
        	$pet_id = $_POST['txtID'];
			$ten_pet = $_POST['txtTenPet'];
			$loai_pet = $_POST['txtLoaiPet'];
			$giong = $_POST['txtGiong'];
			$xu_ly_id = $_POST['txtXuLyID'];
			$mo_ta = $_POST['txtMoTa'];
			$chu_nuoi_id = $_POST['txtChuNuoi'];

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
				'giong' => $giong,
				'xu_ly_id' => $xu_ly_id,
				'mo_ta' => $mo_ta,
				'chu_nuoi_id' => $chu_nuoi_id
				);
			} else {
				$data = array(
				'ten_pet' => $ten_pet,
				'loai_pet_id' => $loai_pet,
				'giong' => $giong,
				'xu_ly_id' => $xu_ly_id,
				'mo_ta' => $mo_ta,
				'chu_nuoi_id' => $chu_nuoi_id,
				'anh' => $data["image"],
				);
			}

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('pet_id', $pet_id);
			$this->db->update('tbl_pet', $data);
        }

		public function xoa_thu_cung($id)
		{
			// Thực hiện việc xóa dữ liệu
			$this->db->where('pet_id', $id);
			$this->db->delete('tbl_pet');
        }

        /*public function lay_loai_pet()
        {
        	$query = $this->db->query("SELECT tbl_loai_pet.loai_pet FROM tbl_pet INNER JOIN tbl_loai_pet on tbl_pet.loai_pet_id = tbl_loai_pet.loai_pet_id");
      		return $query->result();
        }*/

        public function getListHasPaginate($total, $start)
    	{
        	$this->db->limit($total, $start);
        	$query = $this->db->get('tbl_pet');
        	return $query->result();
    	}

    	public function countAll() {
      		return $this->db->count_all('tbl_pet');
    		}

	}
;?>