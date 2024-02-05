<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel = "icon" href = "<?php echo base_url('images/home/logo/favicon.png'); ?>" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheet.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title><?php echo $title; ?></title>
  </head>
  <body>

    <div class="container-fluid py-5">
      <div class="row">
            <div class="col-lg-3 col-10 mx-auto shadow  rounded-4 mt-5 py-4">
              <h2 class="text-center text-blue fw-bold py-4 rounded-top">
                Sign In
              </h2>

              <div class="col-12 p-4">
                  <?php $validation = \Config\Services::validation(); ?>
                 <form method="POST" action="<?php echo base_url('blogs/user-login'); ?>">
                      <div class="mb-3"> 
                          <input type="email" class="form-control rounded-3" name="email" id="email" placeholder="Email Address" aria-describedby="emailHelp">
                          <?php if($validation->getError('email')) {?>
                              <p class='text-danger mt-2'>
                                <?= $error = $validation->getError('email'); ?>
                              </p>
                          <?php }?>
                      </div>
                      <div class="mb-3">
                          <input type="password" class="form-control rounded-3" name="password" id="password" placeholder="Password">
                          <?php if($validation->getError('password')) {?>
                              <p class='text-danger mt-2'>
                                <?= $error = $validation->getError('password'); ?>
                              </p>
                          <?php }?>
                      </div>
                      <div class="form-check my-4">
                          <input class="form-check-input" type="checkbox" id="toggle-password"> 
                          <label class="form-check-label">
                              Show Password
                          </label>
                      </div>
                      
                      <div class="text-center my-4">
                          <div class="d-grid gap-2">
                          <button type="submit" class="btn btn-outline-blue btn-lg rounded-pill">Sign in</button>
                        </div>
                      </div>
                  </form>
                  <?php if(session()->getTempdata('user_login_err')):?>
                        <div class="alert alert-danger">
                           <?= session()->getTempdata('user_login_err') ?>
                        </div>
                  <?php endif;?>
                </div>
              </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      const passwordInput = document.querySelector("#password");
      const togglePasswordCheckbox = document.querySelector("#toggle-password");
      
      togglePasswordCheckbox.addEventListener("click",() => {
        if(passwordInput.type == "password"){
          passwordInput.type = "text";
        } else if(passwordInput.type == "text"){
          passwordInput.type = "password";
        }
      });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>