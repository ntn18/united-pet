<?php
  class m_gioi_tinh extends CI_Model {
    public function lay_danh_sach_gioi_tinh() {
      $query = $this->db->query("Select * from tbl_gioi_tinh");
      return $query->result();
    }
  }

?>