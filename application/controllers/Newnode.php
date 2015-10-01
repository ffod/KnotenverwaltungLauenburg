<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newnode extends CI_Controller {
	
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('page/newnode');
		$this->load->view('templates/footer');
	}
	
	public function addcheck(){	
		$this->form_validation->set_rules('routername', 'Name des Knotens', 'trim|required|max_length[32]|is_unique[knoten_lauenburg.routername]|callback_routername_check|regex_match[/[0-9a-f]{1,32}/]');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required|max_length[50]|valid_email');
		$this->form_validation->set_rules('routerkey', 'Router Schlüssel', 'trim|required|min_length[64]|max_length[64]|is_unique[knoten_lauenburg.key]|regex_match[/[0-9a-f]{64}/]');
		$this->form_validation->set_rules('routerposition', 'Standort des Knotens', 'trim|required|max_length[500]');
		
		$data=array(
				'routername' 		=> $this->input->post('routername'),
				'email' 			=> $this->input->post('email'),
				'key'		 		=> $this->input->post('routerkey'),
				'location'		 	=> $this->input->post('routerposition'),
		);
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error',$this->form_validation->error_array());
			$this->session->set_flashdata('data',$data);
			redirect('/Newnode/');
		}
		else{
			#$ffrouter = new Ffrouter();
			#$ffrouter->add($data);
			(new Ffrouter)->add($data);
			(new Ffrouter)->sendAddMail($data['key']);
			$this->load->view('templates/header');
			$this->load->view('page/newnodesuccess');
			$this->load->view('templates/footer');
		}
	}
	
	//Form validation callback functions
	public function routername_check($str){
		if (preg_match("/[\ \#\$\%\&]/",$str)){
			$this->form_validation->set_message('routername_check', 'Der Knotenname darf keine Whitespace-Zeichen (wie z.B. Leerzeichen) oder # enthalten.');
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
}
?>