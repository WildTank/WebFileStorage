<?php
include_once './session.php';

if ($_SESSION['dark_theme'] !== '1') {
    echo '<style>
    * {
        color:black;
    }
    :root {
        --dark-color-second: #fafafa;
        --dark-color-third: #d9d9d9;
        --dark-color-fourth: #b7b7b7;
    }
    svg path {
        fill: black;
    }
    </style>';
}
?>