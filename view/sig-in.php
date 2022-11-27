<main class="main">
            <div class="main-form">
                <form action="index.php?ctrl=dangky" class="form" method="post" enctype="multipart/form-data">
                    <h4 class="form-title">Đăng ký</h4>
                   
                    <div class="form-group">
                        <label for="#" class="form-label">Tên đăng nhập</label>
                        <input type="text" name="fullname" class="form-input" placeholder="Username" />
                        <p style="color: red;"><?php if(!empty($error['fullname'])) echo $error['fullname'] ?></p>
                    </div>

                    <div class="form-group">
                        <label for="#" class="form-label">SĐT</label>
                        <input type="text" name="sdt" class="form-input" placeholder="SĐT" />
                        <p style="color: red;"><?php if(!empty($error['sdt'])) echo $error['sdt'] ?></p>
                    </div>

                    <div class="form-group">
                        <label for="#" class="form-label">Email</label>
                        <input type="text" name="email" class="form-input" placeholder="Example: name@company.com" />
                        <p style="color: red;"><?php if(!empty($error['email'])) echo $error['email'] ?></p>
                    </div>

                    <div class="form-group">
                        <label for="#" class="form-label">Hình ảnh</label>
                        <input type="file" name="image" class="form-input" placeholder="Hình ảnh" />
                        <p style="color: red;"><?php if(!empty($error['image'])) echo $error['image'] ?></p>
                    </div>

                    <div class="form-group">
                        <label for="#" class="form-label">Tạo mật khẩu</label>
                        <input type="password" name="pass" class="form-input" placeholder=" chứa kí tự hoa, thường, số hoặc kí tự đặc biệt" />
                        <p style="color: red;"><?php if(!empty($error['pass'])) echo $error['pass'] ?></p>
                    </div>
                    <div class="form-group">
                        <label for="#" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" name="pass-confirm" class="form-input" />
                        <p style="color: red;"><?php if(!empty($error['pass-confirm'])) echo $error['pass-confirm'] ?></p>
                    </div>


                    <h4 style="color: #16C60C;">
                        <?php 
                           if (isset($thongbao)&&($thongbao!="")) {
                            echo $thongbao;
                           }
                            
                            ?>
                            </h4>



                    <div class="form-group">
                        <input type="submit" name="subscribe" value="Đăng ký" style="background-color: blue; color: white;">
                    </div>

                    <div class="form-signin">
                        <span class="form-sign-text">
                            Đã có tài khoản? <a href="index.php?ctrl=dangnhap">Đăng Nhập</a></span>
                    </div>
                </form>
            </div>
        </main>
