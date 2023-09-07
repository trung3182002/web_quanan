<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Quản lý bảng <b>Nhân viên</b></h2>
                </div>
                <div class="col-sm-4">               
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm nhân viên mới</span></a>										
                </div>
                <?php if (isset($_POST["btn_add"])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $tbaddnv; ?>
                    </div>
                <?php } ?>      
            </div>
        </div>
        <table class="table table-striped table-hover" style="width: 1200px">
            <thead>
                <tr>						
                    <th>Mã nhân viên</th>
                    <th>Tên nhân viên</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Hình</th>   
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($qtnv as $at) : ?>
                    <tr>						
                        <td><?php echo $at->MaNV ?></td>
                        <td><?php echo $at->TenNV ?></td>
                        <td><?php echo $at->SDT ?></td>
                        <td><?php echo $at->Email ?></td>
                        <td><?php echo $at->NgaySinh ?></td>
                        <td><?php echo $at->GioiTinh ?></td>
                        <td><?php echo $at->DiaChi ?></td>                     
                        <td><img src="../../assets/user/images/nhanvien/<?php echo $at->Hinh ?>" style="width: 120px; height: 60px" alt=""></td>                                             
                        <td>
                            <a href="../admin/suanhanvien.php?maNV=<?php echo $at->MaNV ?>" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                            <a href="../../PHP/Admin/XoaNhanVien.php?maNV=<?php echo $at->MaNV ?>" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>
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
            <form action="../admin/nhanvien.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">						
                    <h4 class="modal-title">Thêm nhân viên</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <input name="txt_tenNV" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input name="txt_SDT" type="number" class="form-control" required>
                    </div>       
                    <div class="form-group">
                        <label>Email</label>
                        <input name="txt_email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input name="txt_pass" type="password" class="form-control" required>
                    </div>        
                    <div class="form-group">
                        <label>Ngày sinh</label>
                        <input name="txt_ngaySinh" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <input name="txt_gioiTinh" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input name="txt_diaChi" type="text" class="form-control" required>
                    </div>                 
                    <div class="form-group">
                        <label>Hình đại diện</label>
                        <input name="hinh" type="file" class="form-control" required>
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