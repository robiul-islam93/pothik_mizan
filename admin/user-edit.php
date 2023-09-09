<?php include('includes/header.php')?>

<div class="row">

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>
                Update User
                <a href="users.php" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>

        <div class="card-body">
            <?=  alertMessage()?>
            <form action="users.code.php" method="POST">
            <?php

                $paramResult = paramnId('id');
                if(!is_numeric($paramResult)){
                    '<h5>'.$paramResult. '</h5>';
                    return false;
                }

                $user = getById('users_information', paramnId('id'));
                if($user['status'] == 200){
                
            ?>
            
            <input type="hidden" name="userId" value="<?= $user ['data']['id']?>" required >
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" required name="name" value="<?= $user ['data']['name']?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Gmail</label>
                        <input type="gmail" required name="gmail" value="<?= $user ['data']['gmail']?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="password" required name="password" value="<?= $user ['data']['password']?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Role</label>
                       <select name="role" class="form-control">
                        <option value="">Select Role</option>
                        <option value="admin" <?= $user ['data']['role'] == 'admin' ? 'selected': '';?>>Admin</option>
                        <option value="user" <?= $user ['data']['role'] == 'user' ? 'selected': '';?>>user</option>
                       </select>
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="mb-3">
                                <label>Is Ban</label><br>
                                <input type="checkbox" name="is_ban" <?= $user['data']['is_ban'] == true ? 'checked':'';?>  style="width:30px; height:30px">

                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                <!-- <br /> -->
                                <button type="submit" name="updateuser" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
            </div>

                    <?php

                }else{
                    '<h5>' .$user['message']. '</h5>';
                }

                     ?>

            </form>
        </div>
    </div>
</div>


</div>







<?php include('includes/footer.php')?>