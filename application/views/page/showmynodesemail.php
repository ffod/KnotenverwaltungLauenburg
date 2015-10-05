    <?php 
	$errors=$this->session->flashdata('errors');
	$data=$this->session->flashdata('data');
	#var_dump($errors);
	?>

                
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
            	<h2>Meine Knoten Anzeigen:</h2>
				<br />
				<form action="<?php echo site_url("Shownode/showlist")?>" method="post">
				<table style="width:100%">
						<tr>
							<td style="padding: 5px;">E-Mail:</td>
							<td style="padding: 5px;"><input class="form-control" type="text" size='35' name="email" value="" /></td>
						</tr>
						<?php 
							if(isset($errors['email'])){
								echo "<tr><td align=\"right\" style=\"padding: 5px;\" colspan=\"2\">";
								echo "<span class=\"label alert-warning\" role=\"alert\">".$errors['email']."</span>";
								echo "</tr></td>";
							}
						?>
						<tr>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td colspan="2"><input type="submit" name="submit" class="btn btn-default" value="Anzeigen" /></td>
						</tr>
				</table>
				</form>
			</div>
			<div class="col-md-4">
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
