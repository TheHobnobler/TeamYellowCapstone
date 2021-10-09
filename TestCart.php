<?php

session_start();

include 'Functions.php';
?>
<?=navbar('Test Cart')?>

<?php
function addToCart(){
    
}

$coffee = array (
    array("Caramel Macchiato","small",2),array("Caramel Macchiato","medium",3),array("Caramel Macchiato","large",5),
    array("Vanilla Latte","small",2),array("Vanilla Latte","medium",3), array("Vanilla Latte","large",5),
    array("Pumkin Spice Latte","small",2),array("Pumkin Spice Latte","medium",3),array("Pumkin Spice Latte","large",5),
    array("Black Coffee","small",2),array("Black Coffee","medium",3),array("Black Coffee","Large",5)
  );

function createMenuTable($array){
    for($i=0; $i <count($array); $i++){
        echo  
        "<tr><td>".$array[$i][0].":&emsp;&emsp;</td><td> Size:&emsp;".$array[$i][1]."&emsp;&emsp;</td><td> Price:&emsp;$".$array[$i][2]."<br></td>
            <td>
                <form id='frm' method='post'  action='?action' >
                    <input type='submit' name='addToCart' value='Add to cart' id='Submit'  />
                </form>
            </td>
        </tr>";
    }
}
?>

<?php

if(isset($_POST['addToCart'])) {
            $shoppingcart = array(coffee[0],coffee[2])
            
        }

?>

<div class="container">
    <h1>Welcome to Love You a Latte</h1>
    <p>This is a work in progress for a home landing page.</p>
</div>

<div class="container">
    <h1>Menu</h1>
<?php
$cart = array(array("","",""));


?>
 
 <table>
     <?=createMenuTable($coffee)?>
</table>

</div>

<div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Test Cart</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>Some text lorem ipsum.</p>
    <p>Some text lorem ipsum.</p>
    <p>Some text lorem ipsum.</p>
    <button class="btn btn-secondary" type="button">A Button</button>
  </div>
</div>

<div class="container-fluid mt-3">
  <h3>Take a look at your cart</h3>
  <p>Just click the button below!</p>
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Toggle Test Cart
  </button>
</div>

</body>


</html>


