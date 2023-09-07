<div class="container" style="margin-top: 10px; padding: 20px">
    <h1>Đặt hàng</h1>

    <div class="row">
        <!-- Cột thông tin món ăn -->
        <div class="col-md-8">
            <?php if (isset($_SESSION["cart_items"]) && count($_SESSION["cart_items"]) > 0) { ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên món</th>
                            <th scope="col">Giá tiền</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng giá</th>                  
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
                                <td><img src="../../assets/user/images/amthuc/<?php echo $item["hinh"] ?>" alt="Hình ảnh món ăn" width="140" height="90"></td>
                                <td><?php echo $item["ten"] ?></td>
                                <td><?php echo $item["dg"] ?></td>
                                <td>
                                    <input type="number" class="form-control" value="<?php echo $item["sl"] ?>" style="width: 100px">
                                </td>
                                <td> <?php echo $tien ?></td>                         
                            </tr>  
                        <?php } ?>
                        <tr>
                            <td>
                                <h4>Tổng số lượng:&ensp; <span id="total-quantity"><?php echo ($tongSL == 1) ? $tongSL . " món" : $tongSL . " món"; ?></span></h4>
                                <h4>Tổng thành tiền:&ensp;<span id="total-price"><?php echo $tongTien ?> vnđ</span></h4>             

                            </td>
                        </tr>
                    </tbody>
                </table>


                <div class="row">

                </div>
            <?php } ?>
        </div>
        <?php foreach ($khach as $kha) : ?>
            <!-- Cột thông tin khách hàng -->
            <div class="col-md-4">
                <h2>Thông tin khách hàng</h2>
                <div class="form-group" style="margin-top: 10px">
                    <label for="customer-name">Tên khách hàng:</label>
                    <input type="text" class="form-control" id="customer-name" value="<?php echo $kha->TenKH ?>" required>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label for="customer-address">Địa chỉ:</label>
                    <input type="text" class="form-control" id="customer-address" value="<?php echo $kha->DiaChi ?>" required>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label for="customer-phone">Số điện thoại:</label>
                    <input type="text" class="form-control" id="customer-phone" value="<?php echo $kha->SDT ?>" required>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <label for="customer-email">Email:</label>
                    <input type="email" class="form-control" id="customer-email" value="<?php echo $kha->Email ?>" required>
                </div>
                <div style="margin-top: 40px" class="row">
                    <div class="col-md-12">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <button name="btn_dat" class="btn btn-primary" style="width: 260px; height: 50px">Đặt hàng</button>
                        </form>               
                    </div>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <?php if (isset($_POST["btn_dat"])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $tbdh; ?>
                        </div>
                    <?php } ?> 
                </div>

            </div>
        </div>
    <?php endforeach ?>
</div>