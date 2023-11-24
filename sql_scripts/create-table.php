<?php
include_once '../db-conn.php';

$default_query = "CREATE TABLE UserAccounts (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name NVARCHAR(50) UNIQUE NOT NULL,
    user_pass NVARCHAR(50) NOT NULL
);";
if(mysqli_query($conn, $default_query)) {
    echo "User accounts table created successfully.";
} else {
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);
?>