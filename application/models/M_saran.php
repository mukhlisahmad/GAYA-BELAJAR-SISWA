<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_saran extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getSaran()
    {
        $this->db->select('*');
        $this->db->from('saran');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSaranWhereId($where)
    {
        $query = $this->db->query("SELECT * FROM saran WHERE kode='$where'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $data = array(
                    'kode' => $value->kode,
                    'gayabelajar' => $value->gayabelajar,
                    'keterangan' => $value->keterangan,
                );
            }
        }
        return $data;
    }

    public function insert($data)
    {
        $this->db->insert('saran', $data);
    }

    public function update($data, $where)
    {
        $this->db->set($data);
        $this->db->where('kode', $where);
        $this->db->update('saran', $data);
    }

    public function delete($where)
    {
        $this->db->query("DELETE FROM saran where kode='$where'");
    }

    public function getSaranA()
    {
        $this->db->select('keterangan');
        $this->db->from('saran');
        $this->db->where('gayabelajar', 'A');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSaranK()
    {
        $this->db->select('keterangan');
        $this->db->from('saran');
        $this->db->where('gayabelajar', 'K');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSaranV()
    {
        $this->db->select('keterangan');
        $this->db->from('saran');
        $this->db->where('gayabelajar', 'V');
        $query = $this->db->get();
        return $query->result();
    }
}
