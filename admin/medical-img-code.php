<?php

require '../config/function.php';

// medical img add function start 

if (isset($_POST['medical-add_img'])) {
    $name = validate($_POST['name']);
    $slug = str_replace('', '-', strtolower(($name)));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);



// validate img file setup start

if ($_FILES['image']['size'] > 0) {

    $image = $_FILES['image']['name'];

    $imgfiletype = strtolower(pathinfo($image, PATHINFO_EXTENSION));

    if ($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'png') {
        redirect('vlog-img.php', 'Sorry Only JPG, JPEG, And PNG Imge Uplode');
    }

    $path = "../assets/Upload/medical-img/";

    $imgExt = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $imgExt;

    $fileimage = 'assets/Upload/medical-img/' . $filename;
} else {
    $fileimage = NULL;
}

// validate img file setup end

$status = validate($_POST['status']) == true ? '1' : '0';

$query = "INSERT INTO medical_picture(name,slug,small_description,long_description,image,status)
         VALUE('$name','$slug','$small_description','$long_description','$fileimage','$status')";
  $result = mysqli_query($connection, $query);

  if ($result) {
      if ($_FILES['image']['size'] > 0) {
          move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
          redirect('medical-img.php', 'Image Added Successfully');
      }
      redirect('medical-img.php', 'Image Added Successfully');
  } else {
      redirect('medical-img.php', 'Something Went To Wrong');
  }

}
// img add function end


// img update function start 
if (isset($_POST['medical-Update_img'])) {

    $imgId = validate($_POST['imgId']);
    $name = validate($_POST['name']);
    $slug = str_replace('','-',strtolower($name));
    $small_description = validate($_POST['small_description']);
    $long_description = validate($_POST['long_description']);


    $imageupdate = getById('medical_picture', $imgId);

    // img uploade size function start 

    if($_FILES['image']['size'] > 0){

        $image = $_FILES['image']['name'];

        $imgfiletype= strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'png'){
            redirect('medical-img.php','Sorry Only JPG JPEG And PNG Image Upload');
        }

        $path = "../assets/Upload/medical-img/";

        $deleteimg = "../" .$imageupdate['data']['image'];
        if(file_exists($deleteimg)){
            unlink($deleteimg);
        }


        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$imgExt;
        $finalImage = 'assets/Upload/medical-img/'.$filename;

    }else{
        $finalImage = $imageupdate['data']['image'];
    }

    // img uploade size function end 

    $status = validate($_POST['status'])== true ? '1':'0';


    $query = "UPDATE medical_picture SET
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
                    redirect('medical-img.php?id='.$imgId, 'Image Update Successfully');
                }
                redirect('medical-img.php?id='.$imgId,'Image Uploade Successfully');
            }else{
                redirect('medical-img.php?id='.$imgid, 'Somethink Went To Wrong');
            }


}



