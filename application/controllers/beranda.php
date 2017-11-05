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
		if ($this->session->userdata('level')==0) {
			$data['title']='Beranda';               
	        $data['page']='admin/v_beranda';
			$this->load->view('admin/v_dashboard', $data);
		}else{
			$data['title']='Beranda';               
	        $data['page']='member/v_beranda';
			$this->load->view('member/v_dashboard', $data);
		}
	}
}
?>