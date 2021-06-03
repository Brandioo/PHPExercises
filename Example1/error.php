<?php

set_exception_handler(function (Exception $error) {
   require_once "not-found.php";
//    echo json_encode($error->getMessage());
});
throw new Exception("not-found.php");
