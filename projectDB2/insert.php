<?php
//var_dump($_POST['firm']);
//var_dump($_POST['type']);
//var_dump($_POST['number']);
//var_dump($_POST['kmdone']);
//var_dump($_POST['transmission']);
//var_dump($_POST['price']);
//var_dump($_POST['state']);
include "config.php";
include "conn.php";

$db = Connection::open($configArray);

//variabli i queryit
$sql = "INSERT INTO cars (firm, type, yearOfProduction, KMDone, transmission, price, state) 
VALUES(:firm,:type,:yearOfProduction,:KMDone,:transmission,:price,:state)";

$stmt = $db->prepare($sql);

$stmt->bindparam(':firm', $_POST['firm'], PDO::PARAM_STR);
$stmt->bindparam(':type', $_POST['type'], PDO::PARAM_STR);
$stmt->bindparam(':yearOfProduction', $_POST['number'], PDO::PARAM_STR);
$stmt->bindparam(':KMDone', $_POST['kmdone'], PDO::PARAM_INT);
$stmt->bindparam(':transmission', $_POST['transmission'], PDO::PARAM_STR);
$stmt->bindparam(':price', $_POST['price'], PDO::PARAM_INT);
$stmt->bindparam(':state', $_POST['state'], PDO::PARAM_STR);

$stmt->execute();
header('location:arkivaMakinave.php');

?>


