<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_saran_rmib extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getSaran()
    {
        $this->db->select('*');
        $this->db->from('rmib_saran');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSaranWhereId($where)
    {
        $query = $this->db->query("SELECT * FROM rmib_saran WHERE kode='$where'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $data = array(
                    'kode' => $value->kode,
                    'kerja' => $value->kerja,
                    'keterangan' => $value->keterangan,
                );
            }
        }
        return $data;
    }

    public function insert($data)
    {
        $this->db->insert('rmib_saran', $data);
    }

    public function update($data, $where)
    {
        $this->db->set($data);
        $this->db->where('kode', $where);
        $this->db->update('rmib_saran', $data);
    }

    public function delete($where)
    {
        $this->db->query("DELETE FROM rmib_saran where kode='$where'");
    }

    public function getSaranA()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Outdoor');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSaranB()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Mechanical');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSaranC()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Computational');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSaranD()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Scientific');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSaranE()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Personal Contact');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSaranF()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Aesthetic');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSaranG()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Literary');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSaranH()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Musical');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSaranI()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Social Service');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSaranJ()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Practical');
        $query = $this->db->get();
        return $query->result();
    }
    public function getSaranK()
    {
        $this->db->select('keterangan');
        $this->db->from('rmib_saran');
        $this->db->where('kerja', 'Medical');
        $query = $this->db->get();
        return $query->result();
    }
}
