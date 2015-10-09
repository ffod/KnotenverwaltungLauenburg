<h2 style="padding-left:10px;">Neuer Eintrag</h2>          
<div style="padding-left:10px;" class="row">
	<div  class="col-md-12">	
		<form role="form" action="<?php echo site_url('blog/new_post')?>" method="post">
			<div class="form_settings">
            	<h3>Titel:</h3>
            	<input class="form-control" type="text" name="post_title" value="" />
            	<h3>Eintrag:</h3>
            	<p><textarea class="form-control" rows="15" cols="50" name="post"></textarea></p>
            	<div class="checkbox">
	                <input id="checkbox1" type="checkbox">
	                <label for="checkbox1">
	                	Veröffentlichen?
	                </label>
                </div>
            	<input type="submit" name="submit" class="btn btn-default" value="Speichern" />
            </div>
		</form>
	</div>
</div>        