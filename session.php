<?php
session_start();

if (empty($_SESSION['logged_in'])) {
    $_SESSION['logged_in'] = false;
    $_SESSION['header_label'] = 'DEVAUR';
    $_SESSION['user_id'] = 0;
}
?>