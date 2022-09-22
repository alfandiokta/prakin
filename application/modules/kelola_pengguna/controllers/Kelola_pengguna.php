<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_pengguna extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  if ($this->session->userdata('role_id') !=1){
		redirect('user/blocked');
		}
	  $this->load->model("Kelola_pengguna_model",'kelola');

	}
	public function index()
	{
		$data['title'] = 'Pengguna';
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['magang']=$this->kelola->getmagang();
		$data['role']=$this->db->get_where('tbl_user',['role_id'=>5])->result_array();
	
		
		// $data['absensi'] = $this->Riwayat_model->getallabsn();
		$this->load->view('template/v_template',$data);
		$this->load->view('v_kelola_pengguna',$data);
		$this->load->view('template/v_template_footer');
		
	}
	public function detail($id)
	{
		$data['title'] = 'Pengguna';
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['get1'] = $this->kelola->getdata($id);
		$data['get2'] = $this->kelola->userId($id);
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
		$this->load->view('v_detail_kelola',$data);
		$this->load->view('template/v_template_footer');
		
	}
	public function download($tgs)
	{

    $this->load->helper(array('download','url'));
    force_download(FCPATH.'./assets/doc/'.$tgs, null);
	redirect('kelola_penggun/detail');
	}
	public function update_data()
	{
		
		$id = $this->input->post('id');
		$data = array(
			'role_id' => $this->input->post('role_id')
		  );
		$data1 = array(
			'nimnis_mgn' => $this->input->post('nimnis'),
			'nimnis_pnd' => $this->input->post('pendamping')
		  );

		
		  $this->db->where('id',$id);
		  $this->db->update('tbl_user', $data);
		  $this->db->insert('tbl_pendamping', $data1);
		
		redirect('kelola_pengguna');
	}
	public function hapus($id)
	{
	  $this->db->where('id', $id);
	  $this->db->delete('tbl_user');
	  $this->session->set_flashdata('pesan', 'Dihapus');
	  redirect('kelola_pengguna');
	} 
	public function tambah_data()
	{
		
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'nimnis' => htmlspecialchars($this->input->post('nimnis', true)),
			'email' => htmlspecialchars($this->input->post('email', true)),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'instansi' => htmlspecialchars($this->input->post('instansi', true)),
			'role_id' => htmlspecialchars($this->input->post('role_id', true)),
			'is_active' => 1

		];
		
		$this->db->insert('tbl_user', $data);
		
		redirect('kelola_pengguna');
	}

}