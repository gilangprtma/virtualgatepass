<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Selamat datang Virtual Gate Pass FT Lomanis';

		$this->load->view('template/header', $data);
		$this->load->view('index');
		$this->load->view('template/footer');
	}
}
