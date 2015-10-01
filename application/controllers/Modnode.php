<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modnode extends CI_Controller {
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('page/modnode');
		$this->load->view('templates/footer');
	}
	
	public function get(){
		$this->form_validation->set_rules('routerkey', 'Router Schlüssel', 'trim|required|callback_routername_check|min_length[64]|max_length[64]|regex_match[/[0-9a-f]{64}/]');
		#trim|required|is_unique[knoten_lauenburg.key]|min_length[64]|max_length[64]|regex_match[/[0-9a-f]{64}/]
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error',$this->form_validation->error_array());
			redirect('/modnode/');
		}
		else{

			$routerdata=(new Ffrouter())->getRouterByKey($this->input->post('routerkey'));
			$this->session->set_flashdata('routerdata',$routerdata);
			redirect('/modnode/getloaded');
		}
	}
	
	public function getloaded(){
		$routerdata=$this->session->flashdata('routerdata');
		if(!empty($routerdata)){
			$data=array(
					'routerdata'	=> $routerdata,
					'errors'		=> $this->session->flashdata('errors'),
			);
			$this->load->view('templates/header');
			$this->load->view('page/modnodeedit',$data);
			$this->load->view('templates/footer');
		}
		else{
			redirect('/modnode/get');
		}
	}
	
	public function checkmodify(){
		$oldroutername=(new Ffrouter)->getNameByKey($this->input->post('routerkey'));
		
		if($oldroutername==$this->input->post('routername')){
			$unique="";
		}
		else{
			$unique="|is_unique[knoten_lauenburg.routername]";
		}
		
		$this->form_validation->set_rules('routername', 'Name des Knotens', 'trim|required|max_length[32]|regex_match[/[a-zA-Z0-9]{1,32}/]|callback_routername_check'.$unique);
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required|max_length[50]|valid_email');
		$this->form_validation->set_rules('routerkey', 'Router Schlüssel', 'trim|required|min_length[64]|max_length[64]|regex_match[/[0-9a-f]{64}/]');
		$this->form_validation->set_rules('routerposition', 'Standort des Knotens', 'trim|required|max_length[500]');
		
		$data=array(
				'routerdata' => array(
						'id'				=> $this->input->post('id'),
						'routername' 		=> $this->input->post('routername'),
						'email' 			=> $this->input->post('email'),
						'key'		 		=> $this->input->post('routerkey'),
						'location'		 	=> $this->input->post('routerposition'),
				),
		);

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors',$this->form_validation->error_array());
			$this->session->set_flashdata('routerdata',json_decode(json_encode($data['routerdata'])));
			redirect('/Knotenbearbeiten/getloaded');
		}
		else{
			$ffrouter = new Ffrouter();
			$ffrouter->modify($data['routerdata']);
			$this->load->view('editsuccess',$data);
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