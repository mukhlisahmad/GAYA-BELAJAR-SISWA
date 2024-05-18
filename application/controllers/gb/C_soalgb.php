<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_soalgb extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $query = $this->db->get('gb');
        $data['gb'] = $query->result_array();
        $this->load->view('admin/gb/soal', $data);
    }
    public function tambah_soal()
    {
        $id = $this->input->post('id');
        $kode = $this->input->post('kode');
        $soal = $this->input->post('soal');
        $sql = "INSERT INTO gb (id, kode, soal) VALUES (?, ?, ?)";
        $this->db->query($sql, array($id, $kode, $soal));
        redirect('gb/C_soalgb/index');
    }

    public function update_soal()
    {
        $id = $this->input->post('id');
        $kode = $this->input->post('kode');
        $soal = $this->input->post('soal');
        $sql = "UPDATE gb SET kode = ?, soal = ? WHERE id = ?";
        $this->db->query($sql, array($kode, $soal, $id));
        redirect('gb/C_soalgb/index');
    }

}
