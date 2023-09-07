<?php
if (isset($_GET['btn_dat'])) {
    $maKH = $_SESSION["maKhach"];
    if (isset($_SESSION["cart_items"]) && count($_SESSION["cart_items"]) > 0) {
        foreach ($_SESSION["cart_items"] as $key => $item) {
            $tien = (float) $item["dg"] * (int) $item["sl"];
            $ngayDat = date('Y-m-d');
            $sl = $item["sl"];
            $maMon = $item["ma"];
            $sql1 = "INSERT INTO donhang(NgayDat, MaKH, MaMon, SoLuong, ThanhTien) VALUES ($ngayDat, $maKH, $maMon, $sl, $tien)";
            $sta = $pdo->prepare($sql1);
            $kq = $sta->execute();
        }
        if ($kq) {
            $tbdh = "Đặt hàng thành công";
        } else {
            $tbdh = "Lỗi đặt hàng";
        }
    }
}
?>