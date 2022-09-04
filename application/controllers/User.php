<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('tgl_indo');
    }

	public function index()
	{
        $data['title'] = 'List User';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('User_model', 'listuser');
        $data['listuser'] = $this->listuser->getListUser();

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
    }
}