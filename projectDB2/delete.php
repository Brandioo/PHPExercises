<?php
include "conn.php";

$database = new Connection();

$db = $database->open();

//variabli i queryit
$sql = "DELETE FROM cars WHERE carID = :id";

$stmt = $db->prepare($sql);


$stmt->bindparam(':id', $_GET['id'], PDO::PARAM_INT);

$stmt->execute();

header('location:arkivaMakinave.php');

?>