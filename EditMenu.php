<?php
include 'Functions.php';
?>
<?=navbar('Add Menu TEST')?>


<div class='row'>
    <div class ='col'>
<div class="container">

    <h1>Item Activation Portal</h1>
    <p>This is a page to enter new items to the menu.</p>

    <div id ='return'>
<form method="">
<ul>
  
<li> Product SKU: <li><input class="form-control"  readonly id='name' type="text" name="name"></li></li>
  <br>

  <li> Product Name: <li><input id='name' type="text" name="name"></li></li>
 <br>

  <li>Product Description: <li><input id='desc' type="text" name="desc"></li></li>
  <br>

  <li> Product Price: <li><input  id='price' type="text" name="price"></li></li>
  <br>

  <li> Product Size: <li><input id='size' type="text" name="size"></li></li>
  
  <li><input type="button" name="submit" value="Submit"></li>  
</ul>
</form>
</div>



<span id='userInput'>

</span>

<form action=''>
        <label for='fname'>Are you ready to submit?</label>
        <input type='button' value ='Submit' id='' name='Submit' onclick="">
</form>
<span id='returnBox'></span>
</div>
</div>

<div class='col'><br><br><br><br><br><br>
<form action=''>
<ul>
  
  <li> Search Item Number : <li><input type="text" name="searchId" id='searchId'></li></li> 
  <li><input type="button" name="submit" value="Search" onclick ="searchItemById(document.getElementById('searchId').innerHTML)"></li> 

  <li> Search Item Name :  <li><input  type="text" name="searchName"></li></li>
<li><input type="button" name="submit" value="Search" onclick = 'searchItemByName("")'></li>  
</ul>
</form>
</div>


<div class='col'><span id ='searchReturn'><br><br><br><br><br><br><br>return stuff here i geuss</span>
</div>

</div>
</div>

</body>

<script>


 function searchItemByName(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("returnBox").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "searchItemByName.php?q=" + str, true);
    xmlhttp.send();
  }

  function searchItemById(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("return").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "searchItemById.php?q=" + str, true);
    xmlhttp.send();
  }


  function returnItemDetails(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("returnBox").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "returnItemDetails.php?q=" + str, true);
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
.error {color: #FF0000;}
</style>



</html>

