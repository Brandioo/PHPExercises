<?php
$update = $_GET['id'];

echo $update;

include "conn.php";

$database = new Connection();
$db = $database->open();

$sql = "SELECT * FROM cars where carID = :id";
$stmt = $db->prepare($sql);

$stmt->bindParam(':id',$update,PDO::PARAM_INT);

$stmt->fetch();
?>

<div class="modal-body">
    <form action="update.php" method="POST">
        Firm: <input class="form-control" type="text" name="firm"/>
        Type: <input class="form-control" type="text" name="type"/>
        Year of Production: <input class="form-control" type="number" name="number"/>
        KM-Done: <input class="form-control" type="number" name="kmdone"/>
        Transmission: <input class="form-control" type="text" name="transmission"/>
        Price: <input class="form-control" type="number" name="price"/>
        State: <input class="form-control" type="text" name="state"/>
    </form>
</div>

