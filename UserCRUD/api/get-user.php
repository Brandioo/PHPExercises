<?php
include("../class/crud.php");
header("Access-Control-Allow-Origin: *");
header("Content-type:application/json");

$crud = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sql = "select * from users where id=" . $_GET['id'];
    $res = $crud->read($sql);

    $count = mysqli_num_rows($res);

    if ($count > 0) {
        $user = array();

        while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            $user[] = $row;
        }

        $result = array("status" => true, "userInfo" => $user);
    } else {
        $result = array("status" => false, "message" => 'User not found...');
    }

    echo json_encode($result);
} else {
    $error = array("status" => 405, "message" => 'Method not allowed...');

    echo json_encode($error);
}
