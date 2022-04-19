<?php
defined('BASEPATH') or exit('No direct script access allowed');
// bukuModel yang menghubungkannya dengan tabel_buku
class M_rawatobat extends CI_Model
{
    function __construct()
    {
        $this->load->database(); //untuk memanggil yaitu load database
    }
    function get_daftar_rawatobat() //Membuat fungsi untuk memanggil tabel pasien
    {
        return $this->db->get('rawatobat')->result_array(); //result array untuk memanggil seluruh data
        return $this->db->get('rawat')->result_array(); //result array untuk memanggil seluruh data
        return $this->db->get('obat')->result_array(); //result array untuk memanggil seluruh data
    }
    function get_detail_rawatobat($a) //Membuat fungsi untuk memanggil tabel passien
    {
        $this->db->where('idrawatobat', $a); //dengan variabel a yg berisi id
        return $this->db->get('rawatobat')->row_array(); //row array untuk memanggil 1 data
        $this->db->where('idrawat', $a); //dengan variabel a yg berisi id
        return $this->db->get('rawat')->row_array(); //row array untuk memanggil 1 data
        $this->db->where('idobat', $a); //dengan variabel a yg berisi id
        return $this->db->get('obat', $a)->row_array(); //row array untuk memanggil 1 data

    }
}
