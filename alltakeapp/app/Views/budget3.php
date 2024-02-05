
<div class="container mt-5 py-5">
<div class="container bgblue shadow rounded mt-5 py-3"style="background-color: #337dc4;">
	<div class="row ">
		<div class="col-lg-12">
			<p class="display-5 fw-bold text-center mt-3 text-uppercase text-white">
				Budget Calculator
			</p>
			<p class="text-center  text-white fs-5">Unlock campaign success: Know your budget, fuel your strategy</p>
		</div>
	</div>
</div>
<div class="container py-5 ">
	<div class="row  shadow rounded-3">
		<div class="col-lg-6 bg-blue p-3">
			<div class="row ">
				<p class="fs-1 text-blue py-3">Let's Get Started</p>
				<form>
					 <label for="funnel" class="py-2  fs-4">Funnel*</label>
					    <select id="funnel" name="fruits" class="form-control py-2 mb-3">
					        <option value="TOFU" class="form-control">TOFU</option>
					        <option value="MOFU" class="form-control">MOFU</option>
					        <option value="BOFU"class="form-control">BOFU</option>
					    </select>
					  <label for="amount"class="py-2  fs-4">Quantity*</label><br>
					  <div class="row">
					  	<div class="col-lg-9">
					    <input type="range" id="Quantity" min="1"class="quantity py-2 mb-3" max="1000000" step="selectedQuantity" value="1"style="width: 80%;">
						</div>
						<div class="col-lg-3">
					    <p id="selectedQuantity"class="p-2 amount text-center border-2" value="">1</p>
						</div>
						</div>
						<label for="amount"class="py-2  fs-4">Region*</label><br>
						<select id="choices-multiple-remove-button" placeholder="Region*"style="background-color: yellow; name="target_demographics" class="Region form-control p-1 mx-5 mb-3 chosen-select"multiple>
	       				<option value="North America"class="form-control text-center budgetform"style="background-color: white!important;">North America</option>
	                    <option value="EMEA"class="form-control text-center budgetform">EMEA</option>
	       				<option value="APAC"class="form-control text-center budgetform">APAC</option>
	       				<option value="Others"class="form-control text-center budgetform">Others</option>
	    			</select>
	    			<label for="amount"class="py-2  fs-4">Level*</label><br>
					<select id="choices-multiple-remove-button" name="job_level"placeholder="Level*" class="Level form-control p-1 mx-5 mb-3"multiple>
	       				<option value="Manager"class="form-control text-center budgetform">Manager</option>
	                    <option value="Director"class="form-control text-center budgetform">Director</option>
	       				<option value="C-Suite"class="form-control text-center budgetform">C-Suite</option>
	       				<option value="Others1"class="form-control text-center budgetform">Others</option>
	    			</select>
	    			<label for="amount"class="py-2  fs-4">Function*</label><br>	
	    			<select id="choices-multiple-remove-button" name="job_function"placeholder="Function*" class="Function form-control p-1 mx-5"multiple>
	       				<option value="Marketing"class="form-control text-center budgetform">Marketing</option>
	                    <option value="Sales"class="form-control text-center budgetform">Sales</option>
	       				<option value="IT"class="form-control text-center budgetform">IT</option>
	       				<option value="Finance"class="form-control text-center budgetform">Finance</option>
	       				<option value="Operations"class="form-control text-center budgetform">Operations</option>
	       				<option value="Govt"class="form-control text-center budgetform">Govt.</option>
	       				<option value="Healthcare"class="form-control text-center budgetform">Healthcare</option>
	       				<option value="Others2"class="form-control text-center budgetform">Others</option>
	    			</select>
	    			<div class=" mb-2 text-center">
                             <button type="submit" class="btn btn-lg ms-3 py-2 mb-5" id="myForm"style="background-color: #337dc4;color: #fff;">Calculate</button>
                      </div>
				</form>
			</div>	
		</div>
		<div class="col-lg-6 py-5">
			<p class="fw-bold display-4 mt-2 text-center"style="color: #f66d00;"></p>
			<p class="text-center  fs-5 py-2">Unveiling the Total Accounts in the Region</p>
			<hr>
			<div class="row py-3">
				<div class="col-lg-10">
					<p class="fs-5 mt-3 ">Leads</p>
				</div>
				<div class="col-lg-2">
					<p class="fw-bold display-6 py-auto text-center"style="color: #f66d00;">9</p>
				</div>
			</div>	
			<hr>
				<p class="fw-bold display-4 mt-5 py-auto text-center"style="color: #f66d00;">$900000</p>
						<p class="text-center fs-5 py-2 mb-5">Potential Campaign Budget</p>
			<div class="container">
				<p class="fs-2 text-center">Learn How to Gain Access to These Leads</p>
				<div class="text-center">
				 <button class="btn btn-sales">Talk To Us</button>
				</div>	
			</div>			
		</div>
	</div>
</div>		
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script type="text/javascript">

const amountRange = document.getElementById("Quantity");
const selectedAmount = document.getElementById("selectedQuantity");

// Update the amount display when the range input changes
amountRange.addEventListener("input", function() {
selectedQuantity.textContent = amountRange.value;
        });

	$(document).ready(function(){
    
     var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:10,
        searchResultLimit:10,
        renderChoiceLimit:10
      }); 
     
     
 });
	const showPopupButton = document.getElementById("showPopup");
        const emailPopup = document.getElementById("emailPopup");
        const closePopupButton = document.getElementById("closePopup");

        showPopupButton.addEventListener("click", function() {
            emailPopup.style.display = "block";
        });

        closePopupButton.addEventListener("click", function() {
            emailPopup.style.display = "none";
        });
</script>