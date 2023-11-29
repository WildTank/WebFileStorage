<?php
include_once '../db-conn.php';

function submit_query($connection, $query, $message) {
    if (mysqli_query($connection, $query)) {
        echo $message . '<br><br>';
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
}

$accounts_query = // for user account table
'CREATE TABLE UserAccounts (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name NVARCHAR(50) UNIQUE NOT NULL,
    user_pass NVARCHAR(50) NOT NULL
);';
submit_query($conn, $accounts_query, 'User accounts table successfully created.');


$admin_query = // for admin and guest accounts
"INSERT INTO UserAccounts (user_name, user_pass)
VALUES
('admin', 'devaur2023'), 
('guest', 'testing123');";
submit_query($conn, $admin_query, 'Admin and guest accounts account successfully added to user accounts table.');


$settings_query = // for user settings
'CREATE TABLE UserSettings (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    recent_news_comments BOOLEAN NOT NULL,
    recent_uploads BOOLEAN NOT NULL,
    recent_media BOOLEAN NOT NULL,
    dark_theme BOOLEAN NOT NULL
);';
submit_query($conn, $settings_query, 'User settings table successfully created.');


$settings_values_query = // for default user settings
'INSERT INTO UserSettings (recent_news_comments, recent_uploads, recent_media, dark_theme)
VALUES
(true, true, true, true),
(false, false, false, false);';
submit_query($conn, $settings_values_query, 'Default account\'s settings set to default.');


mysqli_close($conn);
?>