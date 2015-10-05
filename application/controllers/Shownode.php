<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shownode extends CI_Controller {
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('page/showmynodesemail');
		$this->load->view('templates/footer');
	}
	
	public function showList(){
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required|max_length[50]|valid_email');
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors',$this->form_validation->error_array());
			redirect('/Shownode/');
		}
		else{
			$data=array(
					'knoten' => ((new Ffrouter)->getNodesByEmail($this->input->post('email'))),
			);
			
			$this->load->view('templates/header');
			$this->load->view('page/showmynodes',$data);
			$this->load->view('templates/footer');
		}
	}
}