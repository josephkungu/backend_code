<?php
session_start();
error_reporting(0);
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'data');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['submit']))
{
	$clientID=$_POST['clientID'];
	$password=$_POST['password'];
    $ret=mysqli_query($con,"SELECT * FROM client WHERE clientID='".$_POST['clientID']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="home.php";
$_SESSION['alogin']=$_POST['clientID'];
$_SESSION['ID']=$num['ID'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();

}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/res.css">
<!--<style type="text/css">
	.top{
		background-color: #999999;
		padding-top: 2px;
		padding-bottom: 2px;
		text-align: center;
	}
	.form{
		background-color: #ffffcc;
		margin: auto;
	

	}
	.form .title{
		align-content: center;
	}
	.form .name{
	border-style: solid;
	margin-bottom: 20px;
	
	}
	.form .pass{
	border-style: solid;
	margin-bottom: 20px;
	
	}
	.form .log{
		background-color: yellow;
	}
	.footer{
		background-color: #eee1c9;
		padding-top: 2px;
		padding-bottom: 2px;
		text-align: center;
	}
</style>-->
	<title>log in</title>
</head>
<body>
	<div class="top">
		<p>For support call :+2540730181040 or Email: ictsupport@court.go.ke
		</p>
		
	</div>
	<div align="center">
		<h1>THE JUDICIARY OF KENYA</h1>
		<img src="images/judilogo.png">
	</div>
	<div class="form" align="center">
		<form method="POST">
			<p class="title">login here</p>
			
			<input type="text" name="clientID" class="name" placeholder="PJNumber or IDNumber"><br>
			<input type="password" name="password" class="pass" placeholder="password"><br>
			<input type="submit" name="submit" value="LOGIN" class="log">
			<p class="end" align="center">
				<div class="btn">
				<button type="reset" class="btn btn-dark">Clear</button>
				<a href="sign up.php">Register</a><br><br>
			<a href="#">Forgot Password</a>&nbsp;&nbsp;&nbsp;
			<a href="#">Disclaimer</a> </div>
			</p>
		</form>
		
	</div>
	<div class="footer">
		<p>The chief registrar of The Judiciary .Supreme Court of Kenya <br>City Hall Way P.O Box 30041-00100. Nairobi Kenya info@judiciary go.ke </p>
		
	</div>

</body>
</html>