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
    <h3 style="color: red;">Time Retrieval Tool</h3>
    

    <form id="frm" method="post"  action="?action" >
        <input type="submit" value="Get Last Timestamp" id="submit" />
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

$sql_retrieve = "SELECT * FROM timestamp_tbl WHERE id=(SELECT max(id) FROM timestamp_tbl)";
$result = mysqli_query($conn, $sql_retrieve);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Last time stamp was entered on " . $row["ts"].  "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
}
?>
</body>
</html>