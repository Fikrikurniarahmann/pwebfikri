<?php
include 'connect.php';
/**
 * @var $connection PDO
*/
$statement = $connection->query("select * from mahasiswa");
$statement->setFetchMode(PDO::FETCH_ASSOC);
$result = $statement->fetchAll();
header('Content-Type: application/json');
echo json_encode($result);
