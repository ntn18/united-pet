<?php 
	class m_tin_tuc extends CI_Model {
		// Mục đích lấy tin tức theo loại tin
		public function lay_tin_tuc_theo_loai_tin($id_loai_tin)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT * 
				FROM tbl_news
				WHERE id_loai_tin=".$id_loai_tin."
			");

			// Trả kết quả truy vấn dữ liệu
            return $query->result();
        }

        // Mục đích Lấy tin tức theo ID
		public function lay_tin_tuc_theo_ID($id)
        {
			// Viết câu lệnh truy vấn SQL lấy các tin tức sự kiện (có mã loai_tin_id)
			$query = $this->db->query("
				SELECT * 
				FROM tbl_news
				WHERE id=".$id
			);

			// Trả kết quả truy vấn dữ liệu
	        return  $query->row();
        }

		public function them_moi_tin_tuc()
        {
			// Dữ liệu thu được từ FORM nhập dữ liệu
			$id_loai_tin = $_POST['txtLoaiTinTuc'];
			$tieu_de = $_POST['txtTieuDe'];
			$mo_ta = $_POST['txtMoTa'];
			$noi_dung = $_POST['txtNoiDung'];

			// Xử lý đoạn UPLOAD ảnh minh họa
			if (!empty($_FILES['txtAnhMinhHoa']['name'])) {
		        $config['upload_path'] = 'assets\images';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['txtAnhMinhHoa']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('txtAnhMinhHoa')) {
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
				'id_loai_tin' => $id_loai_tin,
				'tieu_de' => $tieu_de,
				'anh_minh_hoa' => $data["image"],
				'mo_ta' => $mo_ta,
				'noi_dung' => $noi_dung
			);

			// Thực hiện chèn dữ liệu vào bảng TIN TỨC
			$this->db->insert('tbl_tin_tuc', $data);
        }

		public function sua_tin_tuc()
        {
        	// Dữ liệu thu được từ FORM nhập dữ liệu
			$id = $_POST['txtID'];
			$id_loai_tin = $_POST['txtLoaiTinTuc'];
			$tieu_de = $_POST['txtTieuDe'];
			$mo_ta = $_POST['txtMoTa'];
			$noi_dung = $_POST['txtNoiDung'];

			// Xử lý đoạn UPLOAD ảnh minh họa
			if (!empty($_FILES['txtAnhMinhHoa']['name'])) {
		        $config['upload_path'] = 'assets\images';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['file_name'] = $_FILES['txtAnhMinhHoa']['name'];

		        $this->load->library('upload', $config);
		        $this->upload->initialize($config);

		        if ($this->upload->do_upload('txtAnhMinhHoa')) {
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
					'id_loai_tin' => $id_loai_tin,
					'tieu_de' => $tieu_de,
					'mo_ta' => $mo_ta,
					'noi_dung' => $noi_dung
				);
			} else {
				$data = array(
					'id_loai_tin' => $id_loai_tin,
					'tieu_de' => $tieu_de,
					'anh_minh_hoa' => $data["image"],
					'mo_ta' => $mo_ta,
					'noi_dung' => $noi_dung
				);
			}

			// Thực hiện cập nhật dữ liệu vào bảng TIN TỨC
			$this->db->where('id', $id);
			$this->db->update('tbl_news', $data);
        }

		public function xoa_tin_tuc($id)
        {
			// Thực hiện việc xóa dữ liệu
			$this->db->where('id', $id);
			$this->db->delete('tbl_news');
        }

	}
;?>