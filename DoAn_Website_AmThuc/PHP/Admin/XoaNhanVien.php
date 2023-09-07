<?php
include ("../PDOStatement.php");
$ma = $_GET["maNV"];
$sql = "DELETE FROM nhanvien WHERE MaNV = $ma";
$sta = $pdo->prepare($sql);
$kq = $sta->execute();
if ($kq) {
    header("location: ../../View/admin/nhanvien.php");
} else {
    $tbde = "Xoá không thành công! Vui lòng kiểm tra lại";
}
?>