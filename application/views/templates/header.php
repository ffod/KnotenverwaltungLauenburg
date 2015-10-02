<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Kai Zemke">
	<meta name="description" content="Freifunk Herzogtum Lauenburg">
	
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>" />
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/portfolio-item.css');?>">

	<title>Freifunk Herzogtum Lauenburg</title>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            	<!-- <img class="image-responsive" style="width:10%;height:10%;" src="<?php echo base_url('/assets/images/logo.png');?>" /> -->
            	<h1 style="display:inline-block;color:#FFFFFF;">Freifunk Herzogtum Lauenburg</h1>
            </div>
        </div>
    </nav>
        <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div style="padding-top:20px;" class="row">
            <div class="col-lg-12">
			    <ul class="nav nav-tabs">
			        <li class="enabled"><a href=""<?php echo site_url('Start');?>">Start</a></li>
			        <li class="dropdown enabled">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			               Knotenverwaltung 
			               <b class="caret"></b>
			            </a>
			            <ul class="dropdown-menu">
			               <li><a href="<?php echo site_url('Newnode');?>">Neuer Knoten</a></li>
			               <li><a href="<?php echo site_url('Modnode');?>">Knoten bearbeiten</a></li>
			               <li><a href="<?php echo site_url('Delnode');?>">Knoten löschen</a></li>
			               <li><a href="<?php echo site_url('Shownode');?>">Meine Knoten Anzeigen</a></li>
			            </ul>
         			</li>
			    </ul>
            </div>
        </div>