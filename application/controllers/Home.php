<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

        // public function __construct(){
	// 	parent::__construct();
	// 	if ($this->session->userdata('username')=="") {
	// 		redirect('login');
	// 	}elseif($this->session->userdata('username') == 'admin'){
	// 		redirect('admin');
	// 	}
	// }

        var $nama_tempat = 'autocomplete';
        // function __construct(){
        //         // parent::__construct();
        //         // if ($this->session->userdata('username')=="") {
	// 	// 	redirect('login');
	// 	// }elseif($this->session->userdata('username') == 'admin'){
	// 	// 	redirect('admin');
	// 	// }
        //         $this->load->model('Home_model');
        // }

	public function index()
	{
                $this->load->model('Home_model');
                $data['tempat_list']=$this->Home_model->getDataTempat();
                $this->load->view('partials/headerhome');
                $this->load->view('home', $data);
                $this->load->view('partials/footer');
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
		$data['tempat_list']=$this->Home_model->getDataTempat();
		$this->load->view('home', $data);
        }

        
        
        public function auto_complete(){
                if(isset($_GET['term'])){
                        $result = $this->Home_model->search_tempat($_GET['term']);
                        if(count($result) > 0){
                                foreach($result as $row)
                                $arr_result[] = $row->nama_tempat;
                                echo json_encode($arr_result);
                        }
                }
        }         
}
