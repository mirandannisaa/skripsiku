<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olahraga extends CI_Controller {

	var $nama_tempat = 'autocomplete';
    function __construct(){
            parent::__construct();
            $this->load->model('Olahraga_model');
	}
	
	public function json() {
        header('Content-Type: application/json');
        echo $this->Olahraga_model->json();
    }

	public function index(){
		$this->load->model('Olahraga_model');
		$this->load->view('partials/header');
		$data['tempat_list']=$this->Olahraga_model->getDataTempat();
		$this->load->view('olahraga', $data);
		$this->load->view('partials/footer');
	}

	public function getTempatJson(){
		$data = $this->Olahraga_model->getDataTempat();
		echo json_encode($data);
	}

	public function setData(){
		$this->load->model('Olahraga_model');
		$data=$this->Olahraga_model->getDataTempat();
		echo json_encode($data);
	}

	// Tempat Olahraga
	public function getTempat() {
		$data=array('error'=>'', 'nama_tempat'=> $this->session->userdata('nama_tempat'),
		'alamat'=> $this->session->userdata('alamat'), 
		'no_telp'=> $this->session->userdata('no_telp'), 
		'harga'=> $this->session->userdata('harga'), 
		'jam_buka'=> $this->session->userdata('jam_buka'), 
		'jam_tutup'=> $this->session->userdata('jam_tutup'), 
		'latitude'=> $this->session->userdata('latitude'), 
		'longitude'=> $this->session->userdata('longitude'), 
		'fasilitas'=> $this->session->userdata('fasilitas'), 
		'keterangan'=> $this->session->userdata('keterangan'), 
		'foto'=> $this->session->userdata('foto'));
		$data['tempat_list']=$this->Olahraga_model->getDataTempat();
		$this->load->view('olahraga', $data);
	}

	

	public function auto_complete(){
		if(isset($_GET['term'])){
			$result = $this->Olahraga_model->search_tempat($_GET['term']);
			if(count($result) > 0){
				foreach($result as $row)
				$arr_result[] = $row->nama_tempat;
				echo json_encode($arr_result);
			}
		}
	}
}
