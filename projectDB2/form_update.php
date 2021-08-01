<div class="" id="" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="POST">
                     <input class="form-control" type="text" name="id" hidden readonly value="<?= $data['carID'] ?>"/>

                    Firm: <input class="form-control" type="text" name="firm" value="<?= $data['firm'] ?>"/>
                    Type: <input class=" form-control" type="text" name="type" value="<?= $data['type'] ?>"/>
                    Year of Production: <input class="form-control" type="number" name="number"
                                               value="<?= $data['yearOfProduction'] ?>"/>
                    KM-Done: <input class="form-control" type="number" name="kmdone" value="<?= $data['KMDone'] ?>"/>
                    Transmission: <input class="form-control" type="text" name="transmission"
                                         value="<?= $data['transmission'] ?>"/>
                    Price: <input class="form-control" type="number" name="price" value="<?= $data['price'] ?>"/>
                    State: <input class="form-control" type="text" name="state" value="<?= $data['state'] ?>"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="add_record" class="btn btn-primary">Shto Makine</button>
                </form>
            </div>
        </div>
    </div>
</div>