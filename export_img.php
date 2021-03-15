<link rel="stylesheet" type="text/css" href="style_export.css" />
<?php
require_once 'connectDB.php';

$conn = connectDB();
?>

<!DOCTYPE html>
<html>
    <title>
        <head>Lay du lieu san pham tu database</head>
    </title>
<body>
    <tr>
        <th></th>
    </tr>
    <?php
        $sql= "Select * from product";
        $result= mysqli_query($conn, $sql);
        $resultcheck=mysqli_num_rows($result);
        if ($resultcheck >0) {
            echo "<table>";
            echo "<tr>";
            $count= 0;
            while ($row = mysqli_fetch_assoc($result)) {;
                echo '<td>';
                $image='images/'.$row['proImage'];
                $proDetail = "export_detail.php?id=" . $row['proId'];
                        echo "<div id ='main'>";
                        echo "<div id = 'center'>";
                        echo"<a href='$proDetail'>";
                        echo "<img src='$image'>";
                        echo $row['proName']. "<br>";
                        echo"</a>";
                        echo $row['proCost']. "<br>";
                        echo "<form method='get' action='/payment.php'>
                            <button type='submit'>Check out</button>
                            </form>";
                        echo "</div>";
                        echo "</div>";
                     $count=$count+1;
                     echo "</td>";
                     if($count==4)
                     {
                         echo "</tr>";
                     }
            }
        }
        echo "</table>";
    ?>
</body>
</html>