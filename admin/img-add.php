<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                Add Img

                <a href="vlog-img.php" class="btn btn-danger float-end ">Back</a>

                </h4>
            </div>
            <div class="card-body">
                <form action="img-code.php" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" required class="form-control">
                </div>

                <div class="mb-3">
                    <label>Small Description</label>
                    <textarea rows="4" name="small_description" required class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Long Description</label>
                    <textarea rows="3"  name="long_description"  class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label>Upload Img</label>
                    <input type="file" name="image"  class="form-control">
                </div>

                <div class="mb-3">
                    <label>Status (Checked-Hidden,  un-checked-visiable)</label><br>
                    <input type="checkbox" name="status" style="width:30px; height: 30px;">
                </div>

                <div class="mb-2 text-end">
                    <button type="submit" name="addimg" class="btn btn-primary" >Save</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>











<?php include('includes/footer.php'); ?>