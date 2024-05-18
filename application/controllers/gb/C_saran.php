<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_saran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_saran');
    }

    public function getAjax()
    {
        $data['data'] = $this->M_saran->getSaran();
        echo json_encode($data);
    }

    public function where()
    {
        $id = $this->input->get('id');
        $data = $this->M_saran->getSaranWhereId($id);
        echo json_encode($data);
    }

    public function add()
    {
        $dat = array(
            'kode' => $this->input->post('kode'),
            'gayabelajar' => $this->input->post('gayabelajar'),
            'keterangan' => $this->input->post('keterangan'),
        );
        $data = $this->M_saran->insert($dat);
        echo json_encode($data);
    }

    public function update()
    {
        $dat = array(
            'kode' => $this->input->post('kode'),
            'gayabelajar' => $this->input->post('gayabelajar'),
            'keterangan' => $this->input->post('keterangan'),
        );
        $where = $this->input->post('kode');
        $data = $this->M_saran->update($dat, $where);
        echo json_encode($data);
    }

    public function delete()
    {
        $where = $this->input->post('kode');
        $data = $this->M_saran->delete($where);
        echo json_encode($data);
    }
}
