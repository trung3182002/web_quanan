<?php
    
    if (isset($_POST["btn_dk"])) {
        $ten = $_POST["txt_tenKH"];       
        $sdt = $_POST["txt_SDT"];  
        $email = $_POST['txt_email'];
        $mk = $_POST['txt_pass'];
        $ns = $_POST['txt_ngaySinh'];
        $gt = $_POST['txt_gioiTinh'];
        $dc = $_POST['txt_diaChi'];
        $hinh = $_FILES["hinh"]["error"] == 0 ? $_FILES["hinh"]["name"] : "";
        
       
        $sqlTest = "SELECT * FROM khachhang WHERE Email = '$email'";
        $sta = $pdo->prepare($sqlTest);
        $sta->execute();

        if ($sta->rowCount() > 0) {
            $tbaddnv = "Đã tồn tại nhân viên có tên này! Vui lòng nhập lại";
        } else {
            $sql = "INSERT INTO khachhang(TenKH, SDT, Email, NgaySinh, GioiTinh, DiaChi, MatKhau, Hinh) VALUES ('$ten', '$sdt', '$email', '$ns', '$gt', '$dc', $mk, '$hinh')";
           
            $sta = $pdo->prepare($sql);
            $kq = $sta->execute();
            if ($kq) {
                $tbaddkh = "Thêm khách hàng thành công";
                if ($hinh != "") {
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], "../../assets/user/images/khachhang/$hinh");
                }
            } else {
                $tbaddkh = "Thêm không thành công! Vui lòng kiểm tra lại dữ liệu";
            }
        }
    }
?>