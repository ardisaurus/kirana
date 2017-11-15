<?php
class M_Kuisioner extends CI_Model{

	function getkuisioner()
	{		
        $this->db->select('id_kuisioner');
        $this->db->select('nama_kuisioner');
        $this->db->select('status');
		$hasilquery=$this->db->get('kuisioner');
		if ($hasilquery->num_rows() > 0) {
			foreach ($hasilquery->result() as $value) {
				$data[]=$value;
			}
			return $data;
		}
	}

	function tambah($data){
		$this->db->insert('kuisioner', $data);
		return;
	}
}
?>