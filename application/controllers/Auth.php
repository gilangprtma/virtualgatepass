<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Selamat datang dihalaman admin';

		$this->load->view('template/auth_header', $data);
		$this->load->view('auth/index', $data);
		$this->load->view('template/auth_footer');
	}
}