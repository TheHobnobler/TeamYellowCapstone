<?php
session_start();

$total = 0;

for($i=1; $i <count($_SESSION["cart"]); $i++){
    $total += $_SESSION["cart"][$i][2];
  }

echo "You ordered ";

for($i=1; $i < count($_SESSION["cart"]); $i++){
    echo "" .$_SESSION["cart"][$i][1]. " " .$_SESSION["cart"][$i][0]. ", ";
}

echo"<br>For a total of $" .$total. "</br>";

?>