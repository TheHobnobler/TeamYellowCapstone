<?php
session_start();

$total = 0;




$count =0;

foreach($_SESSION["cart"] as &$value){
  $count += $value["qty"];
}

echo "<table>";
foreach($_SESSION["cart"] as &$value){
  $subtotal = ($value["qty"] * $_SESSION["coffee"][$value["id"]]["cost"]);

  if($value["qty"] > 0){
 echo "<tr><td> {$_SESSION["coffee"][$value["id"]]["size"]}  {$_SESSION["coffee"][$value["id"]]["item"]} x{$value["qty"]} $".$subtotal. "</td></tr>";
        $total += $subtotal;
}
}
echo "</table>";

echo "<h4>You have a total of {$count} items.</h4><h4>Total $ {$total}";
?>
