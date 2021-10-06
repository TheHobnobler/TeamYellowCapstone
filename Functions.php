<?php

function navbar($title) {
    echo <<<EOT
    <html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
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
        <a class="nav-link" href="HelloWorld.php">Hello World</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="FAQ.php">FAQ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="retrievetime.php">Get Timestamp</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TestCart.php">Test Cart</a>
      </li>
    </ul>
  </div>
</nav>
EOT;
}

?>
