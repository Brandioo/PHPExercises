<?php
include("../class/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-type:application/json");

$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array();
    parse_str(file_get_contents('php://input'), $data);

    $name = $data["name"];
    $email = $data["email"];
    $password = $data["password"];

    $sql = "update users set name = '$name' , email = '$email', password = '$password' where id=" . $_GET['id'];
    $res = $crud->update($sql);


    if ($res) {
        $result = array("status" => true, "message" => "User Updated Succefully...");
    } else {
        $result = array("status" => false, "message" => "Something went wrong...");
    }

    echo json_encode($result);
}
else
{
    $error = array("status" => 405 , "message" => 'Method not allowed...');

    echo json_encode($error);
}