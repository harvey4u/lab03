<?php

$sname= "localhost: 3308";
$unmae= "root";
$password = "";

$db_name = "ipt101";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}