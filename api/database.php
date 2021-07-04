<?php
$servername = "localhost";
$username = "iimmbang_mvst_in";
$password = "r^KTva#9B=EK";
$dbname = "iimmbang_mvst_in";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

date_default_timezone_set("Asia/Kolkata"); 
//$conn->close();
?>