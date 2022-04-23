<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("rawatmodel");
    }

    public function index(){
        $url = 'http://rosihanari.net/api/api.php?get=dokter';
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
        $data['dokter'] = $data;
        $data['pasien'] = $this->rawatmodel->get_pasien();
        $data['tindakan'] = $this->rawatmodel->tindakan();
        $data['obat'] = $this->rawatmodel->obat();
        $data['rawat'] = $this->rawatmodel->rawat();
        $data['idmax'] = $this->rawatmodel->max_rawat();
        $row_rawat = $this->rawatmodel->row_rawat();
        
        // echo $idrawat->idrawat;

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawat.php',$data);
    }

    public function addRawat()
    {
        $idmax = $this->rawatmodel->max_rawat();
        $row_rawat = $this->rawatmodel->row_rawat();
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
        $this->rawatmodel->add_rawat($data);
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
        $this->rawatmodel->edit_rawat($data,$id);
        redirect("rawat");
    }

    public function deleterawat(){
        $id = $this->input->post("idrawat");
        $this->rawatmodel->deleterawat($id);
        redirect("rawat");
    }
    

}