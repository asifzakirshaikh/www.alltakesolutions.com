<html><head><meta charset="UTF-8"><title>Wilford smith Form</title>
<link href="<?php echo base_url('assets/css/form.css'); ?>" rel="stylesheet" type="text/css"><script src="<?php echo base_url('assets/js/validation.js'); ?>"></script>
</head><body class="zf-backgroundBg"><!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
<div class="zf-templateWidth"><form action='https://portal.webolytics.com/inbound/webhookCatchLead.php' name='form'
target="_blank" method='POST' onSubmit='javascript:document.charset="UTF-8"; return zf_ValidateAndSubmit();' accept-charset='UTF-8' enctype='webhook-form-data' id='form'><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
<!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
<meta name="robots" content="noindex, follow">
<div class="zf-templateWrapper"><!---------template Header Starts Here---------->
<ul class="zf-tempHeadBdr"><li class="zf-tempHeadContBdr"><h2 class="zf-frmTitle"><em>Wilford smith Form</em></h2>
<p class="zf-frmDesc"></p>
<div class="zf-clearBoth"></div></li></ul><!---------template Header Ends Here---------->
<!---------template Container Starts Here---------->
<div class="zf-subContWrap zf-topAlign"><ul>
<!---------Name Starts Here----------> 


<input type="hidden" name="formSectionID" value="MTI1NA==">
<input type="hidden" name="campaignGroup" value="NDExMA==">



<li class="zf-tempFrmWrapper zf-name zf-namesmall"><label class="zf-labelName"> 
Name 
<em class="zf-important">*</em>
</label>
<div 
class="zf-tempContDiv zf-twoType"  
>
<div
class="zf-nameWrapper"  
>
<span> <input type="text" maxlength="255" name="first-name" required fieldType=7 placeholder=""/> <label>First Name</label>
 </span> 
 </span> </span>
<span> <input type="text" maxlength="255" name="last-name" required fieldType=7 placeholder=""/> <label>Last Name</label>
 </span> 
 </span> </span>
<div class="zf-clearBoth"></div></div><p id="Name_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Name Ends Here----------> 
<!---------Email Starts Here---------->  
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
 Email 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input fieldType=9  type="text" maxlength="255" name="email" required checktype="c5" value="" placeholder=""/></span> <p id="email_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Email Ends Here---------->  
<!---------Phone Starts Here----------> 
<li  class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
Phone 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv zf-phonefld">
<div
class="zf-phwrapper zf-phNumber"  
>
<span> <input type="text" compname="PhoneNumber" name="phone" required maxlength="20" checktype="c7" value="" phoneFormat="1" isCountryCodeEnabled=false fieldType="11" id="international_phone" valType="number" phoneFormatType="1" placeholder="" />
<label>Number</label> </span>
<div class="zf-clearBoth"></div></div><p id="PhoneNumber_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Phone Ends Here----------> 



<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
Company Name 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="company-name" required checktype="c1" value="" maxlength="255" fieldType=1 placeholder=""/></span> <p id="company_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->


<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
Job Title 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="job-title" required checktype="c1" value="" maxlength="255" fieldType=1 placeholder="Job&#x20;Title"/></span> <p id="jobTitle_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->



<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
Number of Employee 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="number-of-employees" required checktype="c1" value="" maxlength="255" fieldType=1 placeholder="number-of-employee"/></span> <p id="number-of-employee_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->



<!--------- Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
Current Issues
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<select class="zf-form-sBox" name="current-issues" checktype="c1">
<option selected="true" value="-Select-">-Select-</option>
<option value="HR Compliance Issues">HR Compliance Issues</option>
<option value="Employees Related Issues">Employees Related Issues</option>
<option value="Employment Tribunal Issues">Employment Tribunal Issues</option>
<option value="Health and Safety Issues">Health and Safety Issues</option>
<option value="Contracts & Documentation">Contracts & Documentation</option>
<option value="Staff Management Issues">Staff Management Issues</option>
<option value="Staff Retention Issues">Staff Retention Issues</option>
<option value="Any Other Issues">Any Other Issues</option>
<option value="No Current Issues">No Current Issues</option>
</select><p id="current-issues" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!--------- Ends Here---------->

<input type="hidden" name="lead-source" value="Web Campaign HR">
<input type="hidden" name="lead-type" value="Business Client">
<input type="hidden" name="introducer" value="introducer">
<input type="hidden" name="hr-support" value="Yes">
<input type="hidden" name="employer" value="Yes">
<input type="hidden" name="service-interest" value="Employment">
<input type="hidden" name="source-detail" value="Web Campaign HR">
<input type="hidden" name="phone-country" value="GB">


</ul></div><!---------template Container Starts Here---------->
<ul><li class="zf-fmFooter"><button target="_blank" class="zf-submitColor">Submit</button></li></ul></div><!-- 'zf-templateWrapper' ends --></form></div><!-- 'zf-templateWidth' ends -->
<script type="text/javascript">var zf_DateRegex = new RegExp("^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$");
var zf_MandArray = [ "firstName", "lastName", "email", "phone", "company", "jobTitle",  "current-issues", "service-interest", "number-of-employee","source-detail", "source-detail", "hr-support", "introducer", "lead-type", "lead-source", "acquisition_id", "campaignGroup",]; 
var zf_FieldArray = [ "firstName", "lastName", "email", "phone", "company", "jobTitle", "service-interest", "current-issues", "number-of-employee", "source-detail", "source-detail", "hr-support", "introducer", "lead-type", "lead-source", "acquisition_id", "campaignGroup",]; 
var isSalesIQIntegrationEnabled = false;
var salesIQFieldsArray = [];</script></body></html>