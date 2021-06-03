<?php require_once "../header.php";?>

<?php
require_once "../../includes/functions.php";

if(isset($_POST) && @$_POST['firstName'] !== null){

    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $shipping = $_POST['shipping'];
?>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $firstname;?></td>
      <td><?php echo $lastname;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $address;?></td>
      <td><?php echo $shipping();?></td>
    </tr>
  </tbody>
</table>
</div>




<?php }else{ ?>

    <div class="container">
        <h1 class="text-center">Nuk u gjenden te dhena</h1>
    </div>
<?php } ?>

<?php require_once "../footer.php";?>
