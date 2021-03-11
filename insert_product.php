<?php
require_once 'connectDB.php';

$conn = connectDB();
if (isset($_POST['proId']) && 
    isset($_POST['proCateID'])) {
        // get data from FORM
        $controlUpdate = $_POST['controlUpdate'];
        $proId = $_POST['proId'];
        $proCateID = $_POST['proCateID'];
        $proImage = $_POST['proImage'];
        $proName = $_POST['proName'];
        $proDesc = $_POST['proDesc'];
        $proContent = $_POST['proContent'];
        $proMadeIn = $_POST['proMadeIn'];
        $proCost = $_POST['proCost'];
        $number = $_POST['number'];
        $proOrdered = $_POST['proOrdered'];
        $isshowed = 0;
        if (isset($_POST['isshowed'])) {
            $isshowed = 1;
        }
        $new_date=date('Y-m-d'); 
        if ($controlUpdate == 1) {
            $sql = "UPDATE product SET proCateID='$proCateID', proImage='$proImage', proName='$proName', proDesc='$proDesc', 
            proContent='$proContent', proMadeIn='$proMadeIn', proCost='$proCost', number='$number', proOrdered='$proOrdered', isShow=$isshowed, modifyDate='$new_date' WHERE proId=$proId";
        } else {
            $sql = "insert into product
            values('$proId', '$proCateID', '$proImage', '$proName', '$proDesc', '$proContent', '$proMadeIn', '$proCost', '$number', '$proOrdered', $isshowed, '$new_date', '$new_date')";
        }
        
        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
            header("Location:select_product.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

mysqli_close($conn);
?>