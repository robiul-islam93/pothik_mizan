<?php include('includes/header.php') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    User List
                    <a href="user-creat.php" class="btn btn-primary float-end">Add User</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage(); ?>
                <table class="table table-bordered table-striped">
                    <thead>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Gmail</th>
                        <th>Role</th>
                        <th>Is_ban</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        <?php

                        $users = getall('users_information');

                        if (mysqli_num_rows($users) > 0) {
                            foreach ($users as $usersItem) {
                                ?>

                                    <tr>
                                        <td><?= $usersItem['id']; ?></td>
                                        <td><?= $usersItem['name']; ?></td>
                                        <td><?= $usersItem['gmail']; ?></td>
                                        <td><?= $usersItem['role']; ?></td>
                                        <td><?= $usersItem['is_ban']== 1 ? 'Banned':'Active'; ?></td>

                                        <td>
                                        <a href="user-edit.php?id=<?=$usersItem['id']?>" class="btn btn-success btn-sm">Edit</a>

                                        <a href="user-delete.php?id=<?=$usersItem['id']?>" class="btn btn-danger btn-sm mx-2"
                                        onclick="aleart()">Delete</a>

                                        </td>
                                    </tr>


                                <?php
                            }
                        }else{
                            ?>
                            <tr>
                                <td colspan="6">No Record Found</td>
                            </tr>
                            <?php
                        }




                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function aleart(){
        let result =confirm("Are You Sure You Want To Delete This Data");
        document.write(result);
    }
</script>

<?php include('includes/footer.php') ?>