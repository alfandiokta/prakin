<?php
class Magang_model extends CI_Model
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
    $data1 = $this->session->userdata('nimnis');
    $data = $this->session->userdata('role_id');
    if ($data == 1) {
      $query = "SELECT *
      from `tbl_user` 
      WHERE `tbl_user`.`role_id` = 2";
    } else if ($data == 5) {
      $query = "SELECT `tbl_user`.*, `tbl_pendamping`.*
      from `tbl_user`
      join `tbl_pendamping` on `tbl_pendamping`.`nimnis_mgn` = `tbl_user`.`nimnis`
      WHERE `tbl_pendamping`.`nimnis_pnd`= $data1";
    }
    
    return $this->db->query($query)->result_array();
  }
  public function detailmagang($id)
  {
    // $data = array(
    //   'tbl_user.id'=>$id
    // );
    // $this->db->select('*');
    // $this->db->from('tbl_user');
    // $this->db->where($data);
    
    // return $this->db->get();
    $data = array(
        'tbl_user.id'=>$id
      );
      $query = "SELECT `tbl_user`.*,`tbl_dokumen`.* FROM `tbl_user` 
      LEFT JOIN `tbl_dokumen` 
      on `tbl_user`.`nimnis`=`tbl_dokumen`.`nimnis_doc`
      WHERE `tbl_user`.`nimnis`='$data'"
      ;
    return $this->db->query($query)->row_array();

  }
  public function getabsn($id)
	{
    // $data = array(
    //   'tbl_user.id'=>$id
    // );
	  // $this->db->select('*');
	  // $this->db->join('tbl_user', 'tbl_user.nimnis = tbl_absensi.nimnis', 'left');
	  // $this->db->order_by('tbl_absensi.id', 'desc');
	  // $this->db->where('tbl_user.id', $id);
	  // return $this->db->get('tbl_absensi')->row_array();
    $id1 =$id;
    $query = "SELECT `tbl_absensi`.*,`tbl_user`.`nama`,`tbl_user`.`role_id` 
    from `tbl_absensi` 
    JOIN `tbl_user` 
    ON `tbl_absensi`.`nimnis`=`tbl_user`.`nimnis` 
    WHERE `tbl_user`.`id`='$id1'";
    
    return $this->db->query($query)->result_array();
	}


  public function userId($id)
  {
    return $this->db->get_where('tbl_user',['id'=>$id])->result_array();
  }
  public function getabsen($id)
  {
    $id1=$id;
    $query = "SELECT `tbl_absensi`.*,`tbl_user`.`nama`,`tbl_user`.`role_id` 
    from `tbl_absensi` 
    JOIN `tbl_user` 
    ON `tbl_absensi`.`nimnis`=`tbl_user`.`nimnis` 
    WHERE `tbl_user`.`id`='$id'";
    
    return $this->db->query($query)->result_array();
  }

  public function getdata($id)
    {
  
      $id1=$id;
      $query= "SELECT `tbl_user`.*,`tbl_dokumen`.*
      FROM `tbl_user`
      LEFT JOIN `tbl_dokumen` 
      on `tbl_user`.`nimnis`=`tbl_dokumen`.`nimnis_doc`
      WHERE `tbl_user`.`id`='$id1'"
      ;
    return $this->db->query($query)->result_array();
    }
    public function download($file_tgs){
      $query = $this->db->get_where('tbl_tugas',array('file_tgs'=>$file_tgs));
      return $query->row_array();
    }
}