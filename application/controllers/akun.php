<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	function __construct(){
		parent::__construct();
        if(!$this->session->userdata('email')){ 
        	redirect('login');
        }
	}

	public function index()
	{		
        $data['userdetail']=$this->m_user->getuser($this->session->userdata('email'));
		$data['title']='Akun';               
	    $data['page']='admin/v_akun';
		$this->load->view('admin/v_dashboard', $data);	
	}

	function ubahNama(){        
        $this->form_validation->set_rules('nama','nama','required|trim|min_length[4]|max_length[50]');
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('warning','Nama harus diisi antara 4-50 karakter.' );
            redirect('akun/index');
        }else{
            $email=$this->session->userdata('email');        
            $data['nama']=$this->input->post('nama');
            $this->m_user->ubahakun($email, $data);        
            $this->session->set_flashdata('success','Nama pengguna berhasil diubah.');
            redirect('akun/index');
        }
    }

    function ubahEmail(){        
        $this->form_validation->set_rules('email','email','required|trim|valid_email');
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('warning','Email harus diisi alamat email valid.');
            redirect('akun/index');
        }else{
            $emaillama=$this->session->userdata('email');
            $emailbaru=$this->input->post('email');        
            $data['email']=$emailbaru;        
            $cek=$this->m_user->cekemail($emailbaru);
            if($cek->num_rows()>0){
                $this->session->set_flashdata('warning','Email telah digunakan pengguna lain.');
                redirect('akun/index');
            }else{            
                $this->m_user->ubahakun($emaillama, $data);
                $this->session->set_userdata('email',$data['email']);        
                $this->session->set_flashdata('success','Email berhasil diubah.');
                redirect('akun/index');    
            }
        }
    }

    function ubahPassword(){
        $this->form_validation->set_rules('passwordlama','Password Lama','required|trim');
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('warning','Password harus diisi.');
            redirect('akun/index');
        }else{
            $email=$this->session->userdata('email');
            $password=$this->input->post('passwordlama');
            $cek=$this->m_user->cek($email, md5($password));
            if($cek->num_rows()>0){                      
                $this->form_validation->set_rules('passwordbaru','passwordbaru','required|trim|min_length[6]|max_length[12]');        
                $this->form_validation->set_rules('passwordbaru2','passwordbaru2','required|trim');
                if($this->form_validation->run()==false){
                    $this->session->set_flashdata('warning','Password harus diisi dengan 6-12 Karakter.');
                    redirect('akun/index');
                }else{
                    $passwordbaru=$this->input->post('passwordbaru');            
                    $passwordbaru2=$this->input->post('passwordbaru2');
                        if ($passwordbaru==$passwordbaru2) {                                
                            $data['password']=md5($passwordbaru);
                            $this->m_user->ubahakun($email, $data);
                            $this->session->set_flashdata('success','Password berhasil diubah.');
                            redirect('akun/index');
                        }else{
                            $this->session->set_flashdata('warning','Masukan password baru 2 kali dengan benar.');
                            redirect('akun/index');
                        }
                }
            }else{
                //login gagal
                $this->session->set_flashdata('warning','Password anda salah.');
                redirect('akun/index');
            }
        }
    }  

    function hapus(){
        $email=$this->session->userdata('email');               
        $this->m_user->hapusakun($email);
        $this->logout();
    }

	public function logout()
	{
		$this->session->unset_userdata('email'); 
        redirect('welcome');
	}
}
?>