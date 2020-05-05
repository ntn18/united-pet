<?php 
	class m_chu_nuoi extends CI_Model {
		
		// Lấy toàn bộ tin tức
		public function lay_danh_sach_chu_nuoi()
		{
			$query= $this->db->query("
				SELECT * FROM tbl_chu_nuoi ORDER BY id DESC
			");

			return $query->result();
		}

        // Mục đích Lấy tin tức theo ID
		public function lay_chu_nuoi_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức
			$query = $this->db->query("
				SELECT * 
				FROM tbl_chu_nuoi inner join tbl_pet on tbl_chu_nuoi.id = tbl_pet.chu_nuoi_id
				WHERE id=".$id
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }

		public function them_moi_chu_nuoi()
        {
			// Dữ liệu thu được từ FORM nhập dữ liệu
			$ho_ten = $_POST['txtHoTen'];
			$sdt = $_POST['txtSDT'];
			$dia_chi = $_POST['txtDiaChi'];
			$email = $_POST['txtEmail'];
			$cmt = $_POST['txtCMT'];
			$pet_id = $_POST['txtPetID'];
			$ghi_chu = $_POST['txtGhiChu'];

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
				'ho_ten' => $ho_ten,
				'sdt' => $sdt,
				'dia_chi' => $dia_chi,
				'email' => $email,
				'cmt' => $cmt,
				'pet_id' => $pet_id,
				'ghi_chu' => $ghi_chu,
				'anh' => $data["image"]
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_chu_nuoi', $data);
        }

		public function sua_chu_nuoi()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$id = $_POST['txtID'];
			$ho_ten = $_POST['txtHoTen'];
			$sdt = $_POST['txtSDT'];
			$dia_chi = $_POST['txtDiaChi'];
			$email = $_POST['txtEmail'];
			$cmt = $_POST['txtCMT'];
			$pet_id = $_POST['txtPetID'];
			$ghi_chu = $_POST['txtGhiChu'];

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
					'ho_ten' => $ho_ten,
					'sdt' => $sdt,
					'dia_chi' => $dia_chi,
					'email' => $email,
					'cmt' => $cmt,
					'pet_id' => $pet_id,
					'ghi_chu' => $ghi_chu
				);
			} else {
				$data = array(
					'ho_ten' => $ho_ten,
					'sdt' => $sdt,
					'dia_chi' => $dia_chi,
					'email' => $email,
					'cmt' => $cmt,
					'pet_id' => $pet_id,
					'ghi_chu' => $ghi_chu,
					'anh' => $data["image"],
				);
			}

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('id', $id);
			$this->db->update('tbl_chu_nuoi', $data);
        }

		public function xoa_chu_nuoi($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_chu_nuoi');
		}
		
		
		public function getListHasPaginate($total, $start)
		{
			$this->db->limit($total, $start);
			$query = $this->db->get('tbl_chu_nuoi');
			return $query->result();
		}

		public function countAll() {
		return $this->db->count_all('tbl_chu_nuoi');
		}

	}
;?>