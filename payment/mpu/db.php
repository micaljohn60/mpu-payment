<?php
//DB details
$dbHost = '127.0.0.1';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'my_test';
//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_error){
   die("Unable to connect database: " . $db->connect_error);
}
