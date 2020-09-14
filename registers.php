<?php
$host="localhost";
$dbuser="root";
$pass="";
$dbname="data";
$connection=mysqli_connect($host,$dbuser,$pass,$dbname);
if(mysqli_connect_errno())
{
die("connection Failed!" . mysqli_connect_errno());
}
?>
<?php

if(isset($_POST['submit']))
{

   $caseType=$_POST['caseType'];
   $subCase=$_POST['subCase'];
   $caseNo=$_POST['caseNo'];
   $year=$_POST['year'];
   $date=($_POST['date']);



   $partyLevel1=$_POST['partyLevel1'];
   $casePartyType1=$_POST['casePartyType1'];
   $fullName=$_POST['fullName'];
   $gender=$_POST['gender'];
   $phoneNo=($_POST['phoneNo']);
   $emailAddress=$_POST['emailAddress'];
   $country=$_POST['country'];
   $representation1=$_POST['representation1'];
   $caseSummary=$_POST['caseSummary'];

      $partyLevel=$_POST['partyLevel'];
      $casePartyType=$_POST['casePartyType'];
   $organisationName=$_POST['organisationName'];
   $organisationAddress=$_POST['organisationAddress'];
   $physicalLocation=$_POST['physicalLocation'];
   $organisationTelephone=$_POST['organisationTelephone'];
   $organisationEmail=($_POST['organisationEmail']);
   $representation=$_POST['representation'];

   $fee=$_POST['fee'];
   $assessedAmount=$_POST['assessedAmount'];
   $assessor=$_POST['assessor'];
   $receiptNo=$_POST['receiptNo'];
   $datePaid=($_POST['datePaid']);
   $amount=$_POST['amount'];
   $dateAssessed=$_POST['dateAssessed'];
   $paymentMethod=$_POST['paymentMethod'];
   $sql= "INSERT INTO `data`.`reg`". "
   (caseType,subCase,caseNo,year,date,partyLevel1,casePartyType1,fullName,gender,phoneNo,emailAddress,country,representation1,caseSummary,partyLevel,casePartyType,organisationName,organisationAddress,physicalLocation,organisationTelephone,organisationEmail,representation,fee,assessedAmount,assessor,receiptNo,datePaid,amount,dateAssessed,paymentMethod)".
   "VALUES('$caseType','$subCase','$caseNo','$year','$date','$partyLevel1','$casePartyType1','$fullName','$gender','$phoneNo','$emailAddress','$country','$representation1','$caseSummary','$partyLevel','$casePartyType','$organisationName','$organisationAddress','$physicalLocation','$organisationTelephone','$organisationEmail','$representation','$fee','$assessedAmount','$assessor','$receiptNo','$datePaid','$amount','$dateAssessed','$paymentMethod')";

   $con=mysqli_query($connection,$sql);
if(!$con)
   {
     die("Data Entry Failed!"  . mysqli_error($connection));
   }
   else
   {
     echo "Data Added Succefully";
   }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>register case</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/res.css">
      <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #293503;
  color: yellow;
  padding: 10px 12px;
  border: none;
  cursor: pointer;
  opacity: ;
 /* position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;*/
}
.open-button:hover{
  color: blue;
}
/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom:10% ;
  right: 35%;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
li{
  color: yellow;
}
.li:hover{
  color: white;

}
table td{
  text-align: left;
}
</style>
</head>

<body>
      <div class="form-popup" id="myForm">
  <form method="POST" class="form-container" action="search.php">
    <h1>Search Case</h1>

    <label for="psw"><b>ClientID:</b></label>
    <input type="text" placeholder="Client ID" name="clientID" required>

    <label for="email"><b>Case No:</b></label>
    <input type="text" placeholder="Case Number" name="caseNo" required>

    <button type="submit" class="btn">Search</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>
          <div class="top">
        <p>For support call :+2540730181040 or Email: ictsupport@court.go.ke
        </p>
        
    </div>
  <div class="bs">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <img src="images/LOGO1.png" width="30%">

            </div>

            <div class="navbar-nav">

              <a href="#" class="nav-item nav-link">SWITCH STATION</a>
                <a href="#" class="nav-item nav-link">LOGOUT</a>
                <a href="#" class="nav-item nav-link">HELP</a>
            </div>
        </div>
    </nav>
</div>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-green">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
               <a href="home.php">HOME</a>&nbsp;&nbsp;
           <a href="registers.php">REGISTER CASE</a>&nbsp;&nbsp;
           <a href="#">EFILING</a>&nbsp;&nbsp;
            <a href="#">MASTER DIARY</a>&nbsp;&nbsp;
            <a href="#"> REPORT</a>&nbsp;&nbsp;
            <a href="echoclient.php"> CLIENTS</a>&nbsp;&nbsp;

            </div>
            <br>
            <div class="navbar-nav">
               
            <button class="open-button" onclick="openForm()">SEARCH CASE</button>
            </div>
        </div>
    </nav>
</div>
<br>
<form method="POST" >
   <table align="center">
    <tr><td colspan="2"><h1>Register the case below</h1></td></tr>
         <tr><td> <label> Select Case Type:<abbr>*</abbr></label></td>
                     <td><div>

         <select name="caseType" required="required">
            <option value="Magistrate civil case" selected="selected">Magistrate civil case</option>
         <option value="Magistrate Traffic case">Magistrate Traffic case</option>
         <option value="Magistrate criminal case">Magistrate criminal case</option>
         <option value="Magistrate children case">Magistrate children case</option>
            
         </select>
      </div></td></tr>
           <tr> <td>Select Case Sub-type:</td>
                  <td>     <div>

         <select name="subCase" required="required">
            <option value="Overspeeding" selected="selected">Overspeeding</option>
         <option value="overloading">overloading</option>
         <option value="unroadworthy vehicle">unroadworthy vehicle</option>
         <option value="lack of inspection certificate">lack of inspection certificate</option>
            
         </select>

      </div></td></tr>
            <tr><td>Case number</td>
<td><input type="text" name="caseNo" required="required" class="name" placeholder="Enter case number"></td>
           </tr>

           <tr> <td>select year</td>
                  <td>     <div>
         <select name="year" required="required" selected="selected">
         <option value="2015">2015</option>
         <option value="2016">2016</option>
         <option value="2017">2017</option>
         <option value="2018">2018</option>
         <option value="2019">2019</option>
         </select>
      </div></td>
   
         </tr>
         <tr>

         <td>date</td>
            <td><div class="col">         
                     <input class="form-control" type="date" name="date" required="required" id="date">
                     </div></td>
         </tr>
   <tr><td colspan="2"><h2>individual details</h2></td></tr>
    
    <tr><td><label>Party Level1:</label></td>
    <td><select name="partyLevel1">
    <option value="1" selected="selected">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
      <option value="4">4</option>
    </select></td></tr>

    <tr><td><label> Case Party Type1:<abbr>*</abbr></label></td>
    <td><select name="casePartyType1" required="required">
    <option value="Republic" selected="selected">Republic</option>
    <option value="Accused">Accused</option>
    <option value="Plea">Plea</option>
    <option value="Sentence">Sentence</option>
    </select></td></tr>

    <tr><td><label> Full Name: <abbr>*</abbr> </label></td>
    <td><input type="text" name="fullName" required="required" class="name" placeholder="Enter full name"></td></tr>

    <tr><td><label>gender<abbr>*</abbr></label></td>
        <td><input type="radio" required name="gender" id="r1" value="male"><label for="r1">male.</label>
        <input type="radio" required name="gender" id="r2" value="female"><label for="r2">female.</label></td></tr>

    <tr><td><label>Telephone: <abbr>*</abbr> </label></td>
    <td><input type="text" name="phoneNo" required="required" class="name" placeholder="Enter your telephone"></td></tr>

    <tr><td><label>Email Address: <abbr>*</abbr> </label></td>
    <td><input type="text" name="emailAddress" required="required" class="name" placeholder="Enter your email address"></td></tr>

    <tr><td><label>Nationality: <abbr>*</abbr> </label></td>
    <td><select id="country" name="country">
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select></td></tr>

    <tr><td><label> Representation1: <abbr>*</abbr> </label></td>
    <td><input type="text" name="representation1" required="required" class="name" placeholder=""></td></tr>

    <tr><td colspan="2">Case Details<br>  The case details entails a brief description of the case. <br> It includes the filling date,citation brief  description of the case.
    </td></tr>
    <tr><td>
      <label for="t3">Prayers or <br> Relief sought </label></td>
      <td><textarea id="t3" name="caseSummary" rows="3" placeholder="Brief summary of the case"></textarea></td>
      </tr>

<br>
<tr><td colspan="2"><h2>Organization details</h2></td></tr> 
   
   <tr><td><label>Party Level:</label></td>
   <td><select name="partyLevel">
<option value="1" selected="selected">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select></td></tr>

   <tr><td>
   <label> Case Party Type:<abbr>*</abbr></label></td>
   <td><select name="casePartyType" required="required">
<option value="Republic" selected="selected">Republic</option>
<option value="Accused">Accused</option>
<option value="Plea">Plea</option>
<option value="Sentence">Sentence</option>
</select></td></tr>

      <tr><td><label> Organisation Name: <abbr>*</abbr> </label></td>
      <td><input type="text" name="organisationName" required="required" class="name" placeholder="Organisation name"></td></tr>

      <tr><td><label> Organisation Address: <abbr>*</abbr> </label></td>
      <td><input type="text" name="organisationAddress" required="required" class="name" placeholder="Organisation address"></td></tr>

      <tr><td><label> physical location: <abbr>*</abbr> </label></td>
      <td><input type="text" name="physicalLocation" required="required" class="name" placeholder="physical location"></td></tr>

      <tr><td><label> Organisation Telephone: <abbr>*</abbr> </label></td>
      <td><input type="text" name="organisationTelephone" required="required" class="name" placeholder="Organisation telephone"></td></tr>

      <tr><td><label> Organisation Email: <abbr>*</abbr> </label></td>
      <td><input type="text" name="organisationEmail" required="required" class="name" placeholder="Organisation email address"></td></tr>

      <tr><td><label> Representation: <abbr>*</abbr> </label></td>
      <td><input type="text" name="representation" required="required" class="name" placeholder=""></td></tr>
 <br><br><br><br>


 <tr><td><h2>payment details</h2></td></tr> 
 <tr><td> <label>Court Fee Applicable: <abbr>*</abbr></label></td>
      <td> <input type="radio" required name="fee" id="r1" value="payable"><label for="r1">payable.</label>
         <input type="radio" required name="fee" id="r2" value="pauperise/No payment"><label for="r2">pauperise/ No payment.</label>
         <input type="radio" required name="fee" id="r1" value="state"><label for="r1">state.</label></td>
    </tr>


   <tr><td><label> Assessed Amount: <abbr>*</abbr> </label></td>
      <td><input type="text" name="assessedAmount" required="required" class="name" placeholder="0.00"></td>
   </tr>
         <tr><td><label>Assessed by:</label></td>
      <td><select name="assessor">
      <option value="John" selected="selected">John</option>
      <option value="Peter">Peter</option>
      <option value="James">James</option>
      <option value="Samuel">Samuel</option>
      </select></td>
   </tr>
      <tr><td><label> Receipt number: <abbr>*</abbr> </label></td>
      <td><input type="text" name="receiptNo" required="required" class="name" placeholder="Enter receipt number"></td>
   </tr>
      <tr><td><label> Date paid: <abbr>*</abbr> </label></td>
      <td><input class="form-control" type="date" name="datePaid" id="date"></td>
   </tr>
      <tr><td><label> Amount paid: <abbr>*</abbr> </label></td>
      <td><input type="text" name="amount" required="required" class="name" placeholder="0.00"></td>
   </tr>
      <tr><td><label> Date Assessed: <abbr>*</abbr> </label></td>
      <td><input class="form-control" type="date" name="dateAssessed" id="date"></td>
   </tr>
      <tr><td><label>Payment method:</label></td>
      <td><select name="paymentMethod">
      <option value="Bank" selected="selected">Bank</option>
      <option value="Cash">Cash</option>
      <option value="M-Pesa">M-Pesa</option>
      <option value="Paypal">Paypal</option>
      </select></td>
   </tr>
      <tr><td>
     <p><input type="submit" name="submit" value="submit" align="center">&nbsp;&nbsp;</p></td>
      <td><p><input type="reset" value="Reset" name="Reset"></p></td></tr>
</table>

</form>
<br>
    <div class="footer">
        <p>The chief registrar of The Judiciary .Supreme Court of Kenya <br>City Hall Way P.O Box 30041-00100. Nairobi Kenya info@judiciary go.ke </p>
        
    </div>
  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>