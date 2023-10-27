<?php

require 'config/function.php';

if(isset($_POST['login'])){

$gmailInput = validate($_POST['gmail']);
$passwordInput = validate($_POST['password']);

$gmail = filter_var($gmailInput, FILTER_SANITIZE_EMAIL);

$password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

if($gmail != '' && $password != ''){

    $query = "SELECT * FROM users_information WHERE gmail='$gmail' AND password='$password' LIMIT 1";
    $result = mysqli_query($connection, $query);

    if($result){

        if(mysqli_num_rows($result)== 1){

            $row = mysqli_fetch_array($result , MYSQLI_ASSOC);

            if($row['role'] == 'admin'){

                if($row['is_ban'] == 1){
          redirect('pothik_mizan-login.php','Your Account Is ban Please Contact Admin');
                }
                
                $_SESSION['auth'] = true;
                $_SESSION['loggedInUserRole'] = $row ['role'];
                $_SESSION ['loggedInUser']=[
                    'name'=> $row['name'],
                    'gmail'=> $row['gmail']
                ];

          redirect('admin/index.php','LoggIn Successfully');

            }
            else{
                if($row['is_ban'] == 1){
                    redirect('pothik_mizan-login.php','Your Account Is ban Please Contact Admin');}

                $_SESSION['auth'] = true;
                $_SESSION['loggedInUserRole'] = $row ['role'];
                $_SESSION ['loggedInUser']=[
                    'name'=> $row['name'],
                    'gmail'=> $row['gmail']
                ];
        redirect('admin/index.php','LoggIn Successfully');

            }
        }else{
        redirect('pothik_mizan-login.php','Invalid Gmail Id or Password');
        }

    }else{
        redirect('pothik_mizan-login.php','Something Went Wrong');
    
    }

}else{
    redirect('pothik_mizan-login.php','All Field Are Mandetory');
}

}







?>