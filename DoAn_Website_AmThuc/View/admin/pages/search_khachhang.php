<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Quản lý bảng <b>Khách hàng</b></h2>
                </div>                      
            </div>
        </div>
        <table class="table table-striped table-hover" style="width: 1200px">
            <thead>
                <tr>						
                    <th>Mã khách</th>
                    <th>Tên khách</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Hình</th>                  
                </tr>
            </thead>
            <tbody>
                <?php foreach ($qttkKhachHang as $at) : ?>
                    <tr>						
                        <td><?php echo $at->MaKH ?></td>
                        <td><?php echo $at->TenKH ?></td>
                        <td><?php echo $at->SDT ?></td>
                        <td><?php echo $at->Email ?></td>
                        <td><?php echo $at->NgaySinh ?></td>
                        <td><?php echo $at->GioiTinh ?></td>
                        <td><?php echo $at->DiaChi ?></td>
                        <td><?php echo $at->Hinh ?></td>
                        <td><img src="../../assets/user/images/khachhang/<?php echo $at->Hinh ?>" style="width: 120px; height: 60px" alt=""></td>                                             
                    </tr>    
                <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>