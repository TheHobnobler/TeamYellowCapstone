<?php 

session_start();

$q = $_REQUEST["q"];
$_SESSION["foo"] += $q;
echo $_SESSION["foo"];

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
  ?>
