<?php
include ("../PDOStatement.php");
$ma = $_GET["maMon"];
$sql = "DELETE FROM amthuc WHERE MaMon = $ma";
$sta = $pdo->prepare($sql);
$kq = $sta->execute();
if ($kq) {
    header("location: ../../View/admin/amthuc.php");
} else {
    $tbde = "Xoá không thành công! Vui lòng kiểm tra lại";
}
?>