<?php
$title = 'Internet Post for everyone';
ob_start();   #bao gồm các trang củ thể
include 'templates/home.html.php';
$output = ob_get_clean();       #ghi lại kquả của đầu ra
include 'templates/layout.html.php';
?>

