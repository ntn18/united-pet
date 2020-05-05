<?php
  class m_muc_do extends CI_Model {
    public function lay_danh_sach_muc_do() {
      $query = $this->db->query("Select * from tbl_muc_do");
      return $query->result();
    }
  }

?>