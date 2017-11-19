<?php
class M_Surveyor extends CI_Model{

	function getsurveyor()
	{		
        $this->db->select('nama');
        $this->db->select('email');
		$hasilquery=$this->db->get('user');
		if ($hasilquery->num_rows() > 0) {
			foreach ($hasilquery->result() as $value) {
				$data[]=$value;
			}
			return $data;
		}
	}

	function tambah($data){
		$this->db->insert('user', $data);
		return;
	}
}
?>