<?php
    include ("../PDOStatement.php");
    if (isset($_GET["btn_Search"])) {
        $tenMon = $_GET["txt_Search"];
        $sql = "SELECT * FROM amthuc WHERE TenMon LIKE '%$tenMon%'";
        $sta = $pdo->prepare($sql);
        $sta->execute();
        if ($sta->rowCount() > 0) {
            $qttkAmThuc = $sta->fetchAll(PDO::FETCH_OBJ);
        }
    }
    
?>