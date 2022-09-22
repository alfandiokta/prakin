<?php
class Riwayat_model extends CI_Model
{
  // public function getallabsn()
  // {
  //   if ($this->session->userdata('role_id') ==2){
  //     $this->db->select('tbl_absensi.*,tbl_user.nama,tbl_user.role_id');
  //     $this->db->from('tbl_absensi');
  //     $this->db->join('tbl_user','tbl_absensi.nimnis=tbl_user.nimnis','left');
  //     return $this->db->get();
  //   }else{
  //     $data= $this->session->userdata('nimnis');
  //     $this->db->select('tbl_absensi.*,tbl_user.nama,tbl_user.role_id');
  //     $this->db->from('tbl_absensi');
  //     $this->db->join('tbl_user','tbl_absensi.nimnis=tbl_user.nimnis','left');
  //     $this->db->where('tbl_user.nimnis=',$data);
  //     return $this->db->get();
  //   }
  // }
  public function getabsn()
  {
    $data= $this->session->userdata('nimnis');
    $query = "SELECT `tbl_absensi`.*,`tbl_user`.`nama`,`tbl_user`.`role_id` 
    from `tbl_absensi` 
    JOIN `tbl_user` 
    ON `tbl_absensi`.`nimnis`=`tbl_user`.`nimnis` 
    WHERE `tbl_user`.`nimnis`='$data'";
    
    return $this->db->query($query)->result_array();
  }
  public function getriwayat()
  {
    $data= $this->session->userdata('nimnis');
    $query = "SELECT `tbl_absensi`.*,`tbl_user`.`nama`,`tbl_user`.`role_id`,`tbl_user`.`wa`,`tbl_dokumen`.`ttd` 
    from `tbl_absensi` 
    JOIN `tbl_user`
    ON `tbl_absensi`.`nimnis`=`tbl_user`.`nimnis` 
    JOIN `tbl_dokumen`
    ON `tbl_user`.`nimnis`=`tbl_dokumen`.`nimnis_doc` 
    WHERE `tbl_user`.`nimnis`='$data'
    ORDER BY `tbl_absensi`.`id` DESC";
    return $this->db->query($query)->result_array();
  }
  public function export()
  {
    $data= $this->session->userdata('nimnis');
    $query = "SELECT `tbl_absensi`.*,`tbl_user`.`nama`,`tbl_user`.`role_id`,`tbl_user`.`wa`,`tbl_dokumen`.`ttd` 
    from `tbl_absensi` 
    JOIN `tbl_user`
    ON `tbl_absensi`.`nimnis`=`tbl_user`.`nimnis` 
    JOIN `tbl_dokumen`
    ON `tbl_user`.`nimnis`=`tbl_dokumen`.`nimnis_doc` 
    WHERE `tbl_user`.`nimnis`='$data'
    ORDER BY `tbl_absensi`.`id` DESC";
    return $this->db->query($query)->result();
  }
  public function getuser()
  {
    $data= $this->session->userdata('nimnis');
    $query = "SELECT *
    from `tbl_user`  
    WHERE `tbl_user`.`nimnis`='$data'";
    return $this->db->query($query)->result_array();
  }

}