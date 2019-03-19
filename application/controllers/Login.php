<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    // public function __construct(){
	// 	parent::__construct();
	// 	//load Login_model.php	
	// 	$this->load->model('login_model');
	// 	//check the username is already set up or not
	// 	if ($this->session->userdata('nim','nama','foto')) {
	// 		//if username is already set up, then check the level of username is admin or member
	// 		if($this->session->userdata('level') == 'admin'){
	// 			redirect('member');
	// 		}elseif($this->session->userdata('level') == 'member'){
	// 			redirect('user');
	// 		}
	// 	}
    // }

    // public function index(){
	// 	$data = array('error' => ''
	// 				);
	// 	$this->load->view('login', $data);
	// }
 
	// //function for processing login form
	// public function login_process(){
	// 	$nim = $this->input->post('nim');
	// 	$password = md5($this->input->post('password'));
	// 				//calling chech_user() function in Login_model.php
	// 	$result = $this->login_model->check_user($nim, $password); 
 
	// 	if($result->num_rows() > 0){
	// 		foreach ($result->result() as $row) {
	// 			$id = $row->id;
	// 			$nim= $row->nim;
	// 			$nama= $row->nama;
	// 			$foto= $row->foto;
	// 			$level = $row->level;
	// 		}
 
	// 		$newdata = array(
	// 		        'id'  => $id,
	// 		        'nim' => $nim,
	// 		        'nama' => $nama,
	// 		        'foto' => $foto,
	// 		        'level' => $level,
	// 		        'logged_in' => TRUE
	// 		);
			
	// 		//set up session data
	// 		$this->session->set_userdata($newdata);
	// 		if($this->session->userdata('level')=='admin') {
	// 			redirect('member');
	// 		}elseif ($this->session->userdata('level')=='member') {
	// 			redirect('user');
	// 		}
	// 	}else{
	// 		$this->load->view('login_salah');
	// 	}
	// }
 
	// public function register(){
	// 	$data = array('error' => ''
	// 				);
	// 	$this->load->view('login', $data);
	// }
}