<?php

if (isset($_SESSION["tenQT"])) {
    $maqt = $_SESSION["tenQT"];

    $sql = "SELECT * FROM nhanvien WHERE MaNV = $maqt";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $qtdn = $sta->fetchAll(PDO::FETCH_OBJ);
    }
    foreach ($qtdn as $qt) {
        $tenQTdn = $qt->TenNV;
    }
}
?>
