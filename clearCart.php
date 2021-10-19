<?php
session_start();

$i=0;
while($i< count($_SESSION["cart"])){
    array_pop($_SESSION["cart"]);
} 
  echo "<h4>You have 0 item(s) in your cart.</h4><h4>Total $0";


?>
