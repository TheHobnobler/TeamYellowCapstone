<?php
include 'Functions.php';
?>
<?=navbar('Menu with Database')?>

<div class="container pt-5">
    <h3 style="color: red;">Menu with Database</h3>
    
</div>

<?php

if(isset($_GET['action']))
              {


$servername =  "localhost";
$username  = "root";
$password = "teamyellow";
$dbname = "coffeeshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql_retrieve = "SELECT * FROM menu_tbl";
$result = mysqli_query($conn, $sql_retrieve);
    
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "SKU: " . $row["SKU"]. " - Name: " . $row["ITEM"]. " Size: " . $row["SIZE"]. "<br>";
  }
} else {
  echo "0 results";
}


mysqli_close($conn);
}
?>
</body>
</html>
