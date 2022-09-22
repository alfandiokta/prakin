<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   is_logged_in();
	  $this->load->model('Absensi_model','absensi');
	}
	public function index()
	{
		$data['title']="Catatan Aktivitas";
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$this->load->view('template/v_template',$data);
		$this->load->view('v_absensi', $data);
		$this->load->view('template/v_template_footer');

	}
	public function uploadabsensi()
	{
		
		$data = array(
			// 'id' => $this->input->post('id'),
			'nimnis' => $this->input->post('nimnis'),
			'tanggal' => $this->input->post('tanggal'),
			'jam' => $this->input->post('jam'),
			'aktivitas' => $this->input->post('aktivitas'),
			'uraian_aktivitas' => $this->input->post('uraian_aktivitas'),
			
			// 'foto_ttd' => $this->input->post('foto_ttd'),
			// 'foto_aktivitas' => $this->input->post('foto_aktivitas')
		  );
		  $this->db->insert('tbl_absensi',$data);
		  redirect(base_url('riwayat'));

	}
	public function upload_absensi()
	{

		
	  //Thumbnail
	  if (!empty($_FILES['foto_aktivitas'])) {
		$config['upload_path']   = FCPATH. './assets/doc/img_absen';
		$config['allowed_types'] = 'jpg|jpeg|png|';
		$config['max_size']      = 10090;
		$config['encrypt_name']  = False;
	  	$this->load->library('upload',$config);
		  $config['file_name']     = url_title($this->input->post('foto_aktivitas'));
		  // $filename = $this->upload->file_name;
		  $this->upload->initialize($config); 
	  
		  $this->upload->do_upload('foto_aktivitas');
		  $data1 = $this->upload->data();
		  $foto_aktivitas=$data1['file_name'];
		  
	  }
	  //Gambar Poster
	  if (!empty($_FILES['tgs_file'])) {
		$config['upload_path']   = FCPATH. './assets/doc/tugas';
		$config['allowed_types'] = '*';
		$config['max_size']      = 10090;
		$config['encrypt_name']  = False;
	  	$this->load->library('upload',$config);
		  $config['file_name']     = url_title($this->input->post('tgs_file'));
		  // $filename = $this->upload->file_name;
		  $this->upload->initialize($config); 
	  
		  $this->upload->do_upload('tgs_file');
		  $data2 = $this->upload->data();
		  $tgs_file= $data2['file_name'];
	  }
	 
	
		  $data = array(
			'nimnis' => $this->input->post('nimnis'),
			'tanggal' => $this->input->post('tanggal'),
			'jam' => $this->input->post('jam'),
			'aktivitas' => $this->input->post('aktivitas'),
			'uraian_aktivitas' => $this->input->post('uraian_aktivitas'),
			'foto_aktivitas' => $foto_aktivitas,
			'tgs_link' => $this->input->post('tgs_link'),
			'tgs_file' => $tgs_file
		    // 'foto_ttd' => $foto_ttd
		  );
		  // var_dump($data1);
		  // echo'<br>';
		//   var_dump($data);
		//   die;
		  $this->db->insert('tbl_absensi', $data);

		  
		  $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		  Event has been Added!
		  </div>');
		  redirect('riwayat');
	}

}