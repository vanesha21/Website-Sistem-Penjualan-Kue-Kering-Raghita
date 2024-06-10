<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->model("M_Register");
	}
	public function index()
	{
		$data['title'] = "Register";

		$this->load->view('templates/V_Header', $data);
		$this->load->view('V_Register', $data);
		$this->load->view('templates/V_Footer');
	}
    public function aksi_register()
	{
		$result = $this->M_Register->create_register();
		if ($result == 1) {
			redirect("/login");
		} else {
			redirect("/register");
		}
	}
}
?>