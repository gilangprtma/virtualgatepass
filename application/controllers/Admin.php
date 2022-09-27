<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('tgl_indo');
		$this->load->model('Admin_model');
		//is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Selamat datang dihalaman admin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['hitung'] = $this->Admin_model->hitungGatePassMasuk();
		$data['hitunguser'] = $this->Admin_model->hitungUser();

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
	}

	public function listgatepassmasuk()
	{
		$data['title'] = 'Lihat Gate Pass Masuk';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('Admin_model', 'listmasuk');
		$data['listmasuk'] = $this->listmasuk->getListMasuk();

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('surat/listgatepassmasuk');
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
	}

	public function listgatepasskeluar()
	{
		$data['title'] = 'Lihat Gate Pass Keluar';

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('surat/listgatepasskeluar');
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
	}

	public function detailgatepassmasuk($id)
	{
		$data['title'] = 'Detail Gate Pass Masuk';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['ms'] = $this->Admin_model->getById($id);

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('surat/detailgatepassmasuk', $data);
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
	}

	public function approvemasukmps($id)
	{
		$this->Admin_model->appMasukMPS($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Gate Pass Masuk Berhasil disetujui</div>');
		redirect('admin/listgatepassmasuk');
	}

	public function approvemasukhsse($id)
	{
		$this->Admin_model->appMasukHSSE($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Gate Pass Masuk Berhasil disetujui</div>');
		redirect('admin/listgatepassmasuk');
	}

	public function approvemasukftm($id)
	{
		$id = $this->input->post('id') ? $this->input->post('id') : 0;
		//Xxx/PND74B000/DS/mm/yyyy
		$tahun = date('Y');
		$sql_get_number = "SELECT no AS number FROM tbl_bantu_no WHERE tahun = '$tahun' LIMIT 1";
		$get_number = $this->db->query($sql_get_number);
		if ($get_number->num_rows() > 0) {
			$number = $get_number->row()->number;
			$number_to_update = $number + 1;

			$data_update = array(
				'no' => $number_to_update,
				'update_at' => date('Y-m-d H:i:s'),
			);
			$this->db->where('tahun', $tahun);
			$this->db->update('tbl_bantu_no', $data_update);

			$number = sprintf("%03d", $number + 1);
		} else {
			$number = sprintf("%03d", 1);
			$number_to_insert = 1;

			$data_insert = array(
				'no' => $number_to_insert,
				'tahun' => date('Y'),
				'created_at' => date('Y-m-d H:i:s'),
			);
			$this->db->insert('tbl_bantu_no', $data_insert);
		}

		$nomor_surat = $number . "/GA/RWL/" . date('m') . '/' . date('Y');
		$data_update_surat = array(
			'no_gatepass' => $nomor_surat
		);
		$this->db->where('id', $id);
		$this->db->update('gatepassmasuk', $data_update_surat);

		$this->Admin_model->appMasukFTM($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">Gate Pass Masuk Berhasil disetujui</div>');
		redirect('admin/listgatepassmasuk');
	}

	public function detailgatepasskeluar()
	{
		$data['title'] = 'Detail Gate Pass Masuk';

		$this->load->view('template/auth_header', $data);
		$this->load->view('template/head', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('surat/detailgatepasskeluar');
		$this->load->view('template/foot');
		$this->load->view('template/auth_footer');
	}
}
