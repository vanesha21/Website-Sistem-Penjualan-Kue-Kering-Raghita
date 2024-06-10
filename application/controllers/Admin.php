<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();

		if ($this->session->userdata["role"] !== 'Admin') {
			redirect("/login"); die();
		}

		$this->load->model("M_Admin");
	}

	public function index()
	{
		$data['title'] = "Admin";
		$data['all_produk'] = $this->M_Admin->read_all_produk();

		$this->load->view('templates/V_Header', $data);
		$this->load->view('V_Admin', $data);
		$this->load->view('templates/V_Footer');
	}

	public function hapus($id) 
	{ 
		$this->M_Admin->delete_produk($id); 
		redirect("/admin");
	}
}