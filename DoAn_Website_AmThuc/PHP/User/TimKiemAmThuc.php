<?php
    
    if (isset($_GET["btn_Search"])) {
        $tenMon = $_GET["txt_Search"];
        $sql = "SELECT * FROM amthuc, loaiamthuc WHERE amthuc.MaLoai = loaiamthuc.MaLoai AND TenMon LIKE '%" . $tenMon . "%' ORDER BY DonGia ASC";
        $sta = $pdo->prepare($sql);
        $sta->execute();
        if ($sta->rowCount() > 0) {
            $tkAmThuc = $sta->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
?>