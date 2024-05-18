
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pertanyaan extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getPertanyaan()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->order_by('nosoal', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getPertanyaanWhereId($where)
    {
        $query = $this->db->query("SELECT * FROM pertanyaan WHERE kode='$where'");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $data = array(
                    'kode' => $value->kode,
                    'nosoal' => $value->nosoal,
                    'pertanyaan' => $value->pertanyaan,
                    'nilai' => $value->nilai,
                );
            }
        }
        return $data;
    }

    public function insert($data)
    {
        $this->db->insert('pertanyaan', $data);
    }

    public function update($data, $where)
    {
        $this->db->set($data);
        $this->db->where('kode', $where);
        $this->db->update('pertanyaan', $data);
    }

    public function delete($where)
    {
        $this->db->query("DELETE FROM pertanyaan where kode='$where'");
    }

    public function soal1()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '1');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal2()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '2');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal3()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '3');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal4()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '4');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal5()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '5');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal6()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '6');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal7()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '7');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal8()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '8');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal9()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '9');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal10()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '10');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal11()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '11');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal12()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '12');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal13()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '13');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal14()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '14');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal15()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '15');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal16()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '16');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal17()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '17');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal18()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '18');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal19()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '19');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal20()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '20');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal21()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '21');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal22()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '22');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal23()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '23');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal24()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '24');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal25()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '25');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal26()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '26');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal27()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '27');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal28()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '28');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal29()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '29');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal30()
    {
        $this->db->select('*');
        $this->db->from('pertanyaan');
        $this->db->where('nosoal', '30');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

}
?>
