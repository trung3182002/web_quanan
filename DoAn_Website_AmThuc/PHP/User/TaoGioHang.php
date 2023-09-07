<?php

$maMon = $_GET["maMon"];
$sql = "SELECT * FROM amthuc WHERE MaMon = $maMon";
$sta = $pdo->prepare($sql);
$sta->execute();
if ($sta->rowCount() > 0) {
    $amthuc = $sta->fetchAll(PDO::FETCH_OBJ);
}
if (isset($_GET["addToCart"]) && $_GET["addToCart"] == "add to cart") {
    $maSP = intval($_GET["maMon"]);
    $soLuong = 1;

    foreach ($amthuc as $mon) {
        $tinhThanhTienMon = (int) $soLuong * (float) $mon->DonGia;

        $cartArr = array("ma" => $maSP, "sl" => $soLuong, "ten" => $mon->TenMon, "dg" => $mon->DonGia, "ttm" => $tinhThanhTienMon, "hinh" => $mon->Hinh);
    }

    if (isset($_SESSION["cart_items"]) && !empty($_SESSION["cart_items"])) {
        $idMonArr = array();
        foreach ($_SESSION["cart_items"] as $cartKey => $cartItem) {
            $idMonArr[] = $cartItem["ma_mon"];
            if ($cartItem["ma_mon"] == $maSP) {
                $_SESSION["cart_items"][$cartKey]["qty"] = $soLuong;
                $_SESSION["cart_items"][$cartKey]["total_price"] = $tinhThanhTienMon;
                break;
            }
        }
        if (!in_array($maSP, $idMonArr)) {
            $_SESSION["cart_items"][] = $cartArr;
        }
        $succesMes = true;
    } else {
        $_SESSION["cart_items"][] = $cartArr;
        $succesMes = true;
    }
}
?>