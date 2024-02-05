<div class="row mb-4">
		<div class="col-lg-12 my-auto">
			<h4>New Blog</h4>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-lg-12 my-auto">
			<?php $validation = \Config\Services::validation(); ?>
			<form method="POST" action="<?php echo base_url('account/insert-blog'); ?>" enctype="multipart/form-data">
				<div class="mb-3">
				    <input type="text" class="form-control rounded-3" id="title" name="title" placeholder="Title">
				</div>
				<?php if($validation->getError('title')) {?>
                          <p class='text-danger mt-2'>
                            <?= $error = $validation->getError('title'); ?>
                          </p>
                <?php }?>
				
				<div class="mb-3">
					<select class="form-select rounded-3" name="type" aria-label="Default select example">
					  <option value="">Select Category</option>
					  <option value="AI/ML">AI/ML</option>
					  <option value="Advertising">Advertising</option>
					  <option value="B2B">B2B</option>
					  <option value="Business">Business</option>
					  <option value="Big Data">Big Data</option>
					  <option value="Content Marketing">Content Marketing</option>
                      <option value="Customer Experience Management">Customer Experience Management</option>
                      <option value="Digital Asset Management">Digital Asset Management</option>
                      <option value="Lead Generation">Lead Generation</option>
                      <option value="Demand Generation">Demand Generation</option>
                      <option value="Identity Management">Identity Management</option>
                      <option value="Analytics">Analytics</option>
                      <option value="Automation">Automation</option>
                      <option value="Business Intelligence">Business Intelligence</option>
                      <option value="Content Syndication">Content Syndication</option>
                      <option value="Customer Identity Management">Customer Identity Management</option>
                      <option value="Ecommerce and Mobile Ecommerce">Ecommerce and Mobile Ecommerce</option>
                      <option value="Intelligent Assistants">Intelligent Assistants</option>
                      <option value="Apps for Business">Apps for Business</option>
                      <option value="B2B Data">B2B Data</option>
                      <option value="Collaboration">Collaboration</option>
                      <option value="Customer Acquisition">Customer Acquisition</option>
                      <option value="Customer Relationship Management">Customer Relationship Management</option>
                      <option value="Email Marketing">Email Marketing</option>
                      <option value="Interactive Content">Interactive Content</option>
                      <option value="Audience Data">Audience Data</option>
                      <option value="Behavioral Marketing">Behavioral Marketing</option>
                      <option value="Communications">Communications</option>
                      <option value="Customer Data Platforms">Customer Data Platforms</option>
                      <option value="Entertainment">Entertainment</option>
                      <option value="Marketing">Marketing</option>
                      <option value="AR/VR">AR/VR</option>
                      <option value="Brand Safety">Brand Safety</option> 
                      <option value="Content Management">Content Management</option>
                      <option value="Customer Engagement">Customer Engagement</option>
                      <option value="Digital Transformation">Digital Transformation</option>
                      <option value="Natural Language Processing">Natural Language Processing</option>
					</select>
				</div>
				<?php if($validation->getError('type')) {?>
                          <p class='text-danger mt-2'>
                            <?= $error = $validation->getError('type'); ?>
                          </p>
                <?php }?>
				
				<div class="mb-3">
				    <textarea class="form-control rounded-3" id="editor" rows="5" name="content" placeholder="Content"></textarea>
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
				<div class="d-grid gap-2 mb-3">
					<button type="submit" class="btn btn-blue rounded-pill">Submit</button>
				</div>
			</form>

		</div>
	</div>