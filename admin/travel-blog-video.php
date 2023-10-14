<?php include('includes/header.php') ?>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Image
                    <a href="travel-video-add.php" class="btn btn-primary float-end">Add Img</a>
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