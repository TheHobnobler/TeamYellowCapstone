
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

<script>

function getButtonName(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("cart").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "addToCart.php?q=" + str, true);
    xmlhttp.send();
  }

  function clearCart(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("cart").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "clearCart.php?q=" + str, true);
    xmlhttp.send();
  }
</script>

<div class="container">
    <h1>Welcome to Love You a Latte</h1>
</div>

<div class="container">
    <h1>Menu</h1>
 
 <table>
     <?=createMenuTable($_SESSION["coffee"])?>
</table>

</div>

<div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Your Cart</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
  <h1></h1>  
  <p id="cart"></p>

  <form action=''>
            <label for='fname'></label>
            <input name="foo" type='button' value ='Clear Cart' id=''  onclick='clearCart(this.name)'>
          </form>
  </div>
</div>

<div class="container-fluid mt-3">
  <h3>Take a look at your cart</h3>
  <p>Just click the button below!</p>
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Toggle Your Cart
  </button>
  
</div>

</body>



      <footer>
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
</html>


