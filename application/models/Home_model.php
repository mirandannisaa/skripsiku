<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
    public function __construct()
		{
			parent::__construct();
			//Do your magic here
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
}