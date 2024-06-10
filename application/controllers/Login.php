<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
        if ($this->session->userdata('role') == 'User') {
            redirect("/home");
        } else if ($this->session->userdata('role') == 'admin') {
            redirect("/admin");
        }

		$data['title'] = "Login";

		$this->load->view('templates/V_Header', $data);
		$this->load->view('V_Login');
		$this->load->view('templates/V_Footer');
	}

    public function aksi_login() 
    {
        $this->load->model("M_Login");

        $user_data = $this->M_Login->read_user();
        if($user_data !== null) {
            $this->session->set_userdata($user_data);
            if ($this->session->userdata['role'] == 'Admin') {
                redirect("/admin");
            } else {
                redirect("/home");
            }
        } else {
            redirect("/login");
        }
    }
}