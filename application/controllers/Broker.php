<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Broker extends CI_Controller {

	public function index(){

		$this->load->view('layout/header');
		$this->load->view('broker');
		$this->load->view('layout/footer');
	
	}


}
