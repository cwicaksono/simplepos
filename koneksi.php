<?php
session_start();

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'pos';

$db = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>