<?php
defined('BASEPATH') or exit('No direct script access allowed');
// bukuModel yang menghubungkannya dengan tabel_buku
class obatModel extends CI_Model
{
    // Proses awal 
    function __construct()
    {
        $this->load->database(); //untuk memanggil yaitu load database
    }
    function get_daftar_obat() //Membuat fungsi untuk memanggil tabel pasien
    {
        return $this->db->get('obat')->result_array(); //result array untuk memanggil seluruh data
    }
    function get_detail_obat($a) //Membuat fungsi untuk memanggil tabel passien
    {
        $this->db->where('idobat', $a); //dengan variabel a yg berisi id
        return $this->db->get('obat')->row_array(); //row array untuk memanggil 1 data
    }
    function insertO($a) //membuat fungsi insert untuk input data
    {
        $data = [  //variabel data yang berisi input id,nama,alamat,tgl lahir,telepon
            'idobat' => $a['idobat'],
            'nama' => $a['nama'],
            'harga' => $a['harga']
        ];
        return $this->db->insert('obat', $data);
    } //setelah di isi variabel data akan masuk kedalam tabel Pasisen
    function updateO($a, $id) //membuat fungsi update untuk update data pasien
    {
        $data = [
            'idobat' => $a['idobat'],
            'nama' => $a['nama'],
            'harga' => $a['harga']
        ];
        $this->db->where('idobat', $id);
        return $this->db->update('obat', $data);
    }
    function deleteO($a) //membuat fungsi delete untuk delete data pasien
    {
        $this->db->where('idobat', $a);
        return $this->db->delete('obat');
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
