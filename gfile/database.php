<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'Hai_db';

$koneksi = mysql_connect($hostname, $username, $password, $database) or die("Error connecting to database.");
mysql_select_db($database) or die("Database not availabe.");

?>