
<?php
include 'Functions.php';
session_start();
?>



<?=navbar('Menu')?>

<?php




$_SESSION["cart"] = array(array("foo","foo","foo"));

$_SESSION["coffee"] = array (
    array("Caramel Macchiato","Small",2),array("Caramel Macchiato","Medium",3),array("Caramel Macchiato","Large",5),
    array("Vanilla Latte","Small",2),array("Vanilla Latte","Medium",3), array("Vanilla Latte","Large",5),
    array("Pumkin Spice Latte","Small",2),array("Pumkin Spice Latte","Medium",3),array("Pumkin Spice Latte","Large",5),
    array("Black Coffee","Small",2),array("Black Coffee","Medium",3),array("Black Coffee","Large",5)
  );

?>

<div class="container">
    <h1>Menu</h1>
 
 <table>
     <?=createMenuTable($_SESSION["coffee"])?>
</table>

</div>

<div class="offcanvas offcanvas-end" id="right">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Your Cart</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
  <h1></h1>  
  <p id="cart"></p>

  <div class="container-fluid mt-3">
  <h3>Checkout</h3>
  <p>Click below to checkout and confirm order</p>
  <button class="btn btn-primary" onclick="createReceipt(this.name)" name="foo" type="button" data-bs-toggle="offcanvas" data-bs-target="#top">
    Checkout
  </button>
  <br></br>
  </div>

  <form action=''>
            <label for='fname'></label>
            <input name="foo" type='button' value ='Clear Cart' id=''  onclick='clearCart(this.name)'>
          </form>
  </div>
</div>

<div class="container-fluid mt-3">
  <h3>Take a look at your cart</h3>
  <p>Just click the button below!</p>
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#right">
    Toggle Your Cart
  </button>
  
</div>

<div>
    <br></br>
<p><b>Enter receipt number below to check a previous order.</b></p>
<form action="">
  <label for="fname">Receipt number:</label>
  <input type="text" id="receiptBox" name="fname" onkeyup ="getCookie(this.value)"></input>
</form>
<span id="previousOrder"></span>

</div>

<div class="offcanvas offcanvas-top" id="top">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Are you sure?</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p id="checkout">Send receipt information here</p>
    <button class="btn btn-secondary" name = "foo" onclick = "createCookie( document.getElementById('checkout').innerHTML)" type="button">Finish Order</button>
  </div>
</div>




</body>



<!--      <footer>
        <style>
            p2 {background-color: azure;
                position: fixed;
                width: 100%;
                bottom: 0;
            }
        </style>
        <p2>Contact us!<br>
            <a href="coffee@loveyoualatte.com">yo email me here!</a></p2>
    </footer>
-->
</html>


