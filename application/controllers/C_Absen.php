<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class C_Absen extends RestController {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Data', 'data');
    }
    public function index_get() {
        $nimnis = $this->get('nimnis');
        $absensi = $this->data->get_absen($nimnis);
       
        foreach($absensi as $value ){
            $formatDate = explode("-",$value->tanggal);
            
             $dataabsn[] = [
                      "id" => $value->id,
                      "nimnis" => $value->nimnis,
                      "tanggal" => $formatDate[2]."/".$formatDate[1]."/".$formatDate[0],
                      "jam" => $value->jam,
                      "aktivitas" => $value->aktivitas,
                      "uraian_aktivitas" => $value->uraian_aktivitas,
                      "foto_aktivitas" => $value->foto_aktivitas,
                      "tgs_link" => $value->tgs_link,
                      "tgs_file" => $value->tgs_file,
                      "nama" => $value->nama,
                      "role_id" => $value->role_id
                 ];
        }

        $this->response($dataabsn,  RestController::HTTP_OK);
    }
        public function index_post() {
            $flag = $this->post('flag');

            if ($flag=="INSERT") {
    		$config['upload_path']   = FCPATH. './assets/doc/img_absen';
    		$config['allowed_types'] = 'jpg|jpeg|png|';
    		$config['max_size']      = '20480';
    		$foto_aktivitas = $_FILES['foto_aktivitas']['name'];
    		$path = './assets/doc/img_absen';
    // 		$config['encrypt_name']  = False;
            $this->upload->initialize($config); 
    	  	$this->load->library('upload',$config);
    // 		$config['file_name']     = url_title($this->input->post('foto_aktivitas'));
    // 		$filename = $this->upload->file_name;
    	    
    	  
    		  //$this->upload->do_upload('foto_aktivitas');
    		  //$data1 = $this->upload->data();
    		  //$foto_aktivitas=$data1['file_name'];
    		  
    		  if(!$this->upload->do_upload('foto_aktivitas'))
    		  {
    		      $this->response(array('status'=>'fail',502));
    		  } else {
    		    $data = [
    			'nimnis'	=> $this->input->post('nimnis'),
    			'tanggal'		=> $this->input->post('tanggal'),
    			'jam'		=> $this->input->post('jam'),
                'aktivitas'		=> $this->input->post('aktivitas'),
                'uraian_aktivitas'		=> $this->input->post('uraian_aktivitas'),
                'foto_aktivitas'		=> $foto_aktivitas,
    			'tgs_link'		=> $this->input->post('tgs_link'),
    		];
    		$insert = $this->db->insert('tbl_absensi',$data);
    		$this->response($data,200); 
    		  }
    	  }
           
            // if ($insert) {
            //     $this->response($data, 200);
            // } else {
            //     $this->response(array('status' => 'fail', 502));
            // }
        }
        
    
    //     public function index_post() {
        
    //         $data = [
    // 			'nimnis'	=> $this->input->post('nimnis'),
    // 			'tanggal'		=> $this->input->post('tanggal'),
    // 			'jam'		=> $this->input->post('jam'),
    //             'aktivitas'		=> $this->input->post('aktivitas'),
    //             'uraian_aktivitas'		=> $this->input->post('uraian_aktivitas'),
    //             'foto_aktivitas'		=> $this->input->post('foto_aktivitas'),
    // 			'tgs_link'		=> $this->input->post('tgs_link'),
    // 		];
    // 		$insert = $this->db->insert('tbl_absensi',$data);
    //         if ($insert) {
    //             $this->response($data, 200);
    //         } else {
    //             $this->response(array('status' => 'fail', 502));
    //         }
    //     }

}
?>