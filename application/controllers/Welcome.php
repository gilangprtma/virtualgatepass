<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
		if ($this->session->userdata('email')) {
            redirect('user');
        }
		
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		if ($this->form_validation->run() == false) {
			
		$data['title'] = 'Selamat datang Virtual Gate Pass FT Lomanis';
		$this->load->view('template/header', $data);
		$this->load->view('index');
		$this->load->view('template/footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } elseif($user['role_id']== 3) {
                        redirect('admin');
                    }else{
                        redirect('admin');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">Wrong password!</div>');
                    redirect('welcome');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">This email has not been activated!</div>');
                redirect('welcome');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">Email is not registered!</div>');
            redirect('welcome');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">You have been logged out</div>');
        redirect('welcome');
    }
}
