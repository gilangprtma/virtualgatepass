<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getListMasuk()
    {
        $query = "SELECT * FROM `gatepassmasuk` ORDER BY `id` ASC";
        return $this->db->query($query)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('gatepassmasuk', ['id' => $id])->row_array();
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
}