<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class C_HitungTugas extends RestController {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Data', 'data');
    }
    public function index_get() {
        $nimnis = $this->get('nimnis');
        $jmlabsen = $this->data->get_jml_tgs($nimnis);
    
      
        $this->response($jmlabsen,  RestController::HTTP_OK);
    }
    // public function get_tgs() {
    //     $nimnis = $this->get('nimnis');
    //     $absensi = $this->data->get_jml_absen($nimnis);
      
    //     $this->response($absensi,  RestController::HTTP_OK);
    // }

}
?>