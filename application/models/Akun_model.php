<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_users()
    {
        $query = $this->db->get('akun');
        return $query->result();
    }

    public function insert_user($data)
    {
        return $this->db->insert('akun', $data);
    }

    public function update_user($nik, $data)
    {
        $this->db->where('nik', $nik);
        return $this->db->update('akun', $data);
    }

    public function delete_user($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->delete('akun');
    }

}
