<?php
defined('BASEPATH') or exit('No direct script access allowed');
// bukuModel yang menghubungkannya dengan tabel_buku
class pasienModel extends CI_Model
{
    // Proses awal 
    function __construct()
    {
        $this->load->database(); //untuk memanggil yaitu load database
    }
    function get_daftar_pasien() //Membuat fungsi untuk memanggil tabel pasien
    {
        return $this->db->get('pasien')->result_array(); //result array untuk memanggil seluruh data
    }
    function get_detail_pasien($a) //Membuat fungsi untuk memanggil tabel passien
    {
        $this->db->where('idpasien', $a); //dengan variabel a yg berisi id
        return $this->db->get('pasien')->row_array(); //row array untuk memanggil 1 data
    }
    function insertP($a) //membuat fungsi insert untuk input data
    {
        $data = [  //variabel data yang berisi input id,nama,alamat,tgl lahir,telepon
            'nama' => $a['nama'],
            'alamat' => $a['alamat'],
            'tgllahir' => $a['tgllahir'],
            'notelp' => $a['notelp']
        ];
        return $this->db->insert('pasien', $data);
    } //setelah di isi variabel data akan masuk kedalam tabel Pasisen
    function updateP($a, $id) //membuat fungsi update untuk update data pasien
    {
        $data = [
            'nama' => $a['nama'],
            'alamat' => $a['alamat'],
            'tgllahir' => $a['tgllahir'],
            'notelp' => $a['notelp']
        ];
        $this->db->where('idpasien', $id);
        return $this->db->update('pasien', $data);
    }
    function deleteP($a) //membuat fungsi delete untuk delete data pasien
    {
        $this->db->where('idpasien', $a);
        return $this->db->delete('pasien');
    }
    // public function ambil_data($keyword = null) //Membuat fungsi ambil_data dengan keyword awal null
    // {
    //     //menyeleksi seluruh data pada tabel_buku 
    //     $this->db->select('*');
    //     $this->db->from('pasien');
    //     /*jika keyword awal kosong maka digunakan query like
    //     query like menyeleksi data berdasarkan nilai kemiripan dari field yang dipilih */
    //     if (!empty($keyword)) {
    //         $this->db->like('idpasien', $keyword); //nilai yang diambil melalui field idpasien
    //     } else {
    //         $this->db->like('nama', $keyword); //atau nilai yang diambil melalui field nama
    //     }
    //     //Memanggil seluruh data yang telah diseleksi
    //     return $this->db->get()->result_array();
    // }
    // public function get_newid($auto_id, $prefix)
    // {
    //     $newid = substr($auto_id, 1, 4);
    //     $tambah = (int)$newid + 1;
    //     if (strlen($tambah) == 1) {
    //         $idpasien = $prefix . "000" . $tambah;
    //     } else if (strlen($tambah) == 2) {
    //         $idpasien = $prefix . "00" . $tambah;
    //     } else if (strlen($tambah) == 3) {
    //         $idpasien = $prefix . "0" . $tambah;
    //     } else if (strlen($tambah) == 4) {
    //         $idpasien = $prefix . $tambah;
    //     }
    //     return $idpasien;
    // }
}
