<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    public function addGatepassmasuk($data)
    {
        $this->db->insert('gatepassmasuk', $data);
    }

    public function addGatepasskeluar($data)
    {
        $this->db->insert('gatepasskeluar', $data);
    }
}
