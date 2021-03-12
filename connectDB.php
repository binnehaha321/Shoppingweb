<?php
function connectDB() {
    $servername = "remotemysql.com";
    $username = "M65RANsqQ5";
    $password = "suJT86GIGz";
    $dbname = "M65RANsqQ5";
  
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    return $conn;
} 
?>