<?php
class M_konsultasi_rmib extends CI_Model
{

    public function jumlahA($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Outdoor');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahB($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Mechanical');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function jumlahC($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Computational');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahD($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Scientific');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahE($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Personal Contact');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahF($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Aesthetic');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahG($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Literary');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahH($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Musical');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahI($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Social Service');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahJ($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Practical');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function jumlahK($nik)
    {
        $this->db->select('*');
        $this->db->from('rmib_konsultasi');
        $this->db->where('nik', $nik);
        $this->db->where('nilai', 'Medical');
        $query = $this->db->get();
        return $query->num_rows();
    }
}
