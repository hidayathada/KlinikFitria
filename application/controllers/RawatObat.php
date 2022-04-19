<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RawatObat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Push to obat, rawat, rawat model
        $data['list'] = $this->M_rawatobat->get_daftar_rawatobat();
        $data['list'] = $this->rawatModel->get_daftar_rawat();
        $data['list'] = $this->obatModel->get_daftar_obat();


        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view("rawatobat/v_rawatobat.php");
    }
}
