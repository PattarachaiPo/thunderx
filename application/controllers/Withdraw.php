<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraw extends CI_Controller {

	public function index(){

		$this->load->view('layout/header');
		$this->load->view('withdraw');
		$this->load->view('layout/footer');
	
	}


}
