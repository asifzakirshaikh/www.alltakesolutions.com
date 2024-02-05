<style>
    /* Style for the range slider thumb */
    input[type="range"]::-webkit-slider-thumb {
        background-color: grey;
        border: 1px solid grey;
        height: 20px; /* Adjust the size of the thumb */
        width: 20px; /* Adjust the size of the thumb */
    }

    input[type="range"]::-moz-range-thumb {
        background-color: grey;
        border: 1px solid grey;
        height: 20px; /* Adjust the size of the thumb */
        width: 20px; /* Adjust the size of the thumb */
    }

    input[type="range"]::-ms-thumb {
        background-color: grey;
        border: 1px solid grey;
        height: 20px; /* Adjust the size of the thumb */
        width: 20px; /* Adjust the size of the thumb */
    }
    
    /* Style for the range slider track */
    input[type="range"]::-webkit-slider-runnable-track {
        background-color: #BBDEFB; /* Use the primary color variable */
    }

    input[type="range"]::-moz-range-track {
        background-color: #BBDEFB; /* Use the primary color variable */
    }
    
</style>

<div class="container mb-5" style="margin-top:25vh">
    <div class="row">
        <div class="col-lg-6">
            <div class="col-lg-12 p-5 border rounded-3">
                <h5 class="mb-3 text-primary fw-bold">
                    Let's get started
                </h5>
                <form onsubmit="calculateBudget(); return false;">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="funnel" aria-label="Default select example">
                          <option value="TOFU" selected>TOFU</option>
                          <option value="MOFU">MOFU</option>
                          <option value="BOFU">BOFU</option>
                        </select>
                        <label for="funnel" class="form-label">Funnel</label>
                    </div>
                    <div class="mb-3">
                        <!--<input type="number" class="form-control" id="qty" value="1">-->
                        <!--<label for="qty" class="form-label">Quantity</label>-->
                        <label for="customRange3" class="form-label">Quantity</label>
                        <input type="range" class="form-range" min="0" max="10000" step="10" id="leadQuantity">
                        <p class="text-primary" id="selectedLeadQuantityValue"></p>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="region" aria-label="Default select example">
                          <option value="APAC" selected>APAC</option>
                          <option value="EMEA">EMEA</option>
                          <option value="North America">North America</option>
                          <option value="LATAM">LATAM</option>
                          <option value="Others">Others</option>
                        </select>
                        <label for="region" class="form-label">Region</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="level" aria-label="Default select example">
                          <option value="C-Suite" selected>C-Suite</option>
                          <option value="Vice President">Vice President</option>
                          <option value="Director">Director</option>
                          <option value="Manager">Manager</option>
                          <option value="Staff">Staff</option>
                        </select>
                        <label for="level" class="form-label">Level</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="function" aria-label="Default select example">
                          <option value="Finance" selected>Finance</option>
                          <option value="IT">IT</option>
                          <option value="Marketing">Marketing</option>
                          <option value="Operations">Operations</option>
                          <option value="Sales">Sales</option>
                        </select>
                        <label for="function" class="form-label">Function</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="thisEmail" placeholder="Email Address" required />
                      <label for="thisEmail">Email address *</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                      <label class="form-check-label text-muted" for="flexCheckDefault" style="font-size:10px;">
                        Your consent matters to us*
                        <br>I consent to my data being stored on the website's external servers, accessed, processed, & used to contact me.
	                	<br>For more information, visit our <span> <a class="text-decoration-none" href="<?php echo base_url('privacy-policy'); ?>">privacy policy</a></span>.
                      </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Calculate</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6 my-auto">
            <!-- Result section to display the calculated budget -->
            <div class="col-lg-12 p-5 rounded-3">
                <h5 class="mb-3 text-center fw-bold">
                    Unveiling the cost per lead
                </h5>
                <h3 class="text-center mb-3" id="resultCPL"></h3>
                <h5 class="text-center">Potential Campaign Budget</h5>
                <h2 class="text-center text-warning fw-bold mb-5" id="resultBudget"></h2>
                
                <h2 class="text-center fw-bold mb-3">Learn How to Gain Access to These Leads</h2>
                <div class="text-center mb-3">
                    <button type="button" class="btn btn-sales" data-bs-toggle="modal" data-bs-target="#customQuote" >Custom Quote</button>
                </div>
                <!--<div id="revealCustomQuote" class="text-center" style="display: none;">-->
                <!--    <p class="mb-0">Get in touch with us</p>-->
                <!--    <p class="fw-bold">business@alltakesolutions.com</p>-->
                <!--</div>-->
                <?php
                if (session()->getTempData('abmFormError')) {
                    echo '<p class="text-center text-danger">' . session()->getTempData('abmFormError') . '</p>';
                }
                ?>
                <?php
                if (session()->getTempData('abmFormSuccess')) {
                    echo '<p class="text-center text-success">' . session()->getTempData('abmFormSuccess') . '</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="customQuote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body p-5">
        <div class="row text-end">
            <div class="col-lg-12">
                <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>      
            </div>
        </div>
        <div class="mb-5">
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('images/home/logo/logo.png'); ?>" width="220" alt="alltakesolutions"></a>
        </div>
        <form method="POST" action="<?php echo base_url('send-abm') ?>" enctype="multipart/form-data">
          <div class="mb-3">
                <label for="customQuoteemail" class="form-label">Email address</label>
                <input type="email" class="form-control" name="emailForAbm" id="customQuoteemail" required>
          </div>
          <div class="mb-3">
                <label for="abmFile" class="form-label">Please upload your ABM file (.csv files only)</label>
                <input type="file" class="form-control" name="abmFile" id="abmFile" required>
          </div>
          <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<script>
    // Get the range input and the element to display the selected value
    var rangeInput = document.getElementById("leadQuantity");
    var selectedValueElement = document.getElementById(
      "selectedLeadQuantityValue"
    );
    var resultCPLElement = document.getElementById("resultCPL");
    var resultBudgetElement = document.getElementById("resultBudget");

    // Update the displayed value when the range input changes
    rangeInput.addEventListener("input", function () {
      selectedValueElement.textContent = "Quantity: " + rangeInput.value;
    });

    // Function to calculate the budget
    const calculateBudget = async () => {
      var funnel = document.getElementById("funnel").value;
      var level = document.getElementById("level").value;
      var quantity = parseFloat(rangeInput.value);
      var thisEmail = document.getElementById("thisEmail").value

      var cpl;

      // Assign CPL based on the selected funnel and level
      if (funnel === "TOFU") {
        cpl = getCPLForTOFU(level);
      } else if (funnel === "MOFU") {
        cpl = getCPLForMOFU(level);
      } else if (funnel === "BOFU") {
        cpl = getCPLForBOFU(level);
      }

      // Calculate the budget
      var budget = cpl * quantity;

      // Display the result
      resultCPLElement.innerHTML =
        'CPL <span class="text-warning">$ ' + cpl.toFixed(2) + "</span>";
      resultBudgetElement.textContent = "$ " + budget.toFixed(2);

      // Collect the data you want to send
      var formData = {
        email: document.getElementById("thisEmail").value // replace with the actual email value
        // Add other data if needed
      };

      // Make the POST request
      await axios
        .post(
          `https://alltakesolutions.com/sendBudgetCalculatorForm`, formData
           
        )
        .then((response) => {
          var data = response.data;
          console.log(data);
        })
        .catch((error) => {
          // Handle errors
          console.error("Error:", error);
        });
    };

    // Functions to get CPL based on the funnel and level
    function getCPLForTOFU(level) {
      var cplValues = {
        Staff: 20,
        Manager: 25,
        Director: 30,
        "Vice President": 35,
        "C-Suite": 40,
      };
      return cplValues[level];
    }

    function getCPLForMOFU(level) {
      var cplValues = {
        Staff: 35,
        Manager: 40,
        Director: 45,
        "Vice President": 50,
        "C-Suite": 55,
      };
      return cplValues[level];
    }

    function getCPLForBOFU(level) {
      var cplValues = {
        Staff: 80,
        Manager: 90,
        Director: 100,
        "Vice President": 110,
        "C-Suite": 120,
      };
      return cplValues[level];
    }
  </script>

<script>
    // Get the elements
    var customQuoteButton = document.getElementById('customQuote');
    var revealCustomQuote = document.getElementById('revealCustomQuote');

    // Add a click event listener to the button
    customQuoteButton.addEventListener('click', function() {
        // Toggle the visibility of the revealCustomQuote element
        if (revealCustomQuote.style.display === 'none' || revealCustomQuote.style.display === '') {
            revealCustomQuote.style.display = 'block';
        } else {
            revealCustomQuote.style.display = 'none';
        }
    });
</script>