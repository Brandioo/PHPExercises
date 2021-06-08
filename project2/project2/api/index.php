<?php
session_start();
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once "../includes/sessionStorage.php";
$storage = new SessionStorage("orders");
$requestUri = (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

switch($requestUri){
    case "/api/orders":
        if($_SERVER["REQUEST_METHOD"] === "GET"){
            if(isset($_GET['order_id'])){
                echo json_encode($storage->get($_GET['order_id']));
                return;
            }

            echo json_encode( $storage->getAll());
        }

        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $postBody = file_get_contents('php://input');
            $parsedBody = json_decode($postBody, true);
            $orderName = "order_".uniqid();
            $storage->set($orderName, $parsedBody);
            if($storage->exists($orderName)){
                echo json_encode("Success");
                break;
            }
        }
        break;
    default:
        // echo json_encode("Nuk gjendet route");
        break;
}

