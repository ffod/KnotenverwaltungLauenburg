    <?php 
	$errors=$this->session->flashdata('errors');
	$data=$this->session->flashdata('data');
	#var_dump($errors);
	?>

                
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">
		<!-- INSERT STUFF HERE START -->
            <div class="col-md-8">
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
			<div class="col-md-8">
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
