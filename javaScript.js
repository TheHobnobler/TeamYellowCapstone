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