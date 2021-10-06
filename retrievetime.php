    <!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<title>Retrieve The Time</title>
</head>
<body>
    
<?php
include 'functions.php';
?>
<?=navbar()?>

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
