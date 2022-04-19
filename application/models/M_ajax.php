<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_ajax extends CI_Model { 
    var $table = 'obat'; 
    var $column_order = array('idobat', 'nama','harga'); //set column field database for datatable orderable 
    var $column_search = array('idobat', 'nama','harga'); //set column field database for datatable orderable 
    // var $column_search = array('FirstName','LastName','phone','address','city','country'); //set column field database for datatable searchable 
    var $order = array('idobat' => 'asc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    public function insert_dummy($data){
        $this->db->insert("obat", $data);
    }
 
    private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
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