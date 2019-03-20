<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// public function __construct(){
	// 	parent::__construct();
	// 	if ($this->session->userdata('username')=="") {
	// 		redirect('login');
	// 	}elseif($this->session->userdata('akses') == 'admin'){
	// 		redirect('admin');
	// 	}
	// }
	
	public function index()
	{
		$this->load->model('Admin_model');	
		$this->load->view('partials/header');
		$data["fasilitas_list"] = $this->Admin_model->getDataFasilitas();
		$data["olahraga_list"] = $this->Admin_model->getDataOlahraga();
		$this->load->view('admin/home', $data);
		$this->load->view('partials/footer');
	}

	// Tempat Olahraga
	public function getTempat(){
			$data = array(
				'error' => '',
				'nama_fasilitas' => $this->session->userdata('nama_fasilitas'),
			);
		$data["fasilitas_list"] = $this->Admin_model->getDataFasilitas();
		$this->load->view('admin/home',$data);
	}

	public function createJenis()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'trim|required');
		$this->load->model('Admin_model');	
		$data = array(
						'error' => '',
						'nama_fasilitas' => $this->session->userdata('nama_fasilitas'),
					);

		if($this->form_validation->run()==FALSE){
			$this->load->view('partials/header');
			$this->load->view('admin/createfasilitas', $data);
			$this->load->view('partials/footer');
		}else{
			$this->Admin_model->insertFasilitas();
			echo '<script type="text/javascript">alert("Data berhasil ditambahkan")</script>';
			redirect('admin', 'refresh');
		}
	}

	public function editJenis($id_fasilitas)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'trim|required');
		$data = array(
					'error' => '',
					'nama_fasilitas' => $this->session->userdata('nama_fasilitas')
				);
				
		$this->load->model('Admin_model');
		$data['fasilitas_list']=$this->Admin_model->getFasilitas($id_fasilitas);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('partials/header');
			$this->load->view('admin/editfasilitas',$data);
			$this->load->view('partials/footer');
		}
		else
		{
			$this->Admin_model->updateFasilitas($id_fasilitas);
			echo '<script type="text/javascript">alert("Data berhasil diupdate")</script>';
			redirect('admin', 'refresh');
		}
	}

	public function deleteJenis($id_fasilitas)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deleteTempat($id_fasilitas);

		echo '<script type="text/javascript">alert("Data berhasil dihapus")</script>';
		redirect('admin', 'refresh');
	}

	// Fasilitas
	public function getFasilitas(){
				$data = array(
					'error' => '',
					'nama_fasilitas' => $this->session->userdata('nama_fasilitas'),
				);
		$data["fasilitas_list"] = $this->Admin_model->getDataFasilitas();
		$this->load->view('admin/home',$data);
	}

	public function createfasilitas()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'trim|required');
		$this->load->model('Admin_model');	
		$data = array(
						'error' => '',
						'nama_fasilitas' => $this->session->userdata('nama_fasilitas'),
					);

		if($this->form_validation->run()==FALSE){
			$this->load->view('partials/header');
			$this->load->view('admin/createfasilitas', $data);
			$this->load->view('partials/footer');
		}else{
			$this->Admin_model->insertFasilitas();
			echo '<script type="text/javascript">alert("Data berhasil ditambahkan")</script>';
			redirect('admin', 'refresh');
		}
	}

	public function editFasilitas($id_fasilitas)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'trim|required');
		$data = array(
					'error' => '',
					'nama_fasilitas' => $this->session->userdata('nama_fasilitas')
				);
				
		$this->load->model('Admin_model');
		$data['fasilitas_list']=$this->Admin_model->getFasilitas($id_fasilitas);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('partials/header');
			$this->load->view('admin/editfasilitas',$data);
			$this->load->view('partials/footer');
		}
		else
		{
			$this->Admin_model->updateFasilitas($id_fasilitas);
			echo '<script type="text/javascript">alert("Data berhasil diupdate")</script>';
			redirect('admin', 'refresh');
		}
	}

	public function deletefasilitas($id_fasilitas)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deleteFasilitas($id_fasilitas);

		echo '<script type="text/javascript">alert("Data berhasil dihapus")</script>';
		redirect('admin', 'refresh');
	}

	// Jenis
	public function getOlahraga(){
			$data = array(
				'error' => '',
				'nama_olahraga' => $this->session->userdata('nama_olahraga'),
			);
		$data["olahraga_list"] = $this->Admin_model->getDataOlahraga();
		$this->load->view('admin/home',$data);
	}

	public function createolahraga()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_olahraga', 'Nama Olahraga', 'trim|required');
		$this->load->model('Admin_model');	
		$data = array(
						'error' => '',
						'nama_olahraga' => $this->session->userdata('nama_olahraga'),
					);

		if($this->form_validation->run()==FALSE){
			$this->load->view('partials/header');
			$this->load->view('admin/createolahraga', $data);
			$this->load->view('partials/footer');
		}else{
			$this->Admin_model->insertOlahraga();
			echo '<script type="text/javascript">alert("Data berhasil ditambahkan")</script>';
			redirect('admin', 'refresh');
		}
	}

	public function editolahraga($id_jenis)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_olahraga', 'Nama Olahraga', 'trim|required');
		$data = array(
					'error' => '',
					'nama_olahraga' => $this->session->userdata('nama_olahraga')
				);
				
		$this->load->model('Admin_model');
		$data['olahraga_list']=$this->Admin_model->getOlahraga($id_jenis);

		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('partials/header');
			$this->load->view('admin/editolahraga',$data);
			$this->load->view('partials/footer');
		}
		else
		{
			$this->Admin_model->updateOlahraga($id_jenis);
			echo '<script type="text/javascript">alert("Data berhasil diupdate")</script>';
			redirect('admin', 'refresh');
		}
	}

	public function deleteolahraga($id_jenis)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->deleteOlahraga($id_jenis);

		echo '<script type="text/javascript">alert("Data berhasil dihapus")</script>';
		redirect('admin', 'refresh');
	}
}
