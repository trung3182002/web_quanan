<?php
    
    $sql = "SELECT * FROM daubep";
    $sta = $pdo->prepare($sql);
    $sta->execute();
    if ($sta->rowCount() > 0) {
        $daubeps = $sta->fetchAll(PDO::FETCH_OBJ);
    }
    
?>