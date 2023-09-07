<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM nhanvien WHERE Email = '$email' AND MatKhau = '$password' AND Quyen = 'ADMIN'";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $khs = $sta->fetchAll(PDO::FETCH_OBJ);

        foreach ($khs as $kh) {
            $tenqt = $kh->MaNV;
        }

        session_start();
        header("Location: ../../View/admin/trangchu.php");
        $tb = NULL;
    } else {
        // Đăng nhập thất bại
        $tb = "Email quản trị hoặc mật khẩu không chính xác.";
    }
    $_SESSION["tenQT"] = $tenqt;
}

?>
