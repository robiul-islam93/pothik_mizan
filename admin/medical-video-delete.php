<?php

require('../config/function.php');


$paramResult = paramnId('id');
if(is_numeric($paramResult)){
    $videoId = validate($paramResult);

    $video = getById('medical_video', $videoId);

    if($video['status'] == 200){
        $videoidDelete = deletequery('medical_video', $videoId);
        if($videoidDelete){
            $deletvideo = "../".$video['data']['video'];
            if(file_exists($deletvideo)){
                unlink($deletvideo);
                redirect('medical-video.php',' Delete Sucessfully');
            }
            redirect('medical-video.php',' Delete Sucessfully');
        }else{
            redirect('medical-video.php','Somethink Went To Wrong');
        }
    }else{
        redirect('medical-video.php',$video['message']);
    }
}else{
    redirect('medical-video.php',$paramResult);
}


?>








