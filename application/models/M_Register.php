<?php 
class M_Register extends CI_Model {
	public function __construct(){
        parent::__construct();
	}
	
	function create_register() {
		$username = $this->input->post("username");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$cpassword = $this->input->post("cpassword");
		
		if ($password === $cpassword) {
			$password = md5($password);
			$this->db->query("INSERT INTO user VALUES (NULL, '$username', '$email', '$password', 'User');");
			return 1;
		} else {
			return 0;
		}

	}
}
?>