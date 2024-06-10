<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function read_user()
    { 
        $email = $this->input->post("email");
        $password = md5($this->input->post("password"));

        return $this->db->query("SELECT * FROM user WHERE email='$email' AND password='$password';")->result_array()[0]; 
    }
    function delete_produk($id) { $this->db->query("DELETE FROM produk WHERE id='$id'; "); }
}