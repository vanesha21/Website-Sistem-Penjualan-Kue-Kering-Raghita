<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function read_all_produk() { return $this->db->query("SELECT * FROM produk;")->result_array(); }

    function create_keranjang($id_user, $id_produk) 
    {
        if ($this->db->query("INSERT INTO keranjang VALUES (NULL, '$id_user', '$id_produk', '1');")) {
            return 1;
        } else {
            return 0;
        }
    }
}