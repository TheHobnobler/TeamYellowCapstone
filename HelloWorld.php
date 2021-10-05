<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<title>Index</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="HomePage.php">Home</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="HelloWorld.php">Hello World</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="retrievetime.php">Get Timestamp</a>
      </li>  
    </ul>
  </div>
</nav>

<div class="container pt-5">
    <h3 style="color: red;">Hello World from</h3>
    <h1 style="background-color: yellow;">Team Yellow!</h1>

    <form id="frm" method="post"  action="?action" >
        <input type="submit" value="Submit" id="submit" />
    </form>
</div>

<?php

if(isset($_GET['action']))
              {


$servername =  "localhost";
$username  = "root";
$password = "teamyellow";
$dbname = "timestamp_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "INSERT INTO timestamp_tbl() VALUES()";
/* if  (!$conn) { die("Connect failed: ".mysqli_connect_error()); }
echo "Connect success"; */

if (mysqli_query($conn, $sql)) {
  echo "Timestamp database updated";
  echo "<br></br>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
?>
</body>
</html>
