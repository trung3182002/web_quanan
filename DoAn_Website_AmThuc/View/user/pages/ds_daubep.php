<?php foreach ($daubeps as $daubep) : ?>
    <div class="col-lg-4 swiper-slide">
        <div class="team-box text-center">
            <div style="background-image: url(../../assets/user/images/daubep/<?php echo $daubep->Hinh ?>);" class="team-img back-img">

            </div>
            <h3 class="h3-title"><?php echo $daubep->TenDB ?></h3>
            <div class="social-icon">
                <ul>
                    <li>
                        <a href="<?php echo $daubep->FB ?>" target="_blank"><i class="uil uil-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $daubep->Insta ?>" target="_blank">
                            <i class="uil uil-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $daubep->Youtube ?>" target="_blank">
                            <i class="uil uil-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php endforeach ?>