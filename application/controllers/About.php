<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
		$data['title'] = "About";
		
		$this->load->view('templates/V_Header', $data);
		$this->load->view('V_About');
		$this->load->view('templates/V_Footer');
	}
}