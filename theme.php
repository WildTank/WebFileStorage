<?php
include_once './session.php';

if ($_SESSION['dark_theme'] !== '1') {
    echo '<style>
    * {
        color:black;
    }
    :root {
        --dark-color-second: #fafafa;
        --dark-color-third: #e9e9e9;
        --dark-color-fourth: #d7d7d7;
    }
    svg path {
        fill: black;
    }
    </style>';
}
?>