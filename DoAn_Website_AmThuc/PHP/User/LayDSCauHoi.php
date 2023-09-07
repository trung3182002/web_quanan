<?php
    
    $sql = "SELECT * FROM cauhoi";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $cauhois = $sta->fetchAll(PDO::FETCH_OBJ);
    }
    
?>