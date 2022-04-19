<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Coba extends CI_Controller { 
    
    public function __construct() { 
        parent::__construct();
        $this->load->model('M_ajax');
    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('v_coba.php');
    }
 
    public function ajax_list()
    {
        $list = $this->M_ajax->get_datatables();
        $data = array();
        // $no = $_POST['start'];
        $no = 0;
        foreach ($list as $obat) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $obat->idobat;
            $row[] = $obat->nama;
            $row[] = $obat->harga;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->M_ajax->count_all(),
                        "recordsFiltered" => $this->M_ajax->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
    public function insert_dummy(){
        $no=0;
        for($i=$no; $i<=50; $i++){
            // $idobat = 0000;
            $data['idobat'] = "P" . $i;
            $data['nama'] = "Obat" . $i;
            $data['harga'] = $i;

            $this->M_ajax->insert_dummy($data);
            echo "berhasil" . $i;
        }
    }

    public function delete(){
        $this->M_ajax->delete();
    }
 
}