
<div class="container w-50 m-auto">
<div class="card p-4">
<!-- TODO -->
<?php
    if(isset($_SESSION['error'])){?>
    <div class="alert alert-danger" role="alert">
        <?php  echo $_SESSION['error'];?>
    </div>

   <?php } ?>
    <form method="post" action="/includes/auth.php">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label for="password">Passowrd</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
</div>