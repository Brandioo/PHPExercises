<?php
include("../class/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/x-www-form-urlencoded");

$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array();
    parse_str(file_get_contents('php://input'), $data);

    $name = $data["name"];
    $email = $data["email"];
    $password = $data["password"];

    $sql = "insert into users (name,email,password) 
values ('name','email','password')";
    $res = $crud->create($sql);


    if ($res) {
        $result = array("status" => true, "message" => "User Added Succefully...");
    } else {
        $result = array("status" => false, "message" => "Something went wrong...");
    }

    echo json_encode($result);
}
