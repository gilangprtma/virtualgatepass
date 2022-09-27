<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    public function addGatepassmasuk($data)
    {
        $nama_barang = implode(',', $this->input->post('nama_barang', true));
        $unit = implode(',', $this->input->post('unit', true));
        $jumlah = implode(',', $this->input->post('jumlah', true));

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'tanggal_permohonan' => htmlspecialchars($this->input->post('tanggal_permohonan', true)),
            'dari' => htmlspecialchars($this->input->post('dari', true)),
            'kepada' => 'PT. Patra Niaga FT Lomanis',
            'dasar_pengiriman' => htmlspecialchars($this->input->post('dasar_pengiriman', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'nama_barang' => htmlspecialchars($this->input->post('nama_barang', true)),
            'unit' => htmlspecialchars($this->input->post('unit', true)),
            'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
            'tanggal_dibuat' => time()
        ];
        $this->db->insert('gatepassmasuk', $data);
    }
}
