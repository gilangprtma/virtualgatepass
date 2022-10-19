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
        $data['title'] = 'Buat Gate Pass Masuk';
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
        // $this->form_validation->set_rules('foto[]', 'Foto', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('surat/gatepassmasuk', $data);
            $this->load->view('template/footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'tanggal_permohonan' => htmlspecialchars($this->input->post('tanggal_permohonan', true)),
                'dari' => htmlspecialchars($this->input->post('dari', true)),
                'kepada' => 'PT. Patra Niaga FT Lomanis',
                'dasar_pengiriman' => htmlspecialchars($this->input->post('dasar_pengiriman', true)),
                'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),

                'nama_barang' => implode(',', $this->input->post('nama_barang')),
                'unit' => implode(',', $this->input->post('unit')),
                'jumlah' => implode(',', $this->input->post('jumlah')),

                'tanggal_dibuat' => now_carbon()->format('Y-m-d'),
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
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">' . $this->upload->display_errors() . '</div>');
                        redirect('surat');
                    }
                }
            }

            if (isset($_FILES['foto'])) {
                $fotos = [];
                foreach ($_FILES['foto']['name'] as $i => $file) {
                    // Define new $_FILES array - $_FILES['file']
                    $_FILES['foto_single']['name'] = $_FILES['foto']['name'][$i];
                    $_FILES['foto_single']['type'] = $_FILES['foto']['type'][$i];
                    $_FILES['foto_single']['tmp_name'] = $_FILES['foto']['tmp_name'][$i];
                    $_FILES['foto_single']['error'] = $_FILES['foto']['error'][$i];
                    $_FILES['foto_single']['size'] = $_FILES['foto']['size'][$i];

                    $config['allowed_types'] = 'jpg|png|gif|jpeg';
                    $config['max_size'] = '3072';
                    $config['upload_path'] = './assets/upload/';
                    $config['encrypt_name'] = true;

                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('foto_single')) {
                        $fotos[] = $this->upload->data('file_name');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">'. $this->upload->display_errors() .'</div>');
                        redirect('surat');
                    }
                }
                $data['foto'] = implode(',', $fotos);
            }

            //$token = base64_encode(random_bytes(32));
            //$cari_token = [
            //    'email' => $email,
            //    'token' => $token,
            //    'date_created' => time()
            //];

            $number = $this->Surat_model->getLastNumber(now_carbon()->month, now_carbon()->year) + 1;
            $data['no_gatepass'] = str_pad($number, 3, '0', STR_PAD_LEFT) . '/GPM/' . now_carbon()->month . '/' . now_carbon()->year;
            $this->Surat_model->addGatepassmasuk($data);

            //$this->_sendEmail();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Gate Pass Masuk Berhasil disimpan</div>');
            redirect('surat');
        }
    }

    private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'virtualgatepassftlomanis@gmail.com',
            'smtp_pass' => 'bismillahberkah',
            'smtp_port' => 456,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];
        $this->load->library('email', $config);
        $this->email->from('virtualgatepassftlomanis@gmail.com', 'Virtual Gatepass FT Lomanis');
        $this->email->to('pgilang11@gmail.com');
        $this->email->subject('Gate Pass Masuk');
        $this->email->message('Ini isi');

        if($this->email->send()){
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function gatepasskeluar()
    {
        $data['title'] = 'Buat Gate Pass Keluar';

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('tanggal_permohonan', 'Tanggal Permohonan', 'required|trim');
        $this->form_validation->set_rules('kepada', 'Kepada', 'required|trim');
        $this->form_validation->set_rules('dasar_pengiriman', 'Dasar Pengiriman', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('nama_barang[]', 'Nama Barang', 'trim|required');
        $this->form_validation->set_rules('unit[]', 'Unit', 'trim|required');
        $this->form_validation->set_rules('jumlah[]', 'Jumlah', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('surat/gatepasskeluar', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'tanggal_permohonan' => htmlspecialchars($this->input->post('tanggal_permohonan', true)),
                'dari' => 'PT. Patra Niaga FT Lomanis',
                'kepada' => htmlspecialchars($this->input->post('kepada', true)),
                'dasar_pengiriman' => htmlspecialchars($this->input->post('dasar_pengiriman', true)),
                'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),

                'nama_barang' => implode(',', $this->input->post('nama_barang')),
                'unit' => implode(',', $this->input->post('unit')),
                'jumlah' => implode(',', $this->input->post('jumlah')),
                'tanggal_dibuat' => now_carbon()->format('Y-m-d'),

                // nomor surat
                'no_gatepass' => 'GP/Q24046/' . time(),
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

            $this->Surat_model->addGatepasskeluar($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Gate Pass Keluar Berhasil disimpan</div>');
            redirect('surat');
        }
    }
}
