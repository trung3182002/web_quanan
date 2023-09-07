<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM khachhang WHERE Email = '$email' AND MatKhau = '$password'";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $khs = $sta->fetchAll(PDO::FETCH_OBJ);

        foreach ($khs as $kh) {
            $maKhach = $kh->MaKH;
        }

        session_start();
        header("Location: trangchu.php"); // Chuyển hướng đến trang bảng điều khiển sau khi đăng nhập
        $tbdn = NULL;
    } else {
        // Đăng nhập thất bại
        $tbdn = "Email người dùng hoặc mật khẩu không chính xác.";
    }
    $_SESSION["maKhach"] = $maKhach;
}

?>
