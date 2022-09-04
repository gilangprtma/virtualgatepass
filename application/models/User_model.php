<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getListUser()
    {
        $query = "SELECT * FROM `user` ORDER BY `id` ASC";
        return $this->db->query($query)->result_array();
    }
}