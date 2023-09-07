<?php
    
    $sql = "SELECT * FROM amthuc";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $amthucs = $sta->fetchAll(PDO::FETCH_OBJ);
    }
?>