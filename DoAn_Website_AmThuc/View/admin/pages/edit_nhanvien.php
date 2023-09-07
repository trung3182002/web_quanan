<div class="container">
    <form action="../admin/suanhanvien.php?maNV=<?php echo $masua ?>" method="post" enctype="multipart/form-data">
        <div class="modal-header">						
            <h4 class="modal-title">Cập nhật nhân viên</h4>          
        </div>
        <div class="modal-body">					
            <div class="form-group">
                <label>Tên nhân viên</label>
                <input name="txt_tenNV" type="text" class="form-control" value="<?php echo $tennv ?>" required>
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input name="txt_SDT" type="number" class="form-control" value="<?php echo $sdtnv ?>" required>
            </div>       
            <div class="form-group">
                <label>Email</label>
                <input name="txt_email" type="email" class="form-control" value="<?php echo $emailnv ?>" required>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="txt_pass" type="password" class="form-control" value="<?php echo $mknv ?>" required>
            </div>        
            <div class="form-group">
                <label>Ngày sinh</label>
                <input name="txt_ngaySinh" type="date" class="form-control" value="<?php echo $nsnv ?>" required>
            </div>
            <div class="form-group">
                <label>Giới tính</label>
                <input name="txt_gioiTinh" type="text" class="form-control" value="<?php echo $gtnv ?>" required>
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input name="txt_diaChi" type="text" class="form-control" value="<?php echo $dcnv ?>" required>
            </div>                 
            <div class="form-group">
                <label>Hình đại diện</label>
                <input name="hinh" type="file" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <a href="../admin/nhanvien.php"  class="btn btn-primary" >Trở về</a>
            <input name="btn_update" type="submit" class="btn btn-success" value="Cập nhật">
        </div>
    </form>
    <?php if (isset($_POST["btn_update"])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $tbeditnv; ?>
        </div>
    <?php } ?>   
</div>