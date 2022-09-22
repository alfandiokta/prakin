<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   is_logged_in();
	  $this->load->model('Profil_model','profil');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['title']="Profil";
		$data['profil']=$this->profil->getdata();
		$data['pendaftar']=$this->profil->hitungmagang();
		$data['kuota']=$this->db->get_where('tbl_kouta')->row_array();

		$this->load->view('template/v_template',$data);
		$this->load->view('v_profil',$data);
		$this->load->view('template/v_template_footer');
		// $data['user'] =$this->Profil_model->update_data();

	}

	public function profiledit()
	{
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['title']="Profil";
		$data['profil']=$this->profil->getdata();
		

		$this->load->view('template/v_template',$data);
		$this->load->view('v_profiledit',$data);
		$this->load->view('template/v_template_footer');
		// $data['user'] =$this->Profil_model->update_data();

	}
	public function update_profi()
	{
			  $config['upload_path']   = FCPATH. './assets/doc/';
			  $config['allowed_types'] = 'jpg|png|gif|pdf';
			  $config['max_size']      = 10090;
			  $config['encrypt_name']  = False;
			$this->load->library('upload',$config);
			//SURAT
			if (!empty($_FILES['surat'])){
				$surat1 = $this->input->post('surat1');
				// $filename = $this->upload->file_name;
				if ($surat1 != 'NULL') {
					unlink(FCPATH. './assets/Dokumen/' . $surat1);
				}
				$config['file_name']     = url_title($this->input->post('surat'));
					$this->upload->initialize($config); 
					$this->upload->do_upload('surat');
					$data1 = $this->upload->data();
					$surat= $data1['file_name'];
				
			}else {
				$data1 = array(
					'nama' => $this->input->post('nama'),
					'nimnis' => $this->input->post('nimnis'),
					'email' => $this->input->post('email'),
					'instansi' => $this->input->post('instansi'),
					'alamat_in' => $this->input->post('alamat_in'),
					'alamat_mg' => $this->input->post('alamat_mg'),
					'wa' => '62'. $this->input->post('wa'),
					'keahlian' => $this->input->post('keahlian'),
					
				);
				$data2 = array(
					'nimnis_doc' => $this->input->post('nimnis'),
					'surat' => $this->input->post('surat1')
				);
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_user', $data1);
				$this->db->where('nimnis_doc',$this->input->post('nimnis'));
				$this->db->update('tbl_dokumen', $data2);
			}
			//FOTO DIRI
			if (!empty($_FILES['fotodiri'])) {
				$fotodiri1 = $this->input->post('fotodiri1');
				// $filename = $this->upload->file_name;
				if ($fotodiri1 != 'NULL') {
					unlink(FCPATH. './assets/Dokumen/' . $fotodiri1);
				}
				$config['file_name']     = url_title($this->input->post('fotodiri'));
					$this->upload->initialize($config); 
					$this->upload->do_upload('fotodiri');
					$data2 = $this->upload->data();
					$fotodiri= $data2['file_name'];
			}else {
				$data1 = array(
					'nama' => $this->input->post('nama'),
					'nimnis' => $this->input->post('nimnis'),
					'email' => $this->input->post('email'),
					'instansi' => $this->input->post('instansi'),
					'alamat_in' => $this->input->post('alamat_in'),
					'alamat_mg' => $this->input->post('alamat_mg'),
					'wa' => '62'. $this->input->post('wa'),
					'keahlian' => $this->input->post('keahlian'),
					
				);
				$data2 = array(
					'nimnis_doc' => $this->input->post('nimnis'),
					'portofolio' => $this->input->post('1')
				);
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_user', $data1);
				$this->db->where('nimnis_doc',$this->input->post('nimnis'));
				$this->db->update('tbl_dokumen', $data2);
			}
			//SUDAH BENAR
			//PORTOFOLIO
			if (!empty($_FILES['portofolio'])) {
				$portofolio1 = $this->input->post('portofolio1');
				// $filename = $this->upload->file_name;
				if ($portofolio1 != 'NULL') {
					unlink(FCPATH. './assets/Dokumen/' . $portofolio1);
				}
				$config['file_name']     = url_title($this->input->post('portofolio'));
					$this->upload->initialize($config); 
					$this->upload->do_upload('portofolio');
					$data3 = $this->upload->data();
					$portofolio= $data3['file_name'];
			}else{
				$data1 = array(
					'nama' => $this->input->post('nama'),
					'nimnis' => $this->input->post('nimnis'),
					'email' => $this->input->post('email'),
					'instansi' => $this->input->post('instansi'),
					'alamat_in' => $this->input->post('alamat_in'),
					'alamat_mg' => $this->input->post('alamat_mg'),
					'wa' => '62'. $this->input->post('wa'),
					'keahlian' => $this->input->post('keahlian'),
					
				);
				$data2 = array(
					'nimnis_doc' => $this->input->post('nimnis'),
					'portofolio' => $this->input->post('portofolio1')
				);
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_user', $data1);
				$this->db->where('nimnis_doc',$this->input->post('nimnis'));
				$this->db->update('tbl_dokumen', $data2);
			}
			
				$data1 = array(
					'nama' => $this->input->post('nama'),
					'nimnis' => $this->input->post('nimnis'),
					'email' => $this->input->post('email'),
					'instansi' => $this->input->post('instansi'),
					'alamat_in' => $this->input->post('alamat_in'),
					'alamat_mg' => $this->input->post('alamat_mg'),
					'wa' => '62'. $this->input->post('wa'),
					'keahlian' => $this->input->post('keahlian'),
					
				);
				$data2 = array(
					'nimnis_doc' => $this->input->post('nimnis'),
					'surat' => $surat, 
					'fotodiri' => $fotodiri,
					'portofolio' => $portofolio
				);

				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_user', $data1);
				$this->db->where('nimnis_doc',$this->input->post('nimnis'));
				$this->db->update('tbl_dokumen', $data2);

				
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Event has been Added!
				</div>');
				redirect('profil');
	}


	public function update_profil()
	{
		$config['upload_path']   = FCPATH. './assets/doc/img';
		$config['allowed_types'] = 'jpg|png|gif|pdf';
		$config['max_size']      = 10090;
		$config['encrypt_name']  = False;
		$config['file_name'] = url_title($this->input->post('fotodiri'));
		
		$old_image = $this->input->post('old_image');
		$this->upload->initialize($config);
		
		if(!$this->upload->do_upload('fotodiri')) {
			$data1 = array(
				'nama' => $this->input->post('nama'),
				'nimnis' => $this->input->post('nimnis'),
				'email' => $this->input->post('email'),
				'instansi' => $this->input->post('instansi'),
				'alamat_in' => $this->input->post('alamat_in'),
				'alamat_mg' => $this->input->post('alamat_mg'),
				'wa' => '62'. $this->input->post('wa'),
				'keahlian' => $this->input->post('keahlian'),
				
			);
			$data2 = array(
				'nimnis_doc' => $this->input->post('nimnis'),
				'fotodiri' => $old_image
				
			);
			// var_dump($data1);
			// var_dump($data2);
			$this->db->where('id',$this->input->post('id'));
			$this->db->update('tbl_user', $data1);
			$this->db->where('nimnis_doc',$this->input->post('nimnis'));
			$this->db->update('tbl_dokumen', $data2);
			
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Event has been Added!
			</div>');
			redirect('profil');
		} else {
			$upload = $this->upload->data();
			$new_image = $upload['file_name'];
			// var_dump($new_image);

			if ($old_image != 'default.jpg') {
				unlink(FCPATH . './assets/doc/img/' . $old_image);
			} else {
				$ori = FCPATH . '/assets/doc/default.jpg';
				$to = FCPATH . '/assets/doc/img/default.jpg';
				copy($ori, $to);
			}
			$data1 = array(
				'nama' => $this->input->post('nama'),
				'nimnis' => $this->input->post('nimnis'),
				'email' => $this->input->post('email'),
				'instansi' => $this->input->post('instansi'),
				'alamat_in' => $this->input->post('alamat_in'),
				'alamat_mg' => $this->input->post('alamat_mg'),
				'wa' => '62'. $this->input->post('wa'),
				'keahlian' => $this->input->post('keahlian'),
				
			);
			$data2 = array(
				'nimnis_doc' => $this->input->post('nimnis'),
				'fotodiri' => $new_image
				
			);
			// var_dump($data1);
			// var_dump($data2);
			$this->db->where('id',$this->input->post('id'));
			$this->db->update('tbl_user', $data1);
			$this->db->where('nimnis_doc',$this->input->post('nimnis'));
			$this->db->update('tbl_dokumen', $data2);
			
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Event has been Added!
			</div>');
			redirect('profil');
		}


	}

	public function update_surat()
	{
		$config['upload_path']   = FCPATH. './assets/doc/surat';
		$config['allowed_types'] = 'pdf';
		$config['max_size']      = 10090;
		$config['encrypt_name']  = False;
		$config['file_name'] = url_title($this->input->post('surat'));
		
		$old_surat = $this->input->post('old_surat');
		$this->upload->initialize($config);
		
		if(!$this->upload->do_upload('surat')) {
			$data = array(
				'nimnis_doc' => $this->input->post('nimnis'),
				'surat' => $old_surat
				
			);
			// var_dump($data);
			// var_dump($data2);
			$this->db->where('nimnis_doc',$this->input->post('nimnis'));
			$this->db->update('tbl_dokumen', $data);
			
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Event has been Added!
			</div>');
			redirect('profil');
		} else {
			$upload = $this->upload->data();
			$new_surat = $upload['file_name'];
			// var_dump($new_surat);
			if(!empty('$old_surat')){
				unlink('./assets/doc/surat/' . $old_surat . '');
			}
			$data = array(
				'nimnis_doc' => $this->input->post('nimnis'),
				'surat' => $new_surat
				
			);
			// var_dump($data);
			// var_dump($data2);
			$this->db->where('nimnis_doc',$this->input->post('nimnis'));
			$this->db->update('tbl_dokumen', $data);
			
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Event has been Added!
			</div>');
			redirect('profil');
		}


	}
	public function update_portofolio()
	{
		$config['upload_path']   = FCPATH. './assets/doc/portofolio';
		$config['allowed_types'] = 'pdf';
		$config['max_size']      = 10090;
		$config['encrypt_name']  = False;
		$config['file_name'] = url_title($this->input->post('portofolio'));
		
		$old_portofolio = $this->input->post('old_portofolio');
		$this->upload->initialize($config);
		
		if(!$this->upload->do_upload('portofolio')) {
			$data = array(
				'nimnis_doc' => $this->input->post('nimnis'),
				'portofolio' => $old_portofolio
				
			);
			// var_dump($data);
			// var_dump($data2);
			$this->db->where('nimnis_doc',$this->input->post('nimnis'));
			$this->db->update('tbl_dokumen', $data);
			
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Event has been Added!
			</div>');
			redirect('profil');
		} else {
			$upload = $this->upload->data();
			$new_portofolio = $upload['file_name'];
			// var_dump($new_portofolio);
			if(!empty('$old_portofolio')){
				unlink('./assets/doc/portofolio/' . $old_portofolio . '');
			}
			$data = array(
				'nimnis_doc' => $this->input->post('nimnis'),
				'portofolio' => $new_portofolio
				
			);
			// var_dump($data);
			// var_dump($data2);
			$this->db->where('nimnis_doc',$this->input->post('nimnis'));
			$this->db->update('tbl_dokumen', $data);
			
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Event has been Added!
			</div>');
			redirect('profil');
		}


	}
	
	public function update_ttd()
	{
		$config['upload_path']   = FCPATH. './assets/doc/ttd';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size']      = 10090;
		$config['encrypt_name']  = False;
		$config['file_name'] = url_title($this->input->post('ttd'));
		
		$old_ttd = $this->input->post('old_ttd');
		$this->upload->initialize($config);
		
		if(!$this->upload->do_upload('ttd')) {
			$data = array(
				'nimnis_doc' => $this->input->post('nimnis'),
				'ttd' => $old_ttd
				
			);
			// var_dump($data);
			// var_dump($data2);
			$this->db->where('nimnis_doc',$this->input->post('nimnis'));
			$this->db->update('tbl_dokumen', $data);
			
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Event has been Added!
			</div>');
			redirect('profil');
		} else {
			$upload = $this->upload->data();
			$new_ttd = $upload['file_name'];
			// var_dump($new_ttd);
			if(!empty('$old_ttd')){
				unlink('./assets/doc/ttd/' . $old_ttd . '');
			}
			$data = array(
				'nimnis_doc' => $this->input->post('nimnis'),
				'ttd' => $new_ttd
				
			);
			// var_dump($data);
			// var_dump($data2);
			$this->db->where('nimnis_doc',$this->input->post('nimnis'));
			$this->db->update('tbl_dokumen', $data);
			
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Event has been Added!
			</div>');
			redirect('profil');
		}


	}
	public function editdokumen()
	{
		
		// $config['upload_path']   = FCPATH. './assets/doc/pdf';
		// $config['allowed_types'] = 'pdf';
		// $config['max_size']      = 10090;
		// $config['encrypt_name']  = False;
		// $config['file_name'] = url_title($this->input->post('fotodiri'));
		
		// $portofolio_old = $this->input->post('portofolio_old');
		// $surat_old = $this->input->post('surat_old');
		// $this->upload->initialize($config);
		
		if (isset($_POST['submit'])) {
			$config['upload_path']   = FCPATH. './assets/doc/pdf';
			$config['allowed_types'] = 'pdf';
			$config['max_size']      = 10090;
			$config['encrypt_name']  = False;

			$this->load->library('upload', $config);

			if (!empty($_FILES['surat'])) {
				$config['file_name'] = url_title($this->input->post('surat'));
				$this->upload->initialize($config);

				$this->upload->do_upload('surat');
				$data_surat = $this->upload->data();

				$surat = $data_surat['file_name'];
				// var_dump($surat);

				$old_surat = $this->input->post('surat_old');
				$old_portofolio = $this->input->post('portofolio_old');

				if (!empty($surat)) {
					if (!empty($old_surat)) {
						unlink(FCPATH . './assets/doc/pdf/' . $old_portofolio);
					}
					$data = array(
						'nimnis_doc' => $this->input->post('nimnis'),
						'portofolio' => $old_portofolio,
						'surat' => $surat
						
					);
						// var_dump($data);
						$this->db->where('nimnis_doc',$this->input->post('nimnis'));
						$this->db->update('tbl_dokumen', $data);
						
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
						Event has been Added!
						</div>');
						redirect('profil');

				} else if (empty($surat) && empty($portofolio)) {

					$data = array(
						'nimnis_doc' => $this->input->post('nimnis'),
						'portofolio' => $old_portofolio,
						'surat' => $old_surat
					);
					// var_dump($data);
					$this->db->where('nimnis_doc',$this->input->post('nimnis'));
					$this->db->update('tbl_dokumen', $data);
					
					$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
					Event has been Added!
					</div>');
					redirect('profil');
				}
			} else if (!empty($_FILES['portofolio'])) {
				$config['file_name']     = url_title($this->input->post('portofolio'));
				$this->upload->initialize($config);

				$this->upload->do_upload('portofolio');
				$data_portofolio = $this->upload->data();
				$portofolio = $data_portofolio['file_name'];
				// var_dump($portofolio);

				$old_surat = $this->input->post('surat_old');
				$old_portofolio = $this->input->post('portofolio_old');

				if (!empty($portofolio)) {
					if (!empty($old_portofolio)) {
						unlink(FCPATH . './assets/doc/pdf/' . $old_portofolio);
					}
					$data = array(
						'nimnis_doc' => $this->input->post('nimnis'),
						'portofolio' => $portofolio,
						'surat' => $old_surat
						
					);
						// var_dump($data);
						$this->db->where('nimnis_doc',$this->input->post('nimnis'));
						$this->db->update('tbl_dokumen', $data);
						
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
						Event has been Added!
						</div>');
						redirect('profil');

					} else if (empty($surat) && empty($portofolio)) {

						$data = array(
							'nimnis_doc' => $this->input->post('nimnis'),
							'portofolio' => $old_portofolio,
							'surat' => $old_surat
						);
						// var_dump($data);
						$this->db->where('nimnis_doc',$this->input->post('nimnis'));
						$this->db->update('tbl_dokumen', $data);
						
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
						Event has been Added!
						</div>');
						redirect('profil');
					}
			} else if (empty($old_surat) && empty($old_portofolio)) {
				$data_surat = $this->upload->data();
				$surat = $data_surat['file_name'];

				$data_portofolio = $this->upload->data();
				$portofolio = $data_portofolio['file_name'];
				$data = array(
					'nimnis_doc' => $this->input->post('nimnis'),
					'portofolio' => $portofolio,
					'surat' => $surat
				);
				// var_dump($data);
				$this->db->where('nimnis_doc',$this->input->post('nimnis'));
				$this->db->update('tbl_dokumen', $data);
				
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
				Event has been Added!
				</div>');
				redirect('profil');
			}

			if (empty($portofolio) && !empty($surat)) {

						$data = array(
							'nimnis_doc' => $this->input->post('nimnis'),
							'portofolio' => $old_portofolio,
							'surat' => $surat
						);
						// var_dump($data);
						$this->db->where('nimnis_doc',$this->input->post('nimnis'));
						$this->db->update('tbl_dokumen', $data);
						
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
						Event has been Added!
						</div>');
						redirect('profil');


			} else if (!empty($portofolio) && empty($surat)) {

						$data = array(
							'nimnis_doc' => $this->input->post('nimnis'),
							'portofolio' => $portofolio,
							'surat' => $old_surat
						);
						// var_dump($data);
						$this->db->where('nimnis_doc',$this->input->post('nimnis'));
						$this->db->update('tbl_dokumen', $data);
						
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
						Event has been Added!
						</div>');
						redirect('profil');
			}
		}
	}

	public function downloadsurat($profil)
	{

    $this->load->helper(array('download','url'));
    force_download(FCPATH.'./assets/doc/surat/'.$profil, null);
	redirect('profil');
	}
	public function downloadporto($tgs)
	{

    $this->load->helper(array('download','url'));
    force_download(FCPATH.'./assets/doc/portofolio/'.$tgs, null);
	redirect('profil');
	}
	public function downloadttd($tgs)
	{

    $this->load->helper(array('download','url'));
    force_download(FCPATH.'./assets/doc/ttd/'.$tgs, null);
	redirect('profil');
	}
}