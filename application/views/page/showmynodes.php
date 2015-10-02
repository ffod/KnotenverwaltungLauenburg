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
		<!-- INSERT STUFF HERE START -->
            <div style="padding-top:15px;" class="col-md-8">
            	<h2>Deine Knoten:</h2>
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
						
					 	echo "<tbody>";
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
					 	echo "</tbody>";
					 	echo "</table>";
					 }
					?>
			</div>
			<div style="padding-top:15px;" class="col-md-8">
				&nbsp;
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
