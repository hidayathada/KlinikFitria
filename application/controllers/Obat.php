<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    public function __construct()
    {
        //Memanggil/meload obatModel
        parent::__construct();
        $this->load->helper(array('text', 'url'));
        $this->load->model('obatModel');
    }
    public function index()
    {
        //Menampilkan isi tabel obat didalam index
        $data['list'] = $this->obatModel->get_daftar_obat();

        // $this->load->view('header');
        // $this->load->view('pasien/pasienView', $data);
        // $this->load->view('footer');

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view("obat/obatView.php", $data);
    }
    // memanggil tampilan addPasien
    public function addO()
    {
        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('obat/addObat');
    }
    public function savedataO()
    {
        //setelah data pasien di add data akan disave
        //dan akan masuk kedalam pasienModel fungsi insert
        // $id = 00000;
        // $idincrement = $id++;
        // $idgenerate = "P" . $idincrement;
        // $data['id_pasien'] = $idgenerate;
        $this->obatModel->insertO($this->input->post());
        redirect('Obat');
    }
    // memanggil tampilan editPasien
    public function editO($a)
    {
        $data['detail'] = $this->obatModel->get_detail_obat($a);
        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('obat/editObat', $data);
    }
    public function updateO($id)
    {
        /* membuat fungsi update berdasarkan parameter 
        variabel id pasien yang akan masuk kedalam
        pasienModel fungsi updateP
        */
        $this->obatModel->updateO($this->input->post(), $id);
        redirect('Obat', 'refresh');
    }
    public function deleteO($a)
    {
        /* membuat fungsi delete pasien berdasarkan parameter 
        variabel id pasien yang akan masuk kedalam
        pasienModel fungsi delete
        */
        $this->obatModel->deleteO($a);
        redirect('Obat', 'refresh');
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
