<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Model {

	public function get($jenis_paket = null, $id_paket = null){
		$this->db->select('*');
        $this->db->from('paket');
        if ($id_paket != null) {
        	$this->db->where('id_paket', $id_paket);
        }
        if ($jenis_paket != null) {
        	$this->db->where('jenis_paket', $jenis_paket);
        }
        
        return $this->db->get()->result();
	}

    public function tambah_data($data){
		$this->db->insert('paket', $data);
	}

    public function ubah_data($where, $data){
		$this->db->where($where);
		return $this->db->update('paket', $data);
	}

	public function hapus_data($id_paket){
		$this->db->where($id_paket);
		$this->db->delete('paket');
	}

}