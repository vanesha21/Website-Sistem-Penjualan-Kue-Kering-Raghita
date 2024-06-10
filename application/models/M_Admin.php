<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function read_all_produk() { return $this->db->query("SELECT * FROM produk;")->result_array(); }

    function delete_produk($id) { $this->db->query("DELETE FROM produk WHERE id='$id'; "); }
}