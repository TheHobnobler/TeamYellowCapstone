<?php
$q = $_REQUEST["q"];




$cookie_name = "9";//rand(1,1000);
$cookie_value = $q;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


if(!isset($_COOKIE[$cookie_name])) {
    echo "Your receipt number is '" . $cookie_name . "' use it to search for you order.<br></br>";
} else {
    echo "Your receipt number is '" . $cookie_name . "'. Use it to search for your order.<br></br>";
    echo "Most recent order was " . $_COOKIE[$cookie_name];
}


?>