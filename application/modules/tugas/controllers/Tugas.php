<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   is_logged_in();
	  $this->load->model('Tugas_model','tugas');
	}
	public function index()
	{
		$data['title']="Tugas";
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$this->load->view('template/v_template', $data);
		$this->load->view('v_tugas', $data);
		$this->load->view('template/v_template_footer');

	}
	public function upload_tgs()
	{
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();

		$config['upload_path']   = FCPATH. './assets/doc/tugas';
		$config['allowed_types'] = '*';
		$config['max_size']      = 10090;
		$config['encrypt_name']  = False;
	  $this->load->library('upload',$config);
	  //Thumbnail
	  if (!empty($_FILES['file_tgs'])) {
		  $config['file_name']     = url_title($this->input->post('file_tgs'));
		  // $filename = $this->upload->file_name;
		  $this->upload->initialize($config); 
	  
		  $this->upload->do_upload('file_tgs');
		  $data1 = $this->upload->data();
		  $file_tgs=$data1['file_name'];
		  
	  }
	
		  $data = array(
			'nimnis_tgs' => $this->input->post('nimnis'),
			'tanggal' => date('Y-m-d'),
			'nama_tgs' => $this->input->post('nama_tgs'),
			'deskripsi' => $this->input->post('deskripsi'),
		    'file_tgs' => $file_tgs
		  );
		  // var_dump($data1);
		  // echo'<br>';
		 
		  $this->db->insert('tbl_tugas', $data);

		  
		  $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		  Event has been Added!
		  </div>');
		  redirect('tugas');
	}
	public function selesai()
	{
		$data['title']="Tugas";
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['tugas']=$this->tugas->gettgs();

		$this->load->view('template/v_template', $data);
		$this->load->view('v_tugas_selesai', $data);
		$this->load->view('template/v_template_footer');

	}


}