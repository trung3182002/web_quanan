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
    include ("../../PHP/Admin/XuLyDangNhap.php");
    ?>
    <body style="background-image: url(../../assets/user/images/loginbg.jpg);">

        <div class="container" style="margin-left: 600px">         
            <div class="formbx">
                <div class="form signinform">
                    <form action="../admin/dangnhap.php" method="post">

                        <h2>Ẩm Thực Panda</h2>
                        <h3>Đăng Nhập Quản Trị</h3>
                        <input name="email" type="email" placeholder="Email">
                        <input name="password" type="password" placeholder="Mật khẩu">
                        <?php if (isset($_POST["btn_login"])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $tb; ?>
                            </div>
                        <?php } ?> 
                        <input name="btn_login" type="submit" value="Login">

                    </form>
                </div>
                
            </div>
        </div>
   

    </body>

</html>