<?php

session_start();

// get the q parameter from URL
$q = $_REQUEST["q"];
$total = 0;


$found = false;


foreach($_SESSION["cart"] as &$value){
  if($value["id"]== $q){
    $value["qty"] +=1;
    $found =true;
    break;
  }
}

if($found== false){
  $_SESSION["cart"][] =array("id"=>$q,"qty"=>1);
}
$count =0;

foreach($_SESSION["cart"] as &$value){
  $count += $value["qty"];
}

echo "<table>";
foreach($_SESSION["cart"] as &$value){

  $servername =  "localhost";
  $username  = "root";
  $password = "teamyellow";
  $dbname = "coffeeshop";

  $sql = "select sku, item, description, price, size from menu_tbl where sku = '{$q}'; "; 
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {   

  $subtotal = ($value["qty"] * $row["price"]);

  if($value["qty"] > 0){
 echo "<tr><td> {$row["size"]}  {$row["item"]} x{$value["qty"]} $".$subtotal. "</td>
            <td>
            <form action=''>
            <label for='fname'></label>
            <input type='button' value ='Remove Item' id='' name=' {$value["id"]}' onclick='removeItem(this.name)'>
          </form>

            </td>
        </tr>";

        $total += $subtotal;

}
echo "</table>";

echo "<h4>You have {$count} item(s) in your cart.</h4><h4>Total $ {$total}";
}

} else {
  echo "<option> No results</option>";
}

$conn->close();

}

