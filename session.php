<?php
session_start();

if (empty($_SESSION['logged_in'])) {
    $_SESSION['logged_in'] = false;
    $_SESSION['header_label'] = 'DEVAUR';
    $_SESSION['user_id'] = 0;
}

if (!isset($_SESSION['recent_news_comments'])) {
  // 1 is for true and 0 is for false
  $_SESSION['recent_news_comments'] = '1';
  $_SESSION['recent_uploads'] = '1';
  $_SESSION['media_files'] = '1';
  $_SESSION['dark_theme'] = '1';
}
?>