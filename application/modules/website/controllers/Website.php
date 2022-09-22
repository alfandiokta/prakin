<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();

	  $this->load->model('Website_model','web');
	}
	public function index()
	{
		
		

		if ($this->session->userdata('email')) {
			redirect('user');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
			'is_unique' => 'email sudah digunakan!'
		]);
		$this->form_validation->set_rules('password', 'Password','required|trim|min_length[5]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek!'
		]);

		if ($this->form_validation->run() == false) {
			$data['title']="Prakin";
			$data['testimonimagang']=$this->web->getdata();
			$this->load->view('v_website',$data);
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'nimnis' => htmlspecialchars($this->input->post('nimnis', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'instansi' => htmlspecialchars($this->input->post('instansi', true)),
				'role_id' => 3,
				'is_active' => 1

			];

			$ori = FCPATH . '/assets/doc/default.jpg';
			$to = FCPATH . '/assets/doc/img/default.jpg';
			copy($ori, $to);

			$data1 = [
				'nimnis_doc' => $this->input->post('nimnis'),
				'fotodiri' => 'default.jpg'
			];
			
			$this->db->insert('tbl_user', $data);
			$this->db->insert('tbl_dokumen', $data1);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Akun sudah terdaftar!. Silahkan Login
    </div>');
			redirect('login');
		}	
	}

}