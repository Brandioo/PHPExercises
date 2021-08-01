<?php
include "conn.php";
include "config.php";


$db = Connection::open($configArray);

//variabli i queryit
$sql = "DELETE FROM cars WHERE carID = :id";

$stmt = $db->prepare($sql);


$stmt->bindparam(':id', $_GET['id'], PDO::PARAM_INT);

$stmt->execute();

header('location:arkivaMakinave.php');

?>