<?php
session_start();
require_once "./includes/sessionStorage.php";

$storage = new SessionStorage('orders');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    <a  href="/" type="button" class="btn btn-primary">Home</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Full name</th>
                <th scope="col">Size</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($storage->getAll() as $key => $order):?>
            <tr>
                <th scope="row"><?php echo $key;?></th>
                <td><?php echo $order['product']?></td>
                <td><?php echo $order['firstname']." ". $order['lastname'] ?></td>
                <td><?php echo $order['size']?></td>
                <td><?php echo $order['address']?></td>
                <td><?php echo $order['city']?></td>
                <td>
                    <a href="/index.php?order_id=<?= $key ?>">Edit</a>
                    <a href="/includes/deleteProduct.php?order_id=<?php echo $key?>">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
        </table>
    </div>
    <script src="./assets/main.js"></script>
</body>
</html>