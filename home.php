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
if(strlen($_SESSION['alogin'])==0)
header('location:index.php');

else{
date_default_timezone_set('Kisii/Kenya');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );

?>
    <?php $query=mysqli_query($con,"select * from client where clientID='".$_SESSION['alogin']."'");
 while($row=mysqli_fetch_array($query)) 
 {
  $Name=$row['firstName'];
}}
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>home</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                <script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
<link rel="stylesheet" type="text/css" href="css/res.css">
<link rel="stylesheet" type="text/css" href="css/form.css">
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
<div id="welcome" align="center"><strong>welcome  &nbsp;<?php echo ($Name); ?></strong></div>
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
<table id="general" align="center" border="2px" width="100%">
    <tr>
        <td colspan="3" bgcolor="#293503" ><p>GENERAL STATISTICS</p></td>
    </tr>
    <tr>
        <td>Total cases</td>
        <td>pending cases</td>
        <td>resolved</td>
    </tr>
    <?php $query=mysqli_query($con,"select * from statistics");
    while($row=mysqli_fetch_array($query))
{
     ?>
        <tr>
        <td><?php echo htmlentities($row['totalCases']);?></td>
        <td><?php echo htmlentities($row['pendingCases']);?></td>
        <td><?php echo htmlentities($row['resolvedCases']);}?></td>
    </tr>
</table>

<br>

<table id="pending" align="center" border="2px"  width="100%">
    <tr>
        <td colspan="3" bgcolor="#293503"><p>CASES PENDING BY AGE</p></td>
    </tr>
    <tr>
        <td>0-1Year</td>
        <td>1-3Years</td>
        <td>3-5Years</td>
    </tr>
    <?php $query=mysqli_query($con,"select * from pending");
    while($row=mysqli_fetch_array($query))
{
     ?>
        <tr>
        <td><?php echo htmlentities($row['oneYear']);?></td>
        <td><?php echo htmlentities($row['threeYears']);?></td>
        <td><?php echo htmlentities($row['fiveYears']);}?></td>
    </tr>
</table>


<br>

<table id="notification" align="center" border="2px"  width="100%">
    <tr>
        <td colspan="4" bgcolor="#293503"><p>NOTIFICATIONS</p></td>
    </tr>
    <tr>
        <td colspan="4">MATTERS COMING TODAY AS AT <script language="JavaScript" type="text/javascript">
      document.write(TODAY);    </script></td>
    </tr>
    <tr>
        <td>No:</td>
        <td>Activity</td>
        <td>count</td>
        <td>view</td>
    </tr>
    <?php $query=mysqli_query($con,"select * from notification");
    $cnt=1;
    while($row=mysqli_fetch_array($query))
{
     ?>
        <tr>
             <td><?php echo htmlentities($cnt);?></td>
        <td><?php echo htmlentities($row['activity']);?></td>
        <td><?php echo htmlentities($row['count']);?></td>
        <td><?php echo htmlentities($row['view']);?><a href="statistics.php">view</a></td>
    </tr>
     <?php $cnt=$cnt+1; } ?>

</table>
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