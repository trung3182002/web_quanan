<?php 

foreach ($tkAmThuc as $tkat) : ?>
    <div class="col-lg-4 col-sm-6 dish-box-wp breakfast">
        <div class="dish-box text-center">

            <div class="dist-img">
                <img src="../../assets/user/images/amthuc/<?php echo $tkat->Hinh ?>" alt="">
            </div>
            <div class="dish-rating">
            <?php echo $tkat->DanhGia ?>
                <i class="uil uil-star"></i>
            </div>
            <div class="dish-title">
                <h3 class="h3-title"><?php echo $tkat->TenMon ?></h3>
                <p><?php echo $tkat->Calo ?> Calories</p>
            </div>
            <div class="dish-info">
                <ul>
                    <li>
                        <p>Type</p>
                        <b><?php echo $tkat->TenLoai ?></b>
                    </li>
                </ul>
            </div>
            <div class="dist-bottom-row">
                <ul>
                    <li>
                        <b><?php echo $tkat->DonGia ?> VND</b>
                    </li>
                    <li>
                        <form class="form-inline" method="get" action="../user/timkiem_amthuc.php">
                            <button type="submit" class="dish-add-btn" name="addToCart" value="add to cart"><i class="uil uil-plus"></i></button>
                            <input type="hidden" name="maMon" value="<?php echo $at->MaMon ?>">
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
<?php endforeach ?>