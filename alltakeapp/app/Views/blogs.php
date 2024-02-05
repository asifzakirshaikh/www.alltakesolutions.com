<div style="margin-top: 160px;">
  <div class="container pb-5 px-lg-5">
    <div class="row">
        <div class="col-lg-8 pe-lg-4 order-lg-first">
            <div class="row">
            <?php

              foreach ($blogs_page as $b) {
            ?>
            
                
                    <div class="col-lg-12 p-4 rounded-3 mb-3 bg-white content1">
                        <div class="row">
                            <div class="col-lg-4">
                                <a target="_blank" rel="noopener noreferrer" href="<?php echo base_url('blogs/view/'.$b['blog_url']); ?>">
                                    <img src="<?php echo base_url('blog_images/'.$b['blog_img']); ?>" class="img-fluid mb-2">
                                </a>
                            </div>
                            <div class="col-lg-8">
                                <a target="_blank" href="<?php echo base_url('blogs/view/'.$b['blog_url']); ?>" class="text-decoration-none">
                                <h5 class="fs-5 fw-bold text">
                                    <?php echo $b['blog_title']; ?>
                                </h5>
                                </a>
                                  <div class="d-lg-block d-none">
                                      <div class="content mb-2 sofiya-1">
                                          <a target="_blank" href="<?php echo base_url('blogs/view/'.$b['blog_url']); ?>" class="text-decoration-none text-1 sofia-1">
                                          <p class="text-1 fw-bold text-decoration-none"><?php echo $b['blog_content']; ?></p>
                                         </a>
                                      </div>
                                  </div>
                          
                            </div>
                        </div>
                    </div>
                
            
            <?php } ?>
            </div>
            
            <div class="pagination justify-content-center mb-0">
                    <?php if ( ! empty($pager)) :
                        //echo $pager->simpleLinks('group1', 'bs_full');
                        echo $pager->links('group1', 'bs_full');
                    endif ?>               
                </div>
                <!-- Bootstrap 4.5.2 code to show page 1 of 4 total pages using a button. -->
                <div class="text-center mb-4" role="group" aria-label="pager counts">
                    &nbsp;&nbsp;&nbsp;
                    <p class="oswald"><?= 'Page '.$currentPage.' of '.$totalPages; ?></p>
                </div>
        </div>
            
        <div class="col-lg-4 order-first">
            <div class="sticky-top" style="top:15%;z-index:0;">
                <div class="mb-4">
                    <h5 class="fw-bold text-blue mb-3">
                        Subscribe to our newsletter!
                    </h5>
              <form method="POST" action="<?php echo base_url('blogs/subscribe'); ?>">
                      <input type="hidden" value="<?php echo uri_string(); ?>" name="url" id="url">
                      <div class="row">
                          <div class="col-8 ">
                            <input type="email" class="form-control border rounded-3 " name="email" placeholder="Email Address">
                            
                        </div>
                        <div class="col-4">
                            <button class="btn btn-blue rounded-3" style="margin-top:0px; margin-left:-23px; type="submit">Subscribe</button>
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
                
                <div class="bg-white rounded-3 p-4">
                        
                    <h5 class="fw-bold mb-4">
                        Most Recent
                    </h5>
                    <?php
    
                      foreach ($most_recent as $m) {
                    ?>
                    
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <a target="_blank" href="<?php echo base_url('blogs/view/'.$m->blog_url); ?>">
                                <img src="<?php echo base_url('blog_images/'.$m->blog_img); ?>" class="img-fluid mb-2">
                            </a>
                        </div>
                        <div class="col-lg-8">
                            <a target="_blank" href="<?php echo base_url('blogs/view/'.$m->blog_url); ?>" class="text-decoration-none text">
                            <h5 class="fs-6 fw-bold">
                        <?php echo $m->blog_title; ?>
                      </h5>
                      <p class="content_small text-small"><?php echo $m->blog_title; ?></p>
                      </a>
                      
                        </div>
                    </div>
                    
                    <?php } ?>
                 </div>
            </div>
        </div>
      </div>
      
  </div>
</div>

 