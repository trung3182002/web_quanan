<?php
    include ("../PDOStatement.php");
    $mactkh = $_GET["maKH"];
   
    if (isset($_POST["btn_update"])) {
        $tennv = $_POST["txt_tenKH"];       
        $sdtnv = $_POST["txt_SDT"];  
        $emailnv = $_POST['txt_email'];
        $nsnv = $_POST['txt_ngaySinh'];
        $gtnv = $_POST['txt_gioiTinh'];
        $dcnv = $_POST['txt_diaChi'];
        $hinhnv = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : "";
        
       
        $sqlTest = "SELECT * FROM khachhang WHERE TenKH = '$ten'";
        $sta = $pdo->prepare($sqlTest);
        $sta->execute();

        if ($sta->rowCount() > 0) {
            $tbaddnv = "Đã tồn tại khách hàng có tên này! Vui lòng nhập lại";
        } else {
            $sql = "UPDATE khachhang SET TenKH='$tennv',SDT='$sdtnv',Email='$emailnv',NgaySinh='$nsnv',GioiTinh='$gtnv',DiaChi='$dcnv',Hinh='$hinhnv' WHERE MaKH =$mactkh";
           
            $sta = $pdo->prepare($sql);
            $kq = $sta->execute();
            if ($kq) {
                $tbeditnv = "Cập nhật nhân viên thành công";
                if ($hinh != "") {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../../assets/user/images/nhanvien/$hinh");
                }
                header("Location: ../../View/user/thongtin_khachhang.php");
            } else {
                $tbeditnv = "Cập nhật không thành công! Vui lòng kiểm tra lại dữ liệu";
            }
        }
    }
?>