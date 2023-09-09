<?php

require ('../config/function.php');

$paramResult = paramnId('id');

if(is_numeric($paramResult)){
    $userId = validate($paramResult);
    $user = getById('users_information', $userId);
    if($user['status']== 200){
        $userDeleteResult = deleteQuery('users_information', $userId);
        if($userDeleteResult){
            redirect('users.php','User Delete Successfully');
        }else{
            redirect('users.php','Something Went To Wrong');
        }
    }else{
        redirect('users.php', $user['message']);
    }
}else{
    redirect('users.php', $paramResult);
}















?>