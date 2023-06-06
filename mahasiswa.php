<?php
include 'connect.php';
/**
 * @var $connection PDO

*/

$cari = $_GET['nama'];

$statement = $connection->query("select * from mahasiswa WHERE nama='$cari'");
$statement->setFetchMode(PDO::FETCH_ASSOC);
$result = $statement->fetchAll();
header('Content-Type: application/json');
if ($result) {
	echo json_encode($result);
}else{
	echo "Gada";
}