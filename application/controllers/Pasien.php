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
    }
    public function index()
    {
        //Menampilkan isi tabel pasien didalam index
        $data['list'] = $this->pasienModel->get_daftar_pasien();

        // $this->load->view('header');
        $this->load->view('pasien/pasienView', $data);
        // $this->load->view('footer');
    }
    // memanggil tampilan addPasien
    public function addP()
    {
        $this->load->view('pasien/addPasien');
    }
    public function savedataP()
    {
        //setelah data pasien di add data akan disave
        //dan akan masuk kedalam pasienModel fungsi insert
        $this->pasienModel->insertP($this->input->post());
        redirect('Pasien');
    }
    // memanggil tampilan editPasien
    public function editP($a)
    {
        $data['detail'] = $this->pasienModel->get_detail_pasien($a);
        $this->load->view('pasien/editPasien', $data);
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
    // public function searchP()
    // {
    //     $keyword = $this->input->get('keyword');
    //     $data = $this->pasienModel->ambil_data($keyword);
    //     $data = array(
    //         'keyword'    => $keyword,
    //         'data'        => $data
    //     );
    //     // $this->load->view('header');
    //     $this->load->view('searchView', $data);
    //     // $this->load->view('footer');
    // }
    // public function get_pasien()
    // {
    //     $newid =  $this->pasienModel->get_idmax()->result();
    //     if ($newid > 0) {
    //         foreach ($newid as $key) {
    //             $auto_id = $key->idpasien;
    //         }
    //     }
    //     return $idpasien = $this->pasienModel->get_newid($auto_id, 'P');
    // }
}
