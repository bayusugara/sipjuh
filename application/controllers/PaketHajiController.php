<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketHajiController extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->model('Paket');

		if($this->session->userdata('isLogin') != TRUE){
		   redirect('LoginController/logout');
		}
	}

	public function index() {
		$data_paket = $this->Paket->get('Haji');

		$this->template->load('static','PaketHajiView', ['data_paket' => $data_paket]);
	}

	public function tambah_data(){
		$program = $this->input->post('program');
		$fasilitas = $this->input->post('fasilitas');
		$biaya = $this->input->post('biaya');
		$tanggal_keberangkatan = $this->input->post('tgl_keberangkatan');
		
		$data = array('program' => $program, 'fasilitas' => $fasilitas, 'biaya' => $biaya, 'tanggal_keberangkatan' => $tanggal_keberangkatan, 'jenis_paket' => 'Haji');
		//print_r($data);exit();
		$this->Paket->tambah_data($data);

		redirect('PaketHajiController');
	}	

	public function edit_data(){
		$id_paket = $this->input->post('id_paket');

		$program = $this->input->post('program');
		$fasilitas = $this->input->post('fasilitas');
		$biaya = $this->input->post('biaya');
		$tanggal_keberangkatan = $this->input->post('tgl_keberangkatan');
		
		$data = array('program' => $program, 'fasilitas' => $fasilitas, 'biaya' => $biaya, 'tanggal_keberangkatan' => $tanggal_keberangkatan, 'jenis_paket' => 'Haji');
		//print_r($data);exit();
		$this->Paket->ubah_data(['id_paket' => $id_paket], $data);

		redirect('PaketHajiController');
	}

	public function hapus_data($id_paket){
		$this->Paket->hapus_data(['id_paket' => $id_paket]);

		redirect('PaketHajiController');
	}

	public function edit(){
		$data = $this->Paket->get(null, $_POST['id_paket']);
		echo json_encode($data[0]);
	}

}