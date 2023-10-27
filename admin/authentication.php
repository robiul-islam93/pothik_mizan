<?php

if(isset($_SESSION['auth'])){
    if(isset($_SESSION['loggedInUserRole'])){


        $role = validate($_SESSION['loggedInUserRole']); 
        $gmail = validate($_SESSION['loggedInUser']['gmail']);

        $query = "SELECT * FROM users_information WHERE gmail ='$gmail' AND role = '$role' LIMIT 1";

        $result= mysqli_query($connection, $query);

        if($result){
            if(mysqli_num_rows($result) == 0){

                logoutSession();
                redirect('../pothik_mizan-login.php','Access Denied');
            }
            else{
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                if($row['role'] != 'admin'){
                    logoutSession();
                redirect('../pothik_mizan-login.php','Access Denied');
                }
                if($row['is_ban']==1){
                    logoutSession();
            redirect('../pothik_mizan-login.php','Your Account Has Been Banned. Please contact admin');
                }

            }
        }else{
            logoutSession();
                redirect('../pothik_mizan-login.php','Something Went to Wrong');
        }

    }
}else{
                redirect('../pothik_mizan-login.php','Login To Continue...');
}

?>