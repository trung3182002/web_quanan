<?php
    
    $sql = "select * from loaiamthuc";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $loaiamthuc = $sta->fetchAll(PDO::FETCH_OBJ);
    }
    
?>