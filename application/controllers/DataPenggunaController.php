<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPenggunaController extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->library('encrypt');
		$this->load->model('ModelPengguna');

		if($this->session->userdata('isLogin') != TRUE){
		   redirect('LoginController/logout');
		}
	}

	public function index() {
		$pengguna = $this->ModelPengguna->tampil_data()->result();

		$data = array ('pengguna' => $pengguna);

		$this->template->load('static','DataPenggunaView', $data);
	}

	public function tambah_data() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');
		

		$data = array('username' => $username, 'password' => md5($password), 'nama' => $nama, 'level' => $level);
		//print_r($data1);exit();
		$this->ModelPengguna->tambah_data($data, 'pengguna');

		redirect('DataPenggunaController');
	}

	public function ubah_password(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array('username' => $username);

		$data = array('username' => $username, 'password' => md5($password));

		$this->ModelPengguna->ubah_password($where, $data, 'pengguna');

		redirect('DataPenggunaController');

	}

	public function hapus_data($username) {
		//$username = array('username' => $username);
		$this->ModelPengguna->hapus_data(['username' => $username], 'pengguna');

		redirect('DataPenggunaController');
	}

}