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
    
    <form>
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

$host="localhost";
$user="root";
$password="teamyellow";
$db="coffeeshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql_retrive = "SELECT * FROM menu_tbl";
$result = mysqli_query($conn, $sql_retrieve);

if (!$conn) {

    echo "Connection failed!";

}


if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
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

