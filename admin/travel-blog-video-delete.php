<?php

require('../config/function.php');


$paramResult = paramnId('id');
if(is_numeric($paramResult)){
    $videoId = validate($paramResult);

    $video = getById('travel_vloge_video', $videoId);

    if($video['status'] == 200){
        $videoidDelete = deletequery('travel_vloge_video', $videoId);
        if($videoidDelete){
            $deletvideo = "../".$video['data']['video'];
            if(file_exists($deletvideo)){
                unlink($deletvideo);
                redirect('travel-blog-video.php',' Delete Sucessfully');
            }
            redirect('travel-blog-video.php',' Delete Sucessfully');
        }else{
            redirect('travel-blog-video.php','Somethink Went To Wrong');
        }
    }else{
        redirect('travel-blog-video.php',$video['message']);
    }
}else{
    redirect('travel-blog-video.php',$paramResult);
}


?>








