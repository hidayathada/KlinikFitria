<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klinik extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view("v_index.php");
    }

}