<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $query = $this->db->get('akun');
        $data['akun'] = $query->result_array();
        $this->load->view('admin/users/user', $data);
    }

    public function tambah_pengguna()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $usia = $this->input->post('usia');
        $instansi = $this->input->post('instansi');
        $jk = $this->input->post('jk');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        $sql = "INSERT INTO akun (nik, nama, usia,instansi,jk, password, level) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($sql, array($nik, $nama, $usia, $instansi, $jk, $password, $level));
        redirect('User/index');
    }

    public function update_pengguna()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $usia = $this->input->post('usia');
        $instansi = $this->input->post('instansi');
        $jk = $this->input->post('jk');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        $sql = "UPDATE akun SET nama = ?,usia = ?,instansi = ?,jk = ?, password = ?, level = ? WHERE nik = ?";
        $this->db->query($sql, array($nama, $usia, $instansi, $jk, $password, $level, $nik));
        redirect('user/index');
    }

    public function hapus_pengguna()
    {
        $nik = $this->input->post('nik');
        $sql = "DELETE FROM akun WHERE nik = ?";
        $this->db->query($sql, array($nik));
        redirect('user/index');
    }
    public function not()
    {
        $this->load->view('admin/users/not');
    }
    public function detail_gb($nik)
    {
        $this->db->where('nik', $nik);
        $query_konsultasi = $this->db->get('hasil_konsultasi');

        $this->db->where('nik', $nik);
        $query_user = $this->db->get('akun');

        if ($query_konsultasi->num_rows() > 0 && $query_user->num_rows() > 0) {
            $data['hasil_konsultasi'] = $query_konsultasi->result_array();
            $data['akun'] = $query_user->row_array();
            $this->load->view('admin/gb/hasil', $data);
        } else {
            redirect('user/not');
        }
    }
    public function detail_rmib($nik)
    {
        $this->db->where('nik', $nik);
        $query_konsultasi = $this->db->get('hasil_konsultasi');

        $this->db->where('nik', $nik);
        $query_user = $this->db->get('akun');

        if ($query_konsultasi->num_rows() > 0 && $query_user->num_rows() > 0) {
            $data['hasil_konsultasi'] = $query_konsultasi->result_array();
            $data['akun'] = $query_user->row_array();
            $this->load->view('admin/rmib/hasil', $data);
        } else {
            redirect('user/not');
        }
    }
    public function detail_all()
    {

        $query_konsultasi = $this->db->get('hasil_konsultasi');

        if ($query_konsultasi->num_rows() > 0) {
            $data['hasil_konsultasi'] = $query_konsultasi->result_array();
            $this->load->view('admin/users/all_hasil', $data);
        } else {
            redirect('user/not');
        }

    }

}
