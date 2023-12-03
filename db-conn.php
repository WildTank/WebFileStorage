<?php
$db_server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "test";

$conn = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);
if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

function submit_query($connection, $query, $message) {
    if (mysqli_query($connection, $query)) {
        if ($message !== '') {
            echo $message . '<br><br>';
        }
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
}
?>