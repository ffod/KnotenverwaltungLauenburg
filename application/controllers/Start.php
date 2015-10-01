<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('page/start');
		$this->load->view('templates/footer');
	}
}
?>