<?php

if (isset($_GET['btn_logout'])) {
    session_start();
    session_destroy();
    header("Location: ../../View/user/dangnhap.php");
    exit();
}

?>
   
