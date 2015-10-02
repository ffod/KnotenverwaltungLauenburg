<?php 
class Ffrouter extends CI_Model {
	
	private $filefolder="/opt/fastd/lauenburg/peers";
	private $basicDelMailPath="/var/www/vhost_freifunk/codeigniter/application/scripts/basic.maill.del.html";
	private $basicDelMail2Path="/var/www/vhost_freifunk/codeigniter/application/scripts/basic.mail2.del.html";
	private $basicAddMailPath="/var/www/vhost_freifunk/codeigniter/application/scripts/basic.maill.add.html";
	private $logfile="/opt/fastd/lauenburg/create_peers.log";
	
	//Constructor
	function __construct(){
		// Call the Model constructor
		parent::__construct();
	}
	
	//Getters
	public function getFilefolder(){
		return $this->filefolder;
	}
	
	public function getBasicDelMailPath(){
		return $this->basicDelMailPath;
	}
	
	public function getBasicDelMail2Path(){
		return $this->basicDelMail2Path;
	}
	
	public function getBasicAddMailPath(){
		return $this->basicAddMailPath;
	}
	
	public function getLogfile(){
		return $this->logfile;
	}
    
	//Setters
	
	//Rest
    function add($_data){
    	$this->db->insert('knoten_lauenburg',$_data);
    }
    
    function getNodesByEmail($_email){
    	$query=$this->db->get_where('knoten_lauenburg', array('email' => $_email));
    	$result=$query->result();
    	return $result;
    }
    
    
    function getRouterByKey($_routerkey){
    	$query=$this->db->get_where('knoten_lauenburg', array('key' => $_routerkey), 1);
    	$result=$query->result();
    	return $result[0];
    }
    
    function getNameByKey($_key){
    	$query=$this->db->get_where('knoten_lauenburg', array('key' => $_key), 1);
    	$result=$query->result();
    	return $result[0]->routername;
    }
    
    function getNameByDelHash($_hash){
    	$query=$this->db->get_where('knoten_lauenburg', array('delhash' => $_hash), 1);
    	$result=$query->result();
    	return $result[0]->routername;
    }
    
    function getEmailByKey($_key){
    	$query=$this->db->get_where('knoten_lauenburg', array('key' => $_key), 1);
    	$result=$query->result();
    	return $result[0]->email;
    }
    
    function getDelHashByKey($_key){
    	$query=$this->db->get_where('knoten_lauenburg', array('key' => $_key), 1);
    	$result=$query->result();
    	return $result[0]->delhash;
    }
    
    function sendDeleteMail($_key){
    	$toMail=$this->getEmailByKey($_key);
    	$delHash=$this->getDelHashByKey($_key);
    	$routername=$this->getNameByKey($_key);
    	$message=file_get_contents($this->getBasicDelMailPath());
    	$message=str_replace("{KNOTENNAME}",$routername,$message);
    	$message=str_replace("{BESTÄTIGUNGSCODE}",$delHash,$message);
    	$this->email->from('knotenverwaltung@freifunk-lauenburg.de', 'Knotenverwaltung');
    	$this->email->to($toMail);
    	$this->email->subject('[Freifunk Lauenburg] Knoten löschen');
    	$this->email->message($message);
    	$this->email->send();
    }
    
    function sendDeleteMail2($_key){
    	$toMail=$this->getEmailByKey($_key);
    	$delHash=$this->getDelHashByKey($_key);
    	$routername=$this->getNameByKey($_key);
    	$message=file_get_contents($this->getBasicDelMail2Path());
    	$message=str_replace("{KNOTENNAME}",$routername,$message);
    	$message=str_replace("{BESTÄTIGUNGSCODE}",$delHash,$message);
    	$this->email->from('knotenverwaltung@freifunk-lauenburg.de', 'Knotenverwaltung');
    	$this->email->to($toMail);
    	$this->email->subject('[Freifunk Lauenburg] Knoten löschen');
    	$this->email->message($message);
    	$this->email->send();
    }
    
    function sendAddMail($_key){
    	$toMail=$this->getEmailByKey($_key);
    	$routername=$this->getNameByKey($_key);
    	$message=file_get_contents($this->getBasicAddMailPath());
    	$message=str_replace("{KNOTENNAME}",$routername,$message);
    	$message=str_replace("{KNOTENSCHLUESSEL}",$_key,$message);
    	$this->email->from('knotenverwaltung@freifunk-lauenburg.de', 'Knotenverwaltung');
    	$this->email->to($toMail);
    	$this->email->subject('[Freifunk Lauenburg] Neuer Knoten');
    	$this->email->message($message);
    	$this->email->send();
    }
    
    function modify($_data){
	$data=$_data;
	$data['edit']=1;
    	$this->db->replace('knoten_lauenburg', $data);
    }
    
    function delHashExists($_delhash){
    	$this->db->where('delhash',$_delhash);
    	$query=$this->db->get('knoten_lauenburg');
    	if ($query->num_rows() > 0){
    		return TRUE;
    	}
    	else{
    		$this->form_validation->set_message('delhash_exists', 'Ungültiger Bestätigungscode.');
    		return FALSE;
    	}
    }
    
    function delByHash($_hash){
    	$routername=$this->getNameByDelHash($_hash);
    	$this->db->delete('knoten_lauenburg', array('delhash' => $_hash));
    	if(file_exists($this->getFileFolder()."/".$routername)){
    		file_put_contents($this->getLogfile(),date("r").": Peer: \"".$routername."\" wurde gelöscht. Lösche Peerfile\n",FILE_APPEND);
    		unlink($this->getFileFolder()."/".$routername);
    	}
    	else{
    		file_put_contents($this->getLogfile(),date("r").": Peer: \"".$routername."\" konnte nicht gelöscht werden da Peerfile nicht existiert\n",FILE_APPEND);
    	}
    }
    
    function setDelHashForRouter($_key){
    	$hash=hash('md5', mt_rand());
    	
    	$data=array(
    			'delhash' => $hash,
    	);
		$this->db->where('key', $_key);
		$this->db->update('knoten_lauenburg', $data);
		return $hash;
    }   
}
?>