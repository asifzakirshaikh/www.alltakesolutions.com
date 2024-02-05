<div class="row mb-4">
		<div class="col-lg-10 my-auto">
			<h4>Edit Blog</h4>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-lg-10 my-auto">
		    
			<?php $validation = \Config\Services::validation(); ?>
			<form method="POST" action="<?php echo base_url('account/update-blog/'.$blog_id); ?>" enctype="multipart/form-data">
				<input type="hidden" value="<?php echo $blog_id ?>" name="id" />
				<div class="mb-3">
				    <?php
				    
				        $database = \Config\Database::connect();
                        $builder = $database->table('blog');
            
                        $q['blog_info'] = $builder->where('blog_id',$blog_id)->get()->getRow();
				    
				    ?>
				    <h1 class="text-center"><?php echo $q['blog_info']->blog_title; ?></h1>
				  
				</div>
				<div class="mb-3">
				    <input type="file" class="form-control rounded-3" id="image" name="image">
				    <div id="image" class="form-text">For better blogs, upload image in png,webp format. Keep image size 1920x1080 or less.</div>
				</div>
				<?php if($validation->getError('image')) {?>
	                  <p class='text-danger mt-2'>
	                    <?= $error = $validation->getError('image'); ?>
	                  </p>
	            <?php }?>
				<div class="mb-3">
					<button type="submit" class="btn btn-outline-primary btn-sm">Submit</button>
				</div>
			</form>

		</div>
	</div>