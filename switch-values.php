<?php
include_once './db-conn.php';
include_once './session.php';

$reversed_value = $_SESSION[$_POST['switch']] === '1' ? '0' : '1';
if (isset($_POST['value']) && isset($_POST['switch']) && $_SESSION['user_id'] !== 0) {
    echo 'Reversed: ' . $reversed_value;
    $query = 'UPDATE UserSettings SET ' . $_POST['switch'] . '=' . $reversed_value . " WHERE user_id=" . $_SESSION['user_id'];
    submit_query($conn, $query, '');
} else {
    echo 'Not logged in or: Switch value and/or switch class is missing.';
}
echo ', Current Switch: ' . $_POST['switch'];
echo ', Past Value: ' . $_SESSION[$_POST['switch']];
echo ', Reversed Value: ' . $reversed_value;
$_SESSION[$_POST['switch']] = $reversed_value;
echo ', New Session Value: ' . $_SESSION[$_POST['switch']];
?>