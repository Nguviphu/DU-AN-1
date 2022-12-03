<main class="main">
    <div class="main-update-acc">
        <h1 class="user-update-title">Cập nhật tài khoản</h1>
        <?php
        if (isset($_SESSION['info_user']) && (is_array($_SESSION['info_user']))) {
            extract($_SESSION['info_user']);
        }
        ?>
        <form action="index.php?ctrl=update_user" class="form-user">
            <div class="form-user-group">
                <label for="" class="form-user-label">Tên đăng nhập</label>
                <input type="text" class="form-user-input" value="<?= $name ?>" disabled />
            </div>
            <div class="form-user-group">
                <label for="" class="form-user-label">Số điện thoại</label>
                <input type="text" class="form-user-input" value="<?= $phone ?>" />
            </div>
            <div class="form-user-group">
                <label for="" class="form-user-label">Địa chỉ email </label>
                <input type="text" class="form-user-input" value="<?= $email ?>" />
            </div>
            <div class="form-user-group">
                <img src="#" alt="" class="form-user-image" />
                <label for="" class="form-user-label">Ảnh đại diện</label>
                <input type="file" class="form-user-input" value="<?= $image ?>" />
            </div>
            <div class="form-user-group">
                <button class="form-login-btn" type="submit">Cập nhật</button>
            </div>
        </form>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }
        ?>
    </div>
</main>