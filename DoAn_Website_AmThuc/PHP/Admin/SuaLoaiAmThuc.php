<?php
    include ("../PDOStatement.php");
    $maLoaisua = $_GET["maLoai"];
    $sqlSelect = "SELECT * FROM loaiamthuc WHERE MaLoai = $maLoaisua";
    $sta = $pdo->prepare($sqlSelect);
    $sta->execute();

    if ($sta->rowCount() > 0) {
        $mon = $sta->fetchAll(PDO::FETCH_OBJ);
    }

    foreach ($mon as $k) {
        $ten = $k->TenLoai;    
    }

    if (isset($_POST["btn_update"])) {
        $ten = $_POST["txt_tenLoai"];        
        $hinh = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : "";     
       
        $sqlTest = "SELECT * FROM loaiamthuc WHERE TenLoai = '$ten'";
        $sta = $pdo->prepare($sqlTest);
        $sta->execute();

        if ($sta->rowCount() > 0) {
            $tbedit = "Đã tồn tại loại ẩm thực có tên này! Vui lòng nhập lại";
        } else {
            $sql = "UPDATE loaiamthuc SET TenLoai='$ten', HinhMH='$hinh' WHERE MaLoai = $maLoaisua";
           
            $sta = $pdo->prepare($sql);
            $kq = $sta->execute();
            if ($kq) {
                $tbedit = "Cập nhật ẩm thực thành công";
                if ($hinh != "") {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../../assets/user/images/menu/$hinh");
                }
            } else {
                $tbedit = "Cập nhật ẩm thực không thành công! Vui lòng kiểm tra lại dữ liệu";
            }
        }
    }
?>