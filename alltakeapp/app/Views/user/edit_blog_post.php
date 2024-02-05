<div class="row mb-4">
		<div class="col-lg-10 my-auto">
			<h4>Edit Blog</h4>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-lg-10 my-auto">
		    
			<?php $validation = \Config\Services::validation(); ?>
			<form method="POST" action="<?php echo base_url('account/update-blog-post/'.$blog_id); ?>" enctype="multipart/form-data">
				<input type="hidden" value="<?php echo $blog_id ?>" name="id" />
				<div class="mb-3">
				    <?php
				    
				        $database = \Config\Database::connect();
                        $builder = $database->table('blog');
            
                        $q['blog_info'] = $builder->where('blog_id',$blog_id)->get()->getRow();
				    
				    ?>
				    <textarea class="form-control rounded-3" id="editor" rows="20" name="content" value="<?php echo $q['blog_info']->blog_content; ?>"></textarea>
				</div>
				<?php if($validation->getError('content')) {?>
	                  <p class='text-danger mt-2'>
	                    <?= $error = $validation->getError('content'); ?>
	                  </p>
	            <?php }?>
				<div class="mb-3">
					<button type="submit" class="btn btn-outline-primary btn-sm">Submit</button>
				</div>
			</form>

		</div>
	</div>