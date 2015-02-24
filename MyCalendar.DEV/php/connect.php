<?php

// Make a MySQL Connection
$host="127.0.0.1";
$user="my_user";
$password="password";
$db = "php_calendar";

$link = mysqli_connect($host, $user, $password);
mysqli_select_db($link, $db) or die(mysql_error());

?>
