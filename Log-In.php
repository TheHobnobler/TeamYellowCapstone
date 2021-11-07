<?php 

session_start();

//$q = $_REQUEST["q"];

//echo $q;

echo $_SESSION["count"];
$_SESSION["count"] ++;
/*
$servername = "localhost";
$username = "root";
$password = "teamyellow";
$db = "coffee_emps";

$conn = new mysqli($servername, $username, $password, $db);
 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
  
$sql = "SELECT * FROM loginfrom";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["User"]. $row["Pass"]. "<br>";
  }
} else {
  echo "0 results";
}

*/

$serverName = "aatjxyjvs2g8ic.cayunuubrbla.us-east-1.rds.amazonaws.com, 1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"LoveYouALatte", "UID"=>"root", "PWD"=>"Capstone2021!");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
  ?>
