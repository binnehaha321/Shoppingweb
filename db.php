
<?php

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
    $sql4 = 'INSERT INTO public."Product" (
        "proID","proName","proCost","proImg","proDesc") VALUES ('."
        '$id'::character varying,'$name'::character varying,'$cost'::integer,'$img'::character varying,'$desc'::character varying)".
         'returning "id"';


if(pg_query($link, $sql4)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . pg_error($link);
}

// Close connection
pg_close($link);

?>