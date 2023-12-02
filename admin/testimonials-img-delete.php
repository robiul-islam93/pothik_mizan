<?php

require('../config/function.php');


$paramResult = paramnId('id');
if(is_numeric($paramResult)){
    $imageId = validate($paramResult);

    $image = getById('testimonial_picture', $imageId);

    if($image['status'] == 200){
        $imgidDelete = deletequery('testimonial_picture', $imageId);
        if($imgidDelete){
            $deletImg = "../".$image['data']['image'];
            if(file_exists($deletImg)){
                unlink($deletImg);
                redirect('testimonial-img.php','Image Delete Sucessfully');
            }
            redirect('testimonial-img.php','Image Delete Sucessfully');
        }else{
            redirect('testimonial-img.php','Somethink Went To Wrong');
        }
    }else{
        redirect('testimonial-img.php',$image['message']);
    }
}else{
    redirect('testimonial-img.php',$paramResult);
}


?>








