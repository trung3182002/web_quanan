<?php

if (isset($_SESSION["maKhach"])) {
    $ma = $_SESSION["maKhach"];

    $sql = "SELECT * FROM khachhang WHERE MaKH = $ma";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $khdn = $sta->fetchAll(PDO::FETCH_OBJ);
    }
}
?>
