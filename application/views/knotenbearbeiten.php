<?php 
$errors=$this->session->flashdata('error');
$data=$this->session->flashdata('data');
#echo "<pre>";
#var_dump($errors);
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
  		<li role="presentation" class="active"><a href="<?php echo site_url("/Knotenbearbeiten/");?>">Knoten bearbeiten</a></li>
  		<li role="presentation" class="enabled"><a href="<?php echo site_url("/Knotenloeschen/");?>">Knoten löschen</a></li>
  		<li role="presentation" class="enabled"><a href="<?php echo site_url("/Meineknotenanzeigen/");?>">Meine Knoten anzeigen</a></li>
	</ul>
	<h2>Knoten bearbeiten:</h2>
	<br />
	<form action="<?php echo site_url("knotenbearbeiten/get")?>" method="post">
	<table style="width:100%">
			<tr>
				<td style="padding: 5px;">Knotenschlüssel:</td>
				<td style="padding: 5px;"><input class="form-control" type="text" size='35' name="routerkey" value="" /></td>
			</tr>
			<?php 
				if(isset($errors['routerkey'])){
					echo "<tr><td align=\"right\" style=\"padding: 5px;\" colspan=\"2\">";
					echo "<span class=\"label alert-warning\" role=\"alert\">".$errors['routerkey']."</span>";
					echo "</tr></td>";
				}
			?>
			<tr>
				<td colspan="2">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" class="btn btn-default" value="Bearbeiten" /></td>
			</tr>
	</table>
	</form>
	</div>
</body>
</html>