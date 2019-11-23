<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendaftaranHajiController extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->model('DaftarJamaah');
		$this->load->model('Paket');

		if($this->session->userdata('isLogin') != TRUE){
		   redirect('LoginController/logout');
		}
	}

	public function index() {
		$data['data_paket'] = $this->Paket->get('Haji');
		$this->template->load('static','PendaftaranHajiView',$data);
	}

	public function dataJamaah($id=null){
		$data['id_paket']=$id;
		$data['data_jamaah'] = $this->DaftarJamaah->get($id);
		$this->template->load('static','JamaahHajiView',$data);
	}

	public function daftarJamaah($id=null){
		$data['id_paket']=$id;
		$this->template->load('static','DaftarJamaahHajiView',$data);
	}

	public function hapus($id){
		$alihkan = 'PendaftaranHajiController';
		$where = array('id_daftar_jamaah' => $id);
		$this->DaftarJamaah->hapus_data($where);
		redirect($alihkan);
	}	

	public function tambah_data($id=null){

		$id_paket = $id;
		$nama = $this->input->post('nama');
		$noktp = $this->input->post('noktp');
		$tempatlahir = $this->input->post('tempatlahir');
		$tanggallahir = $this->input->post('tanggallahir');
		$jk = $this->input->post('jk');
		$sp = $this->input->post('sp');
		$alamat = $this->input->post('alamat');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kota = $this->input->post('kota');
		$nohp = $this->input->post('nohp');
		$email = $this->input->post('email');
		$pekerjaan = $this->input->post('pekerjaan');
		$ahliwaris = $this->input->post('ahliwaris');
		$nohpahliwaris = $this->input->post('nohpahliwaris');
		$referensi = $this->input->post('referensi');
		$pembayaran = $this->input->post('pembayaran');
		$dp = $this->input->post('dp');

		$uploadktp = $this->uploadktp();
		$uploadkk = $this->uploadkK();
		$uploadbukunikah = $this->uploadbukunikah();
		$uploadpaspor = $this->uploadpaspor();
		$uploadvaksin = $this->uploadvaksin();
		
		$ktp = $uploadktp['file']['file_name'];
		$kk = $uploadkk['file']['file_name'];
		$bukunikah = $uploadbukunikah['file']['file_name'];
		$paspor = $uploadpaspor['file']['file_name'];
		$vaksin = $uploadvaksin['file']['file_name'];

		$data = array(
			'nama_lengkap' => $nama,
			'id_paket' => $id_paket,
			'no_ktp' => $noktp, 
			'tempat_lahir' => $tempatlahir, 
			'tanggal_lahir' => $tanggallahir,
			'jenis_kelamin' => $jk,
			'status_perkawinan' => $sp,
			'alamat' => $alamat, 
			'kelurahan' => $kelurahan, 
			'kecamatan' => $kecamatan,
			'kabupaten/kota' => $kota,
			'no_hp' => $nohp,
			'email' => $email, 
			'pekerjaan' => $pekerjaan, 
			'ahli_waris' => $ahliwaris,
			'no_hp_ahli_waris' => $nohpahliwaris,
			'referensi' => $referensi,
			'jenis_pembayaran' => $pembayaran, 
			'dp' => $dp, 
			'foto_ktp' => $ktp,
			'foto_kk' => $kk,
			'foto_buku_nikah' => $bukunikah,
			'foto_paspor' => $paspor, 
			'foto_vaksin' => $vaksin
			);
		//print_r($data);exit();
		$this->DaftarJamaah->tambah_data($data);

		redirect('PendaftaranHajiController');
	}
	// upload KTP
	public function uploadktp(){
		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('ktp')) {
			$return = array('result' => 'success','file' => $this->upload->data(),'error'=>'');
			return $return;
		}else{
			$return = array('result' => 'failed','file' => '','error'=>$this->upload->display_errors());
			return $return;
		}
	}
	// upload KK
	public function uploadkk(){
		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('kk')) {
			$return = array('result' => 'success','file' => $this->upload->data(),'error'=>'');
			return $return;
		}else{
			$return = array('result' => 'failed','file' => '','error'=>$this->upload->display_errors());
			return $return;
		}
	}
	// upload Buku Nikah
	public function uploadbukunikah(){
		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('bukunikah')) {
			$return = array('result' => 'success','file' => $this->upload->data(),'error'=>'');
			return $return;
		}else{
			$return = array('result' => 'failed','file' => '','error'=>$this->upload->display_errors());
			return $return;
		}
	}
	// upload Paspor
	public function uploadpaspor(){
		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('paspor')) {
			$return = array('result' => 'success','file' => $this->upload->data(),'error'=>'');
			return $return;
		}else{
			$return = array('result' => 'failed','file' => '','error'=>$this->upload->display_errors());
			return $return;
		}
	}
	// upload Vaksin
	public function uploadvaksin(){
		$config['upload_path'] = 'assets/images/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('vaksin')) {
			$return = array('result' => 'success','file' => $this->upload->data(),'error'=>'');
			return $return;
		}else{
			$return = array('result' => 'failed','file' => '','error'=>$this->upload->display_errors());
			return $return;
		}
	}	

}