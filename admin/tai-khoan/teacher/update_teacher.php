<?php
if (is_array($load_one_teacher)) {
    extract($load_one_teacher);
}
?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white text-uppercase">
                        Cập nhật giáo viên
                    </div>
                    <div class="card-body">
                        <form action="index.php?ctrl=update_teacher" method="POST" id="add_khoahoc">
                            <div class="mb-3">
                                <label for="" class="form-label">Mã ID</label>
                                <input type="text" name="" class="form-control" disabled value="<?php echo $id ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Họ tên</label>
                                <input type="text" name="full_name" class="form-control" value="<?php if (isset($full_name) && ($full_name != "")) echo $full_name; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Tên đăng nhập</label>
                                <input type="text" name="user_name" class="form-control" value="<?php if (isset($name) && ($name != "")) echo $name; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mật khẩu</label>
                                <input type="password" name="pass" class="form-control" value="<?php if (isset($password) && ($password != "")) echo $password; ?>" />
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="<?php if (isset($email) && ($email != "")) echo $email; ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" value="<?php if (isset($phone) && ($phone != "")) echo $phone; ?>" />
                            </div>
                            <p style="color: red;font-weight: bold;">
                                <?php
                                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                                ?>
                            </p>
                            <div class="mb-3 text-center">
                                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                <input type="submit" name="btn_update_teacher" value="Cập Nhật" class="btn btn-primary mr-3" />
                                <a href="index.php?ctr=list_subjects"><input type="button" class="btn btn-success" value="Danh sách" /></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of content -->