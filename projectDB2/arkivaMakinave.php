<?php

include "header.php";
include "footer.php";

$database = new Connection();
$db = $database->open();

?>

<div class="container">
    <div class="row">
        <div style="text-align: right; margin: 10px;">
            <button type="button" class="btn btn-primary text-left" data-toggle="modal" data-target="#addModal">
                Shto Makine
            </button>
        </div>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th class="table-header">CAR ID</th>
                <th class="table-header">Firm</th>
                <th class="table-header">Type</th>
                <th class="table-header">Year Of Production</th>
                <th class="table-header">KM Done</th>
                <th class="table-header">Transmission</th>
                <th class="table-header">Price</th>
                <th class="table-header">State</th>
            </tr>
            </thead>
            <tbody id="table-body">
            <?php
            try {
                $sql = "SELECT * FROM cars ORDER BY carID DESC";
                foreach ($db->query($sql) as $row) {
                    ?>
                    <tr class="table-row">
                        <td><?php echo $row['carID'] ?></td>
                        <td><?php echo $row['firm'] ?></td>
                        <td><?php echo $row['type'] ?></td>
                        <td><?php echo $row['yearOfProduction'] ?></td>
                        <td><?php echo $row['KMDone'] ?></td>
                        <td><?php echo $row['transmission'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['state'] ?></td>
                    </tr>
                <?php }
            } catch (PDOException $exception) {
                echo "Problem In Connection...Please Try Again Later" . $exception->getMessage();
                $database->close();
            } ?>
            </tbody>
        </table>
    </div>

    <!--    Modali i insertit-->

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="insert.php">
                        Firm: <input class="form-control" type="text" name="firm"/>
                        Type: <input class="form-control" type="text" name="type"/>
                        Year of Production: <input class="form-control" type="number" name="number"/>
                        KM-Done: <input class="form-control" type="number" name="kmdone"/>
                        Transmission: <input class="form-control" type="text" name="transmission"/>
                        Price: <input class="form-control" type="number" name="price"/>
                        State: <input class="form-control" type="text" name="state"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="add_record" class="btn btn-primary">Shto Makine</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>