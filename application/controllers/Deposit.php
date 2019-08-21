<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit extends CI_Controller {

	public function index(){

		$this->load->view('layout/header');
		$this->load->view('Deposit');
		$this->load->view('layout/footer');
	
	}


}
