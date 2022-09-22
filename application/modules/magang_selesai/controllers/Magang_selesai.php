<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magang_selesai extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  if ($this->session->userdata('role_id') !=1 && $this->session->userdata('role_id') !=5){
		redirect('user/blocked');
		}
	  $this->load->model("Magang_selesai_model",'magang_selesai');

	}
	public function index()
	{
		$data['title'] = 'Magang Selesai';
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['magang']=$this->magang_selesai->getmagang();
		
		// $data['absensi'] = $this->Riwayat_model->getallabsn();
		$this->load->view('template/v_template',$data);
		$this->load->view('v_magang_selesai',$data);
		$this->load->view('template/v_template_footer');
		
	}
	public function detail($id)
	{
		$data['title'] = 'Magang Selesai';
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['get1'] = $this->magang_selesai->getdata($id);
		$data['get2'] = $this->magang_selesai->userId($id);
		// var_dump($data['get1']);
		// die;
		// $data['getbyidmagang'] = $this->magang->detailmagang($id)->row();
		// $data['get1']= $this->db->get_where('tbl_user',['id'=>$id])->result_array();
		// $data['getabsn'] = $this->magang->getabsen($id);
    	
		

		
		
		
		// var_dump($data['get1']);
		// die;
		// $data['absen']=$this->absen->getabsn($id);
		// $data['absen']= $this->db->get_where('tbl_absensi''tbl_user','tbl_user.nimnis=tbl_absensi.nimnis')->result_array();

		// $data['absensi'] = $this->Riwayat_model->getallabsn();
		$this->load->view('template/v_template',$data);
		$this->load->view('v_detail_selesai',$data);
		$this->load->view('template/v_template_footer');
		
	}
	public function download($tgs)
	{

    $this->load->helper(array('download','url'));
    force_download(FCPATH.'./assets/doc/tugas/'.$tgs, null);
	redirect('magang_selesai/detail');
	}
	public function download_surat($get)
	{
    $this->load->helper(array('download','url'));
    force_download(FCPATH.'./assets/doc/surat/'.$get, null);
	redirect('pendaftar/detail');
	}
	public function download_portofolio($get)
	{
    $this->load->helper(array('download','url'));
    force_download(FCPATH.'./assets/doc/portofolio/'.$get, null);
	redirect('pendaftar/detail');
	}
	public function update_data($id)
	{
		
		$id1 =$id;
		$data = array(
			'role_id' => 4
		  );
		  $this->db->where('id',$id1);
		  $this->db->update('tbl_user', $data);
		
		  redirect(base_url('magang')); 

	}


}