<?php include_once "./templates/header.php";?>

<?php
$action = $_GET['action'] ?? "home";

if(isset($action) && file_exists("./templates/pages/{$action}.php")){
    include_once "./templates/pages/{$action}.php";
}else{
    include_once "./templates/pages/not-found.php";
}
?>

<?php include_once "./templates/footer.php"; ?>