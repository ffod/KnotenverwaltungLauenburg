    <?php 
	$errors=$this->session->flashdata('error');
	$data=$this->session->flashdata('data');
	#var_dump($errors);
	?>

                
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">
        <div style="padding-top:15px;" class="col-md-8">
		<!-- STUFF GOES HERE START -->
			<h2>Knoten bearbeiten:</h2>
			<br />
			<form action="<?php echo site_url("modnode/get")?>" method="post">
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
			<div class="col-md-4">
			    <br />
                <h3>Was wir hier von dir brauchen!</h3>
                <br />
               <h4>Knotenschlüssel:</h4><p>Dies ist der Knotenschlüssel den dein Router dir, bei seiner Erstinitialisierung, genannt hat. Anschliessend wirst du zu den Daten deines Knoten weiter geleitet.</p>
			</div>
        <!-- STUFF GOES HERE END -->
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