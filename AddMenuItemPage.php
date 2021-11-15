<?php
include 'Functions.php';
?>
<?=navbar('Add Menu TEST')?>

<div class="container">
    <h1>Welcome to Love You a Latte</h1>
    <p>This is a work in progress for a home landing page.</p>


<form>
    <ul>
    <li><label for="fname">SKU :</label></li>
    <li><input type="text" id="SKU" name="fname"></li>
    <li> <p class="rq">*Required Field</p></li>
    
    <li><label for="fname">Item Name:</label></li>
    <li><input type="text" id="itemName" name="fname"></li>
    <li><p class="rq">*Required Field</p></li>

    <li><label for="fname">Item Description:</label></li>
    <li><input type="text" id="itemDesc" name="fname"></li>
    <li><p class="rq">*Required Field</p></li>

    <li><label for="fname">Item Price:</label></li>
    <li><input type="text" id="itemPrice" name="fname"></li>
    <li><p class="rq">*Required Field</p></li>

    <li><label for="fname">Item Size:</label></li>
    <li><input type="text" id="itemSize" name="fname"></li>
    <li><p class="rq">*Required Field</p></li>

   
            
    <li><input type='button' value ='Add To Menu' id='' name='' onclick='addMenuItemToDatabase(this.name)'></li>
</ul>
 

</form>
</div>

</body>

<script>


 function addMenuItemToDatabase(str) {
    if(){
        
    }

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("returnBox").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "addMenuItemToDatabase.php?q=" + str, true);
    xmlhttp.send();
  }




    
</script>
<style>
    li {list-style-type: none;
            font-size: 16pt;
    }

    .rq {
        color: #FF0000;
        font-size: 10pt;
}
</style>



</html>


