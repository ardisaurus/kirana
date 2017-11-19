<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kuisioner extends CI_Controller {

	public function index()
	{
		$data['title']='Kuisioner';               
	    $data['page']='v_kuisioner';       
	    $data['datakuisioner']=$this->m_kuisioner->getkuisionerbuka();	        
		$this->load->view('v_dashboard', $data);
	}

	function prosesmulai(){
		$this->form_validation->set_rules('namaresponden','Nama Responden','required|trim|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('no_id','Nomor Identitas','required|trim|min_length[4]|max_length[100]');
        if ($this->form_validation->run() == FALSE)
        {   
           $this->session->set_flashdata('warning','Masukan nama dengan kombinasi 4-50 karakter dan no identitas dengan 4-100 karakter');
           redirect('kuisioner');
        }else{                                        
            $data['nama']=$this->input->post('namaresponden');
            $data['no_id']=$this->input->post('no_id');
            $data['id_kuisioner']=$this->input->post('id_kuisioner');
            $id_kuisioner=$this->input->post('id_kuisioner');
            $cek=$this->db->query("SELECT `no_id` FROM `responden` WHERE `id_kuisioner`=$id_kuisioner AND `no_id`=".$data['no_id']);
            if($cek->num_rows()>0){
	           $this->session->set_flashdata('warning','Nomor identitas telah digunakan oleh pengguna lain');
	           redirect('kuisioner');
	        }else{
	            $this->session->set_userdata('id_kuisioner',$id_kuisioner);
	            $this->m_kuisioner->tambahresponden($data);
	            $query = $this->db->query("SELECT `id_res` FROM `responden` WHERE `id_kuisioner` = '".$data['id_kuisioner']."' AND `no_id` = '".$data['no_id']."'");
	            foreach ($query->result() as $row){
	                    $id_res = $row->id_res;
	                } 
	        	$this->session->set_userdata('id_res',$id_res);
	            redirect("/kuisioner/mulai/$id_kuisioner");
	        }
        }
	}

	function mulai(){		
        $id_kuisioner=$this->uri->segment(3);
        $id_res=$this->session->userdata('id_res');
        if (isset($id_kuisioner) AND $this->session->userdata('id_kuisioner') AND $this->session->userdata('id_res')) {
            $cek=$this->db->query("SELECT `id_kuisioner` FROM `kuisioner` WHERE `id_kuisioner`=$id_kuisioner");
            if($cek->num_rows()>0){                         
                $data['title']='Daftar Pertanyaan';               
                $data['page']='v_pertanyaan';              
                $data['id_kuisioner']=$id_kuisioner;
                $data['datapertanyaan']=$this->m_kuisioner->getpertanyaan($id_kuisioner);
                $data['detail_kuisioner']=$this->m_kuisioner->getkuisionerbyid($id_kuisioner);    
                $this->load->view('v_dashboard', $data);
            }else{           
                redirect("welcome"); 
            }
        }else{ 
            redirect("welcome");
        }
    }

	function tambahjawaban(){                                      
        $data['jawaban']=$this->input->post('jawaban');
        $data['id_res']=$this->session->userdata('id_res');
        $data['id_pertanyaan']=$this->input->post('id_pertanyaan');
        $data['id_kuisioner']=$this->session->userdata('id_kuisioner');
        $id_kuisioner=$data['id_kuisioner'];
        $cek=$this->db->query("SELECT `jawaban` FROM `jawaban` WHERE `id_kuisioner`=$id_kuisioner AND `id_res`=".$data['id_res']." AND `id_pertanyaan`=".$data['id_pertanyaan']);
        if($cek->num_rows()>0){
        	$this->m_kuisioner->ubahjawaban($data);
       	}else{
        	$this->m_kuisioner->tambahjawaban($data);
        }
        redirect("/kuisioner/mulai/$id_kuisioner"); 
	}

	public function kuisionerselesai()
	{
		$this->session->unset_userdata('id_res'); 
		$this->session->unset_userdata('id_kuisioner');
	    $this->session->set_flashdata('success','Terima kasih karena telah mengisi kuisioner yang disediakan.'); 
        redirect('kuisioner');
	}
}
?>