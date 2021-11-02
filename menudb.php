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
    
if (!$result) {
    $message .= 'Whole query: ' .$query;
    die($message);
}

while ($row = mysql_fetch_assoc($result)) {
    echo $row['SKU'];
    echo $row['ITEM'];
    echo $row['DESCRIPTION'];
    echo $row['PRICE'];
    echo $row['SIZE'];
}

mysqli_close($conn);
}
?>
</body>
</html>
