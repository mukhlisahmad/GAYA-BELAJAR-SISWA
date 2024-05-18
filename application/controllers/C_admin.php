<?php
class C_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //******** DEFAULT SESSION *********
        if ($this->session->userdata('level') != "1") {
            redirect(base_url('C_login'));
        }

    }
    public function user()
    {
        $this->load->view('admin/users/user');
    }
//admin dashboard
    public function index()
    {
        $this->load->view('admin/dashboard');
    }
//pertanyaan gaya belajar
    public function pertanyaan_gb()
    {
        $this->load->view('admin/gb/pertanyaan');
    }
//saran gaya belajar
    public function saran_gb()
    {
        $this->load->view('admin/gb/saran');
    }
// list data user gaya belajar
    public function list_data_user_gb()
    {
        $this->load->view('admin/gb/list_data');
    }

    //function RMIB

//pertanyaan rmib
    public function pertanyaan_rmib()
    {
        $this->load->view('admin/rmib/pertanyaan');
    }
//saran rmib
    public function saran_rmib()
    {
        $this->load->view('admin/rmib/saran');
    }

// list data user rmib
    public function list_data_user_rmib()
    {
        $this->load->view('admin/rmib/list_data');
    }

//----------end
//no-data
    public function not()
    {
        $this->load->view('admin/users/not');
    }
}
