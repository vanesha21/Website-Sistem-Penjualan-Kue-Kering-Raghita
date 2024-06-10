<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {
	public function index()
	{
		$data['title'] = "Tambah Produk";

		$this->load->view('templates/V_Header', $data);
		$this->load->view('V_Tambah');
		$this->load->view('templates/V_Footer');
	}

    public function aksi_tambah() 
    { 
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 2048;
        $config['max_height']           = 1024;
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');

        $gambar = $this->upload->data()['file_name'];

        $this->load->model("M_Tambah"); 
        $this->M_Tambah->create_produk($gambar);

        redirect("/admin");
    }
}