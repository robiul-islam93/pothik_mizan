<?php

require '../config/function.php';


if (isset($_POST['bloge_video_add_video'])) {

    $name = validate($_POST['name']);
    $slug = str_replace('','-',strtolower(($name)));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);

    // validate img file setup start

    if ($_FILES['video']['size'] > 0) {

        $image = $_FILES['video']['name'];

        $imgfiletype = strtolower(pathinfo($image, PATHINFO_EXTENSION));

        if ($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'mp4' && $imgfiletype != 'png') {
            redirect('vlog-img.php', 'Sorry Only JPG, mp4 JPEG,  And PNG Imge Uplode');
        }

        $path = "../assets/Upload/travel-vloge_video/";

        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $imgExt;

        $fileimage = 'assets/Upload/travel-vloge_video/' . $filename;
    } else {
        $fileimage = NULL;
    }

    // validate img file setup end

    $status = validate($_POST['status']) == true ? '1' : '0';


    $query = "INSERT INTO travel_vloge_video (name, slug, small_description, video, status) 
              VALUES ('$name','$slug' '$small_description', '$fileimage', $status)";

    $result = mysqli_query($connection, $query);

    if ($result) {
           if ($_FILES['video']['size'] > 0) {
               move_uploaded_file($_FILES['video']['tmp_name'], $path . $filename);
               redirect('travel-blog-video.php', 'Video added successfully');
           }
           redirect('travel-blog-video.php', 'Video added successfully');
       } else {
          
           redirect('travel-blog-video.php', 'Something went wrong');
       }
}




?>
