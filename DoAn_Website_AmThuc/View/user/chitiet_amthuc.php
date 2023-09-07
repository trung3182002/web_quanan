<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang Chủ</title>
        <link rel="icon" href="../../assets/user/images/icon.png" type="image/icon type">
        <!-- for icons  -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!-- bootstrap  -->
        <link rel="stylesheet" href="../../assets/user/css/bootstrap.min.css">
        <!-- for swiper slider  -->
        <link rel="stylesheet" href="../../assets/user/css/swiper-bundle.min.css">

        <!-- fancy box  -->
        <link rel="stylesheet" href="../../assets/user/css/jquery.fancybox.min.css">
        <!-- custom css  -->
        <link rel="stylesheet" href="../../assets/user/css/style.css">
    </head>
    <?php
    session_start();
    include ("../../PHP/PDOStatement.php");
    include ("../../PHP/User/LayDSBanner.php");
    include ("../../PHP/User/LayDSDauBep.php");
    include ("../../PHP/User/LayDSCauHoi.php");
    include ("../../PHP/User/LayDSLoaiAmThuc.php");
    include ("../../PHP/User/TimKiemAmThuc.php");
    include ("../../PHP/User/ChiTietAmThuc.php");
    include ("../../PHP/User/TaoGioHang.php");
    include ("../../PHP/User/KiemTraDangNhap.php");
   
    ?>
    <body class="body-fixed">
        <!-- start of header  -->
        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="header-logo">
                            <a href="trangchu.php">
                                <img src="../../assets/user/images/logopanda.png" width="100" height="40"  alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="main-navigation">
                            <button class="menu-toggle"><span></span><span></span></button>
                            <nav class="header-menu">
                                <ul class="menu food-nav-menu">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="header-right">
                                <form action="timkiem_amthuc.php" class="header-search-form for-des">
                                    <input name="txt_Search" type="search" class="form-input" placeholder="Nhập tên món...">
                                    <button name="btn_Search" type="submit">
                                        <i class="uil uil-search"></i>
                                    </button>
                                </form>
                                <a href="giohang.php" class="header-btn header-cart">
                                    <i class="uil uil-shopping-bag"></i>
                                    <span class="cart-number">
                                        <?php echo (isset($_SESSION["cart_items"]) && count($_SESSION["cart_items"])) > 0 ? count($_SESSION["cart_items"]) : ''; ?>
                                    </span>
                                </a>
                               <form action="../../PHP/User/KiemTraDangNhap.php" method="post">
                                    <button type="submit" class="header-btn" name="btn_profile" style="border: 0">
                                        <i class="uil uil-user-md"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header ends  -->

        <section style="background-image: url(../../assets/user/images/menu-bg.png);" class="our-menu section bg-light repeat-img" id="menu">
            <div class="sec-wp">
                <div class="container">
                    <!-- chi tiet am thuc  -->
                     <?php include './pages/details_amthuc.php'; ?>
                    
                </div>                                                              
            </div>
        </div>
    </section>



    <section class="book-table section bg-light">
        <div class="book-table-shape">
            <img src="../../assets/user/images/table-leaves-shape.png" alt="">
        </div>

        <div class="book-table-shape book-table-shape2">
            <img src="../../assets/user/images/table-leaves-shape.png" alt="">
        </div>

        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center mb-5">
                            <p class="sec-sub-title mb-3">Book Table</p>
                            <h2 class="h2-title">Opening Table</h2>
                            <div class="sec-title-shape mb-4">
                                <img src="../../assets/user/images/title-shape.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="book-table-info">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="table-title text-center">
                                <h3>Monday to Thrusday</h3>
                                <p>9:00 am - 22:00 pm</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="call-now text-center">
                                <i class="uil uil-phone"></i>
                                <a href="tel:+91-8866998866">+91 - 8866998866</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="table-title text-center">
                                <h3>Friday to Sunday</h3>
                                <p>11::00 am to 20:00 pm</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="gallery">
                    <div class="col-lg-10 m-auto">
                        <div class="book-table-img-slider" id="icon">
                            <!-- ds banner  -->
                            <?php include './pages/ds_banner.php'; ?>

                            <div class="swiper-button-wp">
                                <div class="swiper-button-prev swiper-button">
                                    <i class="uil uil-angle-left"></i>
                                </div>
                                <div class="swiper-button-next swiper-button">
                                    <i class="uil uil-angle-right"></i>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

    <section class="our-team section">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center mb-5">
                            <p class="sec-sub-title mb-3">Our Team</p>
                            <h2 class="h2-title">Meet our Chefs</h2>
                            <div class="sec-title-shape mb-4">
                                <img src="../../assets/user/images/title-shape.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row team-slider">
                    <div class="swiper-wrapper">
                        <!-- ds dau bep  -->
                        <?php include './pages/ds_daubep.php'; ?>                                                                                                          
                    </div>
                    <div class="swiper-button-wp">
                        <div class="swiper-button-prev swiper-button">
                            <i class="uil uil-angle-left"></i>
                        </div>
                        <div class="swiper-button-next swiper-button">
                            <i class="uil uil-angle-right"></i>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials section bg-light">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center mb-5">
                            <p class="sec-sub-title mb-3">What they say</p>
                            <h2 class="h2-title">What our customers <span>say about us</span></h2>
                            <div class="sec-title-shape mb-4">
                                <img src="../../assets/user/images/title-shape.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="testimonials-img">
                            <img src="../../assets/user/images/testimonial-img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="testimonials-box">
                                    <div class="testimonial-box-top">
                                        <div class="testimonials-box-img back-img" style="background-image: url(../../assets/user/images/t1.jpg);">
                                        </div>
                                        <div class="star-rating-wp">
                                            <div class="star-rating">
                                                <span class="star-rating__fill" style="width:85%"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="testimonials-box-text">
                                        <h3 class="h3-title">
                                            Nilay Hirpara
                                        </h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                            quisquam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="testimonials-box">
                                    <div class="testimonial-box-top">
                                        <div class="testimonials-box-img back-img" style="background-image: url(../../assets/user/images/t2.jpg);">
                                        </div>
                                        <div class="star-rating-wp">
                                            <div class="star-rating">
                                                <span class="star-rating__fill" style="width:80%"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="testimonials-box-text">
                                        <h3 class="h3-title">
                                            Ravi Kumawat
                                        </h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                            quisquam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="testimonials-box">
                                    <div class="testimonial-box-top">
                                        <div class="testimonials-box-img back-img" style="background-image: url(../../assets/user/images/t3.jpg);">
                                        </div>
                                        <div class="star-rating-wp">
                                            <div class="star-rating">
                                                <span class="star-rating__fill" style="width:89%"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="testimonials-box-text">
                                        <h3 class="h3-title">
                                            Navnit Kumar
                                        </h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                            quisquam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="testimonials-box">
                                    <div class="testimonial-box-top">
                                        <div class="testimonials-box-img back-img" style="background-image: url(../../assets/user/images/t4.jpg);">
                                        </div>
                                        <div class="star-rating-wp">
                                            <div class="star-rating">
                                                <span class="star-rating__fill" style="width:100%"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="testimonials-box-text">
                                        <h3 class="h3-title">
                                            Somyadeep Bhowmik
                                        </h3>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                            quisquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-sec section-repeat-img" style="background-image: url(../../assets/user/images/faq-bg.png);">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title text-center mb-5">
                            <p class="sec-sub-title mb-3">faqs</p>
                            <h2 class="h2-title">Frequently <span>asked questions</span></h2>
                            <div class="sec-title-shape mb-4">
                                <img src="../../assets/user/images/title-shape.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-row">
                    <!-- ds cau hoi  -->
                    <?php include './pages/ds_cauhoi.php'; ?>
                </div>

            </div>
        </div>

    </section>


    <div class="bg-pattern bg-light repeat-img" style="background-image: url(../../assets/user/images/blog-pattern-bg.png);">
        <section class="blog-sec section" id="blog">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sec-title text-center mb-5">
                                <p class="sec-sub-title mb-3">Our blog</p>
                                <h2 class="h2-title">Latest Publications</span></h2>
                                <div class="sec-title-shape mb-4">
                                    <img src="../../assets/user/images/title-shape.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog-box">
                                <div class="blog-img back-img" style="background-image: url(../../assets/user/images/blog/blog1.jpg);"></div>
                                <div class="blog-text">
                                    <p class="blog-date">September.15.2021</p>
                                    <a href="#" class="h4-title">Energy Drink which you can make at home.</a>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                        explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                        blanditiis amet ad.</p>
                                    <a href="#" class="sec-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-box">
                                <div class="blog-img back-img" style="background-image: url(../../assets/user/images/blog/blog2.jpg);"></div>
                                <div class="blog-text">
                                    <p class="blog-date">October.15.2021</p>
                                    <a href="#" class="h4-title">Fresh Veggie and rice combo for dinner.</a>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                        explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                        blanditiis amet ad.</p>
                                    <a href="#" class="sec-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-box">
                                <div class="blog-img back-img" style="background-image: url(../../assets/user/images/blog/blog3.jpg);"></div>
                                <div class="blog-text">
                                    <p class="blog-date">November.15.2021</p>
                                    <a href="#" class="h4-title">Chicken burger with double nuggets</a>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                        explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                        blanditiis amet ad.</p>
                                    <a href="#" class="sec-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter-sec section pt-0">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="newsletter-box text-center back-img white-text" style="background-image: url(../../assets/user/images/news.jpg);">
                                <div class="bg-overlay dark-overlay"></div>
                                <div class="sec-wp">
                                    <div class="newsletter-box-text">
                                        <h2 class="h2-title">Subscribe our newsletter</h2>
                                        <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit ad
                                            veritatis.</p>
                                    </div>
                                    <form action="#" class="newsletter-form">
                                        <input type="email" class="form-input" placeholder="Enter your Email Here" required>
                                        <button type="submit" class="sec-btn primary-btn">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- footer starts  -->
    <footer class="site-footer" id="contact">
        <div class="top-footer section">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-info">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="../../assets/user/images/logo.png" alt="">
                                    </a>
                                </div>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, tenetur.
                                </p>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-github-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-flex-box">
                                <div class="footer-table-info">
                                    <h3 class="h3-title">open hours</h3>
                                    <ul>
                                        <li><i class="uil uil-clock"></i> Mon-Thurs : 9am - 22pm</li>
                                        <li><i class="uil uil-clock"></i> Fri-Sun : 11am - 22pm</li>
                                    </ul>
                                </div>
                                <div class="footer-menu food-nav-menu">
                                    <h3 class="h3-title">Links</h3>
                                    <ul class="column-2">
                                        <li>
                                            <a href="#home" class="footer-active-menu">Home</a>
                                        </li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#menu">Menu</a></li>
                                        <li><a href="#gallery">Gallery</a></li>
                                        <li><a href="#blog">Blog</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="footer-menu">
                                    <h3 class="h3-title">Company</h3>
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Cookie Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021 <span class="name">TechieCoder.</span>All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="scrolltop"><i class="uil uil-angle-up"></i></button>
            </div>
        </div>
    </footer>



</div>
</div>





<!-- jquery  -->
<script src="../../assets/user/js/jquery-3.5.1.min.js"></script>
<!-- bootstrap -->
<script src="../../assets/user/js/bootstrap.min.js"></script>
<script src="../../assets/user/js/popper.min.js"></script>

<!-- fontawesome  -->
<script src="../../assets/user/js/font-awesome.min.js"></script>

<!-- swiper slider  -->
<script src="../../assets/user/js/swiper-bundle.min.js"></script>

<!-- mixitup -- filter  -->
<script src="../../assets/user/js/jquery.mixitup.min.js"></script>

<!-- fancy box  -->
<script src="../../assets/user/js/jquery.fancybox.min.js"></script>

<!-- parallax  -->
<script src="../../assets/user/js/parallax.min.js"></script>

<!-- gsap  -->
<script src="../../assets/user/js/gsap.min.js"></script>

<!-- scroll trigger  -->
<script src="../../assets/user/js/ScrollTrigger.min.js"></script>
<!-- scroll to plugin  -->
<script src="../../assets/user/js/ScrollToPlugin.min.js"></script>
<!-- rellax  -->
<!-- <script src="assets/js/rellax.min.js"></script> -->
<!-- <script src="assets/js/rellax-custom.js"></script> -->
<!-- smooth scroll  -->
<script src="../../assets/user/js/smooth-scroll.js"></script>
<!-- custom js  -->
<script src="../../assets/user/js/main.js"></script>

</body>

</html>