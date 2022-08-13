<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Gate Pass Masuk / Keluar';

		$this->load->view('template/header', $data);
		$this->load->view('surat/gatepassmasuk');
		$this->load->view('template/footer');
	}

	public function gatepasskeluar()
	{
		$data['title'] = 'Gate Pass Masuk / Keluar';

		$this->load->view('template/header', $data);
		$this->load->view('surat/gatepasskeluar');
		$this->load->view('template/footer');
	}
}
