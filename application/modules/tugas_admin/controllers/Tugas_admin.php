<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas_admin extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  if ($this->session->userdata('role_id') !=1 && $this->session->userdata('role_id') !=5){
		redirect('user/blocked');
	}
	  
	  $this->load->model("Tugas_admin_model",'tugas');
	}
	public function index()
	{
		$data['title'] = 'Tugas';
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['tugas']=$this->tugas->gettugas();
		
		// $data['absensi'] = $this->Riwayat_model->getallabsn();
		$this->load->view('template/v_template',$data);
		$this->load->view('v_tugas_admin',$data);
		$this->load->view('template/v_template_footer');
		
	}
	// public function unduh()
	// {
	// 	$dokumen =$this->uri->segment(3);
	// 	$data = file_get_contents("./assets/doc".$dokumen);
	// 	force_download($dokumen, $data);
	// }
	public function unduh($tgs)
	{
		

        $fileinfo = $this->tugas->download($tgs);
        $file = './assets/doc/tugas'.$fileinfo['file_tgs'];
        force_download($file, NULL);
	}
	public function download($tgs)
	{

    $this->load->helper(array('download','url'));
    force_download(FCPATH.'./assets/doc/tugas'.$tgs, null);
	redirect('tugas_admin');
	}
}