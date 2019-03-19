<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        $this->load->view('partials/header');
		$this->load->view('home');
		$this->load->view('partials/footer');
	}

	public function register()
	{
        
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->load->model('User_model');	
		$data = array(
						'error' => '',
						'nama' => $this->session->userdata('nama'),
						'username' => $this->session->userdata('username'),
						'password' => $this->session->userdata('password')
					);

					if($this->form_validation->run()==FALSE){
						$this->load->view('user/register', $data);			
					}else{
						$this->User_model->insertFasilitas();
						echo '<script type="text/javascript">alert("Data Berhasil di ditambahkan!!")</script>';
						redirect('login', 'refresh');
					}
	}

	public function login()
	{
        
		$this->load->view('user/login');
		//$this->load->view('partials/footer');
	}
}
