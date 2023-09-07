<div class="container" style="width: 800px">
    <form action="../admin/sualoaiamthuc.php?maLoai=<?php echo $maLoaisua ?>" method="post" enctype="multipart/form-data">
        <div class="modal-header">						
            <h4 class="modal-title">Sửa thông tin loại ẩm thực</h4>
        </div>
        <div class="modal-body">					
            <div class="form-group">
                <label>Tên món</label>
                <input name="txt_tenLoai" type="text" class="form-control" value="<?php echo $ten ?>" required>
            </div>
            <div class="form-group">
                <label>Hình minh hoạ</label>
                <input name="hinh" type="file" class="form-control" required>
            </div>                 
        </div>
        <div class="modal-footer">
            <a href="../admin/loaiamthuc.php" class="btn btn-primary">Trở về</a>
            <input name="btn_update" type="submit" class="btn btn-success" value="Sửa">
        </div>
    </form>
    <?php if (isset($_POST["btn_update"])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $tbedit; ?>
        </div>
    <?php } ?>            
</div>