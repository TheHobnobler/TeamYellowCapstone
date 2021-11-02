<?php
include 'Functions.php';
?>
<?=navbar('Hello World')?>



<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="" a href=""/>
    
    </head>
    
<body> 
    
    <formmethod="post" action="#">
        <div class="form-input">
            <input type="text" name="username" placeholder="Enter your User Name">
        </div>
        
        <div class="form-input">
             <input type="password" name="password" placeholder="Enter your Passsword">
        </div>
        
        <input type="submit" type="submit" value="LOGIN" class="btn-login">
        
    </form>
    
    
</body>
    
</html>

<?php 

$servername = "localhost";
$username = "root";
$password = "teamyellow";
$db = "coffee_emps";

$conn = mysqli_connect($servername, $username, $password, $db);

<!-- if  (!$conn) { die("Connect failed: ".mysqli_connect_error()); }
echo "Connect success"; -->

$sql_retrieve = "SELECT * FROM loginfrom";
$result = mysqli_query($conn, $sql_retrieve);

$sql = "SELECT Pass FROM loginfrom WHERE User='Admin'";
$test = mysqli_query($conn, $sql);
echo "hello";
  

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginfrom where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

