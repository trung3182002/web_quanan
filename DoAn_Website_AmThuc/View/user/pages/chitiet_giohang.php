<?php
if ($_GET["action"] == "remove") {
    if (isset($_SESSION["cart_items"])) {
        $k = $_GET["item"];
        unset($_SESSION["cart_items"][$k]);
        header("Location: ../user/giohang.php");
    }
}
?>
<div class="container" style="margin-top: 30px">
    <h1>Chi tiết giỏ hàng</h1>
    <?php if (empty($_SESSION["cart_items"])) { ?>
        <h2>Giỏ hàng của bạn rỗng! Hãy đặt món ngay đi nào</h2>
    <?php } ?>
    <form action="../user/giohang.php" method="post">                      
        <?php if (isset($_SESSION["cart_items"]) && count($_SESSION["cart_items"]) > 0) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên món</th>
                        <th scope="col">Giá tiền</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Tổng giá</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $tongTien = 0;
                    $tongSL = 0;
                    foreach ($_SESSION["cart_items"] as $key => $item) {
                        $tien = (float) $item["dg"] * (int) $item["sl"];
                        $tongTien += $tien;
                        $tongSL += $item["sl"];
                        ?>
                        <tr>
                            <td><img src="../../assets/user/images/amthuc/<?php echo $item["hinh"] ?>" alt="Hình ảnh món ăn" width="180" height="90"></td>
                            <td><?php echo $item["ten"] ?></td>
                            <td><?php echo $item["dg"] ?></td>
                            <td>
                                <input type="number" class="form-control" value="<?php echo $item["sl"] ?>" style="width: 100px">
                            </td>
                            <td> <?php echo $tien ?></td>
                            <td>
                                <a href="../user/giohang.php?action=remove&item=<?php echo $key ?>" class="text-danger">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                <?php } ?>
            </table>


            <div class="row">
                <div style="margin-left: 900px">
                    <h4>Tổng số lượng:&ensp; <span id="total-quantity"><?php echo ($tongSL == 1) ? $tongSL . " món" : $tongSL . " món"; ?></span></h4>
                    <h4>Tổng thành tiền:&ensp; <span id="total-price"><?php echo $tongTien ?> vnđ</span></h4>                  
                </div>
            </div>
        <?php } ?>
    </form>
        <form action="../user/dathang.php" method="get" style="float: right; margin-top: 20px">
            <button name="btn_datHang" class="btn btn-primary" style="width: 420px; height: 50px">Đặt hàng</button>
        </form>
</div>
