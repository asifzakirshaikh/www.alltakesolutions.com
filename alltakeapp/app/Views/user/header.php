<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('images/home/logo/favicon.png'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />
    
    <!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
     <script src="https://cdn.tiny.cloud/1/vgu9tqpxbfvp77ysy42jn52iu4ygqtl83y83l8re8j9bylgr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
      <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/vgu9tqpxbfvp77ysy42jn52iu4ygqtl83y83l8re8j9bylgr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <title><?php echo $title; ?></title>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-5">
      <div class="container-fluid">
      <a class="navbar-brand"><img src="<?php echo base_url('images/home/logo/logo.png'); ?>" width="140" alt="Alltake ITES Pvt. Ltd."></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item my-auto me-3">
              <a class="nav-link" href="#">
                <?php echo $user['user_fullname']; ?>
              </a>
            </li>
            <li class="nav-item my-auto me-3">
              <a class="nav-link" href="<?php echo base_url('blogs/sign-out'); ?>">
                <i class="fas fa-sign-out-alt"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid p-lg-5">
      <div class="row">
        <div class="col-lg-2 py-4 bg-white rounded-4">
          <ul class="nav flex-column sidebar">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('account'); ?>"> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('account/blogs'); ?>"> Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('account/infographics'); ?>"> Infographics</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mx-auto p-4 rounded-4 bg-white">

