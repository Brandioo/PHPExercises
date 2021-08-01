<?php
//
//include "header.php";
include "config.php";
include "conn.php";

$db = Connection::open($configArray);

if($_SERVER['REQUEST_URI'] == '/api/makina'){

    $sql = "SELECT * FROM cars";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($data);
}
//die(var_dump($_SERVER));
if(isset($_GET['id'])){


    $id = $_GET['id'];

    $sql = "SELECT * FROM cars where carID = :id";
    $stmt = $db->prepare($sql);
    die(var_dump($_SERVER));

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($data);
}


?>


