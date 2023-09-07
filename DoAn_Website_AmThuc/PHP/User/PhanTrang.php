<?php

$sql = "SELECT * FROM amthuc";
$sta = $pdo->prepare($sql);
$sta->execute();

$total_records = $sta->rowCount();

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;

$total_page = ceil($total_records / $limit);

if ($current_page > $total_page) {
    $current_page = $total_page;
} else if ($current_page < 1) {
    $current_page = 1;
}

$start = ($current_page - 1) * $limit;

$result = "SELECT * FROM amthuc LIMIT $start, $limit";
$sta = $pdo->prepare($result);
$sta->execute();
if ($sta->rowCount() > 0) {
    $amthucs = $sta->fetchAll(PDO::FETCH_OBJ);
}
?>