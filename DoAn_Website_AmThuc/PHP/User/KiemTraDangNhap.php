<?php

if (isset($_POST["btn_profile"])) {
    if (isset($_SESSION["maKhach"])) {
        header("Location: ../../View/user/dangnhap.php");
    }
    header("Location: ../../View/user/thongtin_khachhang.php");
}
?>
