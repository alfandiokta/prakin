<?php
class Tugas_model extends CI_Model
{


    // public function upload_data($data)
    // {
    //     $this->db->where($this->input->post('id'));
    //     return $this->db->input('tbl_absensi',$data);
  

    // }
    public function gettgs()
    {
      $data= $this->session->userdata('nimnis');
      $query = "SELECT `tbl_tugas`.*,`tbl_user`.`nama`,`tbl_user`.`role_id` 
      from `tbl_tugas` 
      JOIN `tbl_user` 
      ON `tbl_tugas`.`nimnis_tgs`=`tbl_user`.`nimnis` 
      WHERE `tbl_user`.`nimnis`='$data'";
      return $this->db->query($query)->result_array();
    }
}