<?php
  class m_tiep_nhan extends CI_Model {
    public function lay_danh_sach_tiep_nhan() {
      $query = $this->db->query("Select * from tbl_tiep_nhan");
      return $query->result();
    }
  }

?>