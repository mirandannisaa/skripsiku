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
		$this->load->view('admin/home', $data);
		$this->load->view('partials/footer');
	}

	public function create()
	{
		
        $this->load->view('partials/header');
		$this->load->view('admin/create');
		$this->load->view('partials/footer');
	}

	public function edit()
	{
        $this->load->view('partials/header');
		$this->load->view('admin/edit');
		$this->load->view('partials/footer');
	}

	public function delete()
	{
        $this->load->view('partials/header');
		$this->load->view('admin/edit');
		$this->load->view('partials/footer');
	}

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
						echo '<script type="text/javascript">alert("Data Berhasil di ditambahkan!!")</script>';
						redirect('admin', 'refresh');
					}
	}

	public function editfasilitas()
	{
        $this->load->view('partials/header');
		$this->load->view('admin/edit');
		$this->load->view('partials/footer');
	}

	public function deletefasilitas()
	{
        $this->load->view('partials/header');
		$this->load->view('admin/edit');
		$this->load->view('partials/footer');
	}
}
