<?php
$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "test";

$conn = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);
if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>