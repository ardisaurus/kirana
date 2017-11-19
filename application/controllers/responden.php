<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Responden extends CI_Controller {

	function __construct(){
		parent::__construct();
        if(!$this->session->userdata('email')){ 
        	redirect('login');
        }
	}

	public function index()
	{
		$data['title']='Beranda';               
	    $data['page']='admin/v_responden';       
	    $data['datakuisioner']=$this->m_kuisioner->getkuisioner();	        
		$this->load->view('admin/v_dashboard', $data);
	}

    function kuisioner(){
        $id_kuisioner=$this->uri->segment(3);
        if (isset($id_kuisioner)) {
            $cek=$this->db->query("SELECT `id_kuisioner` FROM `kuisioner` WHERE `id_kuisioner`=$id_kuisioner");
            if($cek->num_rows()>0){                         
                $data['title']='Daftar Responden';               
                $data['page']='admin/v_daftarresponden';              
                $data['id_kuisioner']=$id_kuisioner;
                $data['dataresponden']=$this->m_kuisioner->getresponden($id_kuisioner);
                $data['detail_kuisioner']=$this->m_kuisioner->getkuisionerbyid($id_kuisioner);    
                $this->load->view('admin/v_dashboard', $data);
            }else{           
                redirect("responden"); 
            }
        }else{ 
            redirect("responden");
        }
    }

    function jawaban(){
        $id_kuisioner=$this->uri->segment(3);
        if (isset($id_kuisioner)) {
            $cek=$this->db->query("SELECT `id_kuisioner` FROM `kuisioner` WHERE `id_kuisioner`=$id_kuisioner");
            if($cek->num_rows()>0){                         
                $id_res=$this->uri->segment(4);
		        if (isset($id_res)) {
		            $cek=$this->db->query("SELECT `id_kuisioner` FROM `kuisioner` WHERE `id_kuisioner`=$id_kuisioner");
		            if($cek->num_rows()>0){                         
		                $data['title']='Daftar Jawaban';               
		                $data['page']='admin/v_jawabanresponden';              
		                $data['id_kuisioner']=$id_kuisioner;
		                $data['datajawaban']=$this->m_kuisioner->getjawabanresponden($id_kuisioner, $id_res);
		                $data['detail_kuisioner']=$this->m_kuisioner->getkuisionerbyid($id_kuisioner);
		                $data['detail_responden']=$this->m_kuisioner->getrespondenbyid($id_res);    
		                $this->load->view('admin/v_dashboard', $data);
		            }else{           
		                redirect("responden"); 
		            }
		        }else{ 
		            redirect("responden");
		        }
            }else{           
                redirect("responden"); 
            }
        }else{ 
            redirect("responden");
        }
    }

}
?>