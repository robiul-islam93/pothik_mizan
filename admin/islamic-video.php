<?php include('includes/header.php') ?>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                   Islamic Video List
                    <a href="islamic-video-add.php" class="btn btn-primary float-end">Add Islamic Video</a>
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
                    </tbody>
                    <?php

                    $videoadd = getall('islamic_video');
                    if ($videoadd) {
                        if (mysqli_num_rows($videoadd) > 0) {
                            foreach ($videoadd as $videoitem) {
                                ?>

                                <tr>
                                    <td>
                                        <?= $videoitem['id']; ?>
                                    </td>

                                    <td>
                                        <?= $videoitem['name']; ?>
                                    </td>

                                    <td>
                                        <?php

                                        if ($videoitem['status'] == 1) {
                                            echo '<span class="badge bg-danger text-white"> Hidden </span>';
                                        } else {
                                            echo '<span class="badge bg-success text-center"> Visiable </span>';
                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <a href="islamic-video-edit.php?id= <?= $videoitem['id'];?>" class="btn btn-success btn-sm">Edit</a>

                                        <a href="islamic-video-delete.php?id=<?= $videoitem['id'];?>" class="btn btn-danger btn-sm"  onclick="DeleteAlert()">Delete</a>
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
    function DeleteAlert() {
        let result = confirm("Are You Sure You Went To Data");
        document.write(result);
    }
</script>










<?php include('includes/footer.php') ?>