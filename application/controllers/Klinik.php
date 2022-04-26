<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klinik extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rawatmodel');
    }

    public function index(){
        $data['currentPasien'] = $this->rawatmodel->get_pasien_bulan_ini();
        $data['currentTindakan'] = $this->rawatmodel->get_tindakan_bulan_ini();
        $data['numObat'] = $this->rawatmodel->num_obat();
        $this->load->view('layout/v_head.php');
        $this->load->view('layout/v_navbar.php');
        $this->load->view('layout/v_sidebar.php');
        $this->load->view('v_dashboard.php', $data);
        $this->load->view('layout/v_footer.php');
    }

}