
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pertanyaan_rmib_lk3 extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function soal_lk1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL1');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL2');
        $this->db->where('nojenis', '1');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL3');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL4');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL5');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL6');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL7');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL8');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_lk9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL9');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_lk10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL10');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL11');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }public function soal_lk12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CL12');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Laki-Laki');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr1()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP1');
        $this->db->where('nojenis', '3');

        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr2()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP2');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr3()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP3');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr4()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP4');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr5()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP5');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr6()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP6');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr7()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP7');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr8()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP8');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }

    public function soal_pr9()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP9');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr10()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP10');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr11()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP11');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
    public function soal_pr12()
    {
        $this->db->select('*');
        $this->db->from('rmib_petanyaan');
        $this->db->where('kode', 'CP12');
        $this->db->where('nojenis', '3');
        $this->db->where('jk', 'Perempuan');
        $query = $this->db->get();
        $hasil = $query->result();
        return $hasil;
    }
}
?>
