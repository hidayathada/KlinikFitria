<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

    public function __construct()
    {
        //Memanggil/menload pasienModel
        parent::__construct();
        $this->load->helper(array('text', 'url'));
        $this->load->model('pasienModel');
        $this->load->model('Rawatmodel');
    }
    public function index()
    {
        //Menampilkan isi tabel pasien didalam index
        $data['list'] = $this->pasienModel->get_daftar_pasien();
        $data['rawat'] = $this->Rawatmodel->get_pasien();
        // $data['pasien'] = $this->Rawatmodel->get_pasien();
        // $data['rawat'] = $this->Rawatmodel->rawat();

        $this->load->view('layout/v_head.php');
        $this->load->view('layout/v_navbar.php');
        $this->load->view('layout/v_sidebar.php');
        $this->load->view('pasien/pasienView.php', $data);
        $this->load->view('layout/v_footer.php');
    }
    // memanggil tampilan addPasien
    public function addP()
    {
        $this->load->view('layout/v_head.php');
        $this->load->view('layout/v_navbar.php');
        $this->load->view('layout/v_sidebar.php');
        $this->load->view('pasien/addPasien.php');
        $this->load->view('layout/v_footer.php');
    }
    public function savedataP()
    {
        // setelah data pasien di add data akan disave
        // dan akan masuk kedalam pasienModel fungsi insert
        $this->pasienModel->insertP($this->input->post());
        redirect('Pasien');
    }
    // memanggil tampilan editPasien
    public function editP($a)
    {
        $data['detail'] = $this->pasienModel->get_detail_pasien($a);
        $this->load->view('layout/v_head.php');
        $this->load->view('layout/v_navbar.php');
        $this->load->view('layout/v_sidebar.php');
        $this->load->view('pasien/editPasien.php', $data);
        $this->load->view('layout/v_footer.php');
    }
    public function updateP($id)
    {
        /* membuat fungsi update berdasarkan parameter 
        variabel id pasien yang akan masuk kedalam
        pasienModel fungsi updateP
        */
        $this->pasienModel->updateP($this->input->post(), $id);
        redirect('Pasien', 'refresh');
    }
    public function deleteP($a)
    {
        /* membuat fungsi delete pasien berdasarkan parameter 
        variabel id pasien yang akan masuk kedalam
        pasienModel fungsi delete
        */
        $this->pasienModel->deleteP($a);
        redirect('Pasien', 'refresh');
    }
}
