<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index($id_tempat)
	{
		$this->load->model('Detail_model');
        $this->load->view('partials/header');
		$data['tempat_list']=$this->Detail_model->getTempatbyid($id_tempat);
		$data['review_list']=$this->Detail_model->getUlasanbyid($id_tempat);
        $this->load->view('detail', $data);
		$this->load->view('partials/footer');
	}

	public function createUlasan()
	{
        $this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->load->model('Detail_model');
		$data['ulasan']=$this->Detail_model->getDataUlasan();
		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/header');
			$this->load->view('detail', $data);
			$this->load->view('partials/footer');
		}
		else {
			$this->Detail_model->insertUlasan();
			redirect('detail', 'refresh');
		}
	}

	public function edit()
	{
        $this->load->view('partials/header');
		$this->load->view('admin/edit');
		$this->load->view('partials/footer');
	}
}