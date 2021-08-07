<?php

function getDB()
{
    include "conn.php";
    include "config.php";

    return Connection::open($configArray);
}

function getCars()
{
    $db = getDB();

    $sql = "SELECT * FROM cars ORDER BY carID ASC";
    $cars = $db->query($sql);

    require 'views/index.php';
}

function getCar($id)
{

    $db = getDB();

    $sql = "SELECT * FROM cars where carID = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($data) {
        require "views/form_update.php";
    } else {
        die("Nuk ekziston nje makine me kete id!");
    }

}

function deleteCar($id)
{
    $db = getDB();

    $sql = "DELETE FROM cars where carID = :id";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header('location:/');

}

function updateCars()
{
    $db = getDB();

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
    header('location:/');
}

function addCar()
{
    $db = getDB();

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
    header('location:/');
}
