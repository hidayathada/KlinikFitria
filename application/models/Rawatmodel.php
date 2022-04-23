<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rawatmodel extends CI_Model{

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function obat(){
        return $this->db->get('obat')->result();
    }
    
    public function tindakan(){
        return $this->db->get('tindakan')->result();
    }
    
    
    public function get_pasien(){
        return $this->db->get('pasien')->result();
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

public function edit_rawat($data, $id){
    $this->db->where('idrawat',$id);
    return $this->db->update('rawat', $data);
}

public function deleterawat($id){
    $this->db->where('idrawat',$id);
    return $this->db->delete('rawat');
}

}