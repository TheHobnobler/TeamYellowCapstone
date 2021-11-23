<?php


function navbar($title) {
    echo <<<EOT
    <!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="javaScript.js"></script>
<title>$title</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="HomePage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TestCart.php">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="retrievetime.php">Get Timestamp</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Log In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AddMenuItemPage.php">Add Menu Item</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="EditMenu.php">Add Menu Item</a>
      </li>
    </ul>
  </div>
</nav>
EOT;
}





function createMenuTable($array){
  $servername =  "localhost";
  $username  = "root";
  $password = "teamyellow";
  $dbname = "coffeeshop";
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  $sql_retrieve = "SELECT * FROM menu_tbl";
  $result = mysqli_query($conn, $sql_retrieve);
      
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo 
      "<tr><td>".$row["ITEM"].":&emsp;&emsp;</td><td> Size:&emsp;".$row["SIZE"]."&emsp;&emsp;</td><td> Price:&emsp;$".$row["PRICE"]."&emsp;</td>
              <td>
              <form action=''>
              <label for='fname'></label>
              <input type='button' value ='Add To Cart' id='' name='".$row["SKU"]."' onclick='getButtonName(this.name)'>
            </form>
              </td>
          </tr>";
    }
  } else {
    echo "0 results";
  }
     
}







