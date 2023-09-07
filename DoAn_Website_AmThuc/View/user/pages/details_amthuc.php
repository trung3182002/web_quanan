<?php foreach ($ctamthuc as $at) : ?>
    <div style="margin-top: 30px">
        <h1 class="text-center">Chi Tiết Món Ăn</h1>
        <div class="row">
            <div class="col-md-6">
                <div style="margin-top: 30px">
                    <img src="../../assets/user/images/amthuc/<?php echo $at->Hinh ?>" alt="" style="width: 600px; height: 500px">
                </div>
            </div>
            <div class="col-md-6">
                <h2 style="margin-top: 40px"><?php echo $at->TenMon ?></h2>
                <div style="margin-top: 30px">
                    <!-- Số sao đánh giá -->
                    <h4><?php echo $at->DanhGia ?>&ensp; <img src="../../assets/user/images/star.png"></h4> 
                </div>
                <div style="margin-top: 20px">
                    <h5>Đơn giá:&ensp; <?php echo $at->DonGia ?></h5>
                </div>
                <div style="margin-top: 20px">
                    <h5>Loại món:&ensp; <?php echo $at->TenLoai ?></h5>
                </div>
                <div style="margin-top: 20px">
                    <h5>Lượng calo:&ensp; <?php echo $at->Calo ?></h5>
                </div>
                <div style="margin-top: 20px; text-align: justify">
                    <!-- Thông tin mô tả -->
                    <h5>Mô tả món ăn:</h5>&ensp;
                    <?php echo $at->NoiDung ?>
                </div>
                <form class="form-inline" method="get" action="../user/chitiet_amthuc.php" style="margin-top: 40px">                  
                    <button class="btn btn-primary" type="submit" style="height: 50px; background-color: #ff9966; border: 0" name="addToCart" value="add to cart"><i class="fa fa-shopping-cart">&ensp;&ensp;Thêm Vào Giò Hàng</i></button>
                    <input type="hidden" name="maMon" value="<?php echo $at->MaMon ?>">                                  
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>