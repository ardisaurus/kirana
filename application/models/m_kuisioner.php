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

	function getkuisionerbyid($id_kuisioner)
	{		
        $this->db->select('id_kuisioner');
        $this->db->select('nama_kuisioner');
        $this->db->select('status');
		$this->db->where('id_kuisioner', $id_kuisioner);
		$hasilquery=$this->db->get('kuisioner');
		if ($hasilquery->num_rows() > 0) {
			foreach ($hasilquery->result() as $value) {
				$data[]=$value;
			}
			return $data;
		}
	}

	function getkuisionerbuka()
	{		
        $this->db->select('id_kuisioner');
        $this->db->select('nama_kuisioner');
        $this->db->select('status');
		$this->db->where('status', 1);
		$hasilquery=$this->db->get('kuisioner');
		if ($hasilquery->num_rows() > 0) {
			foreach ($hasilquery->result() as $value) {
				$data[]=$value;
			}
			return $data;
		}
	}

	function getpertanyaan($id_kuisioner)
	{		
        $this->db->select('id_kuisioner');
        $this->db->select('id_pertanyaan');
        $this->db->select('pertanyaan');
		$this->db->where('id_kuisioner', $id_kuisioner);
		$hasilquery=$this->db->get('pertanyaan');
		if ($hasilquery->num_rows() > 0) {
			foreach ($hasilquery->result() as $value) {
				$data[]=$value;
			}
			return $data;
		}
	}

	function getpertanyaanbyid($id_pertanyaan)
	{		
        $this->db->select('id_kuisioner');
        $this->db->select('id_pertanyaan');
        $this->db->select('pertanyaan');
		$this->db->where('id_pertanyaan', $id_pertanyaan);
		$hasilquery=$this->db->get('pertanyaan');
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

	function ubahkuisioner($id_kuisioner, $data){
		$this->db->where('id_kuisioner', $id_kuisioner);
		$this->db->update('kuisioner', $data);
	}

	function hapuskuisioner($id_kuisioner){
		$this->db->where('id_kuisioner', $id_kuisioner);
		$this->db->delete('kuisioner');
	}

	function tambahpertanyaan($data){
		$this->db->insert('pertanyaan', $data);
		return;
	}

	function ubahpertanyaan($id_pertanyaan, $data){
		$this->db->where('id_pertanyaan', $id_pertanyaan);
		$this->db->update('pertanyaan', $data);
	}

	function hapuspertanyaan($id_pertanyaan){
		$this->db->where('id_pertanyaan', $id_pertanyaan);
		$this->db->delete('pertanyaan');
	}

	function tambahresponden($data){
		$this->db->insert('responden', $data);
		return;
	}

	function tambahjawaban($data){
		$this->db->insert('jawaban', $data);
		return;
	}

	function ubahjawaban($data){
		$this->db->where('id_pertanyaan', $data['id_pertanyaan']);
		$this->db->where('id_res', $data['id_res']);
		$this->db->update('jawaban', $data);
	}
}
?>