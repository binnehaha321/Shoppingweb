<?php
require_once 'connectDB.php';

$conn = connectDB();

$sql = "select proId, proCateID, proImage, proName, proDesc, proContent, proMadeIn, proCost, number, proOrdered, modifyDate from product";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Product FORM </h2>
<p>This is function of adminstrator to insert, edit, delete one product.</p>
<p><a href="adding_product.php"> New Product</a></p>
<table style="width:100%" border = "1">
  <tr>
    <th>Product ID</th>
    <th>Product Cate ID</th> 
    <th>Product Image</th>
    <th>Product Name</th>
    <th>Product Desc</th> 
    <th>Product Content</th>
    <th>Product Made In</th> 
    <th>Product Cost</th>
    <th>Number</th>
    <th>Product Ordered</th>
    <th>ModifyDate</th>
    <th></th>
    <th></th>
  </tr>

<?php if (mysqli_num_rows($result) > 0) { 
  
    while($row = mysqli_fetch_assoc($result)) {error_reporting(0)
        ?>
        <tr> 
            <td><?php echo $row['proId']?></td> 
            <td><?php echo $row['proCateID']?></td>
            <td><?php echo $row['proImage']?> </td> 
            <td><?php echo $row['proName']?></td>
            <td><?php echo $row['proDesc']?> </td> 
            <td><?php echo $row['proContent']?></td>
            <td><?php echo $row['proMadeIn']?> </td> 
            <td><?php echo $row['proCost']?></td>
            <td><?php echo $row['number']?> </td> 
            <td><?php echo $row['proOrdered']?></td>
            <td><?php echo $row['modifyDate']?></td>
            <td><a href="delete_product.php?id=<?php echo $row['proId']?>">Delete</a></td>
            <td><a href="adding_product.php?id=<?php echo $row['proId']?>">Edit</a></td>
        </tr>
    <?php }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</body>
</html>