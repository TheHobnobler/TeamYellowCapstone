<?php 




$q = $_REQUEST["q"];


$array = explode(",",$q);
$sku = $array[0];
$name = $array[1];
$desc = $array[2];
$price = $array[3];
$size = $array[4];


$sql = "update menu_tbl set item='{$name}', description='{$desc}', price = '{$price}', size = '{$size}' where sku={$sku}";



$servername =  "localhost";
$username  = "root";
$password = "teamyellow";
$dbname = "coffeeshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();




?>
