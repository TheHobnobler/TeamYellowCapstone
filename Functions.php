<?php

function navbar() {
    echo <<<EOT

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
