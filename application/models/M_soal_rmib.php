
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_soal_rmib extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert('rmib', $data);
    }

    public function update($data, $where)
    {
        $this->db->set($data);
        $this->db->where('id', $where);
        $this->db->update('rmib', $data);
    }

    public function delete($where)
    {
        $this->db->query("DELETE FROM rmib where id='$where'");
    }

    public function rmib1()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '1');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib2()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '2');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib3()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '3');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib4()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '4');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib5()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '5');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib6()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '6');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib7()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '7');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib8()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '8');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib9()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '9');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib10()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '10');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib11()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '11');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib12()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '12');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib13()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '13');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib14()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '14');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib15()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '15');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib16()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '16');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib17()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '17');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib18()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '18');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib19()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '19');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function rmib20()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '20');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib21()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '21');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib22()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '22');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib23()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '23');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib24()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '24');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib25()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '25');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib26()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '26');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib27()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '27');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib28()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '28');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib29()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '29');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function rmib30()
    {
        $this->db->select('*');
        $this->db->from('rmib');
        $this->db->where('id', '30');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

}
?>
