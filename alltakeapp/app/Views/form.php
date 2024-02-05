<html><head><meta charset="UTF-8"><title>Alltake Form</title>
<link href="<?php echo base_url('assets/css/form.css'); ?>" rel="stylesheet" type="text/css"><script src="<?php echo base_url('assets/js/validation.js'); ?>"></script>
</head><body class="zf-backgroundBg"><!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
<div class="zf-templateWidth"><form action='https://www.workato.com/webhooks/rest/33b993a1-c572-4233-894c-6156f5136b6e/cpl-integration' name='form' target="_blank" method='POST' onSubmit='javascript:document.charset="UTF-8"; return zf_ValidateAndSubmit();' accept-charset='UTF-8' enctype='application/x-www-form-urlencoded
' id='form'><meta name="robots" content="noindex, nofollow">
<!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
<input type="hidden" name="personSubSource" value="Alltake"><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
<div class="zf-templateWrapper"><!---------template Header Starts Here---------->
<ul class="zf-tempHeadBdr"><li class="zf-tempHeadContBdr"><h2 class="zf-frmTitle"><em>Alltake Form</em></h2>
<p class="zf-frmDesc"></p>
<div class="zf-clearBoth"></div></li></ul><!---------template Header Ends Here---------->
<!---------template Container Starts Here---------->
<div class="zf-subContWrap zf-topAlign"><ul>
<!---------Name Starts Here----------> 
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
<span> <input type="text" maxlength="255" name="firstName" fieldType=7 placeholder=""/> <label>First Name</label>
 </span> 
 </span> </span>
<span> <input type="text" maxlength="255" name="lastName" fieldType=7 placeholder=""/> <label>Last Name</label>
 </span> 
 </span> </span>
<div class="zf-clearBoth"></div></div><p id="Name_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Name Ends Here----------> 
<!---------Email Starts Here---------->  
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
Corporate Email 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input fieldType=9  type="text" maxlength="255" name="email" checktype="c5" value="" placeholder=""/></span> <p id="email_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
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
<span> <input type="text" compname="PhoneNumber" name="phone" maxlength="20" checktype="c7" value="" phoneFormat="1" isCountryCodeEnabled=false fieldType="11" id="international_phone" valType="number" phoneFormatType="1" placeholder="" />
<label>Number</label> </span>
<div class="zf-clearBoth"></div></div><p id="PhoneNumber_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Phone Ends Here----------> 
<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
Company Name 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="company" checktype="c1" value="" maxlength="255" fieldType=1 placeholder=""/></span> <p id="company_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->

<!--------- Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
Company Size
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<select class="zf-form-sBox" name="companySize" checktype="c1">
<option selected="true" value="-Select-">-Select-</option>
<option value="1-200">1-200</option>
<option value="201-300">201-300</option>
<option value="301-500">301-500</option>
<option value="500&#x20;&amp;&#x20;Above">500 &amp; Above</option>
</select><p id="companySize_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li>
<!--------- Ends Here---------->


<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
Industry 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="industry" checktype="c1" value="" maxlength="255" fieldType=1 placeholder="Industry"/></span> <p id="industry_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->
<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
Job Title 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="jobTitle" checktype="c1" value="" maxlength="255" fieldType=1 placeholder="Job&#x20;Title"/></span> <p id="jobTitle_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->
<!--address-->
<!---------Address Starts Here---------->  
<li class="zf-tempFrmWrapper zf-address zf-addrlarge " ><label class="zf-labelName"> 
Address 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv zf-address">
<div class="zf-addrCont">
<span class="zf-addOne"> <input type="text" maxlength="255" name="address" checktype="c1" placeholder="Address"/>
<label>Street Address</label>
 </span>
<span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255" name="city" checktype="c1" placeholder="City"/>
<label>City</label>
 </span>
<span class="zf-flLeft zf-addtwo"> <input type="text" maxlength="255" name="state" checktype="c1" placeholder="State"/>
<label>State/Region</label>
 </span>

<span class="zf-flLeft zf-addtwo"> <select class="zf-form-sBox" name="country" checktype="c1">
<option value="-Select-">-Select-</option> 
			<option>&Aring;land Islands</option>
			<option>Afghanistan</option>
			<option>Akrotiri</option>
			<option>Albania</option>
			<option>Algeria</option>
			<option>American Samoa</option>
			<option>Andorra</option>
			<option>Angola</option>
			<option>Anguilla</option>
			<option>Antarctica</option>
			<option>Antigua and Barbuda</option>
			<option>Argentina</option>
			<option>Armenia</option>
			<option>Aruba</option>
			<option>Ashmore and Cartier Islands</option>
			<option>Australia</option>
			<option>Austria</option>
			<option>Azerbaijan</option>
			<option>Bahrain</option>
			<option>Bangladesh</option>
			<option>Barbados</option>
			<option>Bassas Da India</option>
			<option>Belarus</option>
			<option>Belgium</option>
			<option>Belize</option>
			<option>Benin</option>
			<option>Bermuda</option>
			<option>Bhutan</option>
			<option>Bolivia</option>
			<option>Bosnia and Herzegovina</option>
			<option>Botswana</option>
			<option>Bouvet Island</option>
			<option>Brazil</option>
			<option>British Indian Ocean Territory</option>
			<option>British Virgin Islands</option>
			<option>Brunei</option>
			<option>Bulgaria</option>
			<option>Burkina Faso</option>
			<option>Burma</option>
			<option>Burundi</option>
			<option>Cambodia</option>
			<option>Cameroon</option>
			<option>Canada</option>
			<option>Cape Verde</option>
			<option>Caribbean Netherlands</option>
			<option>Cayman Islands</option>
			<option>Central African Republic</option>
			<option>Chad</option>
			<option>Chile</option>
			<option>China</option>
			<option>Christmas Island</option>
			<option>Clipperton Island</option>
			<option>Cocos &#x28;Keeling&#x29; Islands</option>
			<option>Colombia</option>
			<option>Comoros</option>
			<option>Cook Islands</option>
			<option>Coral Sea Islands</option>
			<option>Costa Rica</option>
			<option>Cote D&#x27;Ivoire</option>
			<option>Croatia</option>
			<option>Cuba</option>
			<option>Cura&ccedil;ao</option>
			<option>Cyprus</option>
			<option>Czech Republic</option>
			<option>Democratic Republic of the Congo</option>
			<option>Denmark</option>
			<option>Dhekelia</option>
			<option>Djibouti</option>
			<option>Dominica</option>
			<option>Dominican Republic</option>
			<option>Ecuador</option>
			<option>Egypt</option>
			<option>El Salvador</option>
			<option>Equatorial Guinea</option>
			<option>Eritrea</option>
			<option>Estonia</option>
			<option>Ethiopia</option>
			<option>Europa Island</option>
			<option>Falkland Islands &#x28;Islas Malvinas&#x29;</option>
			<option>Faroe Islands</option>
			<option>Federated States of Micronesia</option>
			<option>Fiji</option>
			<option>Finland</option>
			<option>France</option>
			<option>French Guiana</option>
			<option>French Polynesia</option>
			<option>French Southern and Antarctic Lands</option>
			<option>Gabon</option>
			<option>Gaza Strip</option>
			<option>Georgia</option>
			<option>Germany</option>
			<option>Ghana</option>
			<option>Gibraltar</option>
			<option>Glorioso Islands</option>
			<option>Greece</option>
			<option>Greenland</option>
			<option>Grenada</option>
			<option>Guadeloupe</option>
			<option>Guam</option>
			<option>Guatemala</option>
			<option>Guernsey</option>
			<option>Guinea</option>
			<option>Guinea-bissau</option>
			<option>Guyana</option>
			<option>Haiti</option>
			<option>Heard Island and Mcdonald Islands</option>
			<option>Holy See &#x28;Vatican City&#x29;</option>
			<option>Honduras</option>
			<option>Hong Kong</option>
			<option>Hungary</option>
			<option>Iceland</option>
			<option>India</option>
			<option>Indonesia</option>
			<option>Iran</option>
			<option>Iraq</option>
			<option>Ireland</option>
			<option>Isle of Man</option>
			<option>Israel</option>
			<option>Italy</option>
			<option>Jamaica</option>
			<option>Jan Mayen</option>
			<option>Japan</option>
			<option>Jersey</option>
			<option>Jordan</option>
			<option>Juan De Nova Island</option>
			<option>Kazakhstan</option>
			<option>Kenya</option>
			<option>Kiribati</option>
			<option>Kosovo</option>
			<option>Kuwait</option>
			<option>Kyrgyzstan</option>
			<option>Laos</option>
			<option>Latvia</option>
			<option>Lebanon</option>
			<option>Lesotho</option>
			<option>Liberia</option>
			<option>Libya</option>
			<option>Liechtenstein</option>
			<option>Lithuania</option>
			<option>Luxembourg</option>
			<option>Macau</option>
			<option>Macedonia</option>
			<option>Madagascar</option>
			<option>Malawi</option>
			<option>Malaysia</option>
			<option>Maldives</option>
			<option>Mali</option>
			<option>Malta</option>
			<option>Marshall Islands</option>
			<option>Martinique</option>
			<option>Mauritania</option>
			<option>Mauritius</option>
			<option>Mayotte</option>
			<option>Mexico</option>
			<option>Moldova</option>
			<option>Monaco</option>
			<option>Mongolia</option>
			<option>Montenegro</option>
			<option>Montserrat</option>
			<option>Morocco</option>
			<option>Mozambique</option>
			<option>Myanmar</option>
			<option>Namibia</option>
			<option>Nauru</option>
			<option>Navassa Island</option>
			<option>Nepal</option>
			<option>Netherlands</option>
			<option>Netherlands Antilles</option>
			<option>New Caledonia</option>
			<option>New Zealand</option>
			<option>Nicaragua</option>
			<option>Niger</option>
			<option>Nigeria</option>
			<option>Niue</option>
			<option>Norfolk Island</option>
			<option>North Korea</option>
			<option>Northern Mariana Islands</option>
			<option>Norway</option>
			<option>Oman</option>
			<option>Pakistan</option>
			<option>Palau</option>
			<option>Palestine</option>
			<option>Panama</option>
			<option>Papua New Guinea</option>
			<option>Paracel Islands</option>
			<option>Paraguay</option>
			<option>Peru</option>
			<option>Philippines</option>
			<option>Pitcairn Islands</option>
			<option>Poland</option>
			<option>Portugal</option>
			<option>Puerto Rico</option>
			<option>Qatar</option>
			<option>Republic of the Congo</option>
			<option>Reunion</option>
			<option>Romania</option>
			<option>Russia</option>
			<option>Rwanda</option>
			<option>Saint Barth&Atilde;&copy;lemy</option>
			<option>Saint Helena</option>
			<option>Saint Kitts and Nevis</option>
			<option>Saint Lucia</option>
			<option>Saint Martin</option>
			<option>Saint Pierre and Miquelon</option>
			<option>Saint Vincent and the Grenadines</option>
			<option>Samoa</option>
			<option>San Marino</option>
			<option>Sao Tome and Principe</option>
			<option>Saudi Arabia</option>
			<option>Senegal</option>
			<option>Serbia</option>
			<option>Seychelles</option>
			<option>Sierra Leone</option>
			<option>Singapore</option>
			<option>Sint Maarten</option>
			<option>Slovakia</option>
			<option>Slovenia</option>
			<option>Solomon Islands</option>
			<option>Somalia</option>
			<option>South Africa</option>
			<option>South Georgia and the South Sandwich Islands</option>
			<option>South Korea</option>
			<option>South Sudan</option>
			<option>Spain</option>
			<option>Spratly Islands</option>
			<option>Sri Lanka</option>
			<option>Sudan</option>
			<option>Suriname</option>
			<option>Svalbard</option>
			<option>Swaziland</option>
			<option>Sweden</option>
			<option>Switzerland</option>
			<option>Syria</option>
			<option>Taiwan</option>
			<option>Tajikistan</option>
			<option>Tanzania</option>
			<option>Thailand</option>
			<option>The Bahamas</option>
			<option>The Gambia</option>
			<option>Timor-leste</option>
			<option>Togo</option>
			<option>Tokelau</option>
			<option>Tonga</option>
			<option>Trinidad and Tobago</option>
			<option>Tromelin Island</option>
			<option>Tunisia</option>
			<option>Turkey</option>
			<option>Turkmenistan</option>
			<option>Turks and Caicos Islands</option>
			<option>Tuvalu</option>
			<option>Uganda</option>
			<option>Ukraine</option>
			<option>United Arab Emirates</option>
			<option>United Kingdom</option>
			<option>United States</option>
			<option>Uruguay</option>
			<option>Uzbekistan</option>
			<option>Vanuatu</option>
			<option>Venezuela</option>
			<option>Vietnam</option>
			<option>Virgin Islands</option>
			<option>Wake Island</option>
			<option>Wallis and Futuna</option>
			<option>West Bank</option>
			<option>Western Sahara</option>
			<option>Yemen</option>
			<option>Zambia</option>
			<option>Zimbabwe</option>
</select>
<label>Country</label>
 </span>
<div class="zf-clearBoth"></div><p id="Address_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div></div><div class="zf-eclearBoth"></div></li><!---------Address Ends Here---------->



<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
 How do you currently manage your projects and teams? 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="projects" checktype="c1" value="" maxlength="255" fieldType=1 placeholder=""/></span> <p id="projects_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->


<!---------Single Line Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName"> 
 What challenges are you facing in managing your team and projects? 
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<span> <input type="text" name="challenges" checktype="c1" value="" maxlength="255" fieldType=1 placeholder=""/></span> <p id="challenges_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Single Line Ends Here---------->


<!---------Checkbox Starts Here---------->    
<li class="zf-checkbox zf-tempFrmWrapper zf-oneColumns"><label class="zf-labelName">Are you interested in a work management solution that can help improve your team's productivity?
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<div class="zf-overflow">
<span class="zf-multiAttType"> 
<input class="zf-checkBoxType" type="checkbox" id="Checkbox_2" name="interestedinworkmanagementsolution" checktype="c1" value="Yes"/>
<label for="Checkbox_2" class="zf-checkChoice">Yes</label> </span>
<span class="zf-multiAttType"> 

<div class="zf-clearBoth"></div></div><p id="interestedinworkmanagementsolution_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Checkbox Ends Here---------->

<!--------- Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
 What is the size of the team that is going to use the solution?
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<select class="zf-form-sBox" name="sizeoftheteam" checktype="c1">
<option selected="true" value="-Select-">-Select-</option>
<option value="0-5&#x20;">0-5</option>
<option value="5&#x20;more">5 or more</option>
</select><p id="sizeoftheteam_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!--------- Ends Here---------->


<!--------- Starts Here---------->
<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
 When are you looking to implement a new work management solution?
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<select class="zf-form-sBox" name="lookingtoimplement" checktype="c1">
<option selected="true" value="-Select-">-Select-</option>
<option value="0-2&#x20;months">0-2 months</option>
<option value="2-4&#x20;months">2-4 months</option>
<option value="4-6&#x20;months">4-6 months</option>
</select><p id="lookingtoimplement_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!--------- Ends Here---------->


<!---------Checkbox Starts Here---------->    
<li class="zf-checkbox zf-tempFrmWrapper zf-oneColumns"><label class="zf-labelName">Would you like to schedule a demo and speak with Wrike's sales team to learn more about how our work management solution can benefit your team?
<em class="zf-important">*</em>
</label>
<div class="zf-tempContDiv">
<div class="zf-overflow">
<span class="zf-multiAttType"> 
<input class="zf-checkBoxType" type="checkbox" id="Checkbox_3" name="interestedinworkmanagementsolution" checktype="c1" value="Yes"/>
<label for="Checkbox_3" class="zf-checkChoice">Yes</label> </span>
<span class="zf-multiAttType"> 

<div class="zf-clearBoth"></div></div><p id="speakwithWrikessalesteam_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
</div><div class="zf-clearBoth"></div></li><!---------Checkbox Ends Here---------->


</ul></div><!---------template Container Starts Here---------->
<ul><li class="zf-fmFooter"><button target="_blank" class="zf-submitColor">Submit</button></li></ul></div><!-- 'zf-templateWrapper' ends --></form></div><!-- 'zf-templateWidth' ends -->
<script type="text/javascript">var zf_DateRegex = new RegExp("^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$");
var zf_MandArray = [ "firstName", "lastName", "email", "phone", "company", "sizeoftheteam", "challenges", "projects", "companySize", "industry", "jobTitle", "address", "city", "state", "country", "notesTimeline", "lookingtoimplement", "notesRequirements", "notesPreviousResearch", "interestedinworkmanagementsolution", "notesContactInstructions"]; 
var zf_FieldArray = [ "firstName", "lastName", "email", "phone", "company", "sizeoftheteam", "challenges", "projects",  "companySize", "industry", "jobTitle", "address", "city", "state",  "country", "notesTimeline", "lookingtoimplement", "notesRequirements", "notesPreviousResearch", "interestedinworkmanagementsolution", "notesContactInstructions"]; 
var isSalesIQIntegrationEnabled = false;
var salesIQFieldsArray = [];</script></body></html>