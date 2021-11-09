 <?php
// Start the session
session_start();
include 'Functions.php';

?>

<?=navbar('Login Final')?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["Username"] = "John";
$_SESSION["Password"] = "Yellow";

?>

<?php
// Echo session variables that were set on previous page
echo "Hello " . $_SESSION["Username"] . ".<br>";

?>


</body>
</html> 
