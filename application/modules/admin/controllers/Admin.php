<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  if ($this->session->userdata('role_id') !=1 && $this->session->userdata('role_id') !=5 ){
		redirect('user/blocked');
		}
		$this->load->model("Admin_model",'admin');
	  
	}
	public function index()
	{
		$data['title'] = 'Dashboard';
		
		$data['jmluser'] = $this->admin->getcountuser();
		$data['jmlabsen'] = $this->admin->getcountabsen();
		$data['jmltgs'] = $this->admin->getcounttgs();
		$data['jmlpendaftar'] = $this->admin->getcountpendaftar();
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['userdata']=$this->admin->getdata();
		$this->load->view('template/v_template',$data);
		$this->load->view('v_admin',$data);
		$this->load->view('template/v_template_footer');
	}
	public function testimoni()
	{
		$data['title']="Testimoni";
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		
		$data['testimoni'] = $this->admin->getdatatesti();

		$this->load->view('template/v_template',$data);
		$this->load->view('v_testimoni',$data);
		$this->load->view('template/v_template_footer');
	}
	public function hapus_testi($id)
	{
	  $this->db->where('id', $id);
	  $this->db->delete('tbl_testimoni');
	  $this->session->set_flashdata('pesan', 'Dihapus');
	  redirect('admin/testimoni');
	} 

}