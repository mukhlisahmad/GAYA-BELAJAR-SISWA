<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pertanyaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_pertanyaan');
	}

	public function getAjax()
	{
		$data['data'] = $this->M_pertanyaan->getPertanyaan();
		echo json_encode($data);
	}

	public function where(){
        $id=$this->input->get('id');
        $data=$this->M_pertanyaan->getPertanyaanWhereId($id);
        echo json_encode($data);
    }

	public function add(){
		$dat = array(
			'kode'	=>	$this->input->post('kode'),
			'nosoal'	=>	$this->input->post('nosoal'),
			'pertanyaan'	=>	$this->input->post('pertanyaan'),
			'nilai'	=>	$this->input->post('nilai')
		);
		$data=$this->M_pertanyaan->insert($dat);
		echo json_encode($data);
	}

	public function update(){
		$dat=array(
			'kode'=>$this->input->post('kode'),
			'nosoal'=>$this->input->post('nosoal'),
			'pertanyaan'=>$this->input->post('pertanyaan'),
			'nilai'=>$this->input->post('nilai')
		);
		$where=$this->input->post('kode');
		$data=$this->M_pertanyaan->update($dat, $where);
		echo json_encode($data);
	}

	public function delete(){
		$where=$this->input->post('kode');
		$data=$this->M_pertanyaan->delete($where);
		echo json_encode($data);
	}
}