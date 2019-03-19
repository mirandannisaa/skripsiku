<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olahraga extends CI_Controller {

	public function index()
	{
        $this->load->view('partials/header');
		$this->load->view('olahraga');
		$this->load->view('partials/footer');
	}
}
