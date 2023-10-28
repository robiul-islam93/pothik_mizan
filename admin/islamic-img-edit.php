<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                Update Img

                <a href="islamic_img.php" class="btn btn-danger float-end ">Back</a>

                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>

                <form action="islamic_img-code.php" method="POST" enctype="multipart/form-data">

                <?php
                // url id get this function start

               $imgupdate = paramnId('id');
               if(!is_numeric($imgupdate)){
                echo '<h5>'. $imgupdate . '</h5>';
                return false;
               }

                // url id get this function end

                // database table and url id get this function  start

               $imageupdate = getById('islamic_picture', $imgupdate);

               if($imageupdate['status']){
                if($imageupdate['status']==200){

                
                // database table and url id get this function  end
                 ?>

                 <input type="hidden" name="imgId" value="<?= $imageupdate['data']['id']?>">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="<?= $imageupdate['data'] ['name'] ?>" required class="form-control">
                </div>

                <div class="mb-3">
                    <label>Small Description</label>
                    <textarea name="small_description" required class="form-control" rows="3"><?=$imageupdate['data'] ['small_description'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Upload Img</label>
                    <input type="file" name="image"  class="form-control">
                    <img src="<?= '../' .$imageupdate['data']['image'] ?>" style="width: 70px; height: 70px;" alt="image">
                </div>

                <div class="mb-3">
                    <label>Status (Checked-Hidden,  un-checked-visiable)</label><br>
                    <input type="checkbox" name="status" <?=  $imageupdate['data'] ['status'] == 1 ? 'checked' : ''?> style="width:30px; height: 30px;">
                </div>

                <div class="mb-2 text-end">
                    <button type="submit" name="islamic_Update_img" class="btn btn-primary" >Update Image</button>
                </div>

                </form>
                <?php

            }else{
               echo '<h5>'. $imgupdate.'</h5>';
            }
            }else{
               echo "<h5> Something Went To Wrong </h5>";
            }
                ?>
            </div>
        </div>
    </div>
</div>











<?php include('includes/footer.php'); ?>