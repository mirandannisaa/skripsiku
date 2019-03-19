<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index()
	{
        $this->load->view('partials/header');
		$this->load->view('detail');
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
}
