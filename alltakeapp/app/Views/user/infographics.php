<div class="row mb-4">
		<div class="col-lg-10 my-auto">
			<h4>Infographics</h4>
		</div>
		<div class="col-lg-2 text-end">
			<a href="<?php echo base_url('account/add-infographics'); ?>" class="btn btn-blue btn-sm rounded-pill px-lg-3"><i class="fas fa-plus"></i> Add</a>
		</div>
	</div>

	<?php if(session()->getTempdata('infographic_err')):?>
	        <div class="alert alert-success">
	           <?= session()->getTempdata('infographic_err') ?>
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
			      <th scope="row">Images</th>
			      <th scope="row">Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php

			  		$i=0;
			  		foreach ($infographics as $in) {
			  		$i++;
			  	?>
			  		<tr>
				      <td><?php echo $i; ?></td>
				      <td><?php echo $in->i_title; ?></td>
				      <td><?php echo $in->i_by; ?></td>
				      <td><img src="<?php echo base_url('infographics_images/'.$in->i_image); ?>" class="mb-3" width="100"></td>
				      <td>
				        <div class="btn-group" role="group" aria-label="Basic example">
                              
                              <a class="btn btn-sm btn-info" href="<?php echo base_url('account/edit-infographics/'.$in->id); ?>">Image</a>
                              <a class="btn btn-sm btn-danger" href="<?php echo base_url('account/delete-infographics/'.$in->id); ?>">Delete</a>
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