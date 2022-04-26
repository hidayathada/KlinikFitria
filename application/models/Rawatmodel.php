<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatmodel extends CI_Model{

    public function num_obat(){
        $this->db->select('*');
        $this->db->from('obat');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    public function get_pasien_bulan_ini(){
        $this->db->select('*');
        $this->db->from('rawat');
        $this->db->where('MONTH(tglrawat)', date('m'));
        $this->db->where('YEAR(tglrawat)', date('Y'));
        $this->db->join('pasien', 'rawat.idpasien = pasien.idpasien');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    
    public function get_tindakan_bulan_ini(){
        $this->db->select('*');
        $this->db->from('rawat');
        $this->db->where('MONTH(tglrawat)', date('m'));
        $this->db->where('YEAR(tglrawat)', date('Y'));
        $this->db->join('rawattindakan', 'rawat.idrawat = rawattindakan.idrawat');
        $query = $this->db->get()->num_rows();
        return $query;
    }
    
    public function obat(){
        return $this->db->get('obat')->result();
    }
    
    public function get_rawat(){
        return $this->db->get('rawat')->result();
    }
    
    public function row_rawat(){
        return $this->db->get('rawat')->num_rows();
    }

    public function id_rawat(){
        return $this->db->get('pasien')->result();
    }
    
    public function max_rawat(){
        $this->db->select_max("idrawat");
        $this->db->from("rawat");
        $query = $this->db->get()->result_array();
        return $query;
    }
    
    // ============================================= MODUL RAWAT ================================= //
    public function rawat(){
        $this->db->select("*");
        $this->db->from("rawat");
        $this->db->join("pasien", "rawat.idpasien = pasien.idpasien");
        $query = $this->db->get()->result();
        return $query;
    }

    public function add_rawat($data){
        return $this->db->insert('rawat', $data);
    }

    public function get_pasien(){
        return $this->db->get('pasien');
    }

    public function edit_rawat($data, $id){
        $this->db->where('idrawat',$id);
        return $this->db->update('rawat', $data);
    }

    public function deleterawat($idrawat){
        return $this->db->delete('rawat', array('idrawat' =>$idrawat));
    }

    public function inputUangMuka($data, $id){
        return $this->db->update('rawat', $data, array('idrawat' => $id));
    }

    public function chartDokter(){
        // $query = "SELECT namadokter AS dokter, COUNT(*) AS jumlahdokter FROM rawattindakan
        //             GROUP BY namadokter";
        $query = "SELECT namadokter, Count(*) AS jumlahdokter FROM rawattindakan GROUP BY namadokter";
        $result = $this->db->query($query)->result();
        return $result;
    }

    // ============================================== RAWAT TINDAKAN ================================//
    public function rawattindakan(){
        $this->db->select("*");
        $this->db->from("rawattindakan");
        // $this->db->join("rawat", "rawattindakan.idrawat = rawat.idrawat");
        $this->db->join("tindakan", "rawattindakan.idtindakan = tindakan.idtindakan");
        $query = $this->db->get()->result();
        return $query;
    }
    
    public function tindakan(){
        return $this->db->get('tindakan')->result();
    }
    
    public function get_harga_tindakan($id){
        $this->db->where('idtindakan', $id);
        return $this->db->get('tindakan')->result();
    }

    public function get_sum_harga($id){
        $data = $this->db->query("SELECT SUM(harga) AS total FROM rawattindakan WHERE idrawat=$id")->result();
        // $this->db->select_sum('harga');
        // $query = $this->db->get('rawattindakan');
        return $data;
    }

    public function addRawatTindakan($data){
        return $this->db->insert('rawattindakan', $data);
    }
    
    public function editRawattindakan($data, $id){
        return $this->db->update('rawattindakan', $data, array('idrawattindakan' => $id));
    }
    
    public function deleterawattindakan($idrawat){
        return $this->db->delete('rawattindakan', array('idrawattindakan' =>$idrawat));
    }
    
    public function updateTblRawat($data, $id){
        return $this->db->update('rawat', $data, array('idrawat' => $id));
    }
    // ============================================== RAWAT OBAT ================================//
    public function rawatobat(){
        $this->db->select("*");
        $this->db->from("rawatobat");
        // $this->db->join("rawat", "rawatobat.idrawat = rawat.idrawat");
        $this->db->join("obat", "rawatobat.idobat = obat.idobat");
        $query = $this->db->get()->result();
        return $query;
    }

    public function get_harga_obat($id){
        $this->db->where('idobat', $id);
        return $this->db->get('obat')->result();
    }

    public function get_sum_harga_obat($id){
        $data = $this->db->query("SELECT SUM(totalrawatobat) AS total FROM rawatobat WHERE idrawat=$id")->result();
        // $this->db->select_sum('harga');
        // $query = $this->db->get('rawattindakan');
        return $data;
    }

    public function addRawatObat($data){
        return $this->db->insert('rawatobat', $data);
    }
    
    public function editRawatObat($data, $id){
        return $this->db->update('rawatobat', $data, array('idrawatobat' => $id));
    }

    public function get_obat(){
        return $this->db->get('obat')->result();
    }
}