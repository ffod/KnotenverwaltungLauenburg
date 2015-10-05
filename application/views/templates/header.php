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

	<!-- My Own CSS -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/own.css');?>">
	
	<title>Freifunk Herzogtum Lauenburg</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container container-fluid">   
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
            	</button>
            <!--  <a class="navbar-brand" href="#">&nbsp;</a> -->
          </div>
            <div id="navbar" class="navbar-collapse collapse">
            	 <ul class="nav navbar-nav">
			        <li class="enabled"><a href="<?php echo site_url('Start');?>">Start</a></li>
			        <li class="dropdown">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Knotenverwaltung <span class="caret"></span></a>
			            </a>
			            <ul class="dropdown-menu">
			               <li><a href="<?php echo site_url('Newnode');?>">Neuer Knoten</a></li>
			               <li><a href="<?php echo site_url('Modnode');?>">Knoten bearbeiten</a></li>
			               <li><a href="<?php echo site_url('Delnode');?>">Knoten löschen</a></li>
			               <li><a href="<?php echo site_url('Shownode');?>">Meine Knoten Anzeigen</a></li>
			            </ul>
         			</li>
         			<li class="dropdown enabled">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			               Mitmachen
			               <b class="caret"></b>
			            </a>
			            <ul class="dropdown-menu">
			               <li><a target="_blank" href="http://firmware.lauenburg.ffod.org/">Firmware</a></li>
			            </ul>
         			</li>
         			<!-- 
         			<li class="dropdown enabled">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
			               Links
			               <b class="caret"></b>
			            </a>
			            <ul class="dropdown-menu">
			               <li><a href="#">Test</a></li>
			            </ul>
         			</li>
         			 -->
			    </ul>
            </div>
        </div>
    </nav>
    
    