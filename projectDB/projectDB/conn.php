<?php

$host = 'localhost';
$db = "coursesql"; //database
$user = "root"; //user of the database
$pass = "";  //password of the database

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try{
    $pdo = new PDO($dsn, $user, $pass);
    if($pdo){
        echo "Lidhja me databazen $db ishte e sukseshme";
    }
    
}catch (PDOException $e){
    echo $e->getMessage();
}

?>
