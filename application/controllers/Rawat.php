<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_ajax");
    }

    public function index(){
        $url = 'http://rosihanari.net/api/api.php?get=dokter';
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
        $data['dokter'] = $data;
        $data['pasien'] = $this->M_ajax->get_pasien();
        $data['tindakan'] = $this->M_ajax->tindakan();
        $data['obat'] = $this->M_ajax->obat();
        $data['rawat'] = $this->M_ajax->rawat();
        $data['idmax'] = $this->M_ajax->max_rawat();
        $row_rawat = $this->M_ajax->row_rawat();
        
        // echo $idrawat->idrawat;

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawat.php',$data);
    }

    public function addRawat()
    {
        $idmax = $this->M_ajax->max_rawat();
        $row_rawat = $this->M_ajax->row_rawat();
        if($row_rawat < 1){
            $id = "R" . 1;
            $data['idrawat'] = $id; 
            $data['idpasien'] = $this->input->post("pasien");
            $data['totaltindakan'] = $this->input->post("tindakan");
            $data['dokter'] = $this->input->post("dokter");
            $data['totalobat'] = $this->input->post("obat");
            $data['tglrawat'] = $this->input->post("tgl_rawat");
            $data['totalharga'] = $this->input->post("tindakan") + $this->input->post("obat");
        }else{
            $id = "R" . ($row_rawat+00001);
            $data['idrawat'] = $id;
            $data['idpasien'] = $this->input->post("pasien");
            $data['totaltindakan'] = $this->input->post("tindakan");
            $data['dokter'] = $this->input->post("dokter");
            $data['totalobat'] = $this->input->post("obat");
            $data['tglrawat'] = $this->input->post("tgl_rawat");
            $data['totalharga'] = $this->input->post("tindakan") + $this->input->post("obat"); 
        }
        // echo $idmax;
        $this->M_ajax->add_rawat($data);
        redirect("rawat");
    }
    
    public function editRawat()
    {
            $id = $this->input->post("idrawat");
            $data['idrawat'] = $id;
            $data['idpasien'] = $this->input->post("pasien");
            $data['totaltindakan'] = $this->input->post("tindakan");
            $data['dokter'] = $this->input->post("dokter");
            $data['totalobat'] = $this->input->post("obat");
            $data['tglrawat'] = $this->input->post("tgl_rawat");
            $data['totalharga'] = $this->input->post("tindakan") + $this->input->post("obat");
        // echo $idmax;
        $this->M_ajax->edit_rawat($data,$id);
        redirect("rawat");
    }

    public function deleterawat(){
        $id = $this->input->post("idrawat");
        $this->M_ajax->deleterawat($id);
        redirect("rawat");
    }
    

}