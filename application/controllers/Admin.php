<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class Admin extends CI_Controller {

	// public function __construct(){
	// 	parent::__construct();
	// 	if ($this->session->userdata('username')=="") {
	// 		redirect('login');
	// 	}elseif($this->session->userdata('username') == 'admin'){
	// 		redirect('admin');
	// 	}
	// }
	
	public function index() {
		$this->load->model('Admin_model');
		$this->load->view('partials/adminheader');
		$data["fasilitas_list"]=$this->Admin_model->getDataFasilitas();
		$data["olahraga_list"]=$this->Admin_model->getDataOlahraga();
		$data["detail_list"]=$this->Admin_model->getDataKeterangan();
		$data["tempat_list"]=$this->Admin_model->getDataTempat();
		$this->load->view('admin/homeadmin', $data);
		$this->load->view('partials/adminfooter');
	}
	
	// Fasilitas
	public function getFasilitas() {
		$data=array('error'=>'', 'nama_fasilitas'=> $this->session->userdata('nama_fasilitas'), );
		$data["fasilitas_list"]=$this->Admin_model->getDataFasilitas();
		$this->load->view('admin/home', $data);
	}
	public function createfasilitas() {
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'trim|required');
		$this->load->model('Admin_model');
		$data=array('error'=>'', 'nama_fasilitas'=> $this->session->userdata('nama_fasilitas'), );
		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/adminheader');
			$this->load->view('admin/createfasilitas', $data);
			$this->load->view('partials/adminfooter');
		}
		else {
			$this->Admin_model->insertFasilitas();
			echo'<script type="text/javascript">alert("Data berhasil ditambahkan")</script>';
			redirect('admin', 'refresh');
		}
	}
	public function editFasilitas($id_fasilitas) {
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_fasilitas', 'Nama Fasilitas', 'trim|required');
		$data=array('error'=>'', 'nama_fasilitas'=> $this->session->userdata('nama_fasilitas'));
		$this->load->model('Admin_model');
		$data['fasilitas_list']=$this->Admin_model->getFasilitas($id_fasilitas);
		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/adminheader');
			$this->load->view('admin/editfasilitas', $data);
			$this->load->view('partials/adminfooter');
		}
		else {
			$this->Admin_model->updateFasilitas($id_fasilitas);
			echo'<script type="text/javascript">alert("Data berhasil diupdate")</script>';
			redirect('admin', 'refresh');
		}
	}
	public function deletefasilitas($id_fasilitas) {
		$this->load->model('Admin_model');
		$this->Admin_model->deleteFasilitas($id_fasilitas);
		echo'<script type="text/javascript">alert("Data berhasil dihapus")</script>';
		redirect('admin', 'refresh');
	}
	// Jenis
	public function getOlahraga() {
		$data=array('error'=>'', 'nama_olahraga'=> $this->session->userdata('nama_olahraga'), );
		$data["olahraga_list"]=$this->Admin_model->getDataOlahraga();
		$this->load->view('admin/home', $data);
	}
	public function createolahraga() {
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_olahraga', 'Nama Olahraga', 'trim|required');
		$this->load->model('Admin_model');
		$data=array('error'=>'', 'nama_olahraga'=> $this->session->userdata('nama_olahraga'), );
		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/adminheader');
			$this->load->view('admin/createolahraga', $data);
			$this->load->view('partials/adminfooter');
		}
		else {
			$this->Admin_model->insertOlahraga();
			echo'<script type="text/javascript">alert("Data berhasil ditambahkan")</script>';
			redirect('admin', 'refresh');
		}
	}
	public function editolahraga($id_jenis) {
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_olahraga', 'Nama Olahraga', 'trim|required');
		$data=array('error'=>'', 'nama_olahraga'=> $this->session->userdata('nama_olahraga'));
		$this->load->model('Admin_model');
		$data['olahraga_list']=$this->Admin_model->getOlahraga($id_jenis);
		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/adminheader');
			$this->load->view('admin/editolahraga', $data);
			$this->load->view('partials/adminfooter');
		}
		else {
			$this->Admin_model->updateOlahraga($id_jenis);
			echo'<script type="text/javascript">alert("Data berhasil diupdate")</script>';
			redirect('admin', 'refresh');
		}
	}
	public function deleteolahraga($id_jenis) {
		$this->load->model('Admin_model');
		$this->Admin_model->deleteOlahraga($id_jenis);
		echo'<script type="text/javascript">alert("Data berhasil dihapus")</script>';
		redirect('admin', 'refresh');
	}
	// Detail Keterangan
	public function getKeterangan() {
		$data=array('error'=>'', 'keterangan'=> $this->session->userdata('keterangan'), 'id_jenis'=> $this->session->userdata('id_jenis'));
		$data['detail_list']=$this->Admin_model->getDataKeterangan();
		$this->load->view('admin/home', $data);
	}
	public function createketerangan() {
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan', 'Detail Keterangan', 'trim|required');
		$this->form_validation->set_rules('id_jenis', 'Jenis Olahraga', 'trim|required');
		$this->load->model('Admin_model');
		$data['keterangan']=$this->Admin_model->getDataOlahraga();
		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/adminheader');
			$this->load->view('admin/createketerangan', $data);
			$this->load->view('partials/adminfooter');
		}
		else {
			$this->Admin_model->insertKeterangan();
			echo'<script type="text/javascript">alert("Data berhasil ditambahkan")</script>';
			redirect('admin', 'refresh');
		}
	}
	public function editketerangan($id_keterangan) {
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan', 'Detail Keterangan', 'trim|required');
		$this->form_validation->set_rules('id_jenis', 'Jenis Olahraga', 'trim|required');
		$this->load->model('Admin_model');
		$data['keterangan']=$this->Admin_model->getDataOlahraga();
		$data['detail_list']=$this->Admin_model->getKeterangan($id_keterangan);
		
		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/adminheader');
			$this->load->view('admin/editketerangan', $data);
			$this->load->view('partials/adminfooter');
		}
		else {
			$this->Admin_model->updateKeterangan($id_keterangan);
			echo'<script type="text/javascript">alert("Data berhasil diupdate")</script>';
			redirect('admin', 'refresh');
		}
	}
	public function deleteketerangan($id_keterangan) {
		$this->load->model('Admin_model');
		$this->Admin_model->deleteKeterangan($id_keterangan);
		echo'<script type="text/javascript">alert("Data berhasil dihapus")</script>';
		redirect('admin', 'refresh');
	}
	// Tempat Olahraga
	public function getTempat() {
		$data=array(
			'error'=>'',
			'nama_tempat'=> $this->session->userdata('nama_tempat'), 
			'alamat'=> $this->session->userdata('alamat'), 
			'kecamatan'=> $this->session->userdata('kecamatan'), 
			'no_telp'=> $this->session->userdata('no_telp'), 
			'harga'=> $this->session->userdata('harga'), 
			'hari_buka'=> $this->session->userdata('hari_buka'), 
			'jam_buka'=> $this->session->userdata('jam_buka'), 
			'jam_tutup'=> $this->session->userdata('jam_tutup'), 
			'latitude'=> $this->session->userdata('latitude'), 
			'longitude'=> $this->session->userdata('longitude'), 
			'fasilitas'=> $this->session->userdata('fasilitas'), 
			'keterangan'=> $this->session->userdata('keterangan'), 
			'foto'=> $this->session->userdata('foto'));
		$data["tempat_list"]=$this->Admin_model->getTempat();
		$this->load->view('admin/home', $data);
	}
	public function createtempat() {
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tempat_olahraga', 'Nama Tempat', 'trim|required');
		$this->load->model('Admin_model');
		$this->load->model('files');
		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/adminheader');
			$this->load->view('admin/createtempat');
			$this->load->view('partials/adminfooter');
		}
		else {
			$object = array(
			'nama_tempat'=> $this->input->post('tempat_olahraga'), 
			'alamat'=> $this->input->post('alamat'), 
			'kecamatan'=> $this->input->post('kecamatan'), 
			'no_telp'=> $this->input->post('no_telp'), 
			'harga'=> $this->input->post('harga'), 
			'hari_buka'=> $this->input->post('hari_buka'), 
			'jam_buka'=> $this->input->post('jam_buka'), 
			'jam_tutup'=> $this->input->post('jam_tutup'), 
			'latitude'=> $this->input->post('latitude'), 
			'longitude'=> $this->input->post('longitude')
		);
			$this->db->insert('tempat', $object);
			$insertid=$this->db->insert_id();
			$data=$this->input->post('fasilitas[]');
			foreach($data as $object) {
				$this->Admin_model->insertFasilitasku(array('id_fasilitas'=>$object, 'id_tempat'=>$insertid));
			}
			$dataKeterangan=$this->input->post('keterangan[]');
			foreach($dataKeterangan as $object) {
				$this->Admin_model->insertKeteranganTempat(array('id_keterangan'=>$object, 'id_tempat'=>$insertid));
			}
			$data=array();
			if($this->input->post('action') && !empty($_FILES['upload_Files']['name'])) {
				$filesCount=count($_FILES['upload_Files']['name']);
				for($i=0;
				$i < $filesCount;
				$i++) {
					$_FILES['upload_File']['name']=$_FILES['upload_Files']['name'][$i];
					$_FILES['upload_File']['type']=$_FILES['upload_Files']['type'][$i];
					$_FILES['upload_File']['tmp_name']=$_FILES['upload_Files']['tmp_name'][$i];
					$_FILES['upload_File']['error']=$_FILES['upload_Files']['error'][$i];
					$_FILES['upload_File']['size']=$_FILES['upload_Files']['size'][$i];
					$uploadPath='uploads/files/';
					$config['upload_path']=$uploadPath;
					$config['allowed_types']='gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('upload_File')) {
						$fileData=$this->upload->data();
						$uploadData[$i]['foto']=$fileData['file_name'];
						$uploadData[$i]['id_tempat']=$insertid;
					}
				}
				var_dump($data);
				if(!empty($uploadData)) {
					//Insert file information into the database
					$insert=$this->files->insert($uploadData);
					$statusMsg=$insert?'Files uploaded successfully.': 'Some problem occurred, please try again.';
					$this->session->set_flashdata('statusMsg', $statusMsg);
					var_dump($insert);
				}
			}
			echo'<script type="text/javascript">alert("Data berhasil ditambahkan")</script>';
			redirect('admin', 'refresh');
		}
	}
	
	public function edittempat($id_tempat) {
		$this->load->helper('url', 'form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('tempat_olahraga', 'Nama Tempat', 'trim|required');
		$this->load->model('Admin_model');
		$this->load->model('files');
		$data['tempat_list'] = $this->Admin_model->getTempat($id_tempat);

		if($this->form_validation->run()==FALSE) {
			$this->load->view('partials/adminheader');
			$this->load->view('admin/edittempat', $data);
			$this->load->view('partials/adminfooter');

		} else {
			$object = array(
				'nama_tempat'=> $this->input->post('tempat_olahraga'),
				'alamat'=> $this->input->post('alamat'),
				'kecamatan'=> $this->input->post('kecamatan'),
				'no_telp'=> $this->input->post('no_telp'),
				'harga'=> $this->input->post('harga'),
				'hari_buka'=> $this->input->post('hari_buka'), 
				'jam_buka'=> $this->input->post('jam_buka'),
				'jam_tutup'=> $this->input->post('jam_tutup'),
				'latitude'=> $this->input->post('latitude'),
				'longitude'=> $this->input->post('longitude')
			);
			$this->db->update('tempat', $object);
			$insertid=$this->db->insert_id();
			$data  =$this->input->post('fasilitas[]');
			foreach($data as $object) {
				$this->Admin_model->updateFasilitas(array('id_fasilitas'=>$object, 'id_tempat'=>$insertid));
			}
			$dataKeterangan=$this->input->post('keterangan[]');
			foreach($dataKeterangan as $object) {
				$this->Admin_model->updateKeteranganTempat(array('id_keterangan'=>$object, 'id_tempat'=>$insertid));
			}
			$data=array();
			if($this->input->post('action') && !empty($_FILES['upload_Files']['name'])) {
				$filesCount=count($_FILES['upload_Files']['name']);
				for($i=0;
				$i < $filesCount;
				$i++) {
					$_FILES['upload_File']['name']=$_FILES['upload_Files']['name'][$i];
					$_FILES['upload_File']['type']=$_FILES['upload_Files']['type'][$i];
					$_FILES['upload_File']['tmp_name']=$_FILES['upload_Files']['tmp_name'][$i];
					$_FILES['upload_File']['error']=$_FILES['upload_Files']['error'][$i];
					$_FILES['upload_File']['size']=$_FILES['upload_Files']['size'][$i];
					$uploadPath='uploads/files/';
					$config['upload_path']=$uploadPath;
					$config['allowed_types']='gif|jpg|png|jpeg';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('upload_File')) {
						$fileData=$this->upload->data();
						$uploadData[$i]['foto']=$fileData['file_name'];
						$uploadData[$i]['id_tempat']=$insertid;
					}
				}
				//vardump untuk menampilkan tipe data suatu variabel
				var_dump($data);
				if(!empty($uploadData)) {
					//Insert file information into the database
					$insert = $this->files->insert($uploadData);
					$statusMsg = $insert?'Files uploaded successfully.': 'Some problem occurred, please try again.';
					$this->session->set_flashdata('statusMsg', $statusMsg);
					var_dump($insert);
				}
			}
			echo'<script type="text/javascript">alert("Data berhasil diupdate")</script>';
			redirect('admin', 'refresh');
		}
	}
	public function deletetempat($id_tempat) {
		$this->load->model('Admin_model');
		$this->Admin_model->deleteTempat($id_tempat);
		echo'<script type="text/javascript">alert("Data berhasil dihapus")</script>';
		redirect('admin', 'refresh');
	}
}