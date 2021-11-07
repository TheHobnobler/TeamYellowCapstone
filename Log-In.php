<?php
include 'Functions.php';
session_start();
$_SESSION["count"];

?>



<?=navbar('Login')?>

<div class='container'>



    
    <formmethod="post" action="#">
        <div class="form-input">
            <input type="text" name="username" placeholder="Enter your User Name">
        </div>
        
        <div class="form-input">
             <input type="password" name="password" placeholder="Enter your Passsword">
        </div>
        
        <input onclick='employeeLogin("foo")' type="submit" type="submit" value="LOGIN" class="btn-login">
        
    </form>


    <form action=''>
            <label for='fname'></label>
            <input type='button' value ='employeeLogin' id='' name='foo' onclick="employeeLogin(document.getElementById('returnBox').innerHTML)">
          </form>
    
    <span id='returnBox'></span>
    <?php
    $serverName = "aatjxyjvs2g8ic.cayunuubrbla.us-east-1.rds.amazonaws.com,1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"LoveYouALatte", "UID"=>"root", "PWD"=>"Capstone2021!");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
  ?>
</div>


  </body>

  <script>

function employeeLogin(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("returnBox").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "employeeLogin.php?q=" + str, true);
    xmlhttp.send();
  }
</script>
    
</html>
