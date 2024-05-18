<?php
class C_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        //******** DEFAULT SESSION *********

    }

    public function index()
    {
        if ($this->session->userdata('level') == "1") {
            redirect(base_url('C_admin'));
        } else if ($this->session->userdata('level') == "2") {
            redirect(base_url('C_user'));
        }
        $this->load->view('login');
    }
    public function register()
    {
        if ($this->session->userdata('level') == "1") {
            redirect(base_url('C_admin'));
        } else if ($this->session->userdata('level') == "2") {
            redirect(base_url('C_user'));
        }
        $this->load->view('register');
    }

    public function prosesLogin()
    {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');
        $cek = $this->M_login->cekLogin($nik, $password);
        if ($cek > 0) {
            $data_session = array(
                'nik' => $cek->nik,
                'nama' => $cek->nama,
                'password' => $cek->password,
                'level' => $cek->level,
            );
            $this->session->set_userdata($data_session);
            if ($this->session->userdata('level') == 1) {
                redirect('C_admin');
            } elseif ($this->session->userdata('level') == 2) {
                redirect('C_user');
            }
        } else {
            $this->session->set_flashdata('info', 'nik atau password salah');
            redirect('C_login');
        }

    }

    public function daftar()
    {
        if ($this->session->userdata('level') == "1") {
            redirect(base_url('C_admin'));
        } else if ($this->session->userdata('level') == "2") {
            redirect(base_url('C_user'));
        }
        $this->load->view('user/register');
    }

    public function prosesDaftar()
    {
        $nik = $this->input->post('nik');

        $this->db->where('nik', $nik);
        $query = $this->db->get('akun');

        if ($query->num_rows() > 0) {
            $this->session->set_flashdata('message_regis', '<div class="alert alert-danger" role="alert">
				Akun dengan NIK tersebut sudah ada
				</div>');
            redirect('C_login/register');
        } else {
            $data = array(
                'nik' => $nik,
                'nama' => $this->input->post('nama'),
                'usia' => $this->input->post('usia'),
                'instansi' => $this->input->post('instansi'),
                'jk' => $this->input->post('jk'),
                'password' => $this->input->post('password'),
                'level' => '2',
            );

            $akun = $this->db->insert('akun', $data);
            if ($akun) {
                $this->session->set_flashdata('message_regis', '<div class="alert alert-primary" role="alert">
					Register Berhasil Silahkan Login
					</div>');
            } else {
                $this->session->set_flashdata('message_regis', '<div class="alert alert-danger" role="alert">
					Register Gagal Silahkan coba lagi
					</div>');
            }
            redirect('C_login/register');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('C_login');
    }
}
