<div class="container" style="width: 800px">
    <form action="../admin/suaamthuc.php?maMon=<?php echo $masua ?>" method="post" enctype="multipart/form-data">
        <div class="modal-header">						
            <h4 class="modal-title">Sửa thông tin ẩm thực</h4>
        </div>
        <div class="modal-body">					
            <div class="form-group">
                <label>Tên món</label>
                <input name="txt_tenMon" type="text" class="form-control" value="<?php echo $ten ?>" required>
            </div>
            <div class="form-group">
                <label>Hình minh hoạ</label>
                <input name="hinh" type="file" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Đơn giá</label>
                <input name="txt_donGia" type="number" class="form-control" value="<?php echo $donGia ?>" required>
            </div>
            <div class="form-group">
                <label>Loại món</label>
                <select name="loaiMonEdit" >
                    <option value="1">Ăn sáng</option>
                    <option value="2" >Ăn trưa</option>
                    <option value="3">Ăn tối</option>
                    <option value="4">Ăn chay</option>
                    <option value="5">Nước uống</option>
                </select>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="txt_moTa" class="form-control" required><?php echo $noiDung ?></textarea>
            </div>           
        </div>
        <div class="modal-footer">
            <a href="../admin/amthuc.php" class="btn btn-primary">Trở về</a>
            <input name="btn_update" type="submit" class="btn btn-success" value="Sửa">
        </div>
    </form>
    <?php if (isset($_POST["btn_update"])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $tbedit; ?>
        </div>
    <?php } ?>            
</div>