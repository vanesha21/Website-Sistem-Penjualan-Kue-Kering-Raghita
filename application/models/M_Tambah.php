<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tambah extends CI_Model {
    function create_produk($gambar) {
        $this->load->database();

        $nama = $this->input->post("nama");
        $harga = $this->input->post("harga");
        $deskripsi = $this->input->post("deskripsi");
        $stok = $this->input->post("stok");

        $sql = "INSERT INTO produk(id, nama, harga, deskripsi, stok, gambar) VALUES (NULL, '$nama', '$harga', '$deskripsi', '$stok', '$gambar');";
        $this->db->query($sql);
    }
    
}