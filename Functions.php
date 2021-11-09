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
        <a class="nav-link" href="FAQ.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="retrievetime.php">Get Timestamp</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menudb.php">Menu with Database</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Log-In.php">Log In</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="sessionvariable_test.php">Login Final</a>
      </li>
      
    </ul>
  </div>
</nav>
EOT;
}


function createMenuTable($array){
  $count = 0;
    foreach($_SESSION["coffee"] as $value){
        
      if(($count%3) == 0){
        echo "<tr><td>Description:</td><td>" .$value["desc"]. "";
      }
      
      echo  
        "<tr><td>".$value["item"].":&emsp;&emsp;</td><td> Size:&emsp;".$value["size"]."&emsp;&emsp;</td><td> Price:&emsp;$".$value["cost"]."&emsp;</td>
            <td>
            <form action=''>
            <label for='fname'></label>
            <input type='button' value ='Add To Cart' id='' name='".$value["lid"]."' onclick='getButtonName(this.name)'>
          </form>

            </td>
        </tr>";

        if(($count%3) == 2){
          echo "<tr><td>&emsp;</td><td></td></tr>";
        }
       
          $count++;
     
    }
}





      


