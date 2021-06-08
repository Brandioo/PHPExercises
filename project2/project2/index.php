<?php
session_start();
require_once "./includes/sessionStorage.php";
$storage = new SessionStorage('orders');
$order_id = null;
$order = [
    'product' => '',
    'firstname' =>'',
    'lastname' => '',
    'size' => '',
    'address' =>'',
    'city' => ''
];
if(isset($_GET['order_id'])){
    $order_id = trim($_GET['order_id']);
    $order = $storage->get($order_id);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="mt-4">
        <?php if(isset($error)):?>
            <div class="alert alert-danger">
                <?php echo $error->getMessage();?>
            </div>
        <?php endif;?>

            <form method="post" action="/includes/createProduct.php">
            <input type="hidden" name="order_id" value="<?= $order_id?>">
                <div class="mb-3">
                    <label for="product" class="form-label">Product</label>
                    <select name="product" id="product" class="form-control">
                        <option <?= $order['product'] === '' ? 'selected': ''?> value="">Choose product</option>
                        <option <?= $order['product'] === 'T Shirt' ? 'selected':''?> value="T Shirt">T Shirt</option>
                        <option <?= $order['product'] === 'Shoes' ? 'selected':''?> value="Shoes">Shoes</option>
                        <option <?= $order['product'] === 'Jacket' ? 'selected':''?> value="Jacket">Jacket</option>
                        <option <?= $order['product'] === 'SweatShirt' ? 'selected':''?> value="SweatShirt">SweatShirt</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label">First name</label>
                    <input type="text" value="<?php echo $order['firstname']?>" name="firstname" class="form-control" id="firstname">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last name</label>
                    <input type="text" value="<?php echo $order['lastname']?>" name="lastname" class="form-control" id="lastname">
                </div>
                <div class="mb-3">
                    <label for="size" class="form-label">Size</label>
                    <input type="text" value="<?php echo $order['size']?>" name="size" class="form-control" id="size">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Str Address</label>
                    <input type="text" value="<?php echo $order['address']?>" name="address" class="form-control" id="address">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" value="<?php echo $order['city']?>" name="city" class="form-control" id="city">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>