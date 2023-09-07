<?php
    
    $sql = "select * from banner";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $banners = $sta->fetchAll(PDO::FETCH_OBJ);
    }
    
?>