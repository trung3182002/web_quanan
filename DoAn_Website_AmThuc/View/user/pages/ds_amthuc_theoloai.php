<?php 

foreach ($amthuctheoloai as $atl) : ?>
    <div class="col-lg-4 col-sm-6 dish-box-wp breakfast">
        <div class="dish-box text-center">

            <div class="dist-img">
                <img src="../../assets/user/images/amthuc/<?php echo $atl->Hinh ?>" alt="">
            </div>
            <div class="dish-rating">
            <?php echo $atl->DanhGia ?>
                <i class="uil uil-star"></i>
            </div>
            <div class="dish-title">
                <h3 class="h3-title"><?php echo $atl->TenMon ?></h3>
                <p><?php echo $atl->Calo ?> Calories</p>
            </div>
            <div class="dish-info">
                <ul>
                    <li>
                        <p>Type</p>
                        <b><?php echo $atl->TenLoai ?></b>
                    </li>
                </ul>
            </div>
            <div class="dist-bottom-row">
                <ul>
                    <li>
                        <b><?php echo $atl->DonGia ?> VND</b>
                    </li>
                    <li>
                        <form class="form-inline" method="get" action="../user/amthuc_theoloai.php">
                            <button type="submit" class="dish-add-btn" name="addToCart" value="add to cart"><i class="uil uil-plus"></i></button>
                            <input type="hidden" name="maMon" value="<?php echo $at->MaMon ?>">
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
<?php endforeach ?>