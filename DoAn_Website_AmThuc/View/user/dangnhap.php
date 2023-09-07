<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng Nhập</title>
        <link rel="stylesheet" href="../../assets/user/css/login.css">
        <link rel="icon" href="../../assets/user/images/icon.png" type="image/icon type">
        <link rel="stylesheet" href="../../assets/user/css/bootstrap.min.css">
    </head>
    <?php
    session_destroy();
    include ("../../PHP/PDOStatement.php");
    include ("../../PHP/User/XuLyDangNhap.php");
    include ("../../PHP/User/ThemKhachHang.php");
    
    ?>
    <body style="background-image: url(../../assets/user/images/loginbg.jpg);">

        <div class="container">
            <div class="loginbg">
                <div class="box signin">
                    <h2>Đã Có Tài Khoản ?</h2>
                    <button style="margin-top: 10px" class="signinbtn">Đăng Nhập</button>
                </div>
                <div class="box signup">
                    <h2>Không Có Tài Khoản ?</h2>
                    <button style="margin-top: 10px" class="signupbtn">Đăng Ký</button>
                </div>
            </div>
            <div class="formbx" style="height: 720px">
                <div class="form signinform">
                    <form action="../user/dangnhap.php" method="post">

                        <h2>Ẩm Thực Panda</h2>
                        <h3>Đăng Nhập</h3>
                        <input name="email" type="email" placeholder="Email">
                        <input name="password" type="password" placeholder="Mật khẩu">
                        <?php if (isset($_POST["btn_login"])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $tbdn; ?>
                            </div>
                        <?php } ?> 
                        <input name="btn_login" type="submit" value="Login">

                    </form>
                </div>
                <div class="form signupform">
                    <form action="../user/dangnhap.php" method="post">
                        <h3>Đăng Ký</h3>
                        <input name="txt_tenKH" type="text" placeholder="Nhập họ và tên" required>
                        <input name="txt_SDT" type="number" placeholder="Nhập số điện thoại" required>
                        <input name="txt_email" type="email"  placeholder="Nhập email" required>
                        <input name="txt_pass" type="password" placeholder="Nhập mật khẩu" required>
                        <input name="txt_ngaySinh" type="date" required>
                        <input name="txt_gioiTinh" type="text" placeholder="Nhập giới tính" required>
                        <input name="txt_diaChi" type="text" placeholder="Nhập địa chỉ" required>
                        <input name="hinh" type="file"  required>
                        <?php if (isset($_POST["btn_dk"])) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $tbaddkh; ?>
                            </div>
                        <?php } ?> 
                        <input name="btn_dk" type="submit" value="Đăng Ký">
                    </form>
                </div>
            </div>
        </div>
        <script>
            const signinbtn = document.querySelector('.signinbtn');
            const signupbtn = document.querySelector('.signupbtn');
            const formbx = document.querySelector('.formbx');
            const body = document.querySelector('body')

            signupbtn.onclick = function () {
                formbx.classList.add('active')
                body.classList.add('active')
            }
            signinbtn.onclick = function () {
                formbx.classList.remove('active')
                body.classList.remove('active')
            }
        </script>

    </body>

</html>