<!DOCTYPE html>
<html>
<head>
  <title>Modern Health Form | Alltake | Leading B2B Marketing Agency</title>
  <meta name="robots" content="noindex, nofollow">
  <meta name="title" content="Modern Health Form | Alltake | Leading B2B Marketing Agency">
  <meta name="og:title" content="Modern Health Form | Alltake | Leading B2B Marketing Agency">
  <meta name="twitter:title" content="Modern Health Form | Alltake | Leading B2B Marketing Agency">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    .error {
      color: red;
    }
  </style>
  <script>
    function validateForm() {
      var firstName = document.getElementById('firstName').value.trim();
      var lastName = document.getElementById('lastName').value.trim();
      var email = document.getElementById('email').value.trim();
    //   var phone = document.getElementById('phone').value.trim();
      var companyName = document.getElementById('companyName').value.trim();
      var companySize = document.getElementById('companySize').value.trim();
      var jobTitle = document.getElementById('jobTitle').value.trim();
      var country = document.getElementById('country').value.trim();
      
      var firstNameError = document.getElementById('firstName-error');
      var lastNameError = document.getElementById('lastName-error');
      var emailError = document.getElementById('email-error');
    //   var phoneError = document.getElementById('phone-error');
      var companyNameError = document.getElementById('companyName-error');
      var companySizeError = document.getElementById('companySize-error');
      var countryError = document.getElementById('country-error');
      var jobTitleError = document.getElementById('jobTitle-error');
      
      var isValid = true;
      
      // Validate first name field
      if (firstName === '') {
        firstNameError.innerHTML = 'First Name is required';
        isValid = false;
      } else {
        firstNameError.innerHTML = '';
      }
      
      // Validate last name field
      if (lastName === '') {
        lastNameError.innerHTML = 'Last Name is required';
        isValid = false;
      } else {
        lastNameError.innerHTML = '';
      }
      
      // Validate email field
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email)) {
        emailError.innerHTML = 'Invalid email format';
        isValid = false;
      } else {
        emailError.innerHTML = '';
      }
      
      // Validate phone field
    //   if (phone === '') {
    //     phoneError.innerHTML = 'Phone is required';
    //     isValid = false;
    //   } else {
    //     phoneError.innerHTML = '';
    //   }
      
      // Validate company name field
      if (companyName === '') {
        companyNameError.innerHTML = 'Company Name is required';
        isValid = false;
      } else {
        companyNameError.innerHTML = '';
      }
      
      // Validate company size field
      if (companySize === '') {
        companySizeError.innerHTML = 'Company Size is required';
        isValid = false;
      } else {
        companySizeError.innerHTML = '';
      }
      
      // Validate company size field
      if (country === '') {
        countryError.innerHTML = 'Country is required';
        isValid = false;
      } else {
        countryError.innerHTML = '';
      }

      // Validate Jobtitle name field
      if (jobTitle === '') {
        jobTitleError.innerHTML = 'Job Title is required';
        isValid = false;
      } else {
        jobTitleError.innerHTML = '';
      }
      
      
      
      
      
      return isValid;
    }
  </script>
</head>
<body>
  <div class="container">
  
    <form method="post" action="#" onsubmit="return validateForm()" enctype='multipart-form-data'>


    <div class="full-height d-flex align-items-center">
      <div class="container ">
          <div class="row">
            
          <div class="col-lg-7 mx-auto py-5">
              <div class="col-lg-12 border p-5 bg-white rounded-3 mb-3">
                  <div class="text-center mb-5">
                      <img src="images/client/Modern-Health.png" class="img-fluid mb-5">
                      <h3 class="text-center fw-bold pb-3">
                      Modern - Health Form
                   </h3>
                  </div>
                  
                   
                      
                      <div class="row">
                        <div class="mb-3 col-6 ">
                            <label for="firstName" class="form-label">First Name:</label>
                            <input type="text" class="form-control" id="firstName" name="first_name">
                            <div id="firstName-error" class="error"></div>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="lastName" class="form-label">Last Name:</label>
                            <input type="text" class="form-control" id="lastName" name="last_name">
                            <div id="lastName-error" class="error"></div>
                        </div>
                      </div>
                      
                      <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div id="email-error" class="error"></div>
                      </div>
                      <!--<div class="mb-3">-->
                      <!--  <label for="phone" class="form-label">Phone:</label>-->
                      <!--  <input type="tel" class="form-control" id="phone" name="phone">-->
                      <!--  <div id="phone-error" class="error"></div>-->
                      <!--</div>-->
                      <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name:</label>
                        <input type="text" class="form-control" id="companyName" name="company_name">
                        <div id="companyName-error" class="error"></div>
                      </div>
                      <div class="mb-3">
                        <label for="companySize" class="form-label">Company Size:</label>
                        <input type="text" class="form-control" id="companySize" name="company_size">
                        <div id="companySize-error" class="error"></div>
                      </div>
                      <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Title:</label>
                        <input type="text" class="form-control" id="jobTitle" name="job_title">
                        <div id="jobTitle-error" class="error"></div>
                      </div>
                      <div class="mb-3">
                        <label for="country" class="form-label">Country:</label>
                        <input type="text" class="form-control" id="country" name="country">
                        <div id="country-error" class="error"></div>
                      </div>
                      
                      
                      
                      <div class="mb-3 text-center mt-5">
                          <button type="submit" class="btn btn-primary btn-md ">Submit</button>
                      </div>
                      
            
              </div>
          </div>
        </div>
      </div>
    </div> 


      
    </form>
  </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
