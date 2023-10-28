<?php

require('../config/function.php');


$paramResult = paramnId('id');
if(is_numeric($paramResult)){
    $imageId = validate($paramResult);

    $image = getById('animation_picture', $imageId);

    if($image['status'] == 200){
        $imgidDelete = deletequery('animation_picture', $imageId);
        if($imgidDelete){
            $deletImg = "../".$image['data']['image'];
            if(file_exists($deletImg)){
                unlink($deletImg);
                redirect('animation_img.php','Image Delete Sucessfully');
            }
            redirect('animation_img.php','Image Delete Sucessfully');
        }else{
            redirect('animation_img.php','Somethink Went To Wrong');
        }
    }else{
        redirect('animation_img.php',$image['message']);
    }
}else{
    redirect('animation_img.php',$paramResult);
}


?>








