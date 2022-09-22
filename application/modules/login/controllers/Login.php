<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
	parent::__construct();
	$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('email')){
			redirect('user');
		}
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		if ($this->form_validation->run() == FALSE){
			$data['title']="Login-Prakin";
			$this->load->view('v_login',$data);

		}else{
			$this->_login();
		}
	}
	private function _login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// var_dump($password);
		// die;
		$user = $this->db->get_where('tbl_user',['email' => $email])->row_array();
		if($user){
			if($user['is_active'] == 1){
				//cek password
				if(password_verify($password, $user['password'])){
					$data = [
						'id' => $user['id'],
						'email' => $user['email'],
						'role_id' => $user['role_id'],
						'nama' => $user['nama'],
						'nimnis' => $user['nimnis']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] ==1){
						redirect('admin');
					}
					else if ($user['role_id'] ==5) {
						redirect('admin');
					}else if ($user['role_id'] ==2) {
						redirect('user');
					}else{
						redirect('user');
					}
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger text-center" role="alert">
				Password anda salah !
				</div>');	
				redirect('login');
				}

			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger text-center" role="alert">
				Email kamu belum di daftar !
				</div>');	
				redirect('login');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger text-center" role="alert">
			Akun anda belum terdaftar !
			</div>');
			redirect('login');
		}
	}
	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-primary text-center" role="alert">
		   Terimakasih anda telah keluar !
		   </div>');
		   redirect('login');
	} 
	public function blocked(){
		$data['title'] = 'Akses Ditolak';
		// $data['user'] = $this->db->get_where('tbl_user',['email' => 
		// $this->session->userdata('email')])->row_array();
		$this->load->view('login/blocked');
	}

}