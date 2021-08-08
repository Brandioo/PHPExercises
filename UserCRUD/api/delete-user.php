<?php
include("../class/crud.php");
header("Access-Control-Allow-Origin: *"); //Open Request
header("Content-type:application/json");

$crud = new Crud();

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    $sql = "delete from users where id=" . $_GET['id'];
    $res = $crud->deletes($sql);

    if ($res) {
        $result = array("status" => true, "message" => "User deleted Succefully...");
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