<?php include('config/function.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- css link -->

  <link rel="stylesheet" href="assets/css/style.css">
  <!-- css link -->

  <!-- js boostrap link -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!-- js boostrap link -->

  <!-- boostrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <!-- boostrap link -->

  <!-- Font Awesome Link -->
  <script src="https://kit.fontawesome.com/44f1800e1f.js" crossorigin="anonymous"></script>
  <!-- Font Awesome Link -->

  <!-- favicon link -->
  <link rel="shortcut icon" href="assets/icon/vlog-icon.jpg" type="image/x-icon" />
  <!-- favicon link -->

  <!-- boxicons css link -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!-- boxicons css link -->

  <title>Pothik mizan</title>
</head>

<body style="background-color: #797979;">

  <div class="mt-5">
   
    <form action="login_code.php" method="POST">
      <div class="bg-white rounded-2 p-5" style="width: 500px; margin:auto; box-shadow: 15px 15px 15px 0px rgba(0, 0, 0, 0.30);">
      <?= alertMessage();?>
        <a href="index.php"><img src="assets/icon/vlog-icon-removebg-preview.png" alt="" style="width:30%; display:block; margin:auto"></a>
        <h3 class="text-center mb-3">Login To Your Dashbord</h3>
        <label style="font-size:20px; font-weight: 750;">Email: </label>
        <input type="gmail" name="gmail" class="form-control">
        <label style="font-size:20px; font-weight: 750;">Password: </label>
        <input type="password" class="form-control" name="password" placeholder="********" required><br>
        <button type="submit" name="login" class="btn btn-primary d-block w-100">Login</button>
      </div>
    </form>
  </div>

  <?php

?>

</body>

</html>