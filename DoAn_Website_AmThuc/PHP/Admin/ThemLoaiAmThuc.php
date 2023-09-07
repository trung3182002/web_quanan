<?php
    
    if (isset($_POST["btn_add"])) {
        $ten = $_POST["txt_tenLoai"];
        $hinh = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : "";
        
       
        $sqlTest = "SELECT * FROM loaiamthuc WHERE TenLoai = '$ten'";
        $sta = $pdo->prepare($sqlTest);
        $sta->execute();

        if ($sta->rowCount() > 0) {
            $tb = "Đã tồn tại ẩm thực có tên này! Vui lòng nhập lại";
        } else {
            $sql = "INSERT INTO loaiamthuc(TenLoai, HinhMH) VALUES ('$ten','$hinh')";
           
            $sta = $pdo->prepare($sql);
            $kq = $sta->execute();
            if ($kq) {
                $tbaddl = "Thêm loại ẩm thực thành công";
                if ($hinh != "") {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../../assets/user/images/menu/$hinh");
                }
            } else {
                $tbaddl = "Thêm không thành công! Vui lòng kiểm tra lại dữ liệu";
            }
        }
    }
?>