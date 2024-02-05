<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="nositelinkssearchbox">
    <title><?php echo $title;?></title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo $twitter_title; ?>">
    <meta name="twitter:description" content="<?php echo $twitter_description; ?>">
    <meta name="image" property="og:image" content="<?php echo $meta_image; ?>">
    <meta name="og:title" content="<?php echo $og_title; ?>">
    <meta name="og:description" content="<?php echo $og_description; ?>">
    <meta name="og:image" content="<?php echo $og_image; ?>">
    <meta name="og:url" content="<?php echo $og_url; ?>">
    <meta name="og:site_name" content="Alltake">
    <meta name="fb:admins" content="100063904035803">
    <meta name="fb:app_id" content="759352388645678">
    <meta name="og:type" content="website">
    <meta name="title" content="<?php echo $meta_title;?>">
    <meta name="description" content="<?php echo $meta_description;?>">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <?php echo $canonical; ?>
    <?php echo $schema; ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D550BFRZBB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-D550BFRZBB');
    </script>
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WFQXGZ3');
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheet.css'); ?>">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "icon" href = "<?php echo base_url('images/home/logo/favicon1.png'); ?>" type = "image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.2/axios.js"></script>
</head>
<body>

    <div class="container-fluid p-2 bg-blue px-0 fixed-top d-none d-lg-block subHeader">
        <div class="container-fluid ">
          <div class="text-end  p-2 frame">
            <!-- <a class="text-blue text-decoration-none fw-bold sliding-border" href="#">Know Your Budget</a> -->
            <a href='<?php echo base_url('budget-calculator'); ?>'><button class="custom-btn btn-11">Budget Calculator</button></a>
            <button class="custom-btn btn-11" data-bs-toggle="modal" data-bs-target="#requestProposalModal">Request Proposal</button>
          </div>
        </div>  
    </div>
  
  <div class="container d-block d-lg-none bg-blue px-0 fixed-top">
      <div class="float-center p-3 frame">
          <div class="btn-group" role="group" aria-label="Basic example">
        <!-- <a class="text-blue text-decoration-none fw-bold" href="#">Know Your Budget</a> -->
    <a href='<?php echo base_url('know-your-budget'); ?>'><button class="custom-btn btn-11">Budget Calculator</button></a>
    <button class="custom-btn btn-11" data-bs-toggle="modal" data-bs-target="#requestProposalModal">Request Proposal</button>
        </div>
      </div>
  </div>
  
    <div class="modal fade" id="requestProposalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-5">
                    <div class="row text-end">
                        <div class="col-lg-12">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>      
                        </div>
                    </div>
                    
                    <!--<div class="row mb-3">-->
                    <!--    <div class="col-lg-12">-->
                    <!--        <h5>-->
                    <!--            Our team is creating a custom proposal that achieves your goals. Please provide details about your key objectives and needs so we can craft an effective, original proposal tailored to your situation.-->
                    <!--        </h5>-->
                    <!--    </div>-->
                    <!--</div>-->
        
                    <!-- Form Sections -->
                    <form id="questionnaireForm" method="POST" action="<?php echo base_url('request-proposal'); ?>">
                        <!-- Section 1: Personal Info -->
                        <div class="form-section">
                            <div class="mb-3">
                                <p>What are your main goals for purchasing leads?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Increase sales qualified leads" name="increaseSales" id="increaseSales">
                                    <label class="form-check-label" for="increaseSales">
                                        Increase sales qualified leads
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Improve lead conversion rates" name="improveLeads" id="improveLeads">
                                    <label class="form-check-label" for="improveLeads">
                                        Improve lead conversion rates
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Expand into new markets/verticals" name="expandMarket" id="expandMarket">
                                    <label class="form-check-label" for="expandMarket">
                                        Expand into new markets/verticals
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Increase marketing generated pipeline" name="increaseMarketing" id="increaseMarketing">
                                    <label class="form-check-label" for="increaseMarketing">
                                        Increase marketing generated pipeline
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gain access to new accounts" name="gainAccess" id="gainAccess">
                                    <label class="form-check-label" for="gainAccess">
                                        Gain access to new accounts
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <p>
                                    What is your timeline to get started?
                                </p>
                                <select class="form-select" name="timeline" aria-label="Default select example">
                                  <option selected>Choose</option>
                                  <option value="< 3 months">< 3 months</option>
                                  <option value="3-6 months">3-6 months</option>
                                  <option value="6-12 months">6-12 months</option>
                                  <option value="> 12 months">> 12 months</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <p>Are you ready with your ICP / Buyer Persona?</p>
                                <select class="form-select" aria-label="Default select example" id="icp" name="icp">
                                  <option value="No" selected>No</option>
                                  <option value="Yes">Yes</option>
                                </select>
                            </div>
                            <div id="divToDisplay" class="mt-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p>Region</p>
                                        <select class="form-select" name="region" aria-label="Default select example">
                                          <option value="APAC" selected>APAC</option>
                                          <option value="EMEA">EMEA</option>
                                          <option value="North America">North America</option>
                                          <option value="Others">Others</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <p>Level</p>
                                        <select class="form-select" name="level" aria-label="Default select example">
                                          <option value="C-Suite" selected>C-Suite</option>
                                          <option value="Director">Director</option>
                                          <option value="Manager">Manager</option>
                                          <option value="Others">Vice President</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <p>Function</p>
                                        <select class="form-select" name="function" aria-label="Default select example">
                                          <option value="Finance" selected>Finance</option>
                                          <option value="IT">IT</option>
                                          <option value="Marketing">Marketing</option>
                                          <option value="Operations">Operations</option>
                                          <option value="Sales">Sales</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Section 2: Favorite Color -->
                        <!--<div class="form-section" style="display: none;">-->
                            
                        <!--    <div class="mb-3">-->
                        <!--        <p>Are you ready with your ICP / Buyer Persona?</p>-->
                        <!--        <select class="form-select" aria-label="Default select example">-->
                        <!--          <option selected>Choose</option>-->
                        <!--          <option value="1">Yes</option>-->
                        <!--          <option value="2">No</option>-->
                        <!--        </select>-->
                        <!--    </div>-->
                            
                        <!--</div>-->
        
                        <!-- Section 3: Programming Languages -->
                        <div class="form-section" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <div class="row mb-3">
                                        <div class="col-lg-12">
                                            <h3 class="fw-bold">
                                                Almost there!
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-lg-12">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                                        </div>
                                    </div>
                                    <input type="hidden" value="<?php echo uri_string(); ?>" name="uri">
                                    <h5>
                                        Prefer to email?
                                    </h5>
                                    <p>
                                        Reach out to us at business@alltakesolutions.com
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <h5 class="fw-bold">
                                        <em>
                                            Our team is creating a custom proposal that achieves your goals. We'll get back to you shortly!
                                        </em>
                                    </h5>
                                </div>
                            </div>
                        </div>
        
                        <!-- Section 4: Submit Button -->
                        <p class="d-inline-flex">
                            
                        
                        <button type="button" class="btn btn-outline-primary" id="previousButton" onclick="showPreviousSection()">Previous</button>
                        <button type="button" class="btn btn-primary" id="nextButton" onclick="showNextSection()">Next</button>
                        <button type="submit" class="btn btn-outline-primary" id="submitButton">Submit</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    var currentSectionIndex = 0;
    var formSections = document.querySelectorAll('#questionnaireForm .form-section');
    var submitButton = document.getElementById('submitButton');
    var previousButton = document.getElementById('previousButton');
    var nextButton = document.getElementById('nextButton');

    submitButton.style.display = 'none';
    previousButton.style.display = 'none';

    function showNextSection() {
        if (currentSectionIndex < formSections.length - 1) {
            formSections[currentSectionIndex].style.display = 'none';
            currentSectionIndex++;
            formSections[currentSectionIndex].style.display = 'block';
        }

        // Show the submit button when reaching the last section
        if (currentSectionIndex === formSections.length - 1) {
            submitButton.style.display = 'block';
            nextButton.style.display = 'none';
        } else {
            submitButton.style.display = 'none';
            nextButton.style.display = 'block';
        }

        // Always display the previous button after moving to the next section
        previousButton.style.display = 'block';
    }

    function showPreviousSection() {
        if (currentSectionIndex > 0) {
            formSections[currentSectionIndex].style.display = 'none';
            currentSectionIndex--;
            formSections[currentSectionIndex].style.display = 'block';
        }

        // Always hide the submit button when moving to a previous section
        submitButton.style.display = 'none';

        // Show or hide the "Previous" and "Next" buttons based on the current section
        if (currentSectionIndex === 0) {
            previousButton.style.display = 'none';
            nextButton.style.display = 'block'; // Display the "Next" button on the first section
        } else {
            previousButton.style.display = 'block';
            nextButton.style.display = 'block';
        }
    }
    
    function validateCurrentSection() {
        var currentSection = formSections[currentSectionIndex];
        var requiredInputs = currentSection.querySelectorAll('[required]');

        for (var i = 0; i < requiredInputs.length; i++) {
            if (!requiredInputs[i].value) {
                alert('Please fill out all required fields in the current section before proceeding.');
                return false;
            }
        }

        return true;
    }
</script>


    <script>
    var icpDropdown = document.getElementById('icp');
    var divToDisplay = document.getElementById('divToDisplay'); // Replace 'divToDisplay' with the actual ID of your div

    // Function to check the value of the "icp" dropdown and show/hide the div accordingly
    function checkICPValue() {
        if (icpDropdown.value === 'Yes') {
            divToDisplay.style.display = 'block';
        } else {
            divToDisplay.style.display = 'none';
        }
    }

    // Attach the checkICPValue function to the change event of the "icp" dropdown
    icpDropdown.addEventListener('change', checkICPValue);

    // Initial check when the page loads
    checkICPValue();
</script>


  
  
  <div class="container-fluid px-0 p-2 bg-white fixed-top mt-5">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg bg-white" id="home-nav">
        <div class="container-fluid">
           <button class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <i class="fas fa-bars"></i>
        </button>
        <div class="ms-5 d-none d-lg-block">
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('images/home/logo/logo.png'); ?>" width="220" alt="alltakesolutions"></a>
        </div>
        <div class=" d-block d-lg-none me-3 float-end">
          <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('images/home/logo/logo.png'); ?>" class="img-fluid ms-auto" width="150" alt="alltakesolutions"></a>
        </div>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item me-1">
                <a class="nav-link sliding-border" aria-current="page" href="<?php echo base_url('about'); ?>">About</a>
              </li>
              <li class="nav-item me-1 my-auto dropdown">
              <a class="nav-link text sliding-border"  id="navbarDropdown">
                Solutions
              </a>
              <ul class="dropdown-menu dropdown-menu-center py-3 p-2" aria-labelledby="navbarDropdown"style="border:none;">
                  <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('b2b-lead-generation'); ?>">B2B Lead Generation</a></li>
                  <!--<li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('solutions/account-based-lead-generation'); ?>">Account-based Lead Generation</a></li>-->
                 <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('solutions/account-based-marketing'); ?>">Account-based marketing</a></li>
                 <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('solutions/account-based-experience'); ?>">Account-based experience</a></li>
                  <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('solutions/intent-based-profiling'); ?>">Intent-based profiling</a></li>
                  <!--<li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('solutions/content-studio'); ?>">Content studio</a></li>-->
              </ul>
            </li>

            <li class="nav-item me-1 my-auto dropdown">
              <a class="nav-link text sliding-border" id="navbarDropdown">
                Capabilities
              </a>
              <ul class="dropdown-menu dropdown-menu-center py-3 p-2" aria-labelledby="navbarDropdown"style="border:none;">
                 <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('capabilities/digital-and-media'); ?>">Digital & Media</a></li>
                  <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('capabilities/marketing-strategy-and-profiling'); ?>">Marketing strategy & profiling</a></li>
                 <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('capabilities/content-marketing'); ?>">Content Marketing</a></li>
              </ul>
            </li>

            <li class="nav-item me-1 my-auto dropdown">
              <a class="nav-link text sliding-border"  id="navbarDropdown">
                Resources
              </a>
              <ul class="dropdown-menu dropdown-menu-center1 py-3 p-2" aria-labelledby="navbarDropdown"style="border:none; align-content: center;">
                 <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('blogs'); ?>">Blogs</a></li>
                  
                  <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('infographics'); ?>">Infographics</a></li>
                  
              </ul>
            </li>
              
            <!--  <li class="nav-item dropdown " style="float:left;">-->
            <!--  <a class="nav-link text sliding-border" href="<?php echo base_url('industries'); ?>" id="navbarDropdown">-->
            <!--    Industries We Cater To-->
            <!--  </a>-->
            <!--  <ul class="dropdown-menu py-3 p-2 ms-3" aria-labelledby="navbarDropdown" style="left:0;border: none;">-->
            <!--     <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('industries'); ?>">IT</a></li>-->
            <!--      <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('industries'); ?>">media & advertising</a></li>-->
            <!--      <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('industries'); ?>">hitech</a></li>-->
            <!--      <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('industries'); ?>">security</a></li>-->
            <!--      <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('industries'); ?>">insurance & wealth management</a></li>-->
            <!--      <li><a class="dropdown-item text-start text text-uppercase" href="<?php echo base_url('industries'); ?>">health care</a></li>-->
            <!--      <li><a class="dropdown-item text-uppercase text-start text" href="<?php echo base_url('industries'); ?>">non-profit</a></li>-->
            <!--     <li><a class="dropdown-item text-uppercase text-start text" href="<?php echo base_url('industries'); ?>">retail & consumer goods</a></li>-->
            <!--     <li><a class="dropdown-item text-uppercase text-start text" href="<?php echo base_url('industries'); ?>">automotive</a></li>-->
            <!--     <li><a class="dropdown-item text-uppercase text-start text" href="<?php echo base_url('industries'); ?>">Others</a></li>    -->
            <!--  </ul>-->
            <!--</li>-->
              
              <li class="nav-item me-1 text-end">
                <a href="<?php echo base_url('contact'); ?>" class="nav-link sliding-border">Contact Us</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </div>
  </div>

  <div class="offcanvas offcanvas-start bg-white border-0" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <a href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url('images/home/logo/logo.png'); ?>" width="140" alt="Alltake ITES Pvt. Ltd.">
        </a>
        
        <button type="button" class="btn-close btn-close-dark text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body overflow-y">
          <ul class="nav flex-column">
            <li class="nav-item mt-2">
              <a class="nav-link sliding-border" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link sliding-border" href="<?php echo base_url('about'); ?>">About</a>
            </li>
            <li class="nav-item mt-2">
              <a class="nav-link sliding-border" data-bs-toggle="collapse" href="#Solutions" aria-expanded="false" aria-controls="services">Solutions <i class="fas fa-caret-down float-end"></i></a>
              <div class="collapse" id="Solutions">
                <ul class="nav flex-column ms-4">
                    <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('b2b-lead-generation'); ?>">B2B Lead Generation</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('solutions/account-based-marketing'); ?>">Account Based Marketing</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('solutions/account-based-experience'); ?>">Account Based Experience</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('solutions/intent-based-profiling'); ?>">Intent Based Profiling</a>
                  </li>
                  <!--<li class="nav-item mt-2">-->
                  <!--  <a class="nav-link" href="<?php echo base_url('capabilities/content-marketing'); ?>">Content Studio</a>-->
                  <!--</li>-->
                </ul>
              </div>
          </li>

          <li class="nav-item mt-2">
              <a class="nav-link sliding-border" data-bs-toggle="collapse" href="#capabilities" aria-expanded="false" aria-controls="services">Capabilities <i class="fas fa-caret-down float-end"></i></a>
              <div class="collapse" id="capabilities">
                <ul class="nav flex-column ms-4">
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('capabilities/digital-and-media'); ?>">Digital & Media</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('capabilities/marketing-strategy-and-profiling'); ?>">Marketing strategy & profiling</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('capabilities/content-marketing'); ?>">Content Marketing</a>
                  </li>

                </ul>
              </div>
          </li>

          <li class="nav-item mt-2">
              <a class="nav-link sliding-border" data-bs-toggle="collapse" href="#Resources" aria-expanded="false" aria-controls="services">Resources <i class="fas fa-caret-down float-end"></i></a>
              <div class="collapse" id="Resources">
                <ul class="nav flex-column ms-4">
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('blogs'); ?>">Blogs</a>
                  </li>
                  
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('infographics'); ?>">Infographics</a>
                  </li>
                  

                </ul>
              </div>
          </li>

          

          <!--<li class="nav-item mt-2">-->
          <!--    <a class="nav-link sliding-border" href="<?php echo base_url('industries'); ?>">Industries We Cater To</a>-->
          <!--  </li>-->

            <li class="nav-item mt-2">
              <a class="nav-link sliding-border" href="<?php echo base_url('contact'); ?>">Contact Us</a>
            </li>
            
          </ul>

        </div>
    </div>