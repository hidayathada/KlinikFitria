<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $url = 'http://rosihanari.net/api/api.php?get=dokter';
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
        // print_r($data);
        $data['datalist'] = $data;
        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawat.php',$data);
    }

    public function get_dokter()
    {
        // $this->load->helper('url');
        $url = 'http://rosihanari.net/api/api.php?get=dokter';
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
        // print_r($data);
        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('v_index.php',$data_array);
    }

}