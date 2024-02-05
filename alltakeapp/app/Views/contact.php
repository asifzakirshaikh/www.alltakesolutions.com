<div class="d-none d-lg-block">
<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-lg-6 ms-auto mt-5 px-0 mb-5">
			<div class="col-lg-11 mx-auto mt-5 py-2">
				<div class="container">
					<div class="col-lg-11 mx-auto p-3 ">
						<p class="fw-bold fs-2 text-1 ">Contact Us</p>
						<h1 class="text-blue" style="font-size: 2rem;">Root out half-baked marketing with data-driven approach</h1>
					</div>
					

					<div class="row">
					    <?php if(session()->getTempdata('contact_form_error')):?>
			                    <div class="alert alert-danger mt-3">
			                       <?= session()->getTempdata('contact_form_error') ?>
			                    </div>
			               <?php elseif(session()->getTempdata('contact_form_success')):?>
			                    <div class="alert alert-success mt-3">
			                       <?= session()->getTempdata('contact_form_success') ?>
			                    </div>
			               <?php endif; ?>
			            <div class="col-10 bg-white p-3 mx-auto">
			            	 <?php $validation = \Config\Services::validation(); ?>
			            	  <?php helper('form'); ?>
				            <form class="row py-2" method="POST" action="<?php echo base_url('contact/submit'); ?>">
				            
				                <div class="col-10 mb-4">
				                  <input type="hidden" value="" name="uri">

				                  <label  class="form-label text-1 fw-bold">Name*</label>
				                  <input type="text" class="form-control" name="name" placeholder="Name ">
				                  	<?php if($validation->getError('name')) {?>
			                         <p class='text-danger mt-2'>
			                           <?= $error = $validation->getError('name'); ?>
			                         </p>
              	 					<?php }?>
				                </div>
				                <div class="col-10 mb-4">
				                	<label  class="form-label text-1 fw-bold">Business Email*</label>
				                 <input type="text" class="form-control" name="email" placeholder="Business Email">
				                 <?php if($validation->getError('email')) {?>
			                         <p class='text-danger mt-2'>
			                           <?= $error = $validation->getError('email'); ?>
			                         </p>
              	 					<?php }?>
              	 					 
				                </div>
				                
				                <div class="col-10 mb-4">
				                	<label  class="form-label text-1 fw-bold">Phone Number</label>
				                  <input type="text" class="form-control" name="ph_no" placeholder="Phone Number">
				                  <?php if($validation->getError('ph_no')) {?>
			                         <p class='text-danger mt-2'>
			                           <?= $error = $validation->getError('ph_no'); ?>
			                         </p>
              	 					<?php }?>
				                </div>
				                <div class="col-10 mb-4">
				                	<input type="checkbox" name="consent"style="display: block!important;width:25px;height:25px;"value="Yes">
				                	<label class="ms-5"style="margin-top:-28px!important;"><span><strong>Your consent matters to us*</strong></span>
				                	<br>I consent to my data being stored on the website's external servers, accessed, processed, & used to contact me.
				                	<br>For more information, visit our <span> <a class="text-decoration-none" href="<?php echo base_url('privacy-policy'); ?>">privacy policy</a></span>.</label>
				                	<?php if($validation->getError('consent')) {?>
			                         <p class='text-danger mt-2'>
			                           <?= $error = $validation->getError('consent'); ?>
			                         </p>
              	 					<?php }?>
				                </div>
				                 
			             <!--        <div class="form-group mb-3">-->
			             <!--   			<div class="g-recaptcha" data-sitekey="6LflTSElAAAAAALaF0MYFlZqysVJOO7LbC5DHqHx" name="g-recaptcha-response"></div>-->
			             <!--   			<?php if($validation->getError('g-recaptcha-response')) {?>-->
				            <!--             <p class='text-danger mt-2'>-->
				            <!--               <?= $error = $validation->getError('g-recaptcha-response'); ?>-->
				            <!--             </p>-->
			      	 					<!--<?php }?>-->
			            	<!--		</div>-->
			            			
								<div class="mb-3">
				                  <input type="submit" class="btn btn-blue btn-lg rounded-2">
				                </div>

				            </form>

				            
			            </div>
			        </div>
					
				</div>
				
			</div>
		</div>
		<div class="col-lg-5 mx-auto mt-5 pt-5">
			<img src="<?php echo base_url('images/contact/Contact1.webp'); ?>" class="img-fluid mb-3 rounded-4 col-lg-12 mt-5">
			<div class="container mt-3">
				<div class="row">
					<div class="col-lg-4">
						<p class="fw-bold text-1 text-uppercase fs-5">Follow us on</p>
					</div>
					<div class="col-lg-4 ">
						<a href="https://www.linkedin.com/company/alltake-ites-pvt-ltd/" target="_blank" class=""><i class="fab fa-linkedin fa-2x linkd me-3"></i></a>
			              <a href="https://www.facebook.com/people/Alltake-B2B/100063904035803/" target="_blank" class=""><i class="fab fa-facebook-square fa-2x me-3 face"></i></a>
			              <a href="https://twitter.com/ALLTAKE_B2B" target="_blank" class=""><i class="fab fa-twitter fa-2x me-3 twit"></i></a>
					</div>
				</div>	
			</div>	
			<div class="col-lg-11 position-relative mt-3 mb-4">
					<img src="<?php echo base_url('images//contact/Contact3.webp'); ?>" class="img-fluid rounded-3 col-lg-12">
					<p class="fs-5 text-light bottom-left-5">Do you want to drive your career goal toward the right path?<br>What better way to start? We are just an email away.<br><br><span class="mt-5"><strong>hr@alltakesolutions.com | career@alltakesolutions.com</strong></span></p>
			</div>
		</div>

	</div>
</div>

<div class="container-fluid ">
	<div class="col-lg-11 mx-auto">
		<img src="<?php echo base_url('images/contact/address.png'); ?>" class="img-fluid mb-3 rounded-4 col-lg-12">
	</div>
</div>


</div>

<div class="container-fluid px-0 full-height mt-5 py-5 d-lg-none d-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-3">
				<p class="fw-bold display-5 text-1 mt-5">Contact Us</p>
				<h1 class="text-blue" style="font-size: 1.5rem;">Root out half-baked marketing with our end-to-end data-driven approach</h1>
			</div>
			<div class="col-lg-6 mt-2 bg-white ">

				<?php $validation = \Config\Services::validation(); ?>
			            	  <?php helper('form'); ?>
				            <form class="row py-2" method="POST" action="<?php echo base_url('contact/submit'); ?>"onsubmit="validateForm(event)">
				            
				                <div class="col-10 mb-4">
				                  <input type="hidden" value="" name="uri">

				                  <label  class="form-label text-1 fw-bold">Name*</label>
				                  <input type="text" class="form-control" name="name" placeholder="Name ">
				                  	<?php if($validation->getError('name')) {?>
			                         <p class='text-danger mt-2'>
			                           <?= $error = $validation->getError('name'); ?>
			                         </p>
              	 					<?php }?>
				                </div>
				                <div class="col-10 mb-4">
				                	<label  class="form-label text-1 fw-bold">Business Email*</label>
				                 <input type="text" class="form-control" name="email" placeholder="Business Email"id="email"aria-describedby="emailHelp" required onblur="validateEmail(event)">
				                  <?php if($validation->getError('email')) {?>
			                         <p class='text-danger mt-2'>
			                           <?= $error = $validation->getError('email'); ?>
			                         </p>
              	 					<?php }?>
				                </div>
				                 <div class="alert alert-danger" id="emailError" role="alert" style="display:none">Kindly provide your official email ID</div>
				                <div class="col-10 mb-4">
				                	<label  class="form-label text-1 fw-bold">Phone Number</label>
				                  <input type="text" class="form-control" name="ph_no" placeholder="Phone Number">
				                  <?php if($validation->getError('ph_no')) {?>
			                         <p class='text-danger mt-2'>
			                           <?= $error = $validation->getError('ph_no'); ?>
			                         </p>
              	 					<?php }?>
				                </div>
				                <div class="col-10 mb-4">
				                	<input type="checkbox" name="consent"style="display: block!important;width:20px;height:20px;margin-top:10px!important"value="Yes">
				                	<label style="font-size: 0.9rem;" class="ms-5"><span><strong>Your Consent matters to us*</strong></span><br>By filling out this form, I consent to my data being stored on the website's external servers<br> and accessed, processed, and used to contact me about the project inquiry.<br>For more information about our sensitivity towards personal data, visit our privacy policy.</label>
				                	<?php if($validation->getError('consent')) {?>
			                         <p class='text-danger mt-2'>
			                           <?= $error = $validation->getError('consent'); ?>
			                         </p>
              	 					<?php }?>
				                </div>
				            <!--     <div class="form-group mb-3">-->
			             <!--   			<div class="g-recaptcha" data-sitekey="6LflTSElAAAAAALaF0MYFlZqysVJOO7LbC5DHqHx" name="g-recaptcha-response"></div>-->
			             <!--   			<?php if($validation->getError('g-recaptcha-response')) {?>-->
				            <!--             <p class='text-danger mt-2'>-->
				            <!--               <?= $error = $validation->getError('g-recaptcha-response'); ?>-->
				            <!--             </p>-->
			      	 					<!--<?php }?>-->
			            	<!--		</div>-->
								<div class="mb-3">
				                  <input type="submit" class="btn btn-blue btn-lg rounded-2">
				                </div>

				            </form>

				            <?php if(session()->getTempdata('contact_form_error')):?>
			                    <div class="alert alert-danger mt-3">
			                       <?= session()->getTempdata('contact_form_error') ?>
			                    </div>
			               <?php elseif(session()->getTempdata('contact_form_success')):?>
			                    <div class="alert alert-success mt-3">
			                       <?= session()->getTempdata('contact_form_success') ?>
			                    </div>
			               <?php endif; ?>
			</div>
			<div class="col-lg-6 mt-2 px-1 text-center">
				<img src="<?php echo base_url('images/contact/Contact1.webp'); ?>" class="img-fluid mb-3 rounded-3">
				
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-6">
						<p class="fw-bold text-1 text-uppercase fs-5">Follow us on</p>
					</div>
					<div class="col-6">
						<a href="https://www.linkedin.com/company/alltake-ites-pvt-ltd/" target="_blank" class=""><i class="fab fa-linkedin fa-2x linkd me-3"></i></a>
	              		<a href="https://www.facebook.com/people/Alltake-B2B/100063904035803/" target="_blank" class=""><i class="fab fa-facebook-square fa-2x me-3 face"></i></a>
	              		<a href="https://twitter.com/ALLTAKE_B2B" target="_blank" class=""><i class="fab fa-twitter fa-2x me-3 twit"></i></a>
					</div>

				</div>

			</div>
			<div class="col-lg-6 contact3 py-5 px-1">
				<p class=" text-light mt-5"style="font-size:0.9rem ;">Do you want to drive your career goal toward the right path?What better way to start? We are just an email away.
					<br><span><strong>hr@alltakesolutions.com | career@alltakesolutions.com</strong></span></p>
			</div>	

			 <div class="col-lg-6 mt-5 px-1">
				<p class="fw-bold text-1 text-uppercase display-6">Our Hub</p>
				<img src="<?php echo base_url('images/contact/Contact2.webp'); ?>" class="img-fluid mb-3 rounded-3">
			</div>

			
		</div>
	</div>
</div>