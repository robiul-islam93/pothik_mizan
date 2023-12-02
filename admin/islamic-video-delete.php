<?php

require('../config/function.php');


$paramResult = paramnId('id');
if(is_numeric($paramResult)){
    $videoId = validate($paramResult);

    $video = getById('islamic_video', $videoId);

    if($video['status'] == 200){
        $videoidDelete = deletequery('islamic_video', $videoId);
        if($videoidDelete){
            $deletvideo = "../".$video['data']['video'];
            if(file_exists($deletvideo)){
                unlink($deletvideo);
                redirect('islamic-video.php',' Delete Sucessfully');
            }
            redirect('islamic-video.php',' Delete Sucessfully');
        }else{
            redirect('islamic-video.php','Somethink Went To Wrong');
        }
    }else{
        redirect('islamic-video.php',$video['message']);
    }
}else{
    redirect('islamic-video.php',$paramResult);
}


?>








