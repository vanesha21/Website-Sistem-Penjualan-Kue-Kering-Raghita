<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {
    public function __construct() {
        parent::__construct();

        if ($this->session->userdata['username'] == null) {
            redirect("/login");
        }

        $this->load->model("M_Keranjang");
    }

	public function index()
	{
		$data['title'] = "Keranjang";
        $data['all_keranjang'] = $this->M_Keranjang->read_all_keranjang_by_id_user();

		$this->load->view('templates/V_Header', $data);
		$this->load->view('V_Keranjang', $data);
		$this->load->view('templates/V_Footer');
	}

    public function set_jumlah() { $this->M_Keranjang->update_keranjang_by_id(); }

    public function hapus($id_keranjang, $id_user, $id_produk) { $this->M_Keranjang->delete_keranjang_by_id($id_keranjang, $id_user, $id_produk); redirect("/keranjang"); }
}