<div class="row mb-4">
		<div class="col-lg-10 my-auto">
			<h4>Blogs</h4>
		</div>
		<div class="col-lg-2 text-end">
			<a href="<?php echo base_url('account/add-blog'); ?>" class="btn btn-blue btn-sm rounded-pill px-lg-3"><i class="fas fa-plus"></i> Add</a>
		</div>
	</div>

	<?php if(session()->getTempdata('blog_err')):?>
	        <div class="alert alert-success">
	           <?= session()->getTempdata('blog_err') ?>
	        </div>
	  <?php endif;?>

	<div class="row mb-4">
		<div class="col-lg-12 my-auto">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="row"></th>
			      <th scope="row">Title</th>
			      <th scope="row">By</th>
			      <th scope="row"></th>
			      <th scope="row"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php

			  		$i=0;
			  		foreach ($blog as $r) {
			  		$i++;
			  	?>
			  		<tr>
				      <td><?php echo $i; ?></td>
				      <td><?php echo $r->blog_title; ?></td>
				      <td><?php echo $r->blog_author; ?></td>
				      <td><img src="<?php echo base_url('blog_images/'.$r->blog_img); ?>" class="mb-3" width="100"></td>
				      <td>
				        <div class="btn-group" role="group" aria-label="Basic example">
                              <a class="btn btn-sm btn-primary" href="<?php echo base_url('account/edit-blog-post/'.$r->blog_id); ?>">Edit</a>
                              <a class="btn btn-sm btn-info" href="<?php echo base_url('account/edit-blog/'.$r->blog_id); ?>">Image</a>
                              <a class="btn btn-sm btn-danger" href="<?php echo base_url('account/delete-blog/'.$r->blog_id); ?>">Delete</a>
                        </div>
				       </td>
				    </tr>
			  	<?php
			  		}
			  	?>
			  </tbody>
			</table>
		</div>
	</div>
	

