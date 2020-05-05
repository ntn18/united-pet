<?php
  class m_loai_pet extends CI_Model {
    public function lay_danh_sach_loai_pet() {
      $query = $this->db->query("Select * from tbl_loai_pet");
      return $query->result();
    }
  }

?>