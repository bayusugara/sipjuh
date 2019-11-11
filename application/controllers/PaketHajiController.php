<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketHajiController extends CI_Controller {
	public function __construct() {
		parent:: __construct();

		if($this->session->userdata('isLogin') != TRUE){
		   redirect('LoginController/logout');
		}
	}

	public function index() {
		$this->template->load('static','PaketHajiView');
	}

}