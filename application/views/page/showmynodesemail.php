    <?php 
	$errors=$this->session->flashdata('error');
	$data=$this->session->flashdata('data');
	#var_dump($errors);
	?>
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div style="padding-top:20px;" class="row">
            <div class="col-lg-12">
			    <ul class="nav nav-tabs">
			        <li class="enabled"><a href="<?php echo site_url('Start');?>">Start</a></li>
			        <li class="active dropdown">
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
                
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">

            <div style="padding-top:15px;" class="col-md-8">
            	<h2>Meine Knoten Anzeigen:</h2>
				<br />
				<form action="<?php echo site_url("Shownode/showlist")?>" method="post">
				<table style="width:100%">
						<tr>
							<td style="padding: 5px;">E-Mail:</td>
							<td style="padding: 5px;"><input class="form-control" type="text" size='35' name="email" value="" /></td>
						</tr>
						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="submit" class="btn btn-default" value="Anzeigen" /></td>
						</tr>
				</table>
				</form>
			</div>
			<div style="padding-top:15px;" class="col-md-4">
				<h3>Deine Knoten!</h3>
				<p>Hier kannst du dir alle auf deine Email Adresse registrierten Knoten anzeigen lassen</p>
			</div>
				<!-- INSERT STUFF HERE END -->
            
        </div>
        <!-- /.row -->
		
        <!-- Related Projects Row -->
        <!-- 
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Mehr zum Thema Freifunk im Herzogtum Lauenburg</h3>
            </div>
            
            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
         -->
        <!-- /.row -->
        <hr>
