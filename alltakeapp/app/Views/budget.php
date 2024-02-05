<div class="container-fluid mt-5 py-5 ">
	<div class="row mt-5">
		<div class="col-lg-5 mx-auto mt-5 px-0 mb-5 p-2">
            <div class="col-lg-11  mx-auto mt-2 py-2 mb-4">
                <div class="container">
                <p class="fw-semibold fs-2 text-blue text-1 ms-4">Let's get started...</p>
                <div class="row">
                    <?php if(session()->getTempdata('budget_errer')):?>
                                        <div class="alert alert-danger mt-3">
                                           <?= session()->getTempdata('budget_errer') ?>
                                        </div>
                                   <?php elseif(session()->getTempdata('budget_success')):?>
                                        <div class="alert alert-warning mt-3">
                                           <?= session()->getTempdata('budget_success') ?>
                                        </div>
                                   <?php endif; ?>
                    <div class="col-12 bg-white desk-view">
                        
                        <?php $validation = \Config\Services::validation(); ?>
                        <form class="row py-2" method="POST" action="<?php echo base_url('submit'); ?>">
                            <label class="fs-5 fw-semibold ms-4">What is your Revenue Target ?*</label>
                                <div class="wrapper">
                                    <!--<input type="hidden" value="<?php echo uri_string(); ?>" name="uri">-->
                                    <input type="radio" name="revenue" id="revenue1" value="$10K-$20K" style="display:none;" >
                                    <input type="radio" name="revenue" id="revenue2" value="$30K-$50K" style="display:none;">
                                    <input type="radio" name="revenue" id="revenue3" value="$50K+" style="display:none;">

                                        <label for="revenue1" class="option revenue1">
                                            <span class="fw-semibold">$10K-$20K</span>
                                          </label>
                                       <label for="revenue2" class="option revenue2">
                                            <span class="fw-semibold">$30K-$50K</span>
                                           </label>
                                        <label for="revenue3" class="option revenue3">
                                            <span class="fw-semibold">$50K+</span>
                                           </label>
                                </div>
                                <label class="fs-5 fw-semibold ms-4">What is your Campaign's Objective?*</label>
                                <div class="wrapper">
                                    <!--<input type="hidden" value="<?php echo uri_string(); ?>" name="uri">-->
                                    <input type="radio" name="Objective" id="Leadgeneration1" value="Leadgeneration" style="display:none;" >
                                    <input type="radio" name="Objective" id="Awareness1" value="Awareness" style="display:none;">
                                    <input type="radio" name="Objective" id="Engagement1" value="Engagement" style="display:none;">
                                    <input type="radio" name="Objective" id="Qualitycheck" value="Quality Check" style="display:none;">
                                    <input type="radio" name="Objective" id="Others4" value="Others" style="display:none;">

                                        <label for="Leadgeneration1" class="option Leadgeneration1">
                                            <span class="fw-semibold">Lead Generation</span>
                                          </label>
                                       <label for="Awareness1" class="option Awareness1">
                                            <span class="fw-semibold">Awareness</span>
                                           </label>
                                        <label for="Engagement1" class="option Engagement1">
                                            <span class="fw-semibold">Engagement</span>
                                           </label>
                                        <label for="Qualitycheck" class="option Qualitycheck">
                                            <span class="fw-semibold">Quality Check</span>
                                           </label>
                                        <label for="Others4" class="option Others4">
                                            <span class="fw-semibold">Others</span>
                                           </label>
                                </div>
                                <label class="fs-5 fw-semibold ms-4">Number of Leads you need:</label>
                                <div class="wrapper">
                                    <!--<input type="hidden" value="<?php echo uri_string(); ?>" name="uri">-->
                                    <input type="radio" name="Leads" id="lead1" value="500-1,000" style="display:none;" >
                                    <input type="radio" name="Leads" id="lead2" value="1,000-5,000" style="display:none;">
                                    <input type="radio" name="Leads" id="lead3" value="5,000-10,000" style="display:none;">
                                    <input type="radio" name="Leads" id="lead4" value="10,000+" style="display:none;">

                                        <label for="lead1" class="option lead1">
                                            <span class="fw-semibold">500-1,000</span>
                                          </label>
                                       <label for="lead2" class="option lead2">
                                            <span class="fw-semibold">1,000-5,000</span>
                                           </label>
                                        <label for="lead3" class="option lead3">
                                            <span class="fw-semibold">5,000-10,000</span>
                                           </label>
                                        <label for="lead4" class="option lead4">
                                            <span class="fw-semibold">10,000+</span>
                                           </label>
                                </div>
                            <label class="fs-5 fw-semibold ms-4">What are your Target Demographics?*</label>
                                <div class="wrapper">
                                    <!--<input type="hidden" value="<?php echo uri_string(); ?>" name="uri">-->
                                    <input type="checkbox" name="NorthAmerica" id="NorthAmerica" value="North America" style="display:none;">
                                    <input type="checkbox" name="emea" id="emea" value="EMEA" style="display:none;">
                                    <input type="checkbox" name="apac" id="apac" value="APAC" style="display:none;">
                                    <input type="checkbox" name="others1" id="Others1" value="Others" style="display:none;">

                                        <label for="NorthAmerica" class="option NorthAmerica">
                                            <span class="fw-semibold">North America</span>
                                          </label>
                                       <label for="emea" class="option emea">
                                            <span class="fw-semibold">EMEA</span>
                                           </label>
                                        <label for="apac" class="option apac">
                                            <span class="fw-semibold">APAC</span>
                                           </label>
                                        <label for="Others1" class="option Others1">
                                            <span class="fw-semibold">Others</span>
                                           </label>
                                </div>

                                <div class="wrapper col-lg-11"style="margin-top:-25px;">
                                        <input type="text"class="form-control other-target"style="font-size: 1rem;" name="others" placeholder="Apart from above selection, if any other target markets, please specify here">
                                </div>
                                <label class="fs-5 fw-semibold ms-4">Business Titles you want to target ?*</label>
                                <div class="wrapper">
                                    <!--<input type="hidden" value="<?php echo uri_string(); ?>" name="uri">-->
                                    <input type="radio" name="titles" id="marketingmanager" value="Marketing Manager" style="display:none;" >
                                    <input type="radio" name="titles" id="financialhead" value="Financial Head" style="display:none;">
                                    <input type="radio" name="titles" id="enduser" value="End User" style="display:none;">
                                    <input type="radio" name="titles" id="others5" value="Others" style="display:none;">

                                        <label for="marketingmanager" class="option marketingmanager">
                                            <span class="fw-semibold">Marketing Manager</span>
                                          </label>
                                       <label for="financialhead" class="option financialhead">
                                            <span class="fw-semibold">Financial Head</span>
                                           </label>
                                        <label for="enduser" class="option enduser">
                                            <span class="fw-semibold">End User</span>
                                           </label>
                                        <label for="others5" class="option others5">
                                            <span class="fw-semibold">Others</span>
                                           </label>
                                       
                                </div>


<hr>
                            <label class="fs-5 fw-semibold ms-3">Business Size you want to target:</label>
                                <div class="wrapper px-0">
                                    <input type="radio" name="size" id="target1" value="11-50" style="display:none;" >
                                    <input type="radio" name="size" id="target2" value="51-200" style="display:none;">
                                    <input type="radio" name="size" id="target3" value="201-500" style="display:none;">
                                    <input type="radio" name="size" id="target4" value="201-500" style="display:none;">

                                        <label for="target1" class="option target1"style="width:300px!important">
                                            <span class="fw-semibold">11-50</span>
                                          </label>
                                        <label for="target2" class="option target2">
                                            <span class="fw-semibold">51-200</span>
                                           </label>
                                        <label for="target3" class="option target3">
                                             <span class="fw-semibold">201-500</span>
                                           </label>
                                           <label for="target4" class="option target4">
                                             <span class="fw-semibold">500+</span>
                                           </label>
                                        
                                </div>  
                                         
<hr>
                            <label class="fs-5 fw-semibold ms-4">Your Current Role in the Company?*</label>
                                <div class="wrapper">
                                    <input type="radio" name="Role" id="CSuite" value="C-Suite" style="display:none;" >
                                    <input type="radio" name="Role" id="Vp" value="VP" style="display:none;">
                                    <input type="radio" name="Role" id="Manager" value="Manager" style="display:none;">
                                    <input type="radio" name="Role" id="Director" value="Director" style="display:none;">
                                    <input type="radio" name="Role" id="Others2" value="Others" style="display:none;">

                                        <label for="CSuite" class="option CSuite">                             
                                          <span class="fw-semibold">C-Suite</span>
                                          </label>
                                        <label for="Vp" class="option Vp">                        
                                             <span class="fw-semibold" class="fs-6 fw-bold">VP</span>
                                           </label>
                                           <label for="Director" class="option Director">                        
                                             <span class="fw-semibold" class="fs-6 fw-bold">Director</span>
                                           </label>
                                        <label for="Manager" class="option Manager">                             
                                             <span class="fw-semibold" >Manager</span>
                                           </label>
                                        <label for="Others2" class="option Others2">                           
                                             <span class="fw-semibold">Others</span>
                                           </label>
                                </div>
<hr>                
                           
                            <!--<label class="fs-5 fw-semibold ms-2">How have you priced your campaign budgets in the past?*</label>-->
                            <!--    <div class="wrapper">-->
                                    
                            <!--    </div>-->
                                <input type="hidden" class="form-control fs-5" name="budget" value="none" placeholder="Type Budget Price">
                            <label class="fs-5 fw-semibold ms-2">Pick all the services and solutions you may require *</label>
                                <div class="wrapper px-0">

                                    <input type="checkbox" name="services" id="leadgeneration" value="Lead Generation" style="display:none;">
                                    <input type="checkbox" name="services1" id="abm" value="ABM" style="display:none;">
                                    <input type="checkbox" name="services2" id="abx" value="ABX" style="display:none;">
                                    <input type="checkbox" name="services3" id="intentbasedprofiling" value="Intent-based Profiling" style="display:none;">
                                    <input type="checkbox" name="services4" id="contentstudio" value="Content Studio" style="display:none;">
                                    
                                    
                                        <label for="leadgeneration" class="option leadgeneration"style="width:500px!important">
                                             <span class=" fw-semibold">Lead Generation</span>
                                           </label>
                                        <label for="abm" class="option abm">
                                            <span class=" fw-semibold">ABM</span>
                                          </label>
                                        <label for="abx" class="option abx ">
                                            <span class=" fw-semibold">ABX</span>
                                           </label>
                                        
                                           <label for="intentbasedprofiling" class="option intentbasedprofiling"style="width:570px!important">
                                             <span class=" fw-semibold">Intent-based Profiling</span>
                                           </label>
                                        <label for="contentstudio" class="option contentstudio"style="width:450px!important">
                                             <span class=" fw-semibold">Content Studio</span>
                                           </label>   
                                    </div> 
                                   

<hr>            

                                        <label class="fs-5 fw-semibold ms-3">How can we get in touch with you?*<br><br><span class="fs-6">Full Name*</span></label>
                                            <div class="wrapper">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" >
                                                
                                            </div>
                                            <?php if($validation->getError('name')) {?>
    				                         <p class='text-danger mt-2'>
    				                           <?= $error = $validation->getError('name'); ?>
    				                         </p>
    			      	 					<?php }?>
                                        <label class="fs-6 fw-semibold ms-4">Business Email *<span class="fs-6 b-email"style="padding-left:220px;">Business Number</span></label>  
                                            <div class="wrapper">
                                                <input type="email" class="form-control mx-2" name="email" placeholder="Your Email">
                                                
                                                <input type="text" class="form-control"id="ph_number" name="ph_number" placeholder="Your Number">
                                            </div>
                                            <?php if($validation->getError('email')) {?>
    				                         <p class='text-danger mt-2'>
    				                           <?= $error = $validation->getError('email'); ?>
    				                         </p>
    			      	 					<?php }?>
                                          
                                <div class="ms-3 py-4">
                                      <input type="checkbox" id="consent" name="consent"style="display: block!important;width:25px;height:25px;"value="Yes">
                                      <label for="consent"class="fw-semibold"style="font-size: 1rem; padding-left:40px;margin-top:-30px;">
                                      <span class="fw-bold sofia">Your Consent matters to us</span>
                                      <br>By filling out this form, I consent to my data being stored on the website's external servers and accessed, processed, and used to contact me about the project inquiry.
                                      <br> For more information about our sensitivity towards personal data, visit our 
                                      <span> <a class="text-decoration-none" href="<?php echo base_url('privacy-policy'); ?>">privacy policy</a></span>.
                                      </label>
                                      	<?php if($validation->getError('consent')) {?>
				                         <p class='text-danger mt-2'>
				                           <?= $error = $validation->getError('consent'); ?>
				                         </p>
			      	 					<?php }?>
                                    </div> 
                <!--                    <div class="form-group mb-5 ms-3">-->
			             <!--   			<div class="g-recaptcha" data-sitekey="6LflTSElAAAAAALaF0MYFlZqysVJOO7LbC5DHqHx" name="g-recaptcha-response"></div>-->
			             <!--   			<?php if($validation->getError('g-recaptcha-response')) {?>-->
				            <!--             <p class='text-danger mt-2'>-->
				            <!--               <?= $error = $validation->getError('g-recaptcha-response'); ?>-->
				            <!--             </p>-->
			      	 					<!--<?php }?>-->
			            	<!--		</div>-->
                                    <div class="mb-3 ms-2" style="margin-top:-20px;">
                                      <button type="submit" class="btn btn-blue btn-lg ms-3">Submit</button>
                                </div>
                                </form>

                                
                            </div>
                        </div>
                </div>
        </div>
</div>
<div class="col-lg-6 mt-5">
	<div class="sticky-top" style="z-index:1;top: 150px;">
		<div class="mb-3">
			<img src="<?php echo base_url('images/home/img-19.png'); ?>" class="img-fluid mb-3 rounded-4 col-lg-10">
		</div>
		
	</div>
	</div>
</div>
</div>

