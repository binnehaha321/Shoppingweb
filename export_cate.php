<link rel="stylesheet" type="text/css" href="style_export.css" />
<?php
require_once 'connectDB.php';

$conn = connectDB();
?>

<!DOCTYPE html>
<html>
    <title>
        <head>Lay du lieu category tu database</head>
    </title>
<body>
    <tr>
        <th></th>
    </tr>
    <?php
        $sql= "Select * from category;";
        $result= mysqli_query($conn, $sql);
        $resultcheck=mysqli_num_rows($result);
        if ($resultcheck >0) {
            echo "<table>";      
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                        echo "<div id ='cate'>";
                        echo $row['cateName'];
                        echo "</tr>";
            }
        }
        echo "</table>";
    ?>
</body>
</html>