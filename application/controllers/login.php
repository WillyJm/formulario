<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	
	public function validar()
	{
		if($this->input->post("usuario") == "william" &&
			$this->input->post("pass") == "12345"){
			echo "Usuario valido";
		}else{
			echo "Error en usuario o contraseña";
		}
	}
}
