<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
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
        $this->form_validation->set_rules('nama_barang[]', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('unit[]', 'Unit', 'trim|required');
        $this->form_validation->set_rules('jumlah[]', 'Jumlah', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('surat/gatepassmasuk', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'tanggal_permohonan' => htmlspecialchars($this->input->post('tanggal_permohonan', true)),
                'dari' => htmlspecialchars($this->input->post('dari', true)),
                'kepada' => 'PT. Patra Niaga FT Lomanis',
                'dasar_pengiriman' => htmlspecialchars($this->input->post('dasar_pengiriman', true)),
                'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),

                'nama_barang' => implode(',', $this->input->post('nama_barang')),
                'unit' => implode(',', $this->input->post('unit')),
                'jumlah' => implode(',', $this->input->post('jumlah')),
                'tanggal_dibuat' => now_carbon()->format('Y-m-d'),

                // nomor surat
                'no_gatepass' => 'G-' . time(),
            ];

            if (isset($_FILES['file'])) {
                $upload_file = $_FILES['file']['name'];
                if ($upload_file) {
                    $config['allowed_types'] = 'pdf';
                    $config['max_size'] = '3072';
                    $config['upload_path'] = './assets/upload/';
                    
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('file')) {
                        $data['upload'] = $this->upload->data('file_name');
                    } else {
                        echo $this->upload->display_errors();
                    }
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
