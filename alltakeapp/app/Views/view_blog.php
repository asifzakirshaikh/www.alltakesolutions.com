<div class="d-lg-block d-none" style="margin-top: 140px;">
	<div class="container-fluid py-5 px-lg-5">
		<div class="row mb-5">
			<div class="col-lg-7 mx-auto">
				<h1 class="display-6 mb-3 fw-bold">
					<?php echo $blog->blog_title; ?>
				</h1>

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <p>
        					By <span class="fw-bold"><?php echo $blog->blog_author; ?></span>
        				</p>
        				<p>
        					Published on : <span class="fw-bold"><?php echo date("M j, Y",strtotime($blog->date_created)); ?></span>
        				</p>        
                    </div>
                    <div class="col-lg-6 text-start text-lg-end my-auto">
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo base_url('blogs/view/'.$blog->blog_url); ?>" target="_blank" class=""><i class="fab fa-linkedin fa-2x linkd me-2"></i></a>
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url('blogs/view/'.$blog->blog_url); ?>" target="_blank" class=""><i class="fab fa-facebook-square fa-2x me-2 face"></i></a>
                        <a href="https://twitter.com/share?url=<?php echo base_url('blogs/view/'.$blog->blog_url); ?>" target="_blank" class=""><i class="fa-brands fa-x-twitter fa-2x"style="color:#000;"></i></a>
                    </div>
                </div>
				<div class="sofiya-1">
					<?php echo $blog->blog_content; ?>
				</div>
				
			</div>
			<div class="col-lg-5">
				<div class="col-lg-12 sticky-top" style="top:130px;">
					<img src="<?php echo base_url('blog_images/'.$blog->blog_img); ?>" class="img-fluid mb-2" alt="<?php echo $blog->blog_title; ?>">
					<h2 class="display-9 fw-bold mb-2 mt-3">
							Subscribe to our newsletter!
						</h2>
					<div class="mb-2 col-7">
						
						<?php $validation = \Config\Services::validation(); ?>
							<form method="POST" action="<?php echo base_url('blogs/subscribe'); ?>">
		    					<div class="row">
		    						<div class="col-lg-8">
		    							<input type="email" class="form-control form-control-md rounded-3 border  mb-lg-0 mb-3" name="email" placeholder="Email Address" style="border:120px;">
		    							<input type="hidden" value="<?php echo uri_string(); ?>" name="url" id="url">
		    						</div>
		    						    
		    						<div class="col-lg-3">
		    							<div class="mb-3">
		    								<button type="submit" class="btn btn-blue btn-md rounded-3" style="margin-top:0px; margin-left:-23px;">Subscribe</button>
		    							</div>
		    						</div>
		    						
		    					</div>
		    				</form>
		    				<?php if(session()->getTempdata('validation_err')):?>
                            <div class="alert alert-sm alert-danger mt-3">
                               <?= session()->getTempdata('validation_err') ?>
                            </div>
                        <?php endif;?>
        				<?php if(session()->getTempdata('subscribe_err')):?>
                            <div class="alert alert-sm alert-danger mt-3">
                               <?= session()->getTempdata('subscribe_err') ?>
                            </div>
                        <?php endif;?>
    				    <?php if(session()->getTempdata('subscription_success')):?>
                            <div class="alert alert-success mt-3">
                               <?= session()->getTempdata('subscription_success') ?>
                            </div>
                        <?php endif;?>
					</div>
					
				</div>	
			</div>
		</div>
		
	</div>
</div>

<div class="d-block d-lg-none" style="margin-top: 140px;">
	<div class="container py-5 px-lg-5">
		<div class="row mb-5">
			<div class="col-lg-8 mx-auto">
				<img src="<?php echo base_url('blog_images/'.$blog->blog_img); ?>" class="img-fluid mb-3" alt="<?php echo $blog->blog_title; ?>">
				<div class="col-md-6 mx-auto">
					<h1 class="display-8 mb-3 fw-bold">
					<?php echo $blog->blog_title; ?>
				</h1>
				</div>
				

                <div class="row mb-3">
                    <div class="col-lg-6">
                        <p>
        					By <span class="fw-bold"><?php echo $blog->blog_author; ?></span>
        				</p>
        				<p>
        					Published on <span class="fw-bold"><?php echo date("jS, M, Y",strtotime($blog->date_created)); ?></span>
        				</p>        
                    </div>
                    <div class="col-lg-6 text-start text-lg-end my-auto">
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo base_url('blogs/view/'.$blog->blog_url); ?>" target="_blank" class=""><i class="fab fa-linkedin fa-2x linkd me-2"></i></a>
                        <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url('blogs/view/'.$blog->blog_url); ?>" target="_blank" class=""><i class="fab fa-facebook-square fa-2x me-2 face"></i></a>
                        <a href="https://twitter.com/share?url=<?php echo base_url('blogs/view/'.$blog->blog_url); ?>" target="_blank" class=""><i class="fab fa-twitter fa-2x twit"></i></a>
                    </div>
                </div>
				
				
				<div>
					<?php echo $blog->blog_content; ?>
				</div>
				
			</div>
		</div>
		<div class="row mb-3">
			<h2 class="display-7 text-center fw-bold mb-3">
					Subscribe to our newsletter!
				</h2>
			<div class="col-lg-8 col-9  mx-auto">
				
	                <?php $validation = \Config\Services::validation(); ?>
					<form method="POST" action="<?php echo base_url('blogs/subscribe'); ?>">
    					<div class="row">
    						<div class="col-lg-6 col-md-6">
    							<input type="email" class="form-control  rounded-3 bg-white mb-3" name="email" placeholder="Email Address">
    							
    						</div>
    						    <input type="hidden" value="<?php echo uri_string(); ?>" name="url" id="url">
    						<div class="col-lg-3 col-md-7">
    							<div class="d-grid gap-2">
    								<button type="submit" class="btn btn-blue btn-md rounded-3">Subscribe</button>
    							</div>
    						</div>
    					</div>
    				</form>
    				<?php if(session()->getTempdata('subscribe_err')):?>
                        <div class="alert alert-sm alert-danger mt-3">
                           <?= session()->getTempdata('subscribe_err') ?>
                        </div>
                    <?php endif;?>
				    <?php if(session()->getTempdata('subscription_err')):?>
                        <div class="alert alert-success mt-3">
                           <?= session()->getTempdata('subscription_err') ?>
                        </div>
                    <?php endif;?>
			</div>
		</div>
	</div>
</div>
