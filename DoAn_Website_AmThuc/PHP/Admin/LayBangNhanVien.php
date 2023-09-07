<?php
    
    $sql = "select * from nhanvien";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $qtnv = $sta->fetchAll(PDO::FETCH_OBJ);
    }
    
?>