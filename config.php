<?php

$serverName ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="asfs";

$db = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$db){
	die("Connection failed: " . mysqli_connect_error());
}