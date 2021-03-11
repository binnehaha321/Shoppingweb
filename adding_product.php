<?php
require_once 'connectDB.php';

$conn = connectDB();
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<?php

$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} 
$proId="";
$proCateID="";
$proImage="";
$proName="";
$proDesc="";
$proContent="";
$proMadeIn="";
$proCost="";
$number="";
$proOrdered="";
$isShow = 0;
$isUpdated = 0;
if ($id !="") {
    $sql = "select proId, proCateID, proImage, proName, proDesc, proContent, proMadeIn, proCost, number, proOrdered, isShow from product where proId = $id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $proId = $row['proId'];
        $proCateID = $row['proCateID'];
        $proImage = $row['proImage'];
        $proName = $row['proName'];
        $proDesc = $row['proDesc'];
        $proContent = $row['proContent'];
        $proMadeIn = $row['proMadeIn'];
        $proCost = $row['proCost'];
        $number = $row['number'];
        $proOrdered = $row['proOrdered'];
        $isShow = $row['isShow'];
    }
    $isUpdated = 1;
}
?>
<h2>PRODUCT FORM</h2>
<p>This is function of adminstrator to insert, edit, delete one product.</p>
<p><a href="select_product.php">Back to Product page</a></p>
<div class="container">
  <form action="insert_product.php" method="POST">
  <input type="hidden" id="controlUpdate" name="controlUpdate" value="<?php echo $isUpdated?>" />
  <div class="row">
    <div class="col-25">
      <label for="proId">Product ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="proId" name="proId" value="<?php echo $proId?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="product id...(int)">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proCateID">Product Cate ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="proCateID" name="proCateID" value="<?php echo $proCateID?>" placeholder="product cate id...(int)">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="proImage">Product Image</label>
    </div>
    <div class="col-75">
      <input type="file" id="proImage" name="proImage" value="<?php echo $proImage?>" placeholder="product image...">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="proName">Product Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="proName" name="proName" value="<?php echo $proName?>" placeholder="product name...(varchar)">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="proDesc">Product Desc</label>
    </div>
    <div class="col-75">
      <input type="text" id="proDesc" name="proDesc" value="<?php echo $proDesc?>" placeholder="product desc...(varchar)">
    </div>
  </div>

    <div class="row">
    <div class="col-25">
      <label for="proContent">Product Content</label>
    </div>
    <div class="col-75">
      <input type="text" id="proContent" name="proContent" value="<?php echo $proContent?>" placeholder="product content...(text)">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="proMadeIn">Product Made In</label>
    </div>
    <div class="col-75">
      <input type="text" id="proMadeIn" name="proMadeIn" value="<?php echo $proMadeIn?>" placeholder="product made in...(varchar)">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="proCost">Product Cost</label>
    </div>
    <div class="col-75">
      <input type="text" id="proCost" name="proCost" value="<?php echo $proCost?>" placeholder="product cost...(int)">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="number">Number</label>
    </div>
    <div class="col-75">
      <input type="text" id="number" name="number" value="<?php echo $number?>" placeholder="number...(int)">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="proOrdered">ProOrdered</label>
    </div>
    <div class="col-75">
      <input type="text" id="proOrdered" name="proOrdered" value="<?php echo $proOrdered?>" placeholder="product order...(int)">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="lname">Is showed?</label>
    </div>
    <div class="col-75">
      <input type="checkbox" id="isshowed" name="isshowed" <?php if ($isShow == 1) echo "checked";?> />
    </div>
  </div>
  
  <div class="row">
    <input type="submit" value="Submit" />
  </div>
  </form>
</div>

</body>
</html>
