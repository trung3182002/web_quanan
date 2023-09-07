<div class="swiper-wrapper">
    <?php foreach ($banners as $ban) : ?>
    <a href="../../assets/user/images/banner/<?php echo $ban->Source ?>" data-fancybox="table-slider" class="book-table-img back-img swiper-slide" style="background-image: url(../../assets/user/images/banner/<?php echo $ban->Source ?>)"></a>
    <?php endforeach ?>
</div>