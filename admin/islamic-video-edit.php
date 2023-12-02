<?php include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
               Islamic Video Update
                <a href="islamic-video.php" class="btn btn-danger float-end ">Back</a>

                </h4>
            </div>
            <div class="card-body">
                <?= alertMessage() ?>

                <form action="islamic-video-code.php" method="POST" enctype="multipart/form-data">

                <?php
                // url id get this function start

               $videoupdate = paramnId('id');
               if(!is_numeric($videoupdate)){
                echo '<h5>'. $videoupdate . '</h5>';
                return false;
               }

                // url id get this function end

                // database table and url id get this function  start

               $islamic_video_update = getById('islamic_video', $videoupdate);

               if($islamic_video_update['status']){
                if($islamic_video_update['status']==200){

                
                // database table and url id get this function  end
                 ?>

                 <input type="hidden" name="videoId" value="<?= $islamic_video_update['data']['id']?>">

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="<?= $islamic_video_update['data'] ['name'] ?>" required class="form-control">
                </div>

                <div class="mb-3">
                    <label>Small Description</label>
                    <textarea name="small_description" required class="form-control" rows="3"><?=$islamic_video_update['data'] ['small_description'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Upload Video</label>
                    <input type="file" name="video"  class="form-control">
                  <video src="<?= '../' .$islamic_video_update['data']['video'] ?>"style="width: 70px; height: 70px;"></video>
                </div>

                <div class="mb-3">
                    <label>Status (Checked-Hidden,  un-checked-visiable)</label><br>
                    <input type="checkbox" name="status" <?=  $islamic_video_update['data'] ['status'] == 1 ? 'checked' : ''?> style="width:30px; height: 30px;">
                </div>

                <div class="mb-2 text-end">
                    <button type="submit" name="Medical_Update_Video" class="btn btn-primary" >Update Video</button>
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