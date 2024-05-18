
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pertanyaan_rmib_lk2 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }
//FUNCTION LK
    public function soal_lk1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL1');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL2');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL3');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL4');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL5');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL6');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL7');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL8');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL9');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_lk10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL10');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL11');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BL12');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    //FUNCTION PR
    public function soal_pr1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP1');
        $this->db->where('nojenis', '2');

        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP2');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP3');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP4');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP5');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP6');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP7');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP8');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP9');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP10');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP11');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'BP12');
        $this->db->where('nojenis', '2');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
}
?>
