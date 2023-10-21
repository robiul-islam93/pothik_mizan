<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                Update Video

                <a href="travel-blog-video.php" class="btn btn-danger float-end ">Back</a>

                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>

                <form action="travel-bloge-code.php" method="POST" enctype="multipart/form-data">

                <?php
                // url id get this function start

               $videoupdate = paramnId('id');
               if(!is_numeric($videoupdate)){
                echo '<h5>'. $videoupdate . '</h5>';
                return false;
               }

                // url id get this function end

                // database table and url id get this function  start

               $trave_video_update = getById('travel_vloge_video', $videoupdate);

               if($trave_video_update['status']){
                if($trave_video_update['status']==200){

                
                // database table and url id get this function  end
                 ?>

                 <input type="hidden" name="videoId" value="<?= $trave_video_update['data']['id']?>">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="<?= $trave_video_update['data'] ['name'] ?>" required class="form-control">
                </div>

                <div class="mb-3">
                    <label>Small Description</label>
                    <textarea name="small_description" required class="form-control" rows="3"><?=$trave_video_update['data'] ['small_description'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Upload Img</label>
                    <input type="file" name="video"  class="form-control">
                  <video src="<?= '../' .$trave_video_update['data']['video'] ?>"style="width: 70px; height: 70px;"></video>
                </div>

                <div class="mb-3">
                    <label>Status (Checked-Hidden,  un-checked-visiable)</label><br>
                    <input type="checkbox" name="status" <?=  $trave_video_update['data'] ['status'] == 1 ? 'checked' : ''?> style="width:30px; height: 30px;">
                </div>

                <div class="mb-2 text-end">
                    <button type="submit" name="Travel_Update_Video" class="btn btn-primary" >Update Video</button>
                </div>

                </form>
                <?php

            }else{
               echo '<h5>'. $videoupdate.'</h5>';
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