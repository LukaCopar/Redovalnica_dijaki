<?php

$server = 'localhost';
$user = 'luka';
$pass = 'copar123';
$db_name = 'projekt2';

$link = mysqli_connect($server, $user, $pass, $db_name);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($link, "SET NAMES 'utf8'");
$salt = 'dglkn349346$%dfh';
?>