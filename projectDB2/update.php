<?php

include "header.php";
include "footer.php";


include "conn.php";
include "config.php";

$db = Connection::open($configArray);

if (isset($_GET['id'])) {


    $update = $_GET['id'];

    $sql = "SELECT * FROM cars where carID = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $update, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    require "form_update.php";

}
if (isset($_POST['id'])) {

    $sql = "
    UPDATE cars
SET firm = :firm, type = :type ,
    yearOfProduction = :yearOfProduction,
    KMDone = :KMDone,
    transmission = :transmission,
    price = :price,
    state = :state
WHERE carID = :id;
    ";

    $stmt = $db->prepare($sql);

    $stmt->bindparam(':firm', $_POST['firm'], PDO::PARAM_STR);
    $stmt->bindparam(':type', $_POST['type'], PDO::PARAM_STR);
    $stmt->bindparam(':yearOfProduction', $_POST['number'], PDO::PARAM_STR);
    $stmt->bindparam(':KMDone', $_POST['kmdone'], PDO::PARAM_INT);
    $stmt->bindparam(':transmission', $_POST['transmission'], PDO::PARAM_STR);
    $stmt->bindparam(':price', $_POST['price'], PDO::PARAM_INT);
    $stmt->bindparam(':state', $_POST['state'], PDO::PARAM_STR);
    $stmt->bindparam(':id', $_POST['id'], PDO::PARAM_INT);

    $stmt->execute();
    header("location:arkivaMakinave.php");


}
?>








