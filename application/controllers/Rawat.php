<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rawat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("rawatmodel");
    }

    public function index(){
        $this->rawat();
    }
    
    public function rawat(){
        $data['pasien'] = $this->rawatmodel->get_pasien();
        $data['rawat'] = $this->rawatmodel->rawat();

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawat.php',$data);
    }

    public function addRawat()
    {
        $data['idpasien'] = $this->input->post("pasien");
        $data['tglrawat'] = $this->input->post("tgl_rawat");
        $data['uangmuka'] = $this->input->post("uangmuka");
        // $data['totaltindakan'] = $this->input->post("totaltindakan");
        // $data['totalobat'] = $this->input->post("totalobat");
        // $data['totalharga'] = $this->input->post("totalharga");
        // $data['kurang'] = $this->input->post("kurang");
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

    public function inputUangMuka(){
        $idrawat = $this->input->post('idrawat');
        $totalharga = $this->input->post('totaltindakan') + $this->input->post('totalobat');
        $data['totalharga'] = $totalharga;
        $data['kurang'] = $totalharga - $this->input->post('uangmuka');
        $data['uangmuka'] = $this->input->post('uangmuka');
        $this->rawatmodel->inputUangMuka($data,$idrawat);
        redirect('rawat');
    }

    public function laporan_pdf(){

        $data['data'] = "Ini Laporan PDF";
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->filename = "laporan-klinikfitria.pdf";
        $this->pdf->load_view('v_laporan_pdf', $data);
    }

    //=================================== RAWAT TINDAKAN ===============================//
    public function rawattindakan(){
        $url = 'http://rosihanari.net/api/api.php?get=dokter';
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
        $data['dokter'] = $data;
        $data['rawat'] = $this->rawatmodel->rawat();
        $data['tindakan'] = $this->rawatmodel->tindakan();
        $data['rawattindakan'] = $this->rawatmodel->rawattindakan();

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawattindakan.php',$data);
    }
    
    public function addRawatTindakan(){
        $data['idrawat'] = $this->input->post('idrawat');
        $data['idtindakan'] = $this->input->post('tindakan');
        $data['namadokter'] = $this->input->post('dokter');
        $data['jumlah'] = $this->input->post('jumlah');
        $harga = $this->rawatmodel->get_harga_tindakan($this->input->post('tindakan'))[0]->biaya;
        $data['harga'] = $this->input->post('jumlah') * $harga;
        $this->rawatmodel->addRawatTindakan($data);

        // UPDATE TOTAL TINDAKAN KE MODUL RAWAT
        $idrawat = $this->input->post('idrawat');
        $data = $this->rawatmodel->get_sum_harga($idrawat);
        $totaltindakan = $this->rawatmodel->get_sum_harga($idrawat)[0]->total;
        $data2['totaltindakan'] = $totaltindakan;
        $this->rawatmodel->updateTblRawat($data2, $idrawat);

        // INPUT UANG MUKA
        redirect("rawat/rawattindakan");

    }
    
    public function editRawatTindakan(){
        $id = $this->input->post('idrawattindakan');

        $data['idrawat'] = $this->input->post('idrawat');
        $data['idtindakan'] = $this->input->post('tindakan');
        $data['namadokter'] = $this->input->post('dokter');
        $data['jumlah'] = $this->input->post('jumlah');
        $harga = $this->rawatmodel->get_harga_tindakan($this->input->post('tindakan'))[0]->biaya;
        $data['harga'] = $this->input->post('jumlah') * $harga;
        $this->rawatmodel->editRawatTindakan($data, $id);

        // UPDATE TOTAL TINDAKAN KE MODUL RAWAT
        $idrawat = $this->input->post('idrawat');
        $data = $this->rawatmodel->get_sum_harga($idrawat);
        $totaltindakan = $this->rawatmodel->get_sum_harga($idrawat)[0]->total;
        $data2['totaltindakan'] = $totaltindakan;
        $this->rawatmodel->updateTblRawat($data2, $idrawat);
        redirect("rawat/rawattindakan");

    }
    
    public function deleteRawatTindakan(){
        $id = $this->input->post("idrawattindakan");
        $this->rawatmodel->deleterawattindakan($id);
        redirect("rawat/rawattindakan");
    }

    //=================================== RAWAT OBAT ===============================//
    public function rawatobat(){
        $data['obat'] = $this->rawatmodel->get_obat();
        $data['rawatobat'] = $this->rawatmodel->rawatobat();
        $data['rawat'] = $this->rawatmodel->rawat();

        $this->load->view("template/head.php");
        $this->load->view("template/topnav.php");
        $this->load->view('rawat/v_rawatobat.php',$data);
    }

    public function addRawatObat(){
        $data['idrawat'] = $this->input->post('idrawat');
        $data['idobat'] = $this->input->post('obat');
        $data['jumlah'] = $this->input->post('jumlah');
        $harga = $this->rawatmodel->get_harga_obat($this->input->post('obat'))[0]->harga;
        $data['totalrawatobat'] = $this->input->post('jumlah') * $harga;
        $this->rawatmodel->addRawatObat($data);

        // UPDATE TOTAL OBAT KE MODUL RAWAT
        $idrawat = $this->input->post('idrawat');
        $data = $this->rawatmodel->get_sum_harga_obat($idrawat);
        $totalobat = $this->rawatmodel->get_sum_harga_obat($idrawat)[0]->total;
        $data2['totalobat'] = $totalobat;
        $this->rawatmodel->updateTblRawat($data2, $idrawat);
        redirect("rawat/rawatobat");
    }
    
    public function editRawatObat(){
        $id = $this->input->post('idrawatobat');
        $data['idrawat'] = $this->input->post('idrawat');
        $data['idobat'] = $this->input->post('obat');
        $data['jumlah'] = $this->input->post('jumlah');
        $harga = $this->rawatmodel->get_harga_obat($this->input->post('obat'))[0]->harga;
        $data['totalrawatobat'] = $this->input->post('jumlah') * $harga;
        $this->rawatmodel->editRawatObat($data, $id);

        // UPDATE TOTAL OBAT KE MODUL RAWAT
        $idrawat = $this->input->post('idrawat');
        $data = $this->rawatmodel->get_sum_harga_obat($idrawat);
        $totalobat = $this->rawatmodel->get_sum_harga_obat($idrawat)[0]->total;
        $data2['totalobat'] = $totalobat;
        $this->rawatmodel->updateTblRawat($data2, $idrawat);
        redirect("rawat/rawatobat");
    }

    //=================================== FUNCTION UPDATE MODUL RAWAT ================================// 

    // public function totalharga(){
    //     $this->input
    // }

}