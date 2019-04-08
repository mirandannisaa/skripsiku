<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class Maps extends CI_Controller {

    function index(){
        $this->load->library('googlemaps');
            $config=array();
            $config['center']="37.4419, -122.1419";
            $config['zoom']=17;
            $config['map_height']="400px";
            $this->googlemaps->initialize($config);
            $marker=array();
            $marker['position']="37.4419, -122.1419";
            $this->googlemaps->add_marker($marker);
            $data['map']=$this->googlemaps->create_map();
        $this->load->view('ci_maps',$data);
    }
 }