<?php
$q = $_REQUEST["q"];


$cookie_name = $q;
if(!isset($_COOKIE[$cookie_name])) {
    echo "Order number '" . $q . "' does not exist, or you might have to refresh the page.";
} else {
    echo "Receipt number  '" . $cookie_name . "'.<br>";
    echo "Most recent order was " . $_COOKIE[$cookie_name];
}

?>