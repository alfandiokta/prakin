<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class C_Login extends RestController {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_Data','data');
    }

	//Menampilkan data Kelas    
    public function index_post(){
        $email = $this->input->post('email',TRUE);
		$password = $this->input->post('password',TRUE);
		

        $user = $this->data->user_login($email);
		

        if($user){
			if($user->is_active == 1 ){
				//cek password
				if(password_verify($password, $user->password)){
						
					$status = true;
                    $this->response(['error'=>false, 'message'=>'exist',
							'id' => $user->id,
							'nama' => $user->nama,
							'nimnis' => $user->nimnis,
							'email' => $user->email,
							'instansi' => $user->instansi,
							'alamat_in' => $user->alamat_in,
							'alamat_mg' => $user->alamat_mg,
							'wa' => $user->wa,
							'keahlian' => $user->keahlian,
							'role_id' => $user->role_id,
							'fotodiri' => $user->fotodiri,
							'surat' => $user->surat,
							'portofolio' => $user->portofolio,
							'ttd' => $user->ttd

						],RestController::HTTP_OK);
					
				}else{
                    $this->response(['error'=>true, 'message'=>'failed password'], 401);
				}
			}else{
                $this->response(['error'=>true, 'message'=>'failed is active'], 401);
			}
		}else{
            $this->response(['error'=>true, 'message'=>'failed user'], 401);
		}
    }
    
}
?>