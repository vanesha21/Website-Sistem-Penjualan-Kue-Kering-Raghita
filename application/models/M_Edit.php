<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Edit extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function read_produk_by_id($id) { return $this->db->query("SELECT * FROM produk WHERE id='$id';")->result_array()[0]; }

    function update_produk($gambar) 
    {
        $id = $this->input->post("id");
        $nama = $this->input->post("nama");
        $harga = $this->input->post("harga");
        $deskripsi = $this->input->post("deskripsi");
        $stok = $this->input->post("stok");

        $sql = "UPDATE produk SET nama='$nama', harga='$harga', deskripsi='$deskripsi', stok='$stok', gambar='$gambar' WHERE id='$id';";
        $this->db->query($sql);
    }
}