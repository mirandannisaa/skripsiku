<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getDataFasilitas()
		{
			$this->db->select("id_fasilitas, nama_fasilitas");
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
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>