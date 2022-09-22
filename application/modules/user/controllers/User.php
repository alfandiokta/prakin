<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   is_logged_in();
	  $this->load->model('User_model','usermod');
	}
	public function index()
	{
		$data['title']="Dashboard";
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['pendaftar']=$this->usermod->hitungmagang();
		$data['userdata']=$this->usermod->getdata();
		$data['kuota']=$this->db->get_where('tbl_kouta')->row_array();
		// $data['jmlabsn']=$this->usermod->getjmlabsen();

		$this->load->view('template/v_template',$data);
		$this->load->view('v_user');
		$this->load->view('template/v_template_footer');
	}
	public function blocked(){
		$data['title'] = 'Akses Ditolak';
		// $data['user'] = $this->db->get_where('tbl_user',['email' => 
		// $this->session->userdata('email')])->row_array();
		$this->load->view('user/blocked',$data);
	} 
	public function testimoni()
	{
		$data['title']="Testimoni";
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		
		

		$this->load->view('template/v_template',$data);
		$this->load->view('v_testimoni',$data);
		$this->load->view('template/v_template_footer');
	}
	public function upload_testimoni()
	{
		
		$data = array(
			'nimnis_testi' => $this->input->post('nimnis'),
			'tanggal' => $this->input->post('tanggal'),
			'testimoni' => $this->input->post('testimoni')
			
		  );
		  
		  $this->db->insert('tbl_testimoni',$data);
		  redirect(base_url('user'));

	}
}