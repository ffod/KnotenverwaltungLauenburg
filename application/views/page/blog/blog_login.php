<div id="site_content">
    <div id="content">
        <form action="<?php echo site_url('users/login');?>" method="post">
            <div class="form_settings">
                <?php
                	#var_dump($error);
                    if($error){
                        echo '<div style="color:red" >Hmm, we don\'t recognize you. Please try again.</div><br>';
                    }
                ?>
                <div class="row">
                	<div class="col-md-4">
	                	&nbsp;
	                </div>
	                <div class="col-md-3">
	                	<h4>Username:</h4><input class="form-control" type="text" size="35" type="text" name="username" value="" />
	                </div>
	                <div class="col-md-2">
	                	&nbsp;
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-md-4">
	                	&nbsp;
	                </div>
	                <div class="col-md-3">
	                	<h4>Password:</h4><input class="form-control" type="text" size="35" type="password" name="password" value="" />
	                </div>
	                <div class="col-md-2">
	                	&nbsp;
	                </div>
	            </div>
                <div class="row">
                	<div class="col-md-4">
	                	&nbsp;
	                </div>
	                <div class="col-md-3">
	                	<h4>User Type:</h4>
	                	<select class="form-control" name="user_type">
		                    <option value="admin">Admin</option>
		                    <option value="author">Author</option>
		                    <option value="user" selected>User</option>
                		</select>
	                </div>
	                <div class="col-md-2">
	                	&nbsp;
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-md-4">
	                	&nbsp;
	                </div>
	                <div class="col-md-3">
	                	<br />
	                	<input class="btn btn-default" type="submit" name="add" value="Anmelden" />
	                </div> 
	                <div class="col-md-2">
	                	&nbsp;
	                </div>
	            </div>
            </div>
        </form>
    </div>
</div>