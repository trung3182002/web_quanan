<?php

if (isset($_GET['btn_datHang'])) {
    $maKH = $_SESSION["maKhach"];
    $sql = "SELECT * FROM khachhang WHERE MAKH = $maKH";
    $sta = $pdo->prepare($sql);
    $sta->execute();

    if ($sta->rowCount() > 0) {
        $khach = $sta->fetchAll(PDO::FETCH_OBJ);
    }
}

?>