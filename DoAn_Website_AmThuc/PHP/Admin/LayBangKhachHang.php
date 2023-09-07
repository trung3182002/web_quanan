<?php
    
    $sql = "select * from khachhang";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $qtkh = $sta->fetchAll(PDO::FETCH_OBJ);
    }
    
?>