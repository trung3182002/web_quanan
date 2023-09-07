<?php
    $maMon = $_GET["maMon"];
    $sql = "SELECT * FROM amthuc, loaiamthuc WHERE amthuc.MaLoai = loaiamthuc.MaLoai AND amthuc.MaMon = $maMon";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $ctamthuc = $sta->fetchAll(PDO::FETCH_OBJ);
    }
   
?>