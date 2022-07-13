<?php

    $username = dkzhen19; 
$password = Bandulan113; 
$host = "db4free.net:3306"; 
$dbname = gamestore_native; 

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

try 
{ 
    $registrasi = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); 
} 
catch(PDOException $ex) 
{ 
    die("Failed to connect to the database: " . $ex->getMessage()); 
} 
?>
