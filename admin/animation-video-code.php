<?php

require '../config/function.php';

if(isset($_POST['animation_video_add_video'])){

    $name = validate($_POST['name']);
    $slug = str_replace('','-',strtolower(($name)));
    $small_description = validate($_POST['small_description']);

    // validate img file setup start

    if ($_FILES['video']['size'] > 0) {

        $video = $_FILES['video']['name'];

        $videofiletype = strtolower(pathinfo($video, PATHINFO_EXTENSION));

        if ($videofiletype != 'jpg' && $videofiletype != 'jpeg' && $videofiletype != 'mp4' && $videofiletype != 'png' && $videofiletype != 'mkv') {
            redirect('medical-video.php', 'Sorry Only JPG, mp4, JPEG, MKV And PNG Imge Uplode');
        }

        $path = "../assets/Upload/animation-video/";

        $videoExt = pathinfo($video, PATHINFO_EXTENSION);
        $filename = time() . '.' . $videoExt;

        $filevideo = 'assets/Upload/animation-video/' . $filename;
    } else {
        $filevideo = NULL;
    }


    $status = validate($_POST['status']) == true ? '1' : '0';

    $query = "INSERT INTO animation_video (name,slug,small_description,video,status)
              VALUE('$name','$slug','$small_description','$filevideo','$status')";

    $result = mysqli_query($connection, $query);

    if ($result) {
           if ($_FILES['video']['size'] > 0) {
               move_uploaded_file($_FILES['video']['tmp_name'], $path . $filename);
               redirect('animation-video.php', ' Added Successfully');
           }
           redirect('animation-video.php', 'Added Successfully');
       } else {
          
           redirect('animation-video.php', 'Something went wrong');
       }
}

// video add function end



// video update function start 

if(isset($_POST['Animation_Update_Video'])){
    $videoId = validate($_POST['videoId']);
    $name= validate($_POST['name']);
    $slug = str_replace('','-',strtolower($name));
    $small_description = validate($_POST['small_description']);

    $videoupdate = getById('animation_video', $videoId);

    // img uploade size function start 

    if($_FILES['video']['size'] > 0){

        $video = $_FILES['video']['name'];

        $videofiletype= strtolower(pathinfo($video, PATHINFO_EXTENSION));
        if ($videofiletype != 'jpg' && $videofiletype != 'jpeg' && $videofiletype != 'mp4' && $videofiletype != 'png') {
            redirect('medical-video.php', 'Sorry Only JPG, mp4, JPEG,  And PNG Imge Uplode');
        }


        $path = "../assets/Upload/animation-video/";

        $deletevideo = "../" .$videoupdate['data']['video'];
        if(file_exists($deletevideo)){
            unlink($deletevideo);
        }


        $videoExt = pathinfo($video, PATHINFO_EXTENSION);
        $filename = time().'.'.$videoExt;
        $finalVideo = 'assets/Upload/animation-video/'.$filename;

    }else{
        $finalVideo = $videoupdate['data']['video'];
    }

    // img uploade size function end 

    $status = validate($_POST['status'])== true ? '1':'0';

    $query = "UPDATE animation_video SET
    name = '$name',
    slug = '$slug',
    small_description = '$small_description',
    video = '$finalVideo',
    status = '$status'
    WHERE id = '$videoId'";

       $result = mysqli_query($connection, $query);

       if($result){
           if($_FILES['video']['size'] > 0){
               move_uploaded_file($_FILES['video']['tmp_name'],$path.$filename);
               redirect('medical-video-edit.php?id='.$videoId, ' Update Successfully');
           }
           redirect('animation-video-edit.php?id='.$videoId,' Update Successfully');
       }else{
           redirect('animation-video-delete.php?id='.$videoId, 'Somethink Went To Wrong');
       }
}

?>