<?php

require('../config/function.php');


$paramResult = paramnId('id');

if(is_numeric($paramResult)){
    $imageId = validate($paramResult);

    $image = getById('travel_vlog', $imageId);

    if($image['status'] == 200){
        $imgidDelete = deletequery('travel_vlog', $imageId);
        if($imgidDelete){
            $deletImg = "../".$image['data']['image'];
            if(file_exists($deletImg)){
                unlink($deletImg);
                redirect('vlog-img.php','Image Delete Sucessfully');
            }
            redirect('vlog-img.php','Image Delete Sucessfully');
        }else{
            redirect('vlog-img.php','Somethink Went To Wrong');
        }
    }else{
        redirect('vlog-img.php',$image['message']);
    }
}else{
    redirect('vlog-img.php',$paramResult);
}


?>








