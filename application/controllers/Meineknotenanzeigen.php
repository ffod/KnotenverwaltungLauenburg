<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meineknotenanzeigen extends CI_Controller {
	public function index(){
		$this->load->view('meineknotenanzeigen');
	}
	
	public function showList(){
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required|max_length[50]|valid_email');
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error',$this->form_validation->error_array());
			echo "falsche mail";
		}
		else{
			#var_dump((new Ffrouter)->getNodesByEmail("kai.zemke@zemvol.de"));
			$data=array(
					'knoten' => ((new Ffrouter)->getNodesByEmail("kai.zemke@zemvol.de")),
			);
			$this->load->view('knotenliste',$data);
		}
	}
}