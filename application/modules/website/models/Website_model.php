<?php
class Website_model extends CI_Model
{

    public function getdata()
    {
      $query= "SELECT `tbl_user`.*,`tbl_testimoni`.*
      FROM `tbl_testimoni` 
      LEFT JOIN `tbl_user` 
      on `tbl_user`.`nimnis`=`tbl_testimoni`.`nimnis_testi`
      ORDER BY `tbl_testimoni`.`id` DESC LIMIT 6
      "
      ;
    return $this->db->query($query)->result_array();
    }



}
