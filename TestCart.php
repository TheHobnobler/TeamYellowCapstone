
<?php
include 'Functions.php';
session_start();
?>



<?=navbar('Menu')?>

<?php





$_SESSION["cart"] = array();

$_SESSION["coffee"] = array (
    "scm"=> array("item" => "Caramel Macchiato","size" => "Small","cost" => 2,"lid" =>"scm" , "desc" => "Freshly steamed milk with vanilla-flavored syrup with espresso and topped with a caramel drizzle."),
    "mcm"=>array("item" => "Caramel Macchiato","size" => "Medium","cost" => 3,"lid" =>"mcm", "desc" => "Freshly steamed milk with vanilla-flavored syrup with espresso and topped with a caramel drizzle."),
    "lcm"=>array("item" => "Caramel Macchiato","size" => "Large","cost" => 5,"lid" =>"lcm" , "desc" => "Freshly steamed milk with vanilla-flavored syrup with espresso and topped with a caramel drizzle."),
    "svl"=> array("item" => "Vanilla Latte","size" => "Small","cost" => 2, "lid" =>"svl" ,"desc" => "Espresso, steamed milk and vanilla syrup and espresso."),
    "mvl"=>array("item" => "Vanilla Latte","size" => "Medium","cost" => 3, "lid" =>"mvl" ,"desc" => "Espresso, steamed milk and vanilla syrup and espresso."), 
    "lvl"=>array("item" => "Vanilla Latte","size" => "Large","cost" => 5, "lid" =>"lvl" ,"desc" => "Espresso, steamed milk and vanilla syrup and espresso."),
    "spsl"=>array("item" => "Pumkin Spice Latte","size" => "Small","cost" =>2,"lid" => "spsl" ,"desc" => "Flavors of pumpkin, cinnamon, nutmeg and clove—topped with whipped cream and pumpkin pie spices."),
    "mpsl"=>array("item" => "Pumkin Spice Latte","size" => "Medium","cost" =>3,"lid" => "mpsl" ,"desc" => "Flavors of pumpkin, cinnamon, nutmeg and clove—topped with whipped cream and pumpkin pie spices."),
    "lpsl"=>array("item" => "Pumkin Spice Latte","size" => "Large","cost" =>5,"lid" => "lpsl" ,"desc" => "Flavors of pumpkin, cinnamon, nutmeg and clove—topped with whipped cream and pumpkin pie spices."),
    "sbc"=>array("item" => "Black Coffee","size" => "Small","cost" => 2,"lid" => "sbc" ,"desc" => "Fresh ground French press coffee beans."),
    "mbc"=>array("item" => "Black Coffee","size" => "Medium","cost" => 3,"lid" => "mbc" ,"desc" => "Fresh ground French press coffee beans."),
    "lbc"=>array("item" => "Black Coffee","size" => "Large","cost" => 5,"lid" => "lbc" ,"desc" => "Fresh ground French press coffee beans.")
  );

?>

<div class="container">
    <h1>Menu</h1>
 
 <table>
     <?=createMenuTable($_SESSION["coffee"])?>
</table>

</div>

<div class="offcanvas offcanvas-end " id="right">
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
<p><span id="previousOrder"></span></p>

</div>

<div class="offcanvas offcanvas-top h-50" id="top">
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
</html>


