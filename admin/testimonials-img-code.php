<?php

require '../config/function.php';

// medical img add function start 

if (isset($_POST['testimonial_add_img'])) {
    $name = validate($_POST['name']);
    $small_description = validate($_POST['small_description']);

// validate img file setup start

if ($_FILES['image']['size'] > 0) {

    $image = $_FILES['image']['name'];

    $imgfiletype = strtolower(pathinfo($image, PATHINFO_EXTENSION));

    if ($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'png') {
        redirect('testimonial-img.php', 'Sorry Only JPG, JPEG, And PNG Imge Uplode');
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

$query = "INSERT INTO testimonial_picture(name,small_description,image,status)
         VALUE('$name','$small_description','$fileimage','$status')";
  $result = mysqli_query($connection, $query);

  if ($result) {
      if ($_FILES['image']['size'] > 0) {
          move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
          redirect('testimonial-img.php', 'Image Added Successfully');
      }
      redirect('testimonial-img.php', 'Image Added Successfully');
  } else {
      redirect('testimonial-img.php', 'Something Went To Wrong');
  }

}
// img add function end


// img update function start 
if (isset($_POST['testimonials_Update_img'])) {

    $imgId = validate($_POST['imgId']);
    $name = validate($_POST['name']);
    $small_description = validate($_POST['small_description']);


    $imageupdate = getById('testimonial_picture', $imgId);

    // img uploade size function start 

    if($_FILES['image']['size'] > 0){

        $image = $_FILES['image']['name'];

        $imgfiletype= strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if($imgfiletype != 'jpg' && $imgfiletype != 'jpeg' && $imgfiletype != 'png'){
            redirect('testimonial-img.php','Sorry Only JPG JPEG And PNG Image Upload');
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


    $query = "UPDATE testimonial_picture SET
         name = '$name',
         small_description = '$small_description',
         image = '$finalImage',
         status = '$status'
         WHERE id = '$imgId'";

            $result = mysqli_query($connection, $query);

            if($result){
                if($_FILES['image']['size'] > 0){
                    move_uploaded_file($_FILES['image']['tmp_name'],$path.$filename);
                    redirect('testimonials-img-edit.php?id='.$imgId, ' Update Successfully');
                }
                redirect('testimonials-img-edit.php?id='.$imgId,' Uploade Successfully');
            }else{
                redirect('testimonials-img-edit.php?id='.$imgid, 'Somethink Went To Wrong');
            }


}



