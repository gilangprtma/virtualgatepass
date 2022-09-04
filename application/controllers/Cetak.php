<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
        $this->load->model('Admin_model');
        $this->load->helper('tgl_indo');
        $this->load->library('ciqrcode');
    }

    public function index($id)
    {
        $this->load->library('pdflib');

        $pdf = new Pdflib('L', 'mm', 'F4', true, 'UTF-8', false);
        $pdf->AddPage('P', 'F4');
        $pdf->SetTopMargin(0);

        $data['cetak'] = $this->Admin_model->getById($id);
        $html = $this->load->view('surat/print', $data, true);

        $pdf->writeHTML($html, true, false, false, false, '');
        $pdf->Output('Gatepass.pdf', "I");
    }
}
