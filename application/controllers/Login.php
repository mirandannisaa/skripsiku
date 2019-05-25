<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->load->view('index');
	}

	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('index');
		}else{
			redirect('admin','refresh');
		}
	}

	public function cekDb($password)
	{
		$this->load->model('admin_model');
		$username = $this->input->post('username');
		$result = $this->admin_model->login($username, $password);
		if ($result) {
				$sess_array = array();
				foreach ($result as $row) {
					$sess_array = array(
							'id'=>$row->id_user,
							'username'=> $row->username,
							'nama'=> $row->nama,
							'password'=> $row->password,
							'level'=> $row->level
						);
					$this->session->set_userdata('logged_in', $sess_array);
				}
				return true;
		}else{
			//var_dump($result);
			$this->form_validation->set_message('cekDb', "Incorrect username or password.");
			return false;
		}	
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>