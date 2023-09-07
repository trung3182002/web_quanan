<?php
    include ("../PDOStatement.php");
    $masua = $_GET["maMon"];
    $sqlSelect = "SELECT * FROM amthuc WHERE MaMon = $masua";
    $sta = $pdo->prepare($sqlSelect);
    $sta->execute();

    if ($sta->rowCount() > 0) {
        $mon = $sta->fetchAll(PDO::FETCH_OBJ);
    }

    foreach ($mon as $k) {
        $ten = $k->TenMon;
        $moTa = $k->NoiDung;
        $donGia = $k->DonGia;    
        $hinh = $k->Hinh;
        $loai = $k->MaLoai;
    }

    if (isset($_POST["btn_update"])) {
        $ten = $_POST["txt_tenMon"];
        $noiDung = $_POST["txt_moTa"];
        $donGia = $_POST["txt_donGia"];        
        $hinh = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : "";
        $loaiMon = $_POST['loaiMonEdit'];
       
        $sqlTest = "SELECT * FROM amthuc WHERE TenMon = '$ten'";
        $sta = $pdo->prepare($sqlTest);
        $sta->execute();

        if ($sta->rowCount() > 0) {
            $tbedit = "Đã tồn tại ẩm thực có tên này! Vui lòng nhập lại";
        } else {
            $sql = "UPDATE amthuc SET TenMon='$ten',NoiDung='$noiDung', DonGia=$donGia,Hinh='$hinh',MaLoai=$loaiMon WHERE MaMon = $masua";
           
            $sta = $pdo->prepare($sql);
            $kq = $sta->execute();
            if ($kq) {
                $tbedit = "Cập nhật ẩm thực thành công";
                if ($hinh != "") {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../../assets/user/images/amthuc/$hinh");
                }
            } else {
                $tbedit = "Cập nhật ẩm thực không thành công! Vui lòng kiểm tra lại dữ liệu";
            }
        }
    }
?>