<?php

require '../config/function.php';

if(isset($_SESSION['auth'])){

logoutSession();

redirect('../pothik_mizan-login.php', 'Logged Out Successfully');

}
?>