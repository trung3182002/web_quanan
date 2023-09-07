<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Quản lý bảng <b>Loại ẩm thực</b></h2>
                </div>
                <div class="col-sm-4">               
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm loại ẩm thực mới</span></a>										
                </div>
                <?php if (isset($_POST["btn_add"])) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $tbaddl; ?>
                    </div>
                <?php } ?>               
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>						
                    <th>Mã loại</th>
                    <th>Tên loại</th> 
                     <th>Hình minh hoạ</th>      
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($loaiamthuc as $at) : ?>
                    <tr>						
                        <td><?php echo $at->MaLoai ?></td>
                        <td><?php echo $at->TenLoai ?></td>
                        <td><img src="../../assets/user/images/menu/<?php echo $at->HinhMH ?>" style="width: 100px; height: 60px" alt=""></td>                     
                        <td>
                            <a href="../admin/sualoaiamthuc.php?maLoai=<?php echo $at->MaLoai ?>" class="edit"><i class="material-icons" title="Edit">&#xE254;</i></a>
                            <a href="../../PHP/Admin/XoaLoaiAmThuc.php?maLoai=<?php echo $at->MaLoai ?>" class="delete"><i class="material-icons" title="Delete">&#xE872;</i></a>
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
            <form action="../admin/loaiamthuc.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">						
                    <h4 class="modal-title">Thêm loại ẩm thực</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <div class="form-group">
                        <label>Tên loại</label>
                        <input name="txt_tenLoai" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Hình minh hoạ</label>
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