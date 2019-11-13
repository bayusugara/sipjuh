<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Model {

	public function validasi($data) {
		$query = $this->db->get_where('pengguna', $data);
		return $query;
	}

	public function tampil_data() {
		$this->db->select('*');
        $this->db->from('pengguna a');
        
        return $this->db->get();
	}

	public function tampil_id($id){
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('username', $id);
        
        
        return $this->db->get();
    }

    public function tambah_data($data, $tabel){
		$this->db->insert($tabel, $data);
	}

    public function ubah_password($where, $data, $tabel){
		$this->db->where($where);
		return $this->db->update($tabel, $data);
	}

	public function hapus_data($username, $tabel){
		$this->db->where($username);
		$this->db->delete($tabel);
	}

}