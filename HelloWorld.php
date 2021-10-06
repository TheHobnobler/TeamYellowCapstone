    <!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Hello World</title>
</head>
<body>
    
<?php
include 'functions.php';
?>
<?=navbar()?>

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
