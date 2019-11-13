<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarJamaah extends CI_Model {

	public function get($id_paket = null, $id_daftar_jamaah = null){
		$this->db->select('*');
        $this->db->from('daftar_jamaah');
        if ($id_daftar_jamaah != null) {
        	$this->db->where('id_daftar_jamaah', $id_daftar_jamaah);
        }
        if ($id_paket != null) {
        	$this->db->where('id_paket', $id_paket);
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