<?php
include 'Functions.php';
?>
<?=navbar('Menu with Database')?>

<div class="container pt-5">
    <h3 style="color: red;">Menu with Database</h3>
    
</div>

<?php

if(isset($_GET['action']))
              {


$servername =  "localhost";
$username  = "root";
$password = "teamyellow";
$dbname = "coffeeshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql_retrieve = "SELECT * FROM menu_tbl";
$result = mysqli_query($conn, $sql_retrieve);
    
if ($result = $mysqli->query($sql_retrieve)) {

    while ($row = $result->fetch_assoc()) {
        $SKU = $row["col1"];
        $ITEM = $row["col2"];
        $DESCRIPTION = $row["col3"];
        $PRICE = $row["col4"];
        $SIZE = $row["col5"];

        echo $SKU;
        echo $ITEM;
        echo $DESCRIPTION;
        echo $PRICE;
        echo $SIZE;
    }


mysqli_close($conn);
}
?>
</body>
</html>
