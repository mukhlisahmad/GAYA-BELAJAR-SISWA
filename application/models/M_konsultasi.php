<?php
class M_konsultasi extends CI_Model
{

    public function jumlahA($nik)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'A');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahV($nik)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'V');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahK($nik)
    {
        $this->db->select('*');
        $this->db->from('konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'K');
        $query = $this->db->get();
        return $query->num_rows();
    }
}
