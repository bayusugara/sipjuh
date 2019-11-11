<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller{

	public function __construct(){ //untuk load model
		parent::__construct();		
		$this->load->model('ModelPengguna');
	}

	public function index(){ //fungsi index yang dijalankan pertama kali
		$this->load->view('LoginView');
	}

	public function cekLogin(){ //
		$where = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE)));
		$cek = $this->ModelPengguna->validasi($where);
		if($cek->num_rows() == 1){
			foreach($cek->result() as $a ){

			$data_session['isLogin'] = TRUE; 
			$data_session['username'] = $a->username;
			$data_session['nama'] = $a->nama;
			$data_session['level'] = $a->level;
			$this->session->set_userdata($data_session);

			}

			$userData = $this->session->userdata();
			redirect('HomeController');

		}else{
			echo "<script>alert('GAGAL LOGIN: Username atau Password Anda Salah!');history.go(-1);</script>";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('LoginController'));
	}
}