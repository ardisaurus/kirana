<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();
        if(!$this->session->userdata('email')){ 
        	redirect('login');
        }
	}

	public function index()
	{
		$data['title']='Beranda';               
	    $data['page']='admin/v_beranda';       
	    $data['datakuisioner']=$this->m_kuisioner->getkuisioner();	        
		$this->load->view('admin/v_dashboard', $data);
	}

	function prosestambah(){     
        $this->form_validation->set_rules('namakuisioner','Nama kuisioner','required|trim|min_length[4]|max_length[50]');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->session->set_flashdata('warning',"Gunakan nama kuisioner dengan kombinasi 4-50 karakter.");
            redirect("beranda"); 
        }else{                                        
            $data['nama_kuisioner']=$this->input->post('namakuisioner'); 
            $data['status']=0; 
            $this->session->set_flashdata('success',"Kuisioner barhasil ditambahkan.");
            $this->m_kuisioner->tambah($data);
            redirect("beranda"); 
        }
    }

	function prosesubah(){     
        $this->form_validation->set_rules('namakuisioner','Nama kuisioner','required|trim|min_length[4]|max_length[50]');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->session->set_flashdata('warning',"Gunakan nama kuisioner dengan kombinasi 4-50 karakter.");
            redirect("beranda"); 
        }else{                                        
            $id_kuisioner=$this->input->post('id_kuisioner');
            $data['nama_kuisioner']=$this->input->post('namakuisioner');
            $this->session->set_flashdata('success',"Nama kuisioner barhasil diubah.");
        	$this->m_kuisioner->ubahkuisioner($id_kuisioner, $data);
            redirect("beranda"); 
        }
    }

    function prosesbuka(){                                      
        $id_kuisioner=$this->input->post('id_kuisioner'); 
        $data['status']=1; 
        $this->session->set_flashdata('success',"Kuisioner barhasil dibuka.");
        $this->m_kuisioner->ubahkuisioner($id_kuisioner, $data);
        redirect("beranda"); 
    }

    function prosestutup(){                                      
        $id_kuisioner=$this->input->post('id_kuisioner'); 
        $data['status']=0; 
        $this->session->set_flashdata('success',"Kuisioner barhasil ditutup.");
        $this->m_kuisioner->ubahkuisioner($id_kuisioner, $data);
        redirect("beranda"); 
    }

    function proseshapus(){                                      
        $id_kuisioner=$this->input->post('id_kuisioner'); 
        $this->session->set_flashdata('success',"Kuisioner barhasil dihapus.");
        $this->m_kuisioner->hapuskuisioner($id_kuisioner);
        redirect("beranda"); 
    }

    function kuisioner(){
        $id_kuisioner=$this->uri->segment(3);
        if (isset($id_kuisioner)) {
            $cek=$this->db->query("SELECT `id_kuisioner` FROM `kuisioner` WHERE `id_kuisioner`=$id_kuisioner");
            if($cek->num_rows()>0){                         
                $data['title']='Daftar Pertanyaan';               
                $data['page']='admin/v_pertanyaan';              
                $data['id_kuisioner']=$id_kuisioner;
                $data['datapertanyaan']=$this->m_kuisioner->getpertanyaan($id_kuisioner);
                $data['detail_kuisioner']=$this->m_kuisioner->getkuisionerbyid($id_kuisioner);    
                $this->load->view('admin/v_dashboard', $data);
            }else{           
                redirect("beranda"); 
            }
        }else{ 
            redirect("beranda");
        }
    }

    function prosestambahpertanyaan(){     
        $this->form_validation->set_rules('pertanyaan','pertanyaan','required|trim|min_length[4]|max_length[255]');
        $id_kuisioner=$this->input->post('id_kuisioner');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->session->set_flashdata('warning',"Gunakan nama kuisioner dengan kombinasi 4-255 karakter.");
            redirect("beranda/kuisioner/$id_kuisioner"); 
        }else{                                        
            $data['pertanyaan']=$this->input->post('pertanyaan'); 
            $data['id_kuisioner']=$id_kuisioner; 
            $this->session->set_flashdata('success',"Pertanyaan barhasil ditambahkan.");
            $this->m_kuisioner->tambahpertanyaan($data);
            redirect("beranda/kuisioner/$id_kuisioner");
        }
    }

    function proseshapuspertanyaan(){                                      
        $id_kuisioner=$this->input->post('id_kuisioner');        
        $id_pertanyaan=$this->input->post('id_pertanyaan'); 
        $this->session->set_flashdata('success',"Pertanyaan barhasil dihapus.");
        $this->m_kuisioner->hapuspertanyaan($id_pertanyaan);
        redirect("beranda/kuisioner/$id_kuisioner");
    }

    function prosesubahpertanyaan(){     
        $this->form_validation->set_rules('pertanyaan','pertanyaan','required|trim|min_length[4]|max_length[255]');
        if ($this->form_validation->run() == FALSE)
        {   
            $this->session->set_flashdata('warning',"Gunakan nama kuisioner dengan kombinasi 4-255 karakter.");
            redirect("beranda/kuisioner/$id_kuisioner"); 
        }else{                   
            $data['pertanyaan']=$this->input->post('pertanyaan'); 
            $id_pertanyaan=$this->input->post('id_pertanyaan'); 
            $id_kuisioner=$this->input->post('id_kuisioner');
            $this->session->set_flashdata('success',"Pertanyaan barhasil diubah.");
            $this->m_kuisioner->ubahpertanyaan($id_pertanyaan, $data);
            redirect("beranda/kuisioner/$id_kuisioner");
        }
    }

    public function hasil()
    {
        $id_pertanyaan=$this->uri->segment(3);
        if (isset($id_pertanyaan)) {
            $cek=$this->db->query("SELECT `id_pertanyaan` FROM `pertanyaan` WHERE `id_pertanyaan`=$id_pertanyaan");
            if($cek->num_rows()>0){  
                $data['title']='Hasil';
                $data['datajawaban1']=$this->db->query("SELECT `id_pertanyaan` FROM `jawaban` WHERE `id_pertanyaan`=$id_pertanyaan AND `jawaban`=1")->num_rows();
                $data['datajawaban2']=$this->db->query("SELECT `id_pertanyaan` FROM `jawaban` WHERE `id_pertanyaan`=$id_pertanyaan AND `jawaban`=2")->num_rows();
                $data['datajawaban3']=$this->db->query("SELECT `id_pertanyaan` FROM `jawaban` WHERE `id_pertanyaan`=$id_pertanyaan AND `jawaban`=3")->num_rows();
                $data['datajawaban4']=$this->db->query("SELECT `id_pertanyaan` FROM `jawaban` WHERE `id_pertanyaan`=$id_pertanyaan AND `jawaban`=4")->num_rows();
                $data['datapertanyaan']=$this->m_kuisioner->getpertanyaanbyid($id_pertanyaan);
                $data['datajumlahresponden']=$this->db->query("SELECT `id_pertanyaan` FROM `jawaban` WHERE `id_pertanyaan`=$id_pertanyaan")->num_rows();              
                $this->load->view('admin/v_hasil', $data);
            }else{           
                redirect("beranda"); 
            }
        }else{ 
            redirect("beranda");
        }
    }
}
?>