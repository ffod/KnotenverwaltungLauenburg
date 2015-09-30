<?php 
	$errors=$this->session->flashdata('error');
	$data=$this->session->flashdata('data');
	#var_dump($errors);
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
  		<li role="presentation" class="active"><a href="<?php echo site_url("/Knotenbearbeiten/");?>">Knoten bearbeiten</a></li>
  		<li role="presentation" class="enabled"><a href="<?php echo site_url("/Knotenloeschen/");?>">Knoten löschen</a></li>
  		<li role="presentation" class="enabled"><a href="<?php echo site_url("/Meineknotenanzeigen/");?>">Meine Knoten anzeigen</a></li>
	</ul>
	<br />
	<div id="body">
		<div class="alert alert-success" role="alert">
			<h3>Fertig!</h3>	
			<p>Knoten wurde erfolgreich bearbeitet.</p>
		</div>
  	</div>
</body>
</html>