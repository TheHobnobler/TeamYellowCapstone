<?php

$q = $_REQUEST["q"];

echo "somnething";
echo $q;

$sql = "select sku, item, description, price, size from menu_tbl where sku = '{$q}'; ";

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
        
      <li> Product SKU: <li><input class='form-control'  readonly id='name' type='text' name='name' value='" .$row["sku"]. "'></li></li>
        <br>
      
        <li> Product Name: <li><input class='form-control' id='name' type='text' name='name' value='" .$row["item"]. "'></li></li>
       <br>
      
        <li>Product Description: <li><textarea class='form-control' id='desc' type='text' name='desc' value =''>" .$row["description"]. "</textarea></li></li>
        <br>
      
        <li> Product Price: <li><input class='form-control'  id='price' type='text' name='price' value='" .$row["price"]. "'></li></li>
        <br>
      
        <li> Product Size: <li><input class='form-control' id='size' type='text' name='size' value='" .$row["size"]. "'></li></li>
        
        <li><input type='button' name='submit' value='Submit'></li>  
      </ul>
      </form>";
    }
  } else {
    echo "
    <form method=''>
      <ul>
        
      <li> Product SKU: <li><input class='form-control'  readonly id='name' type='text' name='name' value='noting was found'></li></li>
        <br>
      
        <li> Product Name: <li><input class='form-control' id='name' type='text' name='name' value=''></li></li>
       <br>
      
        <li>Product Description: <li><textarea class='form-control' id='desc' type='text' name='desc' value =''></textarea</li></li>
        <br>
      
        <li> Product Price: <li><input class='form-control'  id='price' type='text' name='price' value=''></li></li>
        <br>
      
        <li> Product Size: <li><input class='form-control' id='size' type='text' name='size' value=''></li></li>
        
        <li><input type='button' name='submit' value='Submit'></li>  
      </ul>
      </form>";
  }
  $conn->close();

