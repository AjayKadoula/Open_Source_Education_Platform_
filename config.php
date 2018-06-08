<?php
//Database Configuration
$hostname = "localhost";
$user = "root";
$passwor = "";
$database = "users-database";
$prefix = "";
//Loadmore configuarion
$resultsPerPage=5;
$bd = mysql_connect($hostname, $user, $passwor) or die("Failed to connect to database");
mysql_select_db($database, $bd) or die("Database Not Found");
?>