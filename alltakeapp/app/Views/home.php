<!--<div id="myModal" class="modal fade mt-4">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--        	<div class="modal-body">-->
<!--        		<div class="container">-->
<!--        		<div class="row">-->
<!--        			<div class="col-lg-1 ms-auto me-5">-->
<!--						<button type="button" class="btn-close mt-1 me-5" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--					</div>-->
<!--        			<div class="col-lg-12 text-center mx-auto">-->
<!--						<a class="navbar-brand" ><img src="<?php echo base_url('images/home/logo/logo.png'); ?>" width="200" alt="alltakesolutions"></a>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--                <div class="py-2 p-3">-->
<!--                	<h5 class=" text-center mt-1"><strong>Stay current with the B2B trends!</strong></h5>-->
<!--                	<p class="text-center ">Our newsletter offers a range of insights to keep you up-to-date with the latest trends & highlights in the lead generation landscape. -->
<!--						And if you need a marketing partner for your lead gen, demand gen, & content marketing efforts, we’re here for you!-->
<!--					</p>-->
<!--              		<h4 class="fw-bold text-blue text-center">-->
<!--                        Subscribe to our newsletter!-->
<!--                    </h4>-->
              
<!--	                <form method="POST" action="<?php echo base_url('blogs/subscribe'); ?>">-->
<!--	                  <div class="">-->
<!--	                    <input type="hidden" value="<?php echo uri_string(); ?>" name="url" id="url">-->
	                    
<!--	                    <input type="email" class="form-control mx-auto"style="width: 300px;" name="email" id="email" aria-describedby="emailHelp" placeholder="Email Address">-->
	                    
<!--	                  </div>-->
<!--	                  <div class="text-center">-->
<!--	                    <button type="submit" class="btn btn-blue">Subscribe</button>-->
<!--	                  </div>-->
<!--	                  		<?php if(session()->getTempdata('validation_err')):?>-->
<!--                                <div class="alert alert-sm alert-danger mt-3">-->
<!--                                   <?= session()->getTempdata('validation_err') ?>-->
<!--                                </div>-->
<!--                            <?php endif;?>-->
<!--                            <?php if(session()->getTempdata('subscribe_err')):?>-->
<!--                                <div class="alert alert-sm alert-danger mt-3">-->
<!--                                   <?= session()->getTempdata('subscribe_err') ?>-->
<!--                                </div>-->
<!--                            <?php endif;?>-->
<!--                            <?php if(session()->getTempdata('subscription_success')):?>-->
<!--                                <div class="alert alert-success mt-3">-->
<!--                                   <?= session()->getTempdata('subscription_success') ?>-->
<!--                                </div>-->
<!--                            <?php endif;?>-->
<!--	                </form>-->
               
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="container-fluid full-height d-none d-lg-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto order-lg-first px-0 mt-4">
				<div class="container mt-5 px-0">
					<div class="col-lg-12 bg-blue">
						<div class="col-lg-9 mx-auto ">
							<img src="<?php echo base_url('images/home/Home-webp-1.webp'); ?>" class="img-fluid mb-2 mt-3"  alt="Home Banner">
				
							<h1 class="fs-5 fw-bold mb-3 text">Decipher the marketing efforts that turn the tables for your brand!</h1>
							<h2 class="fs-5 fw-bold mb-2 text">Entrust us to take it from here… </h2>
							<div class="col-12 col-lg-6">
								<button type="button" class="btn btn-blue btn-md rounded-3 text-uppercase"data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started
							    </button>	
								<?php if(session()->getTempdata('home_form_error')):?>
				                    <div class="alert alert-danger mt-3">
				                       <?= session()->getTempdata('home_form_error') ?>
				                    </div>
					            <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 my-auto mt-5 order-last px-0">
				<div class="container mt-3 py-1 px-0">
					<div class="col-lg-11 mt-2">
						<div id="carouselExampleControls" class="carousel slide carousel-fade px-0"data-bs-ride="carousel">
				  <div class="carousel-inner">
				  	
				    <div class="carousel-item active" data-bs-interval="300">
				    	<?php
                        	foreach ($most_recent as $blog) {
                    	?>
                    	
				    	
				    </div>
				    <div class="carousel-item">
				    	<a href="<?php echo base_url('blogs/view/'.$blog->blog_url); ?>">
				    		<img src="<?php echo base_url('blog_images/'.$blog->blog_img); ?>" class="img-fluid" alt="<?php echo $blog->blog_title; ?>"> 
				    	</a>
     					
				     <?php } ?>
				    </div>
				
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" style="display:none;" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				    <span class="carousel-control-next-icon" style="display:none;" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!--<div class="container mt-5">-->
	<!--	<div class="row">-->
	<!--		<div class="col-lg-5 mt-1 mx-auto p-2">-->
	<!--			<h5 class="fs-1 mt-5 text-blue">Industry Wise Assets Dissemination</h5>-->
	<!--		</div>-->
	<!--		<div class="col-lg-7 px-0">-->
	<!--			<img src="<?php echo base_url('images/home/Infographicfinal-webp-2.webp'); ?>" class="img-fluid px-0" alt="Infographic">-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<div class="container mt-5">
		<div class="row">
			<div class="container text-center Acing">
				<div class="col-lg-8 mx-auto ">
				<p class="fs-1 fw-bold text-white text-center mb-2 mt-3">Acing B2B Intelligence!</p>
				<p class="fw-bold fs-5">We are the marketing pioneers helping brands from strategy to execution. Our data-driven approach delivers personalized campaigns that help discover your brand and provide the sales pipeline you deserve for your demand-generation efforts.</p>
				<div class="mb-3">
					<button type="button" class="btn btn-white btn-md rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
				        Discover Yours!
				    </button>
					<?php if(session()->getTempdata('home_form_error')):?>
		                    <div class="alert alert-danger mt-3">
		                       <?= session()->getTempdata('home_form_error') ?>
		                    </div>
		            <?php endif; ?>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-12">
				<p class="fw-bold fs-2 text-blue ms-2">Demand Gen Roadmap</p>
				<img src="<?php echo base_url('images/home/RoadMap1.png'); ?>" class="img-fluid mb-5 " alt="Demand Gen Roadmap ">
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-5">
				<div class="row">
					<div class="col-lg-4 px-0">
						<img src="<?php echo base_url('images/home/cal-webp.webp'); ?>" class="img-fluid" width="200" alt="calculator">
					</div>
					<div class="col-lg-7">
						<h5 class="fs-3 text-blue text-start">Budget Calculator</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				<p class="fw-bold">Our Budget Calculator is a comprehensive calculator that can estimate your campaign budget and project your business' best route. As pioneers in the B2B market, we understand how important it is for you to succeed while creating brand awareness.</p>
				<p class="fw-bold">With our calculator, you can finally drop the pressure and let us create a customized projection for you by answering just a few questions.</p>
				<div class="mb-3">
					<a href="<?php echo base_url('know-your-budget'); ?>" class="btn btn-blue btn-md rounded-2 text-uppercase">Budget Estimate</a>
						
					<?php if(session()->getTempdata('home_form_error')):?>
		                    <div class="alert alert-danger mt-3">
		                       <?= session()->getTempdata('home_form_error') ?>
		                    </div>
		            <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-4 mx-auto">
				<h5 class="fs-1 text-blue">Resources</h5>
				<p class="fw-bold">Lead magnets to stoke your interest, deliver knowledge and bridge the gap between you and your target audience.</p>
				<h5 class="fs-2 text-blue mt-2 text-uppercase">CATEGORIES</h5>
				<div class="mb-2 mt-3">
					<a href="<?php echo base_url('blogs'); ?>" class="btn btn-blue-light btn-md rounded-2 text-uppercase">Blogs</a>
				</div>
						
				<div class="mb-2">
					<a href="<?php echo base_url('infographics'); ?>" class="btn btn-blue-light btn-md rounded-2 text-uppercase">infographics</a>
				</div>
			</div>
			<div class="col-lg-8 float-end mx-auto">
				<div class="container mt-3 ">
					<div class="row">
						<?php
    
	            		foreach ($most_recent1 as $m) {
	            		?>
						<div class="col-lg-6 mx-auto  text-center mb-2 px-0 ">
						    
						    <a href="<?php echo base_url('blogs/view/'.$m->blog_url); ?>">
							<img src="<?php echo base_url('blog_images/'.$m->blog_img); ?>" class="img-fluid mb-2 col-lg-11  mx-auto" alt="<?php echo $m->blog_title; ?>" style="border-radius: 20px;">
							<a/>
							<div class="mb-3 col-11">
							    <a class="text-decoration-none text-dark" href="<?php echo base_url('blogs/view/'.$blog->blog_url); ?>">
								<p class=""style="font-size: 1.1rem;"><?php echo $m->blog_title; ?></p>
								</a>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mt-5 footer-imagehome rounded-4">
		<div class="row">
			<div class="col-lg-3 ms-5 mx-auto mt-5">
				<img src="<?php echo base_url('images/home/img-webp-7.webp'); ?>" class="img-fluid" width="130" alt="squre">
			</div>
			<div class="col-lg-8  mx-auto mt-5 py-5 pt-5 p-5">
				<p class="fw-bold fs-4">Want to turn the tables for your brand with your marketing efforts but need to figure out how? Allow us to take it from here.</p>
				<div class="mb-3">
					<button type="button" class="btn btn-blue btn-md rounded-2 text-uppercase" data-bs-toggle="modal"data-bs-target="#exampleModal">
        				Get In Touch
    				</button>
			
					<?php if(session()->getTempdata('home_form_error')):?>
		                    <div class="alert alert-danger mt-3">
		                       <?= session()->getTempdata('home_form_error') ?>
		                    </div>
		            <?php endif; ?>
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid px-0 full-height mt-5 py-5 d-lg-none d-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 bg-blue mt-5 mb-3">
				<div class="mt-3 mb-2 p-3">
					<img src="<?php echo base_url('images/home/Home-webp-1.webp'); ?>" class="img-fluid mb-3" alt="Home Banner">
					<h1 class="fw-bold mb-3 text" style="font-size: 1.1rem;" >Decipher the marketing efforts that turn the tables for your brand!</h1>
					<h2 class="fw-bold text"style="font-size: 1.1rem;">Entrust us to take it from here… </h2>
				</div>
				<div class="mb-3 ps-3">
					<button type="button" class="btn btn-blue btn-md rounded-3 text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal">
				        Get Started
				    </button>
							
					<?php if(session()->getTempdata('home_form_error')):?>
		                    <div class="alert alert-danger mt-3">
		                       <?= session()->getTempdata('home_form_error') ?>
		                    </div>
		            <?php endif; ?>
				</div>
			</div>
			<div class="col-lg-6 px-0">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
				  	
				    <div class="carousel-item active" data-bs-interval="300">
				    	<?php
                        	foreach ($most_recent as $blog) {
                    	?>
				    </div>
				    <div class="carousel-item">
				    	<a href="<?php echo base_url('blogs/view/'.$blog->blog_url); ?>">
				    		<img src="<?php echo base_url('blog_images/'.$blog->blog_img); ?>" class="img-fluid" alt="<?php echo $blog->blog_title; ?>"> 
				    	</a>
     					
				     <?php } ?>
				    </div>
				
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>
			</div>
			<div class="col-lg-6 mt-4 mb-3">
				<h5 class="fs-1 text-center text-blue">Industry Wise Assets Dissemination</h5>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo base_url('images/home/Infographicfinal-webp-2.webp'); ?>" class="img-fluid mb-5" alt="Infographic">
			</div>
			<div class="col-lg-6 homebg p-4">
				<h2 class="fw-bold fs-1">Acing B2B Intelligence!</h2>
				<p class="">We are the marketing pioneers helping brands from marketing strategy to execution. Our data-driven approach delivers personalized campaigns that help discover your brand and provide the sales pipeline you deserve for your demand-generation efforts.</p>
				<div class="mb-3">
					<button type="button" class="btn btn-blue btn-sm rounded-2 text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal">
				        Discover Yours!
				    </button>
							
					<?php if(session()->getTempdata('home_form_error')):?>
		                    <div class="alert alert-danger mt-3">
		                       <?= session()->getTempdata('home_form_error') ?>
		                    </div>
		            <?php endif; ?>
					
				</div>
			</div>
			<div class="col-lg-6 mt-3">
				<p class="fw-bold fs-1 text-blue">Demand Gen Roadmap</p>
			</div>
			<div class="col-lg-6 px-0">
				<img src="<?php echo base_url('images/home/RoadMap1.png'); ?>" class="img-fluid mb-5" alt="Demand Gen Roadmap">
			</div>
			<div class="col-lg-6">
				<h5 class="fs-1  text-blue text-end">Budget Calculator</h5>
			</div>
			<div class="col-lg-6">
				<img src="<?php echo base_url('images/home/cal-webp.webp'); ?>" class="img-fluid" width="130" alt="calculator">
			</div>
			<div class="col-lg-6 mt-1">
				<p class="fw-bold"style="font-size: 1.0rem;">Our Budget Calculator is a comprehensive calculator that can estimate your campaign budget and project your business' best route. As pioneers in the B2B market, we understand how important it is for you to succeed while creating brand awareness. </p>
					<p class="fw-bold"style="font-size: 1.0rem;">With our calculator, you can finally drop the pressure and let us create a customized projection for you by answering just a few questions.</p>
					<div class="mb-3">
						<!--<button type="button" class="btn btn-blue btn-sm rounded-2 text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
				  <!--      	Find Your Estimate-->
				  <!--  	</button>-->
				        <a href="<?php echo base_url('know-your-budget'); ?>" class="btn btn-blue btn-md rounded-2 text-uppercase">Budget Estimate</a>
							
						<?php if(session()->getTempdata('home_form_error')):?>
			                    <div class="alert alert-danger mt-3">
			                       <?= session()->getTempdata('home_form_error') ?>
			                    </div>
			            <?php endif; ?>
						
					</div>
			</div>
			<div class="col-lg-6 mt-2">
				<h5 class="fs-1 text-blue">Resources</h5>
				<p class="fw-bold"style="font-size: 1.0rem;">Lead magnets to stoke your interest, deliver knowledge and bridge the gap between you and your target audience.</p>
				
				<div class="mt-4  mb-4">
					<h5 class="fs-3 text-blue text-uppercase">CATEGORIES</h5>
				</div>
				<div class="row">
					<div class="mb-2 col-3">
						<a href="<?php echo base_url('blogs'); ?>" class="btn btn-blue-light btn-sm rounded-2 text-uppercase">Blogs</a>
					</div>
				
					<div class="mb-2 col-3">
						<a href="<?php echo base_url('infographics'); ?>" class="btn btn-blue-light btn-sm rounded-2 text-uppercase">infographics</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="container mt-3">
					<div class="row">
						<?php
    
            		foreach ($most_recent1 as $m) {
            		?>
					<div class="col-lg-6 mx-auto mb-3">
					    
					    <a href="<?php echo base_url('blogs/view/'.$m->blog_url); ?>">
						<img src="<?php echo base_url('blog_images/'.$m->blog_img); ?>" class="img-fluid mb-3 col-lg-10" alt="<?php echo $m->blog_title; ?>" style="border-radius: 20px;">
						<a/>
						<div class="mb-3 col-11">
						    <a class="text-decoration-none text-dark" href="<?php echo base_url('blogs/view/'.$blog->blog_url); ?>">
							<h5 class="fs-5 fw-bold"><?php echo $m->blog_title; ?></h5>
							</a>
						</div>
						
						
					</div>
					<?php } ?>
					</div>
					
				</div>
			</div>
			<div class="container-fluid footer-imagehome">
				<div class="col-lg-11 p-4 mt-5">
					<img src="<?php echo base_url('images/home/img-webp-7.webp'); ?>" class="img-fluid mb-3" alt="Squre" width="100">
					<p class="fw-bold fs-5">Want to turn the tables for your brand with your marketing efforts but need to figure out how? Allow us to take it from here.</p>
					<div class="mb-3">
						<button type="button" class="btn btn-blue btn-sm rounded-2 text-uppercase" data-bs-toggle="modal"data-bs-target="#exampleModal">
				        	Get In Touch
				    	</button>
							
						<?php if(session()->getTempdata('home_form_error')):?>
			                    <div class="alert alert-danger mt-3">
			                       <?= session()->getTempdata('home_form_error') ?>
			                    </div>
			            <?php endif; ?>
						
					</div>
				</div>

			</div>
		</div>
	</div>
	
</div>

















