<?php include('header.php');?>
<link rel="stylesheet" type="text/css" href="style_export.css" />
    <?php
    require_once 'connectDB.php';
    $conn = connectDB();
        $id=$_GET['id'];
        $query="select * from product where proId=$id";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);
        $linkimage="images/".$row['proImage'];
    echo "<table style='margin-left:600px; margin-top:50px'>";
        echo "<tr>";
            echo "<td width='250px' align='center' >";
                echo "<img src='$linkimage' width='auto' >";
            echo "</td>";
            echo "<td valign='top' >";
                    echo $row['proName'];
                echo "</a>";
                echo "<br>";
                echo "<br>";
                echo $row['proCost'];
                echo "<br>";
                echo "<br>";
                echo $row['proContent'];
            echo "</td>";
        echo "</tr>";
    echo "</table>";
    ?>
<?php include('footer.php');?>