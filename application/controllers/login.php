<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->view('v_login');
	}

	function proses(){
        $this->form_validation->set_rules('email','Email / NIM','required|trim');
        $this->form_validation->set_rules('password','password','required|trim');
        
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('message','Email / NIM dan password harus diisi.');
            redirect('login/index');
        }else{
            $email=$this->input->post('email');
            // cek email sudah terdaftar?
            $cek_email=$this->m_user->cekemail($email);
            if($cek_email->num_rows()>0){
                // cek email sudah dikonfirmasi
                $password=$this->input->post('password');
                // cek kecocokan email dan password
                $cek=$this->m_user->cek($email, md5($password));
                if($cek->num_rows()>0){
                	//login berhasil, buat session
                    $this->session->set_userdata('email',$email);
                    $this->m_user->goPageUser();
                }else{
                    //login gagal
                    $this->session->set_flashdata('message',"Kombinasi Email dan Anda Password Salah. <a href='".site_url('login/lupa_password')."'>Klik disini jika lupa password!</a>");
                    redirect('login/index');
                }
            }else{
                //login gagal
                $this->session->set_flashdata('message','Email tidak terdaftar.');
                redirect('login/index');
            }            
        }
    }
}
?>