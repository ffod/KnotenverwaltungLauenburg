    <?php 
	$errors=$this->session->flashdata('errors');
	$data=$this->session->flashdata('data');
	#var_dump($errors);
	?>

                
        <!-- /.row -->
        <!-- Portfolio Item Row -->
        <div class="row">
		<!-- STUFF GOES HERE START -->
		<div style="padding-top:15px;" class="col-md-8">
			<h2>Knoten löschen:</h2>

			<br />

			<br />
			<form action="<?php echo site_url("Delnode/checkToSendMail")?>" method="post">
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
						<td colspan="2"><input type="submit" name="submit" class="btn btn-default" value="Absenden" /></td>
					</tr>
			</table>
			</form>	
		</div>
		<div style="padding-top:15px;" class="col-md-4">
			<br />
			<h2>Info:</h2>
			<p>Mit Hilfe dieser Seite kann ein bereits registrierter Freifunk Knoten aus unserer Datenbank gelöscht werden.</p>
			<p>Bitte folge nach der Eingabe des Knotenschlüssels den Anweisungen in der Mail die wir dir zusenden.</p>
			<p>Wenn Du den VPN-Schlüssel Deines Knotens nicht kennst, kannst Du ihn im Config-Mode auslesen. Mehr dazu findest Du <a target="_blank" href="http://wiki.freifunk.net/Freifunk_Hamburg/Firmware#Weg_1:_Config_Mode">hier</a>.</p> 
			<p>Wenn Du Dich auf Deinem Knoten per SSH einloggen kannst, kannst du dir den Key mit dem folgenden Befehl anzeigen lassen:</p>
			<p>"/etc/init.d/fastd show_key mesh_vpn"</p>
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