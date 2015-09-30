<?php 
	#echo "<pre>";
	#var_dump($knoten);
	#echo "</pre>";
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" />
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-theme.min.css');?>" />
	<script src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
</head>
<body>
	<div id="body">
		<ul class="nav nav-pills">
  		<li role="presentation" class="enabled"><a href="<?php echo site_url("/Neuerknoten/");?>">Neuer Knoten</a></li>
  		<li role="presentation" class="enabled"><a href="<?php echo site_url("/Knotenbearbeiten/");?>">Knoten bearbeiten</a></li>
  		<li role="presentation" class="enabled"><a href="<?php echo site_url("/Knotenloeschen/");?>">Knoten löschen</a></li>
  		<li role="presentation" class="active"><a href="<?php echo site_url("/Meineknotenanzeigen/");?>">Meine Knoten anzeigen</a></li>
	</ul>
	<br />
	<?php
		 if(count($knoten)>0){
		 	echo "<table class=\"table table-hover\">";
		 	echo "<tr>";
		 	echo "<th>";
		 	echo "Knotenname";
		 	echo "</th>";
		 	echo "<th>";
		 	echo "Knotenschlüssel";
		 	echo "</th>";
		 	echo "</tr>";
		 	
		 	foreach($knoten as $router){
		 		echo "<tr>";
			 		echo "<td>";
			 			echo $router->routername;
			 		echo "</td>";
			 		echo "<td>";
			 			echo $router->key;
			 		echo "</td>";
		 		echo "</tr>";
		 	}
		 	echo "</table>";
		 }
	?>	
  </div>
</body>
</html>