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
            	<!-- INSERT STUFF HERE START -->
		        
		        <h2>Schön, daß Du mitmachen möchtest!</h2>
				<p>Bitte trag Deine Informationen hier ein damit wir Deinen Freifunk-Knoten aktivieren können.</p>
				<br />
				<form action="<?php echo site_url("Newnode/addcheck")?>" method="post">
				<table style="width:100%">
					<tr>
						<td style="padding: 5px;">Name des Knotens:</td>
						<td style="padding: 5px;"><input class="form-control" type="text" size='35' name="routername" value="<?php echo (isset($data['routername']) ? $data['routername']:"");?>" /></td>
					</tr>
					<?php 
						if(isset($errors['routername'])){
							echo "<tr><td align=\"right\" style=\"padding: 5px;\" colspan=\"2\">";
							echo "<span class=\"label alert-warning\" role=\"alert\">".$errors['routername']."</span>";
							echo "</tr></td>";
						}
					?>
					<tr>
						<td style="padding: 5px;">E-Mail:</td>
						<td style="padding: 5px;"><input class="form-control" type="text" size="35" name="email" value="<?php echo (isset($data['email']) ? $data['email']:"");?>" /></td>
					</tr>
					<?php 
						if(isset($errors['email'])){
							echo "<tr><td align=\"right\" style=\"padding: 5px;\" colspan=\"2\">";
							echo "<span class=\"label alert-warning\" role=\"alert\">".$errors['email']."</span>";
							echo "</tr></td>";
						}
					?>
					<tr>
						<td style="padding: 5px;">Knotenschlüssel:</td>
						<td style="padding: 5px;"><input class="form-control" type="text" size='35' name="routerkey" value="<?php echo (isset($data['key']) ? $data['key']:"");?>" /></td>
					</tr>
					<?php 
						if(isset($errors['routerkey'])){
							echo "<tr><td align=\"right\" style=\"padding: 5px;\" colspan=\"2\">";
							echo "<span class=\"label alert-warning\" role=\"alert\">".$errors['routerkey']."</span>";
							echo "</tr></td>";
						}
					?>
					<tr>
						<td style="padding: 5px;">Standort des Knotens:</td>
						<td style="padding: 5px;"><input class="form-control" type="text" size="35" name="routerposition" value="<?php echo (isset($data['location']) ? $data['location']:"");?>" /></td>
					</tr>
					<?php 
						if(isset($errors['routerposition'])){
							echo "<tr><td align=\"right\" style=\"padding: 5px;\" colspan=\"2\">";
							echo "<span class=\"label alert-warning\" role=\"alert\">".$errors['routerposition']."</span>";
							echo "</tr></td>";
						}
					?>
					<tr>
						<td colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" class="btn btn-default" value="Meinen Knoten aktivieren!" /></td>
					</tr>
				</table>
				</form>
				
				   </div>       


            <div class="col-md-4">
            	<br />
                <h3>Was wir hier von dir brauchen!</h3>
                <br />
                <h4>Name des Knoten:</h4><p>Die Angabe darüber unter welchem Namen dein Knoten z.B. auf den Karten dargestellt wird.</p>
                <h4>E-Mail:</h4><p>Wenn du zu einem späteren Zeitpunkt deine Knoten löschen oder Editieren möchtest benötigen wir die Angabe deiner Email Adresse zur Verifizierung.</p>
                <h4>Knotenschlüssel:</h4><p>Dies ist der Knotenschlüssel den dein Router dir, bei seiner Erstinitialisierung, genannt hat. Nur mit diesem Schlüssel kann sich dein Router im Freifunknetz anmelden.</p>
                <h4>Standort des Knoten:</h4><p>Die Geodaten deines Knoten zur Anzeige auf unseren Karten.</p>
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
