<?php
$clientsStorage = new SessionStorage("clients");

?>
<div class="container">
    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php if(count($clientsStorage->getAll()) > 0):?>
                <?php foreach($clientsStorage->getAll() as $key => $clients): ?>
                    <tr>
                        <th scope="row"><?php echo $key;?></th>
                        <td><?php echo $clients['firstname'];?></td>
                        <td><?php echo $clients['lastname'];?></td>
                        <td><?php echo $clients['email'];?></td>
                        <td><a href="includes/deleteClient.php?key=client_<?php echo $clients['firstname']?>">DELETE</a></td>
                    </tr>
                <?php endforeach; ?>
                <?php else:?>
                <tr>
                    <td colspan="4" class="text-center">NO CLIENTS</td>
                </tr>
                <?php endif;?>
            </tbody>
        </table>
    </div>
</div>