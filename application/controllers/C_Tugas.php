<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class C_Tugas extends RestController {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Data', 'data');
    }
    public function index_get() {
        $nimnis = $this->get('nimnis');
        $r_tugas = $this->data->get_tugas($nimnis);
       
        foreach($r_tugas as $value ){
            $formatDate = explode("-",$value->tanggal);
            
             $datatgs[] = [
                      "id" => $value->id,
                      "nimnis_tgs" => $value->nimnis_tgs,
                      "tanggal" => $formatDate[2]."/".$formatDate[1]."/".$formatDate[0],
                      "nama_tgs" => $value->nama_tgs,
                      "deskripsi" => $value->deskripsi,
                      "file_tgs" => $value->file_tgs,
                      "nama" => $value->nama,
                      "role_id" => $value->role_id,
                    
                 ];
        }
        

        
        

        $this->response($datatgs,  RestController::HTTP_OK);
    }
    // public function index_get() {
    //     $nimnis = $this->get('nimnis');
    //     $jml_absensi = $this->data->get_jml_absen($nimnis);
      
    //     $this->response($jml_absensi,  RestController::HTTP_OK);
    // }
//     public function index_post() {
//         $data = [
// 			'nimnis_tgs'	=> $this->input->post('nimnis_tgs'),
// 			'tanggal'		=> $this->input->post('tanggal'),
// 			'nama_tgs'		=> $this->input->post('nama_tgs'),
//             'deskripsi'		=> $this->input->post('deskripsi'),
//             'file_tgs'		=> $this->input->post('file_tgs')
// 		];
// 		$insert = $this->db->insert('tbl_tugas',$data);
//         if ($insert) {
//             $this->response($data, 200);
//         } else {
//             $this->response(array('status' => 'fail', 502));
//         }
//     }
    public function index_post() {
        $flag = $this->post('flag');

            if ($flag=="INSERT") {
    		$config['upload_path']   = FCPATH. './assets/doc/tugas';
    		$config['allowed_types'] = '*';
    		$config['max_size']      = '20480';
    		$file_tgs = $_FILES['file_tgs']['name'];
    		$path = './assets/doc/tugas';
    // 		$config['encrypt_name']  = False;
            $this->upload->initialize($config); 
    	  	$this->load->library('upload',$config);
  
    		  
    		  if(!$this->upload->do_upload('file_tgs'))
    		  {
    		      $this->response(array('status'=>'fail',502));
    		  } else {
    		    $data = [
        			'nimnis_tgs'	=> $this->input->post('nimnis_tgs'),
        			'tanggal'		=> $this->input->post('tanggal'),
        			'nama_tgs'		=> $this->input->post('nama_tgs'),
                    'deskripsi'		=> $this->input->post('deskripsi'),
                    'file_tgs'		=> $file_tgs
    		];
    		$insert = $this->db->insert('tbl_tugas',$data);
    		$this->response($data,200); 
    		  }
    	  }
           
            // if ($insert) {
            //     $this->response($data, 200);
            // } else {
            //     $this->response(array('status' => 'fail', 502));
            // }
    }

}
?>