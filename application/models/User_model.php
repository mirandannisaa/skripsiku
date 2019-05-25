<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function register()
		{
			$object = array(
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
				);
			$this->db->insert('user', $object);
		}

		public function getDataUser()
		{
			$this->db->select("*");
			$query = $this->db->get('user');
			return $query->result();
		}

		public function getUserById($id_user)
		{
			$this->db->where('id_user', $id_user);	
			$query = $this->db->get('user',1);
			return $query->result();
		}

		public function cekUsername($username){
			$this->db->where(strtolower('username'), strtolower($username));	
			$query = $this->db->get('user');
			if($query->num_rows() >=1){
				return false;
			}else{
				return true;
			}
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>