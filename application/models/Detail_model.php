<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_model extends CI_Model {

    public function getTempatbyid($id_tempat){
			$this->db->select("*");
			$this->db->join('tempatfasilitas', 'tempat.id_tempat = tempatfasilitas.id_tempat');
			$this->db->join('tempatketerangan', 'tempat.id_tempat = tempatketerangan.id_tempat');
			$this->db->join('keterangan', 'keterangan.id_keterangan = tempatketerangan.id_keterangan');
			$this->db->join('fasilitas', 'fasilitas.id_fasilitas = tempatfasilitas.id_fasilitas');
			$this->db->join('jenis_olahraga', 'keterangan.id_jenis = jenis_olahraga.id_jenis');
			$this->db->join('fototempat', 'tempat.id_tempat = fototempat.id_tempat');
			$this->db->group_by('tempat.id_tempat'); 
			$this->db->where('tempat.id_tempat', $id_tempat);
			$query = $this->db->get('tempat');
			return $query->result();
    }

    public function getUlasanbyid($id_tempat){
        $this->db->select("*");
        $this->db->join('tempat', 'tempat.id_tempat = ulasan.id_tempat');
				$this->db->join('user', 'user.id_user = ulasan.id_user');
				$this->db->where('ulasan.id_tempat', $id_tempat);
        $query = $this->db->get('ulasan');
        return $query->result();
    }

    public function insertUlasan($id_tempat, $id_user)
		{
			$object = array(
				'id_tempat' => $id_tempat,
				'id_user' => $id_user,
				'ulasan' => $this->input->post('ulasan')
			);
			$this->db->insert('ulasan', $object);
		}
}