<?php

session_start();

// database connection start

require 'dbcon.php';
// database connection end



// user security connection start
function validate($inputDate){
    global $connection;

    $validateDate = mysqli_real_escape_string($connection , $inputDate);

    return trim($validateDate);
}

// user security connection end


// redirect url bar  function start

function redirect($url, $status){
    $_SESSION['status'] = "$status";
    header('Location:'.$url);
    exit(0);
}

// redirect url bar  function end


// alerts massage function start

function alertMessage(){
    if(isset($_SESSION['status'])){
        echo '<div class ="aleart bg-success text-white rounded py-3 p-2 alert-success text-center mt-3" style="width: 60%; margin:auto">
        <h5>'.$_SESSION['status'].'</h5></div>';
        unset($_SESSION['status']);
    }
}



// alerts massage function end


// getall data in database function start

function getall($tableName){
    global $connection;
    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($connection , $query);
    return $result;
}

// getall data in database function end



// user update function in php code start

// get URL Id function start
function paramnId($paramtype){
    if(isset($_GET[$paramtype])){
        if($_GET[$paramtype] != null){
            return $_GET[$paramtype];
        }
        else{
            echo "No Id Found";
        }
    }else{
        echo "No Id Given";
    }
}

// get URL Id function end

// user update function in php code end


//  database table get function start
function getById($tablename, $id)
{
    global $connection;

    $table = validate($tablename);
    $id = validate($id);

    $query = "SELECT * FROM $table WHERE id ='$id' LIMIT 1";
    $result = mysqli_query($connection,$query);  

    if($result){

        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $response = [
                'status' => 200,
                'message' => 'Fected data',
                'data' => $row
            ];
            return $response;
        }
        else
        {
            $response = [
                'status' => 404,
                'message' => 'No Data Found'
            ];
            return $response;
        }

    }else{
        $response = [
            'status' => 500,
            'message' => 'Something Went Wrong'
        ];
        return $response;
    }

}

//  database table get function end


// user delete function start 

function deletequery($tableName, $id){
    global $connection;

    $table = validate($tableName);
    $id = validate($id);

    $query = "DELETE FROM $table WHERE id = '$id' LIMIT 1";
    $result = mysqli_query($connection, $query);
    return $result;
}

// user delete function end


// logout function start 

function logoutSession(){
    unset($_SESSION['auth']);
    unset($_SESSION['LoggedInUserRole']);
    unset($_SESSION['LoggedInUser']);
}

// logout function end 



?>