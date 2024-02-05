<div class="container-fluid  py-5">
      <div class="container px-lg-5 mt-5 mb-5 py-5">
        <div class="row">
          <div class="col-lg-6 py-5 pt-5 mt-5 mx-auto py-4 bg-white rounded-4 border mt-5 py-5">
            <p class="text-center fw-bold"> Join our community. We're excited to have you on board! </p>
            <p class="text-center fw-bold">
                Enter your email to Subscribe the Newsletter.
              </p>
            <div class="col-lg-8 mx-auto p-4 ">
              <?php $validation = \Config\Services::validation(); ?>
              <form method="POST" action="<?php echo base_url('subscribe-newsletter'); ?>">
                  <div class="mb-3">
                    <input type="hidden" value="<?php echo uri_string(); ?>" name="uri">
                    <input type="text" class="form-control" name="name" placeholder="Name *">
                    <?php if($validation->getError('name')) {?>
                         <p class='text-danger mt-2'>
                           <?= $error = $validation->getError('name'); ?>
                         </p>
               <?php }?>
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control rounded-2" name="email" id="email" aria-describedby="emailHelp" placeholder="Email Address *">
                    <?php if($validation->getError('email')) {?>
                            <p class='text-danger mt-2'>
                              <?= $error = $validation->getError('email'); ?>
                            </p>
                    <?php }?>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-blue rounded-3">Subscribe</button>
                  </div>
                  <?php if(session()->getTempdata('subscribe_newsletter_error')):?>
                    <div class="alert alert-danger mt-3">
                       <?= session()->getTempdata('subscribe_newsletter_error') ?>
                    </div>
               <?php elseif(session()->getTempdata('subscribe_newsletter_success')):?>
                    <div class="alert alert-success mt-3">
                       <?= session()->getTempdata('subscribe_newsletter_success') ?>
                    </div>
               <?php endif; ?>
              </form>
                
            </div>
          </div>
        </div>
        
      </div>
    </div>