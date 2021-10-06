<?php
include 'Functions.php';
?>
<?=navbar('Hello World')?>

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
