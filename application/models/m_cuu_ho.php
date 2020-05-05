<?php
  class m_cuu_ho extends CI_Model {
    public function lay_danh_sach_cuu_ho() {
      $query = $this->db->query("Select a.case_id, a.ng_bao_tin, a.sdt,a.dia_diem_cuu,a.thoi_gian,b.loai_pet, a.tinh_trang, c.ten_muc_do, d.tiep_nhan,a.ghi_chu from tbl_case a inner join tbl_loai_pet b on a.loai_pet_id = b.loai_pet_id inner join tbl_muc_do c on a.muc_do_id = c.muc_do_id inner join tbl_tiep_nhan d on a.tiep_nhan_id = d.tiep_nhan_id");
      return $query->result();
    }

    public function lay_cuu_ho_theo_ID($id) {
			$query = $this->db->query("
				SELECT * 
				FROM tbl_case
				WHERE case_id = ".$id
      );
      
	    return  $query->row();
    }

    public function them_moi_case() {
			$ng_bao_tin = $_POST['ng_bao_tin'];
			$sdt = $_POST['sdt'];
			$dia_diem_cuu = $_POST['dia_diem_cuu'];
			$loai_pet_id = $_POST['loai_pet_id'];
			$tinh_trang = $_POST['tinh_trang'];
			$muc_do_id = $_POST['muc_do_id'];
			$tiep_nhan_id = $_POST['tiep_nhan_id'];
      		$ghi_chu = $_POST['ghi_chu'];

			$data = array(
				'ng_bao_tin' => $ng_bao_tin,
				'sdt' => $sdt,
				'dia_diem_cuu' => $dia_diem_cuu,
				'loai_pet_id' => $loai_pet_id,
				'tinh_trang' => $tinh_trang,
				'muc_do_id' => $muc_do_id,
				'tiep_nhan_id' => $tiep_nhan_id,
				'ghi_chu' => $ghi_chu
      );
      
			$this->db->insert('tbl_case', $data);
    }

    public function sua_case() {
    		$case_id = $_POST['case_id'];
      		$ng_bao_tin = $_POST['ng_bao_tin'];
			$sdt = $_POST['sdt'];
			$dia_diem_cuu = $_POST['dia_diem_cuu'];
			$loai_pet_id = $_POST['loai_pet_id'];
			$tinh_trang = $_POST['tinh_trang'];
			$muc_do_id = $_POST['muc_do_id'];
			$tiep_nhan_id = $_POST['tiep_nhan_id'];
      		$ghi_chu = $_POST['ghi_chu'];

      $data = array(
				'ng_bao_tin' => $ng_bao_tin,
				'sdt' => $sdt,
				'dia_diem_cuu' => $dia_diem_cuu,
				'loai_pet_id' => $loai_pet_id,
				'tinh_trang' => $tinh_trang,
				'muc_do_id' => $muc_do_id,
				'tiep_nhan_id' => $tiep_nhan_id,
				'ghi_chu' => $ghi_chu
      );

			$this->db->where('case_id', $case_id);
			$this->db->update('tbl_case', $data);
    }

    public function xoa_case($case_id) {
			$this->db->where('case_id', $case_id);
			$this->db->delete('tbl_case');
    }

    public function getListHasPaginate($total, $start)
		{
			$this->db->limit($total, $start);
			$query = $this->db->get('tbl_case');
			return $query->result();
		}

		public function countAll() {
		return $this->db->count_all('tbl_case');
		}

  }

?>