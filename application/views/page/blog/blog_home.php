        <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user'){ ?>
        
        <div style="padding-left:10px;" class="row">
    			<div  class="col-md-12">	
    				<h4>
    					<a style="color: green" href="<?php echo site_url('blog/new_post');?>"><span class="glyphicon glyphicon-pencil"></span> Create a new post</a>
    					&nbsp;&nbsp;
    					<a style="color: red" href="<?php echo site_url('users/logout');?>"><span class="glyphicon glyphicon-off"></span> Logout</a>
    				</h4>
        			
        		</div>
	    </div>
        <?php } ?>
    	
    	<?php foreach($posts as $post){ ?>  		
    		<!-- TITLE -->
    		<div style="padding-left:10px;" class="row">
    			<div  class="col-md-8">	
    				<h2><a href="<?php echo site_url('blog/post')?><?php echo '/'.$post['post_id']?>"><?php echo $post['post_title'];?></a></h2>
        			
        		</div>
        		<div  class="col-md-4">	
    				&nbsp;
        		</div>
	        </div>
	        <!-- TITLE -->
	        
	        <!-- CONTENT -->	        
	        <div style="padding-left:10px;" class="row">
	        	<div  class="col-md-8">
	        		<?php echo substr(strip_tags($post['post']), 0, 200).'...';?>
	        	</div>
	        	<div  class="col-md-4">	
    				&nbsp;
        		</div>
	        </div>
	        <div style="margin-top:5px;padding-left:10px;" class="row">
	        	<div  class="col-md-8">
	        		<a href="<?php echo site_url('blog/post')?><?php echo '/'.$post['post_id']?>">Mehr...</a>
	        	</div>
	        	<div  class="col-md-4">	
    				&nbsp;
        		</div>
	        </div>
	       <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user'){ ?>
	       <div style="margin-top:5px;padding-left:10px;" class="row">
	        	<div  class="col-md-8">
		        	<a href="<?php echo base_url()?>blog/editpost/<?=$post['post_id']?>"><span class="glyphicon glyphicon-edit" title="Edit post"></span></a> | 
		            <a href="<?php echo  base_url()?>blog/deletepost/<?=$post['post_id']?>"><span style="color:#f77;" class="glyphicon glyphicon-remove-circle" title="Delete post"></span></a>	
	        	</div>
	        	<div  class="col-md-4">	
    				&nbsp;
        		</div>
	        </div>
	        <?php }?>
	        <!-- CONTENT -->
    	<?php }?>
    	<div style="padding-left:10px;" class="row">
	    	<div  class="col-md-12">
	    		<ul class="pagination">
        			<?php echo $pages?>
        		</ul>    
			</div>
	    </div>
<hr>
