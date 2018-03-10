<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registro extends CI_Controller {
	
	public function report() 
	{
		$this -> load-> view ('formulario/registro');
	}
}
