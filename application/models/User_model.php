<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getListUser()
    {
        $query = "SELECT * FROM `user` ORDER BY `id` ASC";
        return $this->db->query($query)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function addUser($data)
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'phone' => htmlspecialchars($this->input->post('phone', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'role_id' => htmlspecialchars($this->input->post('role_id', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'is_active' => '1',
            'date_created' => time()
        ];
        $this->db->insert('user', $data);
    }

    public function editUser()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'phone' => htmlspecialchars($this->input->post('phone', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'role_id' => htmlspecialchars($this->input->post('role_id', true)),
            'date_update' => time()
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }
}