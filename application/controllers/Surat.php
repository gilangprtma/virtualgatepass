<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
        $this->load->helper('tgl_indo');
    }

	public function index()
	{
		$data['title'] = 'Tambah Gate Pass Masuk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('tanggal_permohonan', 'Tanggal Permohonan', 'required|trim');
        $this->form_validation->set_rules('dari', 'Dari', 'required|trim');
        $this->form_validation->set_rules('dasar_pengiriman', 'Dasar Pengiriman', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('unit', 'Unit', 'trim|required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('surat/gatepassmasuk', $data);
            $this->load->view('template/footer');
        } else {
            $upload_file = $_FILES['upload']['name'];
            if ($upload_file) {
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = '3072';
                $config['upload_path'] = './assets/upload/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('upload')) {
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('upload', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->Surat_model->addGatepassmasuk($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Gate Pass Masuk Berhasil disimpan</div>');
            redirect('surat');
        }
	}

	public function gatepasskeluar()
	{
		$data['title'] = 'Gate Pass Masuk / Keluar';

		$this->load->view('template/header', $data);
		$this->load->view('surat/gatepasskeluar');
		$this->load->view('template/footer');
	}

	
}
