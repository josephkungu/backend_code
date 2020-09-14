<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "data";


$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
} 


$caseNo = $_GET['caseNo'];
$caseNo = mysqli_real_escape_string($conn,$caseNo);

$query = "SELECT `caseNo`, `plaintiffID`, `respondentID`, `courtID`, `caseType`, `caseOutcome`, `PJNo`, `caseDate` FROM `casetable` WHERE `caseNo`='" . $caseNo . "'";
//$query = "SELECT * FROM `casetable` WHERE `caseNo`='" . $caseNo . "'";

$resultset = mysqli_query($conn,$query);
$json_array = array();

    //close the db connection

if (mysqli_num_rows($resultset) <= 0)
{
	echo "Client not found!";
}
else
{
	while($row = mysqli_fetch_assoc($resultset)){
    $json_array[] = $row; 
 
}
echo json_encode($json_array);
}

 ?>