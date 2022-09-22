<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   is_logged_in();
	  $this->load->model("Menu_model",'menu');
	}
	public function index()
	{
		$data['title'] = 'Atur Menu';
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		
		$data['menu']=$this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu','Menu');

		if ($this->form_validation->run() == false){
			$this->load->view('template/v_template',$data);
			$this->load->view('v_menu',$data);
			$this->load->view('template/v_template_footer');
		}else{
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			
			$this->session->set_flashdata('message','<div class="alert alert-succes" role="alert">
			Menu Ditambahkan</div>');
			redirect('menu');
		}
		
		
	}

	// public function update_data($id)
	// {
		
	// 	$id1 =$id;
	// 	$data = array(
	// 		'role_id' => 2
	// 	  );
	// 	  $this->db->where('id',$id1);
	// 	  $this->db->update('tbl_user', $data);
		
	// 	  redirect(base_url('pendaftar'));

	// }

}