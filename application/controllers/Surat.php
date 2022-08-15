<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo');
        is_logged_in();
    }

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

	public function listgatepassmasuk()
	{
		$data['title'] = 'Lihat Gate Pass Masuk';

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('surat/listgatepassmasuk');
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
	}
}
