<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Files extends CI_Model {

    public function insert($data = array()){
        $insert = $this->db->insert_batch('fototempat',$data);
        return $insert?true:false;
    }
}