<?php

require '../config/function.php';

// img add function start 

if (isset($_POST['addimg'])) {

    $name = validate($_POST['name']);
    $slug = str_replace('','-',strtolower(($name)));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);

    // validate img file setup start

    if ($_FILES['image']['size'] > 0) {

        $image = $_FILES['image']['name'];

        $imgfiletype = strtolower(pathinfo($image, PATHINFO_EXTENSION));

        if ($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'mp4' && $imgfiletype != 'png') {
            redirect('vlog-img.php', 'Sorry Only JPG, mp4 JPEG,  And PNG Imge Uplode');
        }

        $path = "../assets/Upload/add-img/";

        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $imgExt;

        $fileimage = 'assets/Upload/add-img/' . $filename;
    } else {
        $fileimage = NULL;
    }

    // validate img file setup end

    $status = validate($_POST['status']) == true ? '1' : '0';

    $query = "INSERT INTO travel_vlog (name,slug,small_description,long_description,image,status)
              VALUE('$name','$slug','$small_description','$long_description','$fileimage','$status')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        if ($_FILES['image']['size'] > 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
            redirect('vlog-img.php', 'Image Added Successfully');
        }
        redirect('vlog-img.php', 'Image Added Successfully');
    } else {
        redirect('vlog-img.php', 'Something Went To Wrong');
    }
}

// img add function end


// img update function start 
if (isset($_POST['Updateimg'])) {

    $imgId = validate($_POST['imgId']);
    $name = validate($_POST['name']);
    $slug = str_replace('','-',strtolower($name));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);


    $imageupdate = getById('travel_vlog', $imgId);

    // img uploade size function start 

    if($_FILES['image']['size'] > 0){

        $image = $_FILES['image']['name'];

        $imgfiletype= strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'png'){
            redirect('vlog-img.php','Sorry Only JPG JPEG And PNG Image Upload');
        }

        $path = "../assets/Upload/add-img/";

        $deleteimg = "../" .$imageupdate['data']['image'];
        if(file_exists($deleteimg)){
            unlink($deleteimg);
        }
        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$imgExt;
        $finalImage = 'assets/Upload/add-img/'.$filename;

    }else{
        $finalImage = $imageupdate['data']['image'];
    }

    // img uploade size function end 

    $status = validate($_POST['status'])== true ? '1':'0';


    $query = "UPDATE travel_vlog SET
         name = '$name',
         slug = '$slug',
         small_description = '$small_description',
         long_description = ' $long_description',
         image = '$finalImage',
         status = '$status'
         WHERE id = '$imgId'";

            $result = mysqli_query($connection, $query);

            if($result){
                if($_FILES['image']['size'] > 0){
                    move_uploaded_file($_FILES['image']['tmp_name'],$path.$filename);
                    redirect('vlog-img-edit.php?id='.$imgId, 'Image Update Successfully');
                }
                redirect('vlog-img-edit.php?id='.$imgId,'Image Uploade Successfully');
            }else{
                redirect('vlog-img-edit.php?id='.$imgid, 'Somethink Went To Wrong');
            }
}



























?>