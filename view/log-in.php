<main class="main">
    <div class="main-form-login">
        <form action="index.php?ctrl=dangnhap" class="form-login" method="post">
            <h4 class="form-title">Đăng nhập</h4>
            <div class="form-login-group">
                <label for="#" class="form-label"><i class="fas fa-user"></i>Tài khoản</label>
                <input type="text" name="name_user" class="form-login-input" placeholder="Username" />
            </div>
            <div class="form-login-group">
                <label for="#" class="form-label"><i class="fas fa-lock"></i>Password</label>
                <input type="password" name="pass_user" class="form-login-input" placeholder="Password" />
            </div>

            <div class="form-control-group">
                <div class="form-control-remember">
                    <input type="checkbox" name="" class="form-control-checkbox" id="form-checkbox" />
                    <label for="form-checkbox" class="form-control-label">Ghi nhớ tài khoản</label>
                </div>
                <a href="#" class="form-control-repass">Quên mật khẩu ?</a>
            </div>

            <div class="form-login-group">

                <h4 style="color: #16C60C;">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h4>
                <input type="submit" name="login" class="form-login-btn" value="Đăng nhập">
            </div>
            <div class="form-singup">
                <span class="form-signup-text">Bạn chưa có tài khoản? <a href="index.php?ctrl=dangky">Đăng
                        ký</a></span>
            </div>
        </form>
    </div>
</main>