<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveyor extends CI_Controller {

	function __construct(){
		parent::__construct();
        if(!$this->session->userdata('email')){ 
        	redirect('login');
        }
	}

	public function index()
	{
		$data['title']='Surveyor';               
	    $data['page']='admin/v_surveyor';
        $data['datasurveyor']=$this->m_surveyor->getsurveyor();
        $this->load->view('admin/v_dashboard', $data);
	}

	public function tambah()
	{
		$data['title']='Tambah Surveyor';         
		$this->load->view('admin/v_tambahsurveyor', $data);
	}

	function prosestambah(){     
        $this->form_validation->set_rules('nama','nama','required|trim|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('email','email','required|trim|valid_email|callback_cekemail');
        $this->form_validation->set_rules('password','password','required|trim|min_length[6]|max_length[12]');        
        $this->form_validation->set_rules('password2','password2','required|trim|matches[password]');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->tambah();
        }else{                                        
            $data['nama']=$this->input->post('nama'); 
            $data['email']=$this->input->post('email'); 
            $data['password']=md5($this->input->post('password'));
            $this->session->set_flashdata('message',"Peserta berhasil ditambahkan.");
            $this->m_surveyor->tambah($data);
            redirect("surveyor"); 
        }
    }

    function cekemail($input){
    	$cek=$this->m_user->cekemail($input);
        if($cek->num_rows()>0){
            $this->form_validation->set_message('cekemail', 'Email telah digunakan');
  			return FALSE;
        }else{            
            return TRUE;  
        }
    }
}
?>