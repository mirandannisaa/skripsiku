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

		public function insertFasilitasku($data)
		{
			$this->db->insert('tempatfasilitas', $data);
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

		//Detail Tempat Olahraga
		public function getDataKeterangan()
		{
			$this->db->select("*");
			$this->db->join('jenis_olahraga', 'keterangan.id_jenis = jenis_olahraga.id_jenis');	
			$query = $this->db->get('keterangan');
			return $query->result();
		}

		public function getKeterangan($id_keterangan)
		{
			$this->db->select("*");
			$this->db->where('id_keterangan', $id_keterangan);
			$this->db->join('jenis_olahraga', 'keterangan.id_jenis = jenis_olahraga.id_jenis');	
			$query = $this->db->get('keterangan', 1);
			return $query->result();
		}

		public function insertKeterangan()
		{
			$object = array(
				'keterangan' => $this->input->post('keterangan'),
				'id_jenis' => $this->input->post('id_jenis')				
				);
			$this->db->insert('keterangan', $object);
		}

		public function updateKeterangan($id_keterangan){
			$data = array(
				'keterangan' => $this->input->post('keterangan'),
				'id_jenis' => $this->input->post('id_jenis') 				
				);
			$this->db->where('id_keterangan', $id_keterangan);
			$this->db->update('keterangan', $data);
		}

		public function deleteKeterangan($id_keterangan)
		{
			$this->db->where('id_keterangan', $id_keterangan);
			$this->db->delete('keterangan');
		}

		//Tempat Olahraga
		public function getDataTempat()
		{
			$this->db->select("*");
			$this->db->join('tempatfasilitas', 'tempat.id_tempat = tempatfasilitas.id_tempat');
			$this->db->join('tempatketerangan', 'tempat.id_tempat = tempatketerangan.id_tempat');
			$this->db->join('keterangan', 'keterangan.id_keterangan = tempatketerangan.id_keterangan');
			$this->db->join('fasilitas', 'fasilitas.id_fasilitas = tempatfasilitas.id_fasilitas');
			$this->db->join('jenis_olahraga', 'keterangan.id_jenis = jenis_olahraga.id_jenis');
			$this->db->join('fototempat', 'tempat.id_tempat = fototempat.id_tempat');
			$query = $this->db->get('tempat');
			return $query->result();
		}

		public function getTempat($id_tempat)
		{
			$this->db->select("*");
			$this->db->where('id_tempat', $id_tempat);
			$this->db->join('tempatfasilitas', 'tempat.id_tempat = tempatfasilitas.id_tempat');
			$this->db->join('tempatketerangan', 'tempat.id_tempat = tempatketerangan.id_tempat');
			$this->db->join('fototempat', 'tempat.id_tempat = fototempat.id_tempat');
			$query = $this->db->get('tempat');
			return $query->result();
		}

		public function getDataTempatFasilitas()
		{
			$this->db->select("*");
			$this->db->join('tempatfasilitas', 'tempat.id_tempat = tempatfasilitas.id_tempat');
			$this->db->join('tempatketerangan', 'tempat.id_tempat = tempatketerangan.id_tempat');
			$this->db->join('keterangan', 'keterangan.id_keterangan = tempatketerangan.id_keterangan');
			$this->db->join('fasilitas', 'fasilitas.id_fasilitas = tempatfasilitas.id_fasilitas');
			$this->db->join('jenis_olahraga', 'keterangan.id_jenis = jenis_olahraga.id_jenis');
			$this->db->join('fototempat', 'tempat.id_tempat = fototempat.id_tempat');
			$query = $this->db->get('tempat');
			return $query->result();
		}

		public function getTempatFasilitas($id_tempat)
		{
			$this->db->select("*");
			$this->db->where('id_tempat', $id_tempat);
			$this->db->join('tempatfasilitas', 'tempat.id_tempat = tempatfasilitas.id_tempat');
			$this->db->join('tempatketerangan', 'tempat.id_tempat = tempatketerangan.id_tempat');
			$this->db->join('fototempat', 'tempat.id_tempat = fototempat.id_tempat');
			$query = $this->db->get('tempat');
			return $query->result();
		}

		public function insertTempat()
		{
			$object = array(
				'nama_tempat' => $this->input->post('tempat_olahraga'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'harga' => $this->input->post('harga'),
				'jam_buka' => $this->input->post('jam_buka'),
				'jam_tutup' => $this->input->post('jam_tutup'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				);
			$this->db->insert('tempat', $object);

			$this->db->select_max('id_tempat');
			$query = $this->db->get('tempat');
			return $query->result();
		}

		public function updateTempat($id_tempat){
			$data = array(
				'nama_tempat' => $this->input->post('tempat_olahraga'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'harga' => $this->input->post('harga'),
				'jam_buka' => $this->input->post('jam_buka'),
				'jam_tutup' => $this->input->post('jam_tutup'),
				'latitude' => $this->input->post('latitude'),
				'longitude' => $this->input->post('longitude'),
				);
			$this->db->where('id_tempat', $id_tempat);
			$this->db->update('tempat', $data);
		}

		public function deleteTempat($id_tempat)
		{
			$this->db->where('id_tempat', $id_tempat);
			$this->db->delete('tempat');
		}

		public function insertKeteranganTempat($data)
		{
			$this->db->insert('tempatketerangan', $data);
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>