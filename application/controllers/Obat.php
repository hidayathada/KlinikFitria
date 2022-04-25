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
        $this->load->model('obatModel');
    }
    public function index()
    {
        //Menampilkan isi tabel obat didalam index
        $data['list'] = $this->obatModel->get_daftar_obat();

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

    // public function ajax_list()
    // {
    //     $list = $this->M_ajax->get_datatables();
    //     $data = array();
    //     // $no = $_POST['start'];
    //     // $no = 0;
    //     foreach ($list as $obat) {
    //         $row = array();
    //         $row[] = $obat->idobat;
    //         $row[] = $obat->nama;
    //         $row[] = $obat->harga;
    //         $row[] = "
    //             <center>
    //         <a href='Obat/editO/$obat->idobat' class='btn btn-warning mr-2'>Edit</a>
    //         <a href='Obat/deleteO/$obat->idobat' onclick='return confirm('Data ini akan dihapus. Anda yakin?')' class='btn btn-danger'>Hapus</a>
    //         </center>";

    //         $data[] = $row;
    //     }

    //     $output = array(
    //         "draw" => $_POST['draw'],
    //         "recordsTotal" => $this->M_ajax->count_all(),
    //         // "recordsTotal" => 4,
    //         "recordsFiltered" => $this->M_ajax->count_filtered(),
    //         "data" => $data,
    //     );
    //     //output to json format
    //     echo json_encode($output);
    // }
    
}
