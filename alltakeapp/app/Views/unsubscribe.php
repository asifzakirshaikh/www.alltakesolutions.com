<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex, nofollow">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "icon" href = "<?php echo base_url('images/home/logo/favicon.png'); ?>" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/stylesheet.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<title><?php echo $title; ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg py-3 bg-light fixed-top" id="home-nav">
      <div class="container px-lg-5">
        <button class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('images/home/logo/logo.png'); ?>" width="140" alt="Alltake ITES Pvt. Ltd."></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
        </div>
      </div>
    </nav>
	<div class="container-fluid bg-light">
      <div class="container px-lg-5 mt-5 mb-5 py-5">
        <div class="row">
          <div class="col-lg-4 py-5 pt-5 mt-5 mx-auto py-4 bg-white rounded-4">
            <div class="col-lg-12 p-4">
              <p class="text-center fw-bold">
                Enter your email to Unsubscribe.
              </p>
              <?php $validation = \Config\Services::validation(); ?>
              <form method="POST" action="<?php echo base_url('form_unsubscribe'); ?>">
                  <div class="mb-3">
                    <input type="email" class="form-control rounded-2" name="email" id="email" aria-describedby="emailHelp" placeholder="Email Address">
                    <?php if($validation->getError('email')) {?>
                            <p class='text-danger mt-2'>
                              <?= $error = $validation->getError('email'); ?>
                            </p>
                    <?php }?>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-danger rounded-3">Unsubscribe</button>
                  </div>
                  <?php if(session()->getTempdata('unsubscribe_form_error')):?>
                    <div class="alert alert-danger mt-3">
                       <?= session()->getTempdata('unsubscribe_form_error') ?>
                    </div>
               <?php elseif(session()->getTempdata('unsubscribe_form_success')):?>
                    <div class="alert alert-success mt-3">
                       <?= session()->getTempdata('unsubscribe_form_success') ?>
                    </div>
               <?php endif; ?>
              </form>
                
            </div>
          </div>
        </div>
        
      </div>
    </div>

</body>
</html>