<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("M_Edit");
	}

	public function index($id, $gambar_lama)
	{
		$data['title'] = "Edit Produk";
        $data['id'] = $id;
        $data['gambar_lama'] = $gambar_lama;
		$data['produk'] = $this->M_Edit->read_produk_by_id($id);

		$this->load->view('templates/V_Header', $data);
		$this->load->view('V_Edit', $data);
		$this->load->view('templates/V_Footer');
	}

	public function aksi_edit()
	{ 
        if($_FILES['gambar']['name'] !== "") {
            if (unlink("./assets/img/" . $this->input->post("gambar_lama"))) {
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['max_width']            = 2048;
                $config['max_height']           = 1024;
                $this->load->library('upload', $config);
                $this->upload->do_upload('gambar');
        
                $gambar = $this->upload->data()['file_name'];
            } else {
                echo "gagal dihapus";
            }
        } else {
            $gambar = $this->input->post("gambar_lama");
        }

        $this->M_Edit->update_produk($gambar);

        redirect("/admin");
	}
}