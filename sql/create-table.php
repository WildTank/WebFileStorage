<?php
include_once '../db-conn.php';

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
    user_id INT PRIMARY KEY,
    recent_news_comments BOOLEAN NOT NULL,
    recent_uploads BOOLEAN NOT NULL,
    media_files BOOLEAN NOT NULL,
    dark_theme BOOLEAN NOT NULL,
    FOREIGN KEY (user_id) REFERENCES UserAccounts(user_id)
);';
submit_query($conn, $settings_query, 'User settings table successfully created.');


$settings_values_query = // for default user settings
'INSERT INTO UserSettings (user_id, recent_news_comments, recent_uploads, media_files, dark_theme)
VALUES
(1, true, true, true, true),
(2, false, false, false, false);';
submit_query($conn, $settings_values_query, 'Default account\'s settings set to default.');


$news_query = // for news announcements table
'CREATE TABLE NewsAnnouncements (
    issue_number INT PRIMARY KEY AUTO_INCREMENT,
    details TEXT NOT NULL
);';
submit_query($conn, $news_query, 'Successfully added news and announcements table.');


$news_article_query = // for default news article
'INSERT INTO NewsAnnouncements (details)
VALUES
("~ This news is for testing and acts as a dummy article<br><br>~ Second portion of dummy news article :D"),
("~ Newly created the website as a way to store both independent and dependent codes");';
submit_query($conn, $news_article_query, 'Default news articles added.');


$comments_query = // for comments table
'CREATE TABLE Comments (
    comment_number INT PRIMARY KEY AUTO_INCREMENT,
    commenter_id INT NOT NULL,
    comment_text TEXT NOT NULL,
    FOREIGN KEY (commenter_id) REFERENCES UserAccounts(user_id)
);';
submit_query($conn, $comments_query, 'Successfully created comments table.');


$dummy_comments_query = // for dummy comments
'INSERT INTO Comments (commenter_id, comment_text)
VALUES
(1, "I am... admin..."),
(2, "And I am guest."),
(1, "Ok"),
(2, "Bye");';
submit_query($conn, $dummy_comments_query, 'Created dummy comments.');


mysqli_close($conn);
?>