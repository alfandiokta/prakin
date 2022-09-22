<?php
class Menu_model extends CI_Model
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
  
  public function getmagang()
  {
    // $data= $this->session->userdata('nimnis');
    $query = "SELECT *
    from `tbl_user` 
    WHERE `tbl_user`.`role_id`=3";
    
    return $this->db->query($query)->result_array();
  }
  public function update_data($data)
    {
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('tbl_user',$data);
    }
}