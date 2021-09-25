<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'm9ecomme_m9';
$dbPassword = '8;tHUBUk06V*';
$dbName = 'm9ecomme_m9';
//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_error){
   die("Unable to connect database: " . $db->connect_error);
}