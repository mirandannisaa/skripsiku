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
			$this->db->group_by('tempat.id_tempat'); 
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

		public function getDatabyJenis($nama_olahraga)
		{
			$this->db->select("*");
			$this->db->join('tempatfasilitas', 'tempat.id_tempat = tempatfasilitas.id_tempat');
			$this->db->join('tempatketerangan', 'tempat.id_tempat = tempatketerangan.id_tempat');
			$this->db->join('keterangan', 'keterangan.id_keterangan = tempatketerangan.id_keterangan');
			$this->db->join('fasilitas', 'fasilitas.id_fasilitas = tempatfasilitas.id_fasilitas');
			$this->db->join('jenis_olahraga', 'keterangan.id_jenis = jenis_olahraga.id_jenis');
            $this->db->join('fototempat', 'tempat.id_tempat = fototempat.id_tempat');
            $this->db->where('jenis_olahraga.nama_olahraga', $nama_olahraga);
			$query = $this->db->get('tempat');
			return $query->result();
        }

		public function search_tempat($nama_tempat){
			$this->db->join('jenis_olahraga', 'keterangan.id_jenis = jenis_olahraga.id_jenis');
			$this->db->like('nama_tempat', $nama_tempat, 'both');
			$this->db->like('nama_olahraga', $nama_tempat, 'both');
			$this->db->order_by('nama_tempat', 'ASC');
			$this->db->limit(10);
			return $this->db->get('tempat')->result();
		}
}