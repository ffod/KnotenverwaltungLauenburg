<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delnode extends CI_Controller {
	
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('page/delnode');
		$this->load->view('templates/footer');
	}
	
	public function checkToSendMail(){
		$this->form_validation->set_rules('routerkey', 'Name des Knotens', 'trim|required|callback_router_exists|min_length[64]|max_length[64]|regex_match[/[0-9a-f]{64}/]');
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors',$this->form_validation->error_array());
			redirect('/Delnode/');
		}
		else{
			(new Ffrouter)->setDelHashForRouter($this->input->post('routerkey'));
			(new Ffrouter)->sendDeleteMail2($this->input->post('routerkey'));
			$this->load->view('templates/header');
			$this->load->view('page/mailsend');
			$this->load->view('templates/footer');
		}
	}
	
	public function delete(){
		$delhash=trim($this->uri->segment(3));
		
		if(preg_match('/^[a-f0-9]{32}$/', $delhash) && (new Ffrouter)->delHashExists($delhash)){
			(new Ffrouter)->delByHash($delhash);
			
			$this->load->view('templates/header');
			$this->load->view('page/deletesuccess');
			$this->load->view('templates/footer');
		}
		else{
			redirect('/Delnode');
		}
	}
	
	//Callback functions
	function router_exists($_key){
		$this->db->where('key',$_key);
		$query=$this->db->get('knoten_lauenburg');
		if ($query->num_rows() > 0){
			return TRUE;
		}
		else{
			$this->form_validation->set_message('router_exists', 'Der angegebene Knoten ist uns nicht bekannt.');
			return FALSE;
		}
	}
}