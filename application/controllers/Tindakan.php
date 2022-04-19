<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tindakan extends CI_Controller
{

    public function __construct()
    {
        //Memanggil/meload tindakanModel
        parent::__construct();
        $this->load->helper(array('text', 'url'));
        $this->load->model('tindakanModel');
        $this->load->model('M_ajax');
    }
    public function index()
    {
        //Menampilkan isi tabel obat didalam index
        $data['list'] = $this->tindakanModel->get_daftar_tindakan();

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view("tindakan/tindakanView.php", $data);
    }
    // memanggil tampilan addPasien
    public function addT()
    {
        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('tindakan/addTindakan');
    }
    public function savedataT()
    {

        $this->tindakanModel->insertT($this->input->post());
        redirect('Tindakan');
    }
    // memanggil tampilan editPasien
    public function editT($a)
    {
        $data['detail'] = $this->tindakanModel->get_detail_tindakan($a);
        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('tindakan/editTindakan', $data);
    }
    public function updateT($id)
    {
        /* membuat fungsi update berdasarkan parameter 
        variabel id pasien yang akan masuk kedalam
        pasienModel fungsi updateP
        */
        $this->tindakanModel->updateT($this->input->post(), $id);
        redirect('Tindakan', 'refresh');
    }
    public function deleteT($a)
    {
        /* membuat fungsi delete pasien berdasarkan parameter 
        variabel id pasien yang akan masuk kedalam
        pasienModel fungsi delete
        */
        $this->tindakanModel->deleteT($a);
        redirect('Tindakan', 'refresh');
    }

    public function ajax_list()
    {
        $list = $this->M_ajax->get_datatables();
        $data = array();
        // $no = $_POST['start'];
        // $no = 0;
        foreach ($list as $tindakan) {
            $row = array();
            $row[] = $tindakan->idtindakan;
            $row[] = $tindakan->namatindakan;
            $row[] = $tindakan->biaya;
            $row[] = "
                <center>
            <a href='Tindakan/editT/$tindakan->idtindakan' class='btn btn-warning mr-2'>Edit</a>
            <a href='Tindakan/deleteT/$tindakan->idtindakan' onclick='return confirm('Data ini akan dihapus. Anda yakin?')' class='btn btn-danger'>Hapus</a>
            </center>";

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_ajax->count_all(),
            // "recordsTotal" => 4,
            "recordsFiltered" => $this->M_ajax->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
}
