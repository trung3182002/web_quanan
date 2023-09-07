<?php
include ("../PDOStatement.php");
$ma = $_GET["maLoai"];
$sql = "DELETE FROM loaiamthuc WHERE MaLoai = $ma";
$sta = $pdo->prepare($sql);
$kq = $sta->execute();
if ($kq) {
    header("location: ../../View/admin/loaiamthuc.php");
} else {
    $tbde = "Xoá không thành công! Vui lòng kiểm tra lại";
}
?>