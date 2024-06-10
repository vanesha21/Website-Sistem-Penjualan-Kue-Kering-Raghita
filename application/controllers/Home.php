<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("M_Home");
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['all_produk'] = $this->M_Home->read_all_produk();

		$this->load->view('templates/V_Header', $data);
		$this->load->view('V_Home', $data);
		$this->load->view('templates/V_Footer');
	}

	public function about()
	{
		$this->load->view('V_About');
	}

	public function tambah_ke_keranjang($id){
		$barang = $this->model_barang->find($id);

		$data = array(
			'nama' => $produk->nama,
			'qty' => 1,
			'harga' => $produk->harga,
			'deskripsi' => $produk->deskripsi,
			'stok' => $produk->stok
		);
		$this->cart->insert($data);
		redirect('Home');
	}

	public function aksi_tambah_keranjang() {
		if ($this->session->userdata('role') == 'User' ) {
			$id_user = $this->session->userdata("id");
			$id_produk = $this->input->post("id_produk");
			if($this->M_Home->create_keranjang($id_user, $id_produk) == 1) {
				$this->session->set_flashdata(["title" => "Berhasil!", "text" => "Item Berhasil Ditambahkan ke Keranjang!", "icon" => "success", "redirect" => base_url("keranjang")]);
				$this->load->view("templates/V_Swal");
			} else {
				$this->session->set_flashdata(["title" => "Gagal!", "text" => "Item Gagal Ditambahkan ke Keranjang!", "icon" => "warning", "redirect" => ""]);
				$this->load->view("templates/V_Swal");
			}
		} else {
			$this->session->set_flashdata(["title" => "Peringatan!", "text" => "Login terlebih dahulu!", "icon" => "warning", "redirect" => ""]);
			$this->load->view("templates/V_Swal");
		}
	}
}