    <?php 
	$errors=$this->session->flashdata('errors');
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
		<!-- STUFF GOES HERE START -->
			<h2>Knoten bearbeiten:</h2>
			<br />
				<form action="<?php echo site_url("modnode/checkmodify")?>" method="post">
				<table style="width:100%">
					<tr>
						<td style="padding: 5px;">Name des Knotens:</td>
						<td style="padding: 5px;"><input class="form-control" type="text" size='35' name="routername" value="<?php echo $routerdata->routername;?>" /></td>
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
						<td style="padding: 5px;"><input class="form-control" type="text" size="35" name="email" value="<?php echo $routerdata->email;?>" /></td>
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
						<td style="padding: 5px;"><input readonly="readonly" class="form-control" type="text" size='35' name="routerkey" value="<?php echo $routerdata->key;?>" /></td>
					</tr>
					<?php 
						if(isset($errors['routerkey'])){
							echo "<tr><td align=\"right\" style=\"padding: 5px;\" colspan=\"2\">";
							echo "<span class=\"label alert-warning\" role=\"alert\">".$errors['key']."</span>";
							echo "</tr></td>";
						}
					?>
					<tr>
						<td style="padding: 5px;">Standort des Knotens:</td>
						<td style="padding: 5px;"><input class="form-control" type="text" size="35" name="routerposition" value="<?php echo $routerdata->location;?>" /></td>
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
						<td colspan="2"><input type="submit" name="submit" class="btn btn-default" value="Speichern" /></td>
					</tr>
				</table>
				<input name="id" type="hidden" value="<?php echo $routerdata->id;?>"/>
				</form>
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
