<?php
include_once '../db-conn.php';

function submit_query($connection, $query, $message) {
    if (mysqli_query($connection, $query)) {
        echo $message . '<br><br>';
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
}

$tables_query = // for user account table
'CREATE TABLE UserAccounts (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name NVARCHAR(50) UNIQUE NOT NULL,
    user_pass NVARCHAR(50) NOT NULL
);';

submit_query($conn, $tables_query, 'User accounts table successfully created.');

$admin_query = // for admin account
"INSERT INTO UserAccounts (user_name, user_pass)
VALUES ('admin', 'devaur2023');";

submit_query($conn, $admin_query, 'Admin account successfully added to user accounts table.');

mysqli_close($conn);
?>