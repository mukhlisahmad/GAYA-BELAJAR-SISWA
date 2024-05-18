
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pertanyaan_rmib_lk6 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function soal_lk1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL1');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL2');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL3');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL4');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL5');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL6');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL7');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL8');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL9');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_lk10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL10');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL11');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FL12');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP1');
        $this->db->where('nojenis', '6');

        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP2');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP3');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP4');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP5');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP6');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP7');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP8');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP9');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP10');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP11');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'FP12');
        $this->db->where('nojenis', '6');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
}
?>
