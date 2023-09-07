<?php
    
    if (isset($_POST["btn_add"])) {
        $ten = $_POST["txt_tenMon"];
        $moTa = $_POST["txt_moTa"];
        $donGia = $_POST["txt_donGia"];        
        $hinh = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : "";
        $loai = $_POST['loaiMon'];
       
        $sqlTest = "SELECT * FROM amthuc WHERE TenMon = '$ten'";
        $sta = $pdo->prepare($sqlTest);
        $sta->execute();

        if ($sta->rowCount() > 0) {
            $tb = "Đã tồn tại ẩm thực có tên này! Vui lòng nhập lại";
        } else {
            $sql = "INSERT INTO amthuc(TenMon, NoiDung, DonGia, Hinh, MaLoai) VALUES ('$ten', '$moTa', $donGia, '$hinh', $loai)";
           
            $sta = $pdo->prepare($sql);
            $kq = $sta->execute();
            if ($kq) {
                $tbadd = "Thêm ẩm thực thành công";
                if ($hinh != "") {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../../assets/user/images/amthuc/$hinh");
                }
            } else {
                $tbadd = "Thêm không thành công! Vui lòng kiểm tra lại dữ liệu";
            }
        }
    }
?>