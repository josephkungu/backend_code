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
	$PJNo=$_POST['PJNo'];
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];

	
	$sql= "INSERT INTO `data`.`judge`". "
	(PJNo,firstName,lastName)".
	"VALUES('$PJNo','$firstName','$lastName')";

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>judge</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/res.css">
</head>

<body>
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
            <a href="#"> CLIENTS</a>

            </div>
            <br>
            <div class="navbar-nav">
            <!-- <button class="open-button" onclick="openForm()">SEARCH CASE</button>-->
            </div>
        </div>
    </nav>
</div>

	<div align="center" >
	<br><br>
	<form method="POST" border="2">
<table class="pending">
	<tr>
		<td>PJNo:</td>
		<td><input type="text" name="PJNo" class="name" placeholder="PJ No"></td>
	</tr>
	<tr>
		<td>First Name:</td>
		<td><input type="text" name="firstName" class="name" placeholder="first Name"></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><input type="text" name="lastName" class="name" placeholder="last Name"></td>
	</tr>
</table>
<br>
		<input type="submit" name="submit" value="submit" align="center">&nbsp;&nbsp;
	
	</form>

	</div>
		<br>
		<br><br><br><br><br>
		<div class="footer">
		<p>The chief registrar of The Judiciary .Supreme Court of Kenya <br>City Hall Way P.O Box 30041-00100. Nairobi Kenya info@judiciary go.ke </p>
	</div>
</body>
</html>