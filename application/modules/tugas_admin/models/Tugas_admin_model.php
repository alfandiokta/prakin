<?php
class Tugas_admin_model extends CI_Model
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
  public function gettugas()
  {
    // $this->db->select('*');
    // $this->db->join('tbl_user', 'tbl_user.nimnis = tbl_tugas.nimnis_tgs', 'left');
    // $this->db->order_by('tbl_tugas.id', 'desc');
    $query="SELECT `tbl_user`.*,`tbl_pendamping`.*,`tbl_tugas`.*
    from `tbl_user`
    join `tbl_pendamping` on `tbl_pendamping`.`nimnis_mgn` = `tbl_user`.`nimnis`
    join `tbl_tugas` on `tbl_pendamping`.`nimnis_mgn` = `tbl_tugas`.`nimnis_tgs`
    order by `tbl_tugas`.`id`";

    return $this->db->query($query)->result_array();
  }
  public function download($file_tgs){
    $query = $this->db->get_where('tbl_tugas',array('file_tgs'=>$file_tgs));
    return $query->row_array();
  }
}