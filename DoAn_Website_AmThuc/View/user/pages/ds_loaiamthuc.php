<ul class="filters">
    <a href="../user/trangchu.php" style="color: orangered;">
        <li class="filter">
            <img src="../../assets/user/images/menu/all.png" alt="">
            Tất Cả
        </li>
    </a>
    <?php foreach ($loaiamthuc as $loai) : ?>
        <a href="../user/amthuc_theoloai.php?maLoai=<?php echo $loai->MaLoai ?>" style="color: orangered;">
            <li class="filter">
                <img src="../../assets/user/images/menu/<?php echo $loai->HinhMH ?>" alt="">
                <?php echo $loai->TenLoai ?> 
            </li>
        </a>
    <?php endforeach ?>
</ul>