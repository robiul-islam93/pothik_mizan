<?php

require('../config/function.php');


$paramResult = paramnId('id');
if(is_numeric($paramResult)){
    $videoId = validate($paramResult);

    $video = getById('animation_video', $videoId);

    if($video['status'] == 200){
        $videoidDelete = deletequery('animation_video', $videoId);
        if($videoidDelete){
            $deletvideo = "../".$video['data']['video'];
            if(file_exists($deletvideo)){
                unlink($deletvideo);
                redirect('animation-video.php',' Delete Sucessfully');
            }
            redirect('animation-video.php',' Delete Sucessfully');
        }else{
            redirect('animation-video.php','Somethink Went To Wrong');
        }
    }else{
        redirect('animation-video.php',$video['message']);
    }
}else{
    redirect('animation-video.php',$paramResult);
}


?>








