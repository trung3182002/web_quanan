<?php foreach ($khdn as $kh) : ?>
    <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Ảnh Đại Diện</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile mb-4" src="../../assets/user/images/khachhang/<?php echo $kh->Hinh ?>" alt="">                 
                        <br>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Cập nhật ảnh</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Chi Tiết Tài Khoản</div>
                    <div class="card-body">
                        <form action=../user/thongtin_khachhang.php?maKH=<?php echo $kh->MaKH ?> method="post" enctype="multipart/form-data">                             
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1">Tên khách hàng</label>
                                    <input name="txt_tenKH" class="form-control" id="inputOrgName" type="text" value="<?php echo $kh->TenKH ?>">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1">Giới tính</label>
                                    <input name="txt_gioiTinh" class="form-control" id="inputLocation" type="text" value="<?php echo $kh->GioiTinh ?>">
                                </div>
                            </div>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1">Địa chỉ</label>
                                <input name="txt_diaChi" class="form-control" id="inputUsername" type="text" value="<?php echo $kh->DiaChi ?>">
                            </div>            
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1">Địa chỉ Email</label>
                                <input name="txt_email" class="form-control" id="inputEmailAddress" type="email" value="<?php echo $kh->Email ?>">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1">Số điện thoại</label>
                                    <input name="txt_SDT" class="form-control" id="inputPhone" type="number"  value="<?php echo $kh->SDT ?>">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1">Ngày sinh</label>
                                    <input name="txt_ngaySinh" class="form-control" id="inputBirthday" type="text" name="birthday" value="<?php echo $kh->NgaySinh ?>">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button name="btn_update" class="btn btn-primary" type="submit">Cập nhật thông tin</button>                                         
                        </form>
                       
                        <form action="../../PHP/User/XuLyDangXuat.php" method="get" style="float: right">
                            <button name="btn_logout" class="btn btn-primary" type="submit" style="background-color: orangered">Đăng xuất</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>