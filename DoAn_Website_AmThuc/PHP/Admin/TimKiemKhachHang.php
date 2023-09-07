<?php
    include ("../PDOStatement.php");
    if (isset($_GET["btn_Search"])) {
        $tenKH = $_GET["txt_Search"];
        $sql = "SELECT * FROM khachhang WHERE TenKH LIKE '%$tenKH%'";
        $sta = $pdo->prepare($sql);
        $sta->execute();
        if ($sta->rowCount() > 0) {
            $qttkKhachHang = $sta->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
?>