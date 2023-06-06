<?php
$dbserver = 'localhost';
$dbname = 'mahasiswa';
$dbuser = 'root';
$dbpassword = '';
$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try {
    $connection = new PDO($dsn, $dbuser, $dbpassword);
}catch (Exception $exception){
    die("Error: ".$exception->getMessage());
}
