<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Quản lý bảng <b>Ẩm thực</b></h2>
                </div>
                <div class="col-sm-4">               
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm ẩm thực mới</span></a>										
                </div>
                <?php if (isset($_POST["btn_add"])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $tbadd; ?>
                    </div>
                <?php } ?>               
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>						
                    <th>Mã món</th>
                    <th>Tên món</th>
                    <th>Hình</th>
                    <th>Đơn giá</th>
                    <th>Loại món</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($amthucs as $at) : ?>
                    <tr>						
                        <td><?php echo $at->MaMon ?></td>
                        <td><?php echo $at->TenMon ?></td>
                        <td><img src="../../assets/user/images/amthuc/<?php echo $at->Hinh ?>" style="width: 200px; height: 60px" alt=""></td>
                        <td><?php echo $at->DonGia ?></td>
                        <td><?php echo $at->MaLoai ?></td>
                        <td>
                            <a href="../admin/suaamthuc.php?maMon=<?php echo $at->MaMon ?>" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                            <a href="../../PHP/Admin/XoaAmThuc.php?maMon=<?php echo $at->MaMon ?>" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>    
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="../admin/amthuc.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">						
                    <h4 class="modal-title">Thêm ẩm thực</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Tên món</label>
                        <input name="txt_tenMon" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Hình minh hoạ</label>
                        <input name="hinh" type="file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Đơn giá</label>
                        <input name="txt_donGia" type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Loại món</label>
                        <select name="loaiMon">
                            <option value="1">Ăn sáng</option>
                            <option value="2">Ăn trưa</option>
                            <option value="3">Ăn tối</option>
                            <option value="4">Ăn chay</option>
                            <option value="5">Nước uống</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="txt_moTa" class="form-control" required></textarea>
                    </div>           
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Huỷ">
                    <input name="btn_add" type="submit" class="btn btn-success" value="Thêm">
                </div>
            </form>
        </div>
    </div>
</div>