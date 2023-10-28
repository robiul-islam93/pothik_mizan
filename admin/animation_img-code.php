<?php

require '../config/function.php';

// medical img add function start 

if (isset($_POST['animation_add_img'])) {
    $name = validate($_POST['name']);
    $small_description = validate($_POST['small_description']);

// validate img file setup start

if ($_FILES['image']['size'] > 0) {

    $image = $_FILES['image']['name'];

    $imgfiletype = strtolower(pathinfo($image, PATHINFO_EXTENSION));

    if ($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'png') {
        redirect('animation_img.php', 'Sorry Only JPG, JPEG, And PNG Imge Uplode');
    }

    $path = "../assets/Upload/animation-video/";

    $imgExt = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $imgExt;

    $fileimage = 'assets/Upload/animation-video/' . $filename;
} else {
    $fileimage = NULL;
}

// validate img file setup end

$status = validate($_POST['status']) == true ? '1' : '0';

$query = "INSERT INTO animation_picture(name,small_description,image,status)
         VALUE('$name','$small_description','$fileimage','$status')";
  $result = mysqli_query($connection, $query);

  if ($result) {
      if ($_FILES['image']['size'] > 0) {
          move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
          redirect('animation_img.php', 'Image Added Successfully');
      }
      redirect('animation_img.php', 'Image Added Successfully');
  } else {
      redirect('animation_img.php', 'Something Went To Wrong');
  }

}
// img add function end


// img update function start 
if (isset($_POST['animation_Update_img'])) {

    $imgId = validate($_POST['imgId']);
    $name = validate($_POST['name']);
    $small_description = validate($_POST['small_description']);


    $imageupdate = getById('animation_picture', $imgId);

    // img uploade size function start 

    if($_FILES['image']['size'] > 0){

        $image = $_FILES['image']['name'];

        $imgfiletype= strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'png'){
            redirect('animation_img.php','Sorry Only JPG JPEG And PNG Image Upload');
        }

        $path = "../assets/Upload/animation-video/";

        $deleteimg = "../" .$imageupdate['data']['image'];
        if(file_exists($deleteimg)){
            unlink($deleteimg);
        }


        $imgExt = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$imgExt;
        $finalImage = 'assets/Upload/animation-video/'.$filename;

    }else{
        $finalImage = $imageupdate['data']['image'];
    }

    // img uploade size function end 

    $status = validate($_POST['status'])== true ? '1':'0';


    $query = "UPDATE animation_picture SET
         name = '$name',
         small_description = '$small_description',
         image = '$finalImage',
         status = '$status'
         WHERE id = '$imgId'";

            $result = mysqli_query($connection, $query);

            if($result){
                if($_FILES['image']['size'] > 0){
                    move_uploaded_file($_FILES['image']['tmp_name'],$path.$filename);
                    redirect('animation_img.php?id='.$imgId, ' Update Successfully');
                }
                redirect('animation_img.php?id='.$imgId,' Update Successfully');
            }else{
                redirect('animation_img.php?id='.$imgid, 'Somethink Went To Wrong');
            }


}



