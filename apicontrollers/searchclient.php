<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "data";


$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
} 


$clientID = $_GET['clientID'];
$clientID = mysqli_real_escape_string($conn,$clientID);
$query = "SELECT * FROM `client` WHERE `clientID`='" . $clientID . "'";

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