
<?php

$host = "ec2-34-201-248-246.compute-1.amazonaws.com";
$db = "d42h9056e35279";
$port = "5432";
$user = "rponamderkkkmc";
$pass = "105ab42d7801e58387e0c25b8415c697368496699430053faf5d1519a028106c";
$ssl = "require";
/*
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


?>
*/
$result = pg_query($db,"SELECT * FROM Product");
echo "<table>";while($row=pg_fetch_assoc($result)){echo "<tr>";
echo "<td align='center' width='200'>" . $row['proID'] . "</td>";
echo "<td align='center' width='200'>" . $row['proName'] . "</td>";
echo "<td align='center' width='100'>" . $row['proCost'] . "</td>";
echo "<td align='center' width='100'>" . $row['proImg'] . "</td>";
echo "<td align='center' width='100'>" . $row['proDesc'] . "</td>";
echo "</tr>";}
echo "</table>";?>