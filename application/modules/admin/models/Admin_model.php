<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  public function getcountuser()
  {

    // return  $this->db->count_all_results(`tbl_user`.`role_id`=2);
   $query = "SELECT COUNT(*)
                FROM `tbl_user`
                WHERE `tbl_user`.`role_id`=2";
    return $this->db->query($query)->row_array();

  }
  public function getcountpendaftar()
  {
    return  $this->db->count_all_results('tbl_user');
  }
  public function getcountkat()
  {

    return  $this->db->count_all_results('tbl_kategori');
  }
  public function getcountabsen()
  {
    $query= "SELECT COUNT(*) 
    AS jml FROM `tbl_absensi` 
    WHERE tanggal=DATE(NOW())"
    ;
  return $this->db->query($query)->result_array();
  }
  public function getcounttgs()
  {
    $query= "SELECT COUNT(*) 
    AS jml FROM `tbl_tugas` 
    WHERE tanggal=DATE(NOW())"
    ;
  return $this->db->query($query)->result_array();
  }
  public function getdatatesti()
  {
    $query= "SELECT `tbl_user`.*,`tbl_testimoni`.*
    FROM `tbl_testimoni` 
    LEFT JOIN `tbl_user` 
    on `tbl_user`.`nimnis`=`tbl_testimoni`.`nimnis_testi`
    
    "
    ;
  return $this->db->query($query)->result_array();
  }
  public function getdata()
    {
      $data=$this->session->userdata('nimnis');

      $query= "SELECT `tbl_user`.*,`tbl_dokumen`.*
      FROM `tbl_user` 
      LEFT JOIN `tbl_dokumen` 
      on `tbl_user`.`nimnis`=`tbl_dokumen`.`nimnis_doc`
      WHERE `tbl_user`.`nimnis`='$data'"
      ;
    return $this->db->query($query)->row_array();
    }
}
