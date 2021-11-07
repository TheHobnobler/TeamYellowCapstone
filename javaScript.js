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



  function createReceipt(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("checkout").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "createReceipt.php?q=" + str, true);
    xmlhttp.send();
  }


  function createCookie(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("checkout").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "createCookie.php?q=" + str, true);
    xmlhttp.send();
  }


  function getCookie(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("previousOrder").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getCookie.php?q=" + str, true);
    xmlhttp.send();
  }



  function removeItem(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("cart").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "removeItem.php?q=" + str, true);
    xmlhttp.send();
  }


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



