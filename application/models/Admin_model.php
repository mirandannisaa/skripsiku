<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		// Fasilitas
		public function getDataFasilitas()
		{
			$this->db->select("id_fasilitas, nama_fasilitas");
			$query = $this->db->get('fasilitas');
			return $query->result();
		}

		public function getFasilitas($id_fasilitas)
		{
			$this->db->select("*");
			$this->db->where('id_fasilitas', $id_fasilitas);
			$query = $this->db->get('fasilitas');
			return $query->result();
		}

		public function insertFasilitas()
		{
			$object = array(
				'nama_fasilitas' => $this->input->post('nama_fasilitas'),				
				);
			$this->db->insert('fasilitas', $object);
		}

		public function updateFasilitas($id_fasilitas){
			$data = array(
				'nama_fasilitas' => $this->input->post('nama_fasilitas'), 				
				);
			$this->db->where('id_fasilitas', $id_fasilitas);
			$this->db->update('fasilitas', $data);
		}

		public function deleteFasilitas($id_fasilitas)
		{
			$this->db->where('id_fasilitas', $id_fasilitas);
			$this->db->delete('fasilitas');
		}

		// Jenis Olahraga
		public function getDataOlahraga()
		{
			$this->db->select("id_jenis, nama_olahraga");
			$query = $this->db->get('jenis_olahraga');
			return $query->result();
		}

		public function getOlahraga($id_jenis)
		{
			$this->db->select("*");
			$this->db->where('id_jenis', $id_jenis);
			$query = $this->db->get('jenis_olahraga');
			return $query->result();
		}

		public function insertOlahraga()
		{
			$object = array(
				'nama_olahraga' => $this->input->post('nama_olahraga'),				
				);
			$this->db->insert('jenis_olahraga', $object);
		}

		public function updateOlahraga($id_jenis){
			$data = array(
				'nama_olahraga' => $this->input->post('nama_olahraga'), 				
				);
			$this->db->where('id_jenis', $id_jenis);
			$this->db->update('jenis_olahraga', $data);
		}

		public function deleteOlahraga($id_jenis)
		{
			$this->db->where('id_jenis', $id_jenis);
			$this->db->delete('jenis_olahraga');
		}
		
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>