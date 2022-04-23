<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("rawatmodel");
    }

    public function index(){
        // $url = 'http://rosihanari.net/api/api.php?get=dokter';
        // $get_url = file_get_contents($url);
        // $data = json_decode($get_url);
        // $data['dokter'] = $data;
        // $data['tindakan'] = $this->rawatmodel->tindakan();
        // $data['obat'] = $this->rawatmodel->obat();
        // $data['rawat'] = $this->rawatmodel->rawat();
        // $data['idmax'] = $this->rawatmodel->max_rawat();
        $data['pasien'] = $this->rawatmodel->get_pasien();
        $data['rawat'] = $this->rawatmodel->rawat();

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawat.php',$data);
    }

    public function addRawat()
    {
        $data['tglrawat'] = $this->input->post("tgl_rawat");
        $data['totaltindakan'] = $this->input->post("totaltindakan");
        $data['totalobat'] = $this->input->post("totalobat");
        $data['totalharga'] = $this->input->post("totalharga");
        $data['uangmuka'] = $this->input->post("uangmuka");
        $data['kurang'] = $this->input->post("kurang");
        $data['idpasien'] = $this->input->post("pasien");
        $this->rawatmodel->add_rawat($data);
        redirect("rawat");
    }
    
    public function editRawat()
    {
        $id = $this->input->post("idrawat");
        $data['tglrawat'] = $this->input->post("tgl_rawat");
        $data['totaltindakan'] = $this->input->post("totaltindakan");
        $data['totalobat'] = $this->input->post("totalobat");
        $data['totalharga'] = $this->input->post("totalharga");
        $data['uangmuka'] = $this->input->post("uangmuka");
        $data['kurang'] = $this->input->post("kurang");
        $data['idpasien'] = $this->input->post("pasien");
        $this->rawatmodel->edit_rawat($data, $id);
        redirect("rawat");
    }

    public function deleterawat(){
        $id = $this->input->post("idrawat");
        $this->rawatmodel->deleterawat($id);
        redirect("rawat");
    }
    

    //=================================== RAWAT TINDAKAN ===============================//
    public function rawattindakan(){
        // $url = 'http://rosihanari.net/api/api.php?get=dokter';
        // $get_url = file_get_contents($url);
        // $data = json_decode($get_url);
        // $data['dokter'] = $data;
        // $data['tindakan'] = $this->rawatmodel->tindakan();
        // $data['obat'] = $this->rawatmodel->obat();
        // $data['rawat'] = $this->rawatmodel->rawat();
        // $data['idmax'] = $this->rawatmodel->max_rawat();
        $data['pasien'] = $this->rawatmodel->rawat();
        $data['rawattindakan'] = $this->rawatmodel->rawattindakan();

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawattindakan.php',$data);
    }
    
    //=================================== RAWAT TINDAKAN ===============================//
    public function rawatobat(){
        $data['obat'] = $this->rawatmodel->get_obat();
        $data['rawatobat'] = $this->rawatmodel->rawatobat();

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawatobat.php',$data);
    }

    public function addRawatObat(){
        $id = $this->input->post('obat');
        $this->rawatmodel->get_harga_obat($id);

        $data['idobat'] = $this->input->post('obat');
        $data['jumlah'] = $this->input->post('jumlah');
        $harga = $this->rawatmodel->get_harga_obat($this->input->post('obat'))[0]->harga;
        $data['totalrawatobat'] = $this->input->post('jumlah') * $harga;
        $this->rawatmodel->addRawatObat($data);
        redirect("rawat/rawatobat");
    }
    
    public function editRawatObat(){
        $id = $this->input->post('idrawatobat');
        $data['idobat'] = $this->input->post('obat');
        $data['jumlah'] = $this->input->post('jumlah');
        $harga = $this->rawatmodel->get_harga_obat($this->input->post('obat'))[0]->harga;
        $data['totalrawatobat'] = $this->input->post('jumlah') * $harga;

        $this->rawatmodel->editRawatObat($data, $id);
        redirect("rawat/rawatobat");
    }


}