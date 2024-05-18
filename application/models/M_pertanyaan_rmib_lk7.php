
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pertanyaan_rmib_lk7 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function soal_lk1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL1');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL2');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL3');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL4');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL5');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL6');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL7');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL8');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL9');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_lk10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL10');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL11');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GL12');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP1');
        $this->db->where('nojenis', '7');

        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP2');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP3');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP4');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP5');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP6');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP7');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP8');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP9');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP10');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP11');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'GP12');
        $this->db->where('nojenis', '7');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
}
?>
