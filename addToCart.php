<?php

session_start();

// get the q parameter from URL
$q = $_REQUEST["q"];
$total = 0;

array_push($_SESSION["cart"],explode(",",$q));

for($i=1; $i <count($_SESSION["cart"]); $i++){
  $total += $_SESSION["cart"][$i][2];
}

$count =  count($_SESSION["cart"])-1;
for($i=1; $i < count($_SESSION["cart"]); $i++){
  echo 
  "<br>" .$_SESSION["cart"][$i][1]. " " .$_SESSION["cart"][$i][0]. " for : $" .$_SESSION["cart"][$i][2]. "</br>";
}

echo "<h4>You have {$count} item(s) in your cart.</h4><h4>Total $ {$total}";

?>