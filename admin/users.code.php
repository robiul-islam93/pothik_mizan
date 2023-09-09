<?php

require '../config/function.php';

// user create function start

if (isset($_POST['saveUser'])) {

    $name = validate($_POST['name']);
    $gmail = validate($_POST['gmail']);
    $password = validate($_POST['password']);
    $is_ban = validate($_POST['is_ban']) == true ? 1 : 0;
    $role = validate($_POST['role']);

    if ($name != '' || $gmail != '' || $password != '') {

        $query = " INSERT INTO users_information(name,gmail,password,is_ban,role) 
        VALUES ('$name','$gmail','$password','$is_ban','$role')";

        $result = mysqli_query($connection, $query);

        if ($result) {
            redirect('users.php', 'User/Admin Added Successfully');
        } else {
            redirect('user-creat.php', 'Something Went To Wrong');
        }

    } else {
        redirect('user-creat.php', 'Pleace Fill In the Input Fill');
    }

}

// user creat function end


// user update function start


if (isset($_POST['updateuser'])) {
    $name = validate($_POST['name']);
    $gmail = validate($_POST['gmail']);
    $password = validate($_POST['password']);
    $is_ban = validate($_POST['is_ban']) == true ? 1 : 0;
    $role = validate($_POST['role']);

    $userId = validate($_POST['userId']);
    $user = getById('users_information', $userId);
    if ($user['status'] != 200) {
        redirect('user-edit.php?id=' . $userId, 'No Such Id Found');
    }

    if ($name != '' || $gmail != '' || $password != '') {
        $query = "UPDATE users_information SET 
        name = '$name',
        gmail = '$gmail',
        password= '$password',
         is_ban = '$is_ban',
        role = '$role'
        WHERE id = '$userId'";
        $result = mysqli_query($connection, $query);

        if ($result) {
            redirect('users.php?id=' . $userId, 'User/Admin Update Successfully');
        } else {
            redirect('$user-create.php', 'Something Went To Wrong');
        }
    } else {
        redirect('user-create.php', 'Please Fill All The Input Fields');
    }
}


// user update function end



// user update function end





?>