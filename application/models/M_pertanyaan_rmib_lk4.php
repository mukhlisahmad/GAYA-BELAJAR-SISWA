
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pertanyaan_rmib_lk4 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function soal_lk1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL1');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL2');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL3');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL4');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL5');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL6');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL7');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL8');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL9');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_lk10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL10');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL11');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DL12');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP1');
        $this->db->where('nojenis', '4');

        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP2');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP3');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP4');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP5');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP6');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP7');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP8');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP9');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP10');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP11');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'DP12');
        $this->db->where('nojenis', '4');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
}
?>
