<?php
    include ("../PDOStatement.php");
    $masua = $_GET["maNV"];
    $sqlSelect = "SELECT * FROM nhanvien WHERE MaNV = $masua";
    $sta = $pdo->prepare($sqlSelect);
    $sta->execute();

    if ($sta->rowCount() > 0) {
        $mon = $sta->fetchAll(PDO::FETCH_OBJ);
    }

    foreach ($mon as $k) {
        $tennv = $k->TenNV;   
        $sdtnv = $k->SDT;   
        $emailnv = $k->Email;   
        $mknv = $k->MatKhau;   
        $nsnv = $k->NgaySinh;   
        $gtnv = $k->GioiTinh;   
        $dcnv = $k->DiaChi;   
        $hinhnv = $k->Hinh;   
    }

    
    if (isset($_POST["btn_update"])) {
        $tennv = $_POST["txt_tenNV"];       
        $sdtnv = $_POST["txt_SDT"];  
        $emailnv = $_POST['txt_email'];
        $mknv = $_POST['txt_pass'];
        $nsnv = $_POST['txt_ngaySinh'];
        $gtnv = $_POST['txt_gioiTinh'];
        $dcnv = $_POST['txt_diaChi'];
        $hinhnv = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : "";
        
       
        $sqlTest = "SELECT * FROM nhanvien WHERE TenNV = '$ten'";
        $sta = $pdo->prepare($sqlTest);
        $sta->execute();

        if ($sta->rowCount() > 0) {
            $tbaddnv = "Đã tồn tại nhân viên có tên này! Vui lòng nhập lại";
        } else {
            $sql = "UPDATE nhanvien SET TenNV='$tennv',SDT='$sdtnv',Email='$emailnv',NgaySinh='$nsnv',GioiTinh='$gtnv',DiaChi='$dcnv',MatKhau='$mknv',Hinh='$hinhnv' WHERE MaNV =$masua";
           
            $sta = $pdo->prepare($sql);
            $kq = $sta->execute();
            if ($kq) {
                $tbeditnv = "Cập nhật nhân viên thành công";
                if ($hinh != "") {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../../assets/user/images/nhanvien/$hinh");
                }
            } else {
                $tbeditnv = "Cập nhật không thành công! Vui lòng kiểm tra lại dữ liệu";
            }
        }
    }
?>