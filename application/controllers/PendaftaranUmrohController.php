<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendaftaranUmrohController extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->model('Pengguna');
		$this->load->model('Paket');
		$this->load->model('DaftarJamaah');

		if($this->session->userdata('isLogin') != TRUE){
		   redirect('LoginController/logout');
		}
	}

	public function index() {
		$data_paket = $this->Paket->get('Umroh');

		$this->template->load('static','PendaftaranUmrohView', ['data_paket' => $data_paket]);
	}

	public function dataJamaah($id_paket){
		$data_jamaah = $this->DaftarJamaah->get($id_paket);

		$this->template->load('static','JamaahUmrohView',['data_jamaah'=>$data_jamaah]);
	}

	public function daftarJamaah(){
		$this->template->load('static','DaftarJamaahUmrohView');
	}

}