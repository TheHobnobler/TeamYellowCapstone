<?php

$q = $_REQUEST["q"];



$sql = "select sku, item, description, price, size from menu_tbl where item = '{$q}'; ";

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
        echo "<option>" .$row["ITEM"]. "\t". "Size: " . $row["SIZE"]. "\t". "Price: " . $row["PRICE"]. "</option";
    }
    
  } else {
    echo "<option> No results</option>";
  }

        
