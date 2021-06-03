<div class="container">
    <div class="card w-50 m-auto p-2">
        <form action="templates/pages/confirmation.php" method="post">
            <div class="form-group">
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstName" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname">Last name</label>
                <input type="text" id="lastname" name="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="shipping">Shipping</label>
                <select name="shipping" id="shipping" class="form-control">
                    <option value="DHL">DHL</option>
                    <option value="FEDEX">FedEx</option>
                    <option value="ADEX">Adex</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>