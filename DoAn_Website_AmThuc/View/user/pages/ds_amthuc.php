<?php foreach ($amthucs as $at) : ?>
    <div class="col-lg-4 col-sm-6 dish-box-wp breakfast">
        <div class="dish-box text-center">

            <div class="dist-img">
                <img src="../../assets/user/images/amthuc/<?php echo $at->Hinh ?>" alt="">
            </div>
            <div class="dish-rating">
                <?php echo $at->DanhGia ?>
                <i class="uil uil-star"></i>
            </div>
            <div class="dish-title">
                <h3 class="h3-title"><?php echo $at->TenMon ?></h3>
                <p><?php echo $at->Calo ?> Calories</p>
            </div>
            <div class="dish-info">
                <ul>
                    <li>
                        <p>Loại</p>
                        <b><?php echo $at->TenLoai ?></b>
                    </li>
                    <li>
                        <br>
                        <b><a href="../user/chitiet_amthuc.php?maMon=<?php echo $at->MaMon ?>">Xem Chi Tiết</a></b>                 
                    </li>
                </ul>
            </div>
            <div class="dist-bottom-row">
                <ul>
                    <li>
                        <img src="../../assets/user/images/money.png" style="height: 50px; width: 50px">
                    </li>   
                    <li>
                        <b><?php echo $at->DonGia ?> VND</b>
                    </li>                  
                </ul>
            </div>

        </div>
    </div>
<?php endforeach ?>
<div class="Page navigation text-center" style="font-size: 22px">
    <?php
    if ($current_page > 1 && $total_page > 1) {
        echo '<a href="../user/trangchu.php?page=' . ($current_page - 1) . '">Prev</a> &ensp; | &ensp; ';
    }

    for ($i = 1; $i <= $total_page; $i++) {
        if ($i == $current_page) {
            echo '<span class="btn btn-primary">' . $i . '</span> &ensp; | &ensp; ';
        } else {
            echo '<a href="../user/trangchu.php?page=' . $i . '">' . $i . '</a> &ensp; | &ensp; ';
        }
    }
    if ($current_page < $total_page && $total_page > 1) {
        echo '<a href="../user/trangchu.php?page=' . ($current_page + 1) . '">Next</a> &ensp; | &ensp; ';
    }
    ?>
</div>
