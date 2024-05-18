<?php
class C_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pertanyaan');
        $this->load->model('M_pertanyaan_rmib_lk1');
        $this->load->model('M_konsultasi_rmib');
        $this->load->model('M_saran_rmib');
        $this->load->model('M_konsultasi');
        $this->load->model('M_saran');
        $this->load->model('M_soal');
        if ($this->session->userdata('level') != "2") {
            redirect(base_url('C_login'));
        }

    }

    public function index()
    {
        $nama = $this->session->userdata('nama');
        $this->load->view('user/dashboard', $nama);
    }

    public function konsultasi()
    {
        $nik = $this->session->userdata('nik');
        $hasil_konsultasi_exist = $this->db->get_where('hasil_konsultasi', array('nik' => $nik))->row_array();

        if ($hasil_konsultasi_exist) {
            $this->session->set_flashdata('message_konsul', '<div style="color:#fff;background-color:red;"class="alert alert-danger" role="alert">
			<b>Anda Sudah Menyelesaikan Tes, Nilai tidak Akan Bertambah</b>
			</div>');

        }
        $data = array();
        for ($i = 1; $i <= 30; $i++) {
            $data['soal' . $i] = $this->M_pertanyaan->{'soal' . $i}();
            $data['gb' . $i] = $this->M_soal->{'gb' . $i}();
        }
        $this->load->view('user/gb/konsultasi', $data);
    }

    public function hasilKonsul()
    {
        $nik = $this->session->userdata('nik');
        $nama = $this->session->userdata('nama');

        for ($i = 1; $i <= 30; $i++) {
            $data[$i] = array(
                'kode' => $this->input->post(''),
                'nik' => $nik,
                'nosoal' => $this->input->post('nosoal' . $i),
                'nilai' => $this->input->post('s' . $i),
            );
            $this->db->insert('konsultasi', $data[$i]);
        }
        $a = $this->M_konsultasi->jumlahA($nik);
        $k = $this->M_konsultasi->jumlahK($nik);
        $v = $this->M_konsultasi->jumlahV($nik);

        $data['persenA'] = number_format($a / 30 * 100, 2);
        $data['persenK'] = number_format($k / 30 * 100, 2);
        $data['persenV'] = number_format($v / 30 * 100, 2);

        if ($a > $k && $a > $v) {
            $data['saran'] = $this->M_saran->getSaranA();
        } else if ($k > $a && $k > $v) {
            $data['saran'] = $this->M_saran->getSaranK();
        } else if ($v > $k && $v > $a) {
            $data['saran'] = $this->M_saran->getSaranV();
        }
        $data['nama'] = $nama;
        $data['nik'] = $nik;

        $this->simpan_hasil_analisa($data);
        $this->load->view('user/gb/hasilKonsul', $data);
    }
    public function simpan_hasil_analisa($data)
    {
        $nik = $data['nik'];
        $nama = $data['nama'];
        $a = $data['persenA'];
        $k = $data['persenK'];
        $v = $data['persenV'];

        $gaya_belajar = '';
        $max_value = max($a, $k, $v);
        if ($max_value == $a) {
            $gaya_belajar = 'Auditory';
        } elseif ($max_value == $k) {
            $gaya_belajar = 'Kinestetik';
        } elseif ($max_value == $v) {
            $gaya_belajar = 'Visual';
        }

        $query = $this->db->get_where('akun', array('nik' => $nik));
        $result = $query->row();
        $usia = $result->usia;
        $jk = $result->jk;

        // Mendapatkan saran dari model M_saran
        $saran = '';
        if ($max_value == $a) {
            $saran = $this->M_saran->getSaranA();
        } elseif ($max_value == $k) {
            $saran = $this->M_saran->getSaranK();
        } elseif ($max_value == $v) {
            $saran = $this->M_saran->getSaranV();
        }

        // Jika saran ditemukan dari model M_saran, gunakan keterangan saran tersebut
        if (!empty($saran)) {
            $saran = $saran[0]->keterangan;
        }

        $data_insert = array(
            'nik' => $nik,
            'usia' => $usia,
            'jk' => $jk,
            'nama' => $nama,
            'persen_auditory' => $a,
            'persen_kinesthetic' => $k,
            'persen_visual' => $v,
            'gaya_belajar' => $gaya_belajar,
            'saran' => $saran,
            'created_at' => date('Y-m-d H:i:s'),
        );

        $this->db->insert('hasil_konsultasi', $data_insert);
    }

    public function not()
    {
        $this->load->view('user/not2');
    }
    public function hasil_gb()
    {
        $nik = $this->session->userdata('nik');

        $this->db->where('nik', $nik);
        $query_konsultasi = $this->db->get('hasil_konsultasi');
        $this->db->where('nik', $nik);
        $query_user = $this->db->get('akun');

        if ($query_konsultasi->num_rows() > 0 && $query_user->num_rows() > 0) {
            $data['hasil_konsultasi'] = $query_konsultasi->result_array();
            $data['akun'] = $query_user->row_array();
            $this->load->view('user/gb/lihat_hasil', $data);
        } else {
            redirect('C_user/not');
        }
    }
    public function cetak_gb()
    {
        $nik = $this->session->userdata('nik');

        $this->db->where('nik', $nik);
        $query_konsultasi = $this->db->get('hasil_konsultasi');
        $this->db->where('nik', $nik);
        $query_user = $this->db->get('akun');

        if ($query_konsultasi->num_rows() > 0 && $query_user->num_rows() > 0) {
            $data['hasil_konsultasi'] = $query_konsultasi->result_array();
            $data['akun'] = $query_user->row_array();
            $this->load->view('user/gb/cetak_hasil', $data);
        } else {
            redirect('C_user/not');
        }
    }

}
