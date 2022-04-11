<?php 

session_start();
date_default_timezone_set('Asia/Kolkata');

$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "test_php2";

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "Connection Failed: " . mysqli_connect_error();
}


?>