<?php
session_start();

$i=1;
while($i< count($_SESSION["cart"])){
    array_pop($_SESSION["cart"]);
}


$total = 0;
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