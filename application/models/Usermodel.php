<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model
{
    public function insertRecord($forms)
    {
        $this->db->insert('user', $forms);
    }
    public function allRecord()
    {
       return $records = $this->db->get('user')->result_array();
    }
    public function getUser($id)
    {
        $this->db->where('id', $id);
        return $rows = $this->db->get('user')->row_array();
    }
    public function updateUser($id, $forms)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $forms);
    }
    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}
?>