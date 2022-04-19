<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view("rawat/v_rawat.php");
    }

}