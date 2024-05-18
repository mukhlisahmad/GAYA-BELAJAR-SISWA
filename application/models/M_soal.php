
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_soal extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert('gb', $data);
    }

    public function update($data, $where)
    {
        $this->db->set($data);
        $this->db->where('id', $where);
        $this->db->update('gb', $data);
    }

    public function delete($where)
    {
        $this->db->query("DELETE FROM gb where id='$where'");
    }

    public function gb1()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '1');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb2()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '2');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb3()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '3');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb4()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '4');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb5()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '5');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb6()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '6');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb7()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '7');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb8()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '8');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb9()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '9');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb10()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '10');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb11()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '11');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb12()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '12');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb13()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '13');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb14()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '14');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb15()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '15');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb16()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '16');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb17()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '17');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb18()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '18');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb19()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '19');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

    public function gb20()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '20');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb21()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '21');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb22()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '22');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb23()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '23');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb24()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '24');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb25()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '25');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb26()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '26');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb27()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '27');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb28()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '28');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb29()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '29');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
    public function gb30()
    {
        $this->db->select('*');
        $this->db->from('gb');
        $this->db->where('id', '30');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }

}
?>
