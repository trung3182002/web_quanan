<?php
    
    $sql = "SELECT * FROM amthuc, loaiamthuc WHERE amthuc.MaLoai = loaiamthuc.MaLoai ORDER BY amthuc.MaLoai ASC, DonGia ASC";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $amthucs = $sta->fetchAll(PDO::FETCH_OBJ);
    }
   
?>