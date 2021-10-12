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
      
    </ul>
  </div>
</nav>
EOT;
}

function createMenuTable($array){
    for($i=0; $i <count($array); $i++){
        echo  
        "<tr><td>".$array[$i][0].":&emsp;&emsp;</td><td> Size:&emsp;".$array[$i][1]."&emsp;&emsp;</td><td> Price:&emsp;$".$array[$i][2]."&emsp;<br></td>
            <td>
            <form action=''>
            <label for='fname'></label>
            <input type='button' value ='Add To Cart' id='' name='".$array[$i][0].",".$array[$i][1].",".$array[$i][2]."' onclick='getButtonName(this.name)'>
          </form>

            </td>
        </tr>";
    }
}





      


