<?php
include 'Functions.php';
?>
<?=navbar('Add Menu TEST')?>

<?php
// define variables and set to empty values
$skuErr = $nameErr = $descErr = $priceErr = $sizeErr= "";
$sku = $name = $desc = $price = $size = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sku"])) {
    $skuErr = "Product SKU is required";
  } else {
    $sku = test_input($_POST["sku"]);
  }
  
  if (empty($_POST["name"])) {
    $nameErr = "Product name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
    
  if (empty($_POST["desc"])) {
    $desc = "";
  } else {
    $desc = test_input($_POST["desc"]);
  }

  if (empty($_POST["price"])) {
    $priceErr = "Product price is required";
  } else {
    $price = test_input($_POST["price"]);
  }

  if (empty($_POST["size"])) {
    $sizeErr = "Product size is required";
  } else {
    $size = test_input($_POST["size"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class='row'>
    <div class ='col'>
<div class="container">

    <h1>Item Activation Portal</h1>
    <p>This is a page to enter new items to the menu.</p>

    

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div id ='return'>
<ul>
  
<li> Product SKU: <li><input class="form-control"  readonly id='sku' type="text" name="name"></li></li>
  <br>

  <li> Product Name: <li><input class='form-control' id='name' type="text" name="name"></li></li>
 <br>

  <li>Product Description: <li><textarea class='form-control' id='desc' type="text" name="desc"></textarea></li></li>
  <br>

  <li> Product Price: <li><input class='form-control' id='price' type="text" name="price"></li></li>
  <br>

  <li> Product Size: <li><input class='form-control' id='size' type="text" name="size"></li></li>
  
  </div>
  <li><input type="submit" name="submit" value="Submit"></li>  
</ul>
</form>

<span id='userInput'>
<?php
echo "<h2>Your Input:</h2>";
echo $sku;
echo "<br>";
echo $name;
echo "<br>";
echo $desc;
echo "<br>";
echo $price;
echo "<br>";
echo $size;
echo "<br>";


$sql = "{$sku},{$name},{$desc},{$price},{$size}";
echo "<span style = 'opacity: 0;' id='sql' name=''>{$sql}</span>";
?>
</span>


<span id='userInput'>

</span>

<form action=''>
        <label for='fname'>Are you ready to submit changes?</label>
        <input type='button' value ='Submit' id='' name='Submit' onclick="updateMenuItem(document.getElementById('sql').innerHTML)">
</form>
<span id='returnBox'></span>
</div>
</div>

<div class='col'><br><br><br><br><br><br>
<form action=''>
<ul>
  
  <li> Search Item Number : </li><li><input type="text" name="searchId" id='searchId'></li> 
  <li><input type="button" name="submit" value="Search" onclick ="searchItemById(document.getElementById('searchId').value)"></li> 

  <li> Search Item Name :  </li><li><input  type="text" name="searchName" id='searchName'></li>
<li><input type="button" name="submit" value="Search" onclick = "searchItemByName(document.getElementById('searchName').value)"></li>  
</ul>
</form>
</div>


<div class='col'><br><br><br><br><br><br><br>

<div class='form-floating'>
    <select class='form-select'  id='returnList' name='returnList' onchange="returnItemDetails(this.name)">

    
<option>Nothing selected yet</option>

</select>
<label for="sel1" class="form-label">Results from Search By Name</label>

</div>
</div>

<div class='col'></div>

</div>
</div>

</body>



<script>



 function searchItemByName(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("returnList").innerHTML = this.responseText;
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


  function updateMenuItem(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("returnBox").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "updateMenuItem.php?q=" + str, true);
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

