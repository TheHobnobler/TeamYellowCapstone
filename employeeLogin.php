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

$host ="aatjxyjvs2g8ic.cayunuubrbla.us-east-1.rds.amazonaws.com, 1433"; 
$username ="root";
$password ="Capstone2021!";
$database ="LoveYouALatte";

mssql_connect($host, $username, $password);
mssql_select_db($database);

$query ="SELECT * FROM Coffee";
$result =mssql_query($query);
while ( $record = mssql_fetch_array($result) )
{
	echo $record["coffee"] .", ". $record["size"] ."<br />";
}

/*
try
        {

    if($conn == false)
        die(FormatErrors(sqlsrv_errors()));
            echo "connected";
            $tsql = "SELECT * FROM Coffee";
            $result = sqlsrv_query($conn, $tsql);
            if ($results == FALSE)
              die(FormatErrors(sqlsrv_errors()));
            while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
              echo $row["coffee"]. " " .$row["size"]. "<br>";
          }
          sqlsrv_free_stmt($results);
            sqlsrv_close($conn);
        }
        catch(Exception $e)
        {
            echo("Error!");
        }
  
*/
  ?>
