<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('tgl_indo');
        is_logged_in();
    }

	public function index()
	{
		$data['title'] = 'Selamat datang dihalaman admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
	}
}
