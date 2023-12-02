<?php include('includes/header.php') ?>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Animation Image
                    <a href="animation_img-add.php" class="btn btn-primary float-end">Add Animation Img</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>
                <table class="table table-border table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th> Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php

                    $imgadd = getall('animation_picture');
                    if ($imgadd) {
                        if (mysqli_num_rows($imgadd) > 0) {
                            foreach ($imgadd as $imgitem) {
                                ?>

                                <tr>
                                    <td>
                                        <?= $imgitem['id']; ?>
                                    </td>

                                    <td>
                                        <?= $imgitem['name']; ?>
                                    </td>

                                    <td>
                                        <?php

                                        if ($imgitem['status'] == 1) {
                                            echo '<span class="badge bg-danger text-white"> Hidden </span>';
                                        } else {
                                            echo '<span class="badge bg-success text-center"> Visiable </span>';
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <a href="animation-img-edit.php?id= <?= $imgitem['id'];?>" class="btn btn-success btn-sm">Edit</a>

                                        <a href="animation-img-delete.php?id= <?= $imgitem['id']?>" class="btn btn-danger btn-sm"  onclick="DeleteAlert()">Delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    }


                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<script>
    function DeleteAlert(){
        let result = confirm("Are You Sure You Went To Data");
        document.write(result);
    }
</script>










<?php include('includes/footer.php') ?>