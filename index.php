<?php
// Simulate a /downloads shortcut call
$_SERVER['REQUEST_URI'] = '/downloads';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';
include_once $_SERVER['DOCUMENT_ROOT'] . '/error.php';
?>
