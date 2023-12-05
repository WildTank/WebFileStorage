<?php
include_once '../db-conn.php';

$drop_settings = "DROP TABLE UserSettings;";
submit_query($conn, $drop_settings, 'Dropped user settings table.');

$drop_news = "DROP TABLE NewsAnnouncements;";
submit_query($conn, $drop_news, 'Dropped news and announcements table.');

$drop_comments = "DROP TABLE Comments;";
submit_query($conn, $drop_comments, 'Dropped comments table.');

// placed user accounts table at last because it has foreign keys referencing it
$drop_accounts = "DROP TABLE UserAccounts;";
submit_query($conn, $drop_accounts, 'Dropped user accounts table.');
?>