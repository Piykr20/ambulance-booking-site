<?php  
    session_start();


    $auth = $_SESSION["authenticate"];

    if ($auth == false) {
        header('Location: dashboardmain.php');
        exit();
    }
    else{
        header('Location: login.html');
        exit();
    }

?>