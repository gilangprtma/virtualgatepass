<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Selamat datang dihalaman admin';

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/index');
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
	}
}
