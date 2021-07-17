<?php

//include "header.php";

//?>
    <!--<style>-->
    <!--    /*.shkrimKuq {*/-->
    <!--    /*    color: #f00;*/-->
    <!--    /*}*/-->
    <!--</style>-->
    <!---->
    <!--<div class="container" style="background-color: #f00">-->
    <!--    <span class="shkrimKuq">Shkrimi i kuq</span>-->
    <!--</div>-->


<?php

include "header.php";

//variabli i queryit
$sql = "SELECT * FROM user";

$stmt = $pdo->prepare($sql);
$stmt->execute();

//krijimi i arrayt me rezultate
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

    <table style="width:100%" border="1px">
        <tr>
            <!--            <th>ID</th>-->
            <th>NAME</th>
            <th>Email</th>
            <th>Address</th>
            <th>Age</th>
            <th>Phone Number</th>
        </tr>
        <tr>
            <?php
            foreach ($result

            as $row){
            ?>
            <!--            <td>--><?php //echo $row['id']
            ?><!--</td>-->
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['phoneNumber'] ?></td>
        </tr>
        <?php } ?>
    </table>

<?php
include "footer.php";
