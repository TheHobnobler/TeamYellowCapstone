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

<div class="container">
    <h1>Item Activation Portal</h1>
    <p>This is a page to enter new items to the menu.</p>



<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<ul>
  
  <li> Product Name: <li><input type="text" name="name"></li></li>
  <li><span class="error">* <?php echo $nameErr;?></span></li>
  <br>

  <li>Product Description: <li><input type="text" name="desc"></li></li>
  <li><span class="error"><?php echo $descErr;?></span></li>
  <br>

  <li> Product Price: <li><input type="text" name="price"></li></li>
  <li><span class="error">* <?php echo $priceErr;?></span></li>
  <br>

  <li> Product Size: <li><input type="text" name="size"></li></li>
  <li><span class="error">* <?php echo $sizeErr;?></span></li>
  

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


$sql = "{$name}', '{$desc}', '{$price}', '{$size}";
echo "<span style = 'display: none;' id='sql' name=''>{$sql}</span>";
?>
</span>

<form action=''>
        <label for='fname'>Are you ready to submit?</label>
        <input type='button' value ='Submit' id='' name='Submit' onclick="addMenuItemToDatabase(document.getElementById('sql').innerHTML))">
</form>
<span id='returnBox'></span>
</div>

</body>

<script>


 function addMenuItemToDatabase(str) {
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
.error {color: #FF0000;}
</style>



</html>


