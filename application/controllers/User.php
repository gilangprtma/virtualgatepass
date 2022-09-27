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

	public function addUser()
	{
        $data['title'] = 'Tambah User';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email has already registered!'
		]);
		$this->form_validation->set_rules('role_id', 'Role', 'trim|required');
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		  ]);
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

		if ($this->form_validation->run() == false) {
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/adduser', $data);
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
		}else{
			$this->User_model->addUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">User Berhasil ditambah</div>');
            redirect('user');
		}
    }

	public function editUser($id)
	{
		$data['title'] = 'Ubah User';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['us'] = $this->User_model->getById($id);
		$data['role'] = ['MPS', 'HSSE', 'FTM'];

		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('role_id', 'Role', 'trim|required');

		if ($this->form_validation->run() == false) {
		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/edituser', $data);
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
		}else{
			$this->User_model->editUser($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">User Berhasil diubah</div>');
            redirect('user');
		}
	}
}