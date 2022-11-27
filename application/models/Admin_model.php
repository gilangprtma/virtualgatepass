<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getListMasuk()
    {
        $query = "SELECT * FROM `gatepassmasuk` ORDER BY `id` ASC";
        return $this->db->query($query)->result_array();
    }

    public function getListKeluar()
    {
        $query = "SELECT * FROM `gatepasskeluar` ORDER BY `id` ASC";
        return $this->db->query($query)->result_array();
    }

    public function hitungGatePassMasuk()
    {
        $query = $this->db->get('gatepassmasuk');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitungGatePassKeluar()
    {
        $query = $this->db->get('gatepasskeluar');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitungUser()
    {
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function getById($id)
    {
        $res = $this->db->get_where('gatepassmasuk', ['id' => $id])->row_array();
        $nama_barang = explode(',', $res['nama_barang']);
        $unit = explode(',', $res['unit']);
        $jumlah = explode(',', $res['jumlah']);
        $foto = explode(',', $res['foto']);

        $res['barang'] = [];
        foreach ($nama_barang as $i => $n) {
            $res['barang'][] = [
                'nama' => $n,
                'unit' => $unit[$i],
                'jumlah' => $jumlah[$i],
                'foto' => base_url('/assets/upload/' . $foto[$i]),
                'foto_original' => $foto[$i],
            ];
        }
        return $res;
    }

    public function getByIdK($id)
    {
        return $this->db->get_where('gatepasskeluar', ['id' => $id])->row_array();
    }

    public function appMasukMPS($id)
    {
        $data = [
            'status' => '2',
            'app_mps' => time()
        ];
        $this->db->where('id', $id);
        $this->db->update('gatepassmasuk', $data);
    }

    public function appMasukHSSE($id)
    {
        $data = [
            'status' => '1',
            'app_hsse' => time()
        ];
        $this->db->where('id', $id);
        $this->db->update('gatepassmasuk', $data);
    }

    public function appMasukFTM($id)
    {
        $data = [
            'status' => '3',
            'app_ftm' => time()
        ];
        $this->db->where('id', $id);
        $this->db->update('gatepassmasuk', $data);
    }

    public function editMasuk()
    {
        $data = [
            'tanggal_permohonan' => htmlspecialchars($this->input->post('tanggal_permohonan', true)),
            'dasar_pengiriman' => htmlspecialchars($this->input->post('dasar_pengiriman', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'dari' => htmlspecialchars($this->input->post('dari', true)),
            'nama_barang' => implode(',', $this->input->post('nama_barang')),
            'unit' => implode(',', $this->input->post('unit')),
            'jumlah' => implode(',', $this->input->post('jumlah')),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('gatepassmasuk', $data);
    }
}