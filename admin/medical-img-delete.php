<?php

require('../config/function.php');


$paramResult = paramnId('id');
if(is_numeric($paramResult)){
    $imageId = validate($paramResult);

    $image = getById('medical_picture', $imageId);

    if($image['status'] == 200){
        $imgidDelete = deletequery('medical_picture', $imageId);
        if($imgidDelete){
            $deletImg = "../".$image['data']['image'];
            if(file_exists($deletImg)){
                unlink($deletImg);
                redirect('medical-img.php','Image Delete Sucessfully');
            }
            redirect('medical-img.php','Image Delete Sucessfully');
        }else{
            redirect('medical-img.php','Somethink Went To Wrong');
        }
    }else{
        redirect('medical-img.php',$image['message']);
    }
}else{
    redirect('medical-img.php',$paramResult);
}


?>








