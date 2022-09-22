<?php

use phpDocumentor\Reflection\DocBlock\Tags\Return_;

defined('BASEPATH') or exit('No direct script access allowed');

class M_Data extends CI_Model
{
    
   public function user_login($email){
	$query= "SELECT `tbl_user`.*,`tbl_dokumen`.*
	FROM `tbl_user` 
	LEFT JOIN `tbl_dokumen` 
	on `tbl_user`.`nimnis`=`tbl_dokumen`.`nimnis_doc`
	WHERE `tbl_user`.`email`='$email'"
	;
    //   $query = "SELECT `user`.*,`siswa`.*,`guru`.*,`kelas`.*
	// 				FROM `user`
	// 				LEFT JOIN `siswa`
	// 				ON `siswa`.`user_id`=`user`.`id`
	// 				LEFT JOIN `guru`
	// 				ON `guru`.`id_guru`=`siswa`.`wali_kelas`
    //            LEFT JOIN `kelas`
	// 				ON `kelas`.`id_kelas`=`siswa`.`kelas_id`
	// 				WHERE `user`.`email`= '$email'";
    return $this->db->query($query)->row();
   }
    
    public function get_absen($nimnis){
       $query = "SELECT `tbl_absensi`.*,`tbl_user`.`nama`,`tbl_user`.`role_id` 
			from `tbl_absensi` 
			JOIN `tbl_user` 
			ON `tbl_absensi`.`nimnis`=`tbl_user`.`nimnis` 
			WHERE `tbl_user`.`nimnis`='$nimnis'
			ORDER BY `tbl_absensi`.`id` DESC";
			
			
// 		$query = "SELECT `absensi`.*,`matpel`.*,
// 					(SELECT COUNT(id) FROM `absensi_siswa`
// 					WHERE `absensi_siswa`.`nisn` = $nisn 
// 					AND `absensi`.`id_absen` = `absensi_siswa`.`absen_id`) AS ada
// 					FROM `absensi` 
// 					LEFT JOIN `m_mapel`
// 					ON `m_mapel`.`id_m_mapel`=`absensi`.`m_mapel_id`
// 					LEFT JOIN `matpel`
// 					ON `m_mapel`.`mapel_id`=`matpel`.`id_matpel`
// 					WHERE `absensi_active`=1
// 					GROUP BY `absensi`.`id_absen`
// 					HAVING `ada`=0";

        return $this->db->query($query)->result();
	}
	
	public function get_tugas($nimnis){
       $query = "SELECT `tbl_tugas`.*,`tbl_user`.`nama`,`tbl_user`.`role_id` 
       from `tbl_tugas` 
       JOIN `tbl_user` 
       ON `tbl_tugas`.`nimnis_tgs`=`tbl_user`.`nimnis` 
       WHERE `tbl_user`.`nimnis`='$nimnis' 
       ORDER BY `tbl_tugas`.`id` DESC";

        return $this->db->query($query)->result();
	}
	
	
    
   
   public function get_kelas_online($nisn){
		$query = "SELECT `user`.*,`matpel`.*,`kelas_matpel`.*,`guru`.* 
					FROM `user` 
					LEFT JOIN `siswa` 
					on `siswa`.`user_id`=`user`.`id`
					LEFT JOIN `guru`
					on `guru`.`id_guru`=`siswa`.`wali_kelas` 
					LEFT JOIN `kelas_matpel` 
					on `siswa`.`kelas_id`=`kelas_matpel`.`kelas_id` 
					LEFT JOIN `matpel` 
					on `kelas_matpel`.`matpel_id`=`matpel`.`id_matpel` 
                    Where `siswa`.`nisn` = $nisn 
        ";
        return $this->db->query($query)->result();
	}
//   public function get_tugas($kelas_id,$matpel_id){
// 		$query = "SELECT `m_mapel`.*,`tugas`.*
// 					FROM `m_mapel`
// 					LEFT JOIN `tugas` on `tugas`.`m_mapelId`=`m_mapel`.`id_m_mapel` 
// 					LEFT JOIN `kelas` on `kelas`.`id_kelas`=`m_mapel`.`kelas_id`
// 					LEFT JOIN `matpel` on `matpel`.`id_matpel`=`m_mapel`.`mapel_id`
// 					where `m_mapel`.`kelas_id`=$kelas_id and `m_mapel`.`mapel_id`=$matpel_id;
//       			";
//         return $this->db->query($query)->result();
// 	}
		public function get_jml_absen($nimnis){
		$query = "SELECT COUNT(nimnis) as absen FROM tbl_absensi where nimnis='$nimnis'";
		return $this->db->query($query)->row();
	}
	public function get_jml_tgs($nimnis){
		$query = "SELECT COUNT(nimnis_tgs) as tugas FROM tbl_tugas where nimnis_tgs='$nimnis'";
		return $this->db->query($query)->row();
	}
// 	public function get_jml_testi($nimnis){
// 		$query = "SELECT COUNT(nimnis_testi) as testimoni FROM tbl_testimoni where nimnis_testi='$nimnis'";
// 		return $this->db->query($query)->result();
// 	}


	
}
?>