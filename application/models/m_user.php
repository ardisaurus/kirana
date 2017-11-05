<?php
class M_user extends CI_Model{

// =========================== Login Section ================================
    function cek($email,$password){
        $this->db->where("email",$email);
        $this->db->where("password",$password);    
        return $this->db->get("user");
    }

    function goPageUser()
	{			
		$email=$this->session->userdata('email');
		$this->db->where('email',$email);
        $this->db->select('level');
		$query=$this->db->get('user');
		$row = $query->row();
		$level=$row->level;		
        $this->session->set_userdata('level',$level);
		redirect('beranda/');
	}

	function getEmail($email)
	{			
        $this->db->where("email",$email);
        $this->db->select('email');
		$query=$this->db->get('user');
		foreach ($query->result() as $user) {
			$email_user=$user->email;
		}
		return $email_user;
	}

	function getuser($email)
	{		
        $this->db->select('nama');
        $this->db->select('email');
		$this->db->where('email', $email);
		$hasilquery=$this->db->get('user');
		if ($hasilquery->num_rows() > 0) {
			foreach ($hasilquery->result() as $value) {
				$data[]=$value;
			}
			return $data;
		}
	}

	function cekemail($emailbaru){
		$this->db->where('email', $emailbaru);
        return $this->db->get("user");
	}

	function tambah($data){
		$this->db->insert('user', $data);
		return;
	}

	function ubahAkun($email, $data){
		$this->db->where('email', $email);
		$this->db->update('user', $data);
	}

	function hapusAkun($email){
		$this->db->where('email', $email);
		$this->db->delete('user');
	}
}
?>