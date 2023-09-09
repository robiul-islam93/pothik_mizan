<?php include('includes/header.php')   ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add User
                    <a href="users.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
          
            <div class="card-body">
            <?= alertMessage();?>
                <form action="users.code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" required name="name" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="text" required name="number" class="form-control">
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Gmail</label>
                                <input type="gmail" required name="gmail" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" required name="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Role</label>
                               <select name="role" class="form-control">
                                <option value="">Select Role</option>
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                               </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                                <label>Is Ban</label><br>
                                <input type="checkbox" name="is_ban" style="width:30px; height:30px">
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                <!-- <br /> -->
                                <button type="submit" name="saveUser" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php')   ?>