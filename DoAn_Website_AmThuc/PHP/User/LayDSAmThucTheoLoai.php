<?php
    
    $maLoai = $_GET["maLoai"];
    $sql = "SELECT * FROM amthuc, loaiamthuc WHERE amthuc.MaLoai = loaiamthuc.MaLoai AND amthuc.MaLoai = $maLoai ORDER BY amthuc.MaLoai ASC, DonGia ASC";
    $sta = $pdo->prepare($sql);
    $sta->execute();

    if ($sta->rowCount() > 0) {
        $amthuctheoloai = $sta->fetchAll(PDO::FETCH_OBJ);
    }
    
    
?>