<?php

$q = $_REQUEST["q"];

$sql = "select sku, item, description, price, size from menu_tbl where sku = '{$q}' ";

$servername =  "localhost";
$username  = "root";
$password = "teamyellow";
$dbname = "coffeeshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<form method=''>
      <ul>
        
      <li> Product SKU: <li><input class='form-control'  readonly id='name' type='text' name='name' value='{$row["SKU"]}'></li></li>
        <br>
      
        <li> Product Name: <li><input id='name' type='text' name='name' value='{$row["ITEM"]}'></li></li>
       <br>
      
        <li>Product Description: <li><input id='desc' type='text' name='desc' value ='{$row["DESCRIPTION"]}'></li></li>
        <br>
      
        <li> Product Price: <li><input  id='price' type='text' name='price' value='{$row["PRICE"]}'></li></li>
        <br>
      
        <li> Product Size: <li><input id='size' type='text' name='size' value='{$row["SIZE"]}'></li></li>
        
        <li><input type='button' name='submit' value='Submit'></li>  
      </ul>
      </form>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

