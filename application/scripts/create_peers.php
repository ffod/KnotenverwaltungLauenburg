#!/usr/bin/php
<?php
	if(php_sapi_name()=='cli'){
		$host="localhost";
		$username="ff_lauenburg";
		$password="##warcraft81##";
		$database="ff_lauenburg";
		
		$filefolder="/opt/fastd/lauenburg/peers";
		$logfile="/opt/fastd/lauenburg/create_peers.log";
	
		
		$db=new mysqli($host,$username,$password,$database);
		
		if($db->connect_errno > 0){
			die('Unable to connect to database [' . $db->connect_error . ']');
		}
		else{
			$sql ="SELECT * FROM knoten_lauenburg;";
			
			if(!$result = $db->query($sql)){
				die('There was an error running the query [' . $db->error . ']');
			}
			else{
				while($row = $result->fetch_assoc()){
					if(file_exists($filefolder."/".$row['routername']) && $row['edit']==0){
						echo "Peer: \"".$row['routername']."\" wird ignoriert - existiert bereits.\n";
						#file_put_contents($logfile,date("r").": Peer: \"".$row['routername']."\" wird ignoriert - existiert bereits.\n",FILE_APPEND);
					}
					else{
						echo "Peer: \"".$row['routername']."\" neue Datei oder Update\n";
						$file=fopen($filefolder."/".$row['routername'], "w") or die("Unable to open file: ".$filefolder."/".$row['routername']);
						
						fwrite($file, "#Routername: ".$row['routername']."\n");
						fwrite($file, "key \"".$row['key']."\";\n");
					
						fclose($file);
						
						file_put_contents($logfile,date("r").": Peer: \"".$row['routername']."\" neue Datei oder Update\n",FILE_APPEND);
						
						$sql ="UPDATE knoten_lauenburg SET edit=0 WHERE id=".$row['id'].";";
						$db->query($sql);
					}
				}
			}
		}
		
		$files = array();
		
		//Check existing files against database
		foreach (scandir($filefolder) as $file) {
			if ('.' === $file) continue;
			if ('..' === $file) continue;
			
			$sql ="SELECT * FROM knoten_lauenburg WHERE routername='".$file."';";
			
			if(!$result = $db->query($sql)){
				die('There was an error running the query [' . $db->error . ']');
			}
			else{
				if($result->num_rows>0){
					echo "Peer: \"".$file."\" existiert in der Datenbank\n";
					#file_put_contents($logfile,date("r").": Peer: Datei \"".$file."\" existiert ebenfalls in der Datenbank\n",FILE_APPEND);
				}
				else{
					echo "Peer: \"".$file."\" existiert nicht mehr in der Datenbank, lösche Peer file.\n";
					file_put_contents($logfile,date("r").": Peer: Datei \"".$file."\" existiert nicht mehr in der Datenbank, lösche Peer file.\n",FILE_APPEND);
					unlink($filefolder."/".$file);
				}
			}
		}
	}
	else{
		echo "Finger weg!!";
	}
?> 