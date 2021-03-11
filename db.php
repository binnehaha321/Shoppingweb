
<?php
/*
$host = "ec2-34-201-248-246.compute-1.amazonaws.com";
$db = "d42h9056e35279";
$port = "5432";
$user = "rponamderkkkmc";
$pass = "105ab42d7801e58387e0c25b8415c697368496699430053faf5d1519a028106c";
$ssl = "require";

$link = pg_connect("dbname=$db host=$host port=$port user=$user password=$pass sslmode=$ssl");

if (!$link) {
    echo "Database connection failed.";
} else {
     echo "Database connection success.";
     $id = $_REQUEST["proID"];
     $name = $_REQUEST["proName"];
     $cost = $_REQUEST["proCost"];
     $img = $_REQUEST["proImg"];
     $desc = $_REQUEST["proDesc"];
}
    echo $id;
    echo $name;
    echo $cost;
    echo $img;
    echo $desc;


?>
*/

$sql= "Select * from Product";
$result= mysqli_query($link, $sql);
$resultcheck=mysqli_num_rows($result);
if ($resultcheck >0) {
    echo "<table>";
    echo "<tr>";
    $count= 0;
    while ($row = mysqli_fetch_assoc($result)) {; //vong lap
        echo '<td>';
        $image='picture/'.$row['proImg'];
                echo "<div id ='main'>";
                echo "<div id = 'center'>";
                echo"<a href='$proDetail'>";
                echo "<img src='$image'>";
                echo $row['proName']. "<br>";
                echo"</a>";
                echo $row['proCost']. "<br>";
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