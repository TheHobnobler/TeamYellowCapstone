<?php

session_start();

// get the q parameter from URL
$q = $_REQUEST["q"];
$total = 0;


$found =false;


foreach($_SESSION["cart"] as &$value){
  if($value["id"]== $q){
    $value["qty"] -=1;
    $found =true;
    break;
  }
}


$count =0;

foreach($_SESSION["cart"] as &$value){
  $count += $value["qty"];
}

echo "<table>";
foreach($_SESSION["cart"] as &$value){
  $subtotal = ($value["qty"] * $_SESSION["coffee"][$value["id"]]["cost"]);

  if($value["qty"] > 0){
 echo "<tr><td> {$_SESSION["coffee"][$value["id"]]["size"]}  {$_SESSION["coffee"][$value["id"]]["item"]} x{$value["qty"]} $".$subtotal. "</td>
            <td>
            <form action=''>
            <label for='fname'></label>
            <input type='button' value ='Remove Item' id='' name='".$value["id"]."' onclick='removeItem(this.name)'>
          </form>

            </td>
        </tr>";

        $total += $subtotal;
}
}
echo "</table>";

echo "<h4>You have {$count} item(s) in your cart.</h4><h4>Total $ {$total}";




?>