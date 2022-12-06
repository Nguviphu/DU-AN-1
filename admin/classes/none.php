<main class="main">
            <div class="main-form">
                <?php if(isset($message)) echo $message ?>
                <form action="index.php?ctrl=addlophoc" class="form" method="post" enctype="multipart/form-data">
                    <h4 class="form-title">Tạo mới Lớp học</h4>
                   
                    <div class="form-group">
                        <label for="#" class="form-label">Mã Lớp</label>
                        <input type="text" name="class_code" class="form-input" placeholder="VD:CBxx or NCxx" />
                        <p style="color: red;"><?php if(!empty($error[''])) echo $error['fullname'] ?></p>
                    </div>

                    <div class="form-group">
                        <label for="#" class="form-label">Giáo Viên</label>
                        <input type="text" name="teacher" class="form-input" placeholder="Tên GV" />
                        <p style="color: red;"><?php if(!empty($error['sdt'])) echo $error['sdt'] ?></p>
                    </div>

                    <div class="form-group">
                        <label for="#" class="form-label">Môn Học</label>
                        <input type="text" name="subject" class="form-input" placeholder="Cơ bản or Nâng cao" />
                        <p style="color: red;"><?php if(!empty($error['email'])) echo $error['email'] ?></p>
                    </div>

                    <div class="form-group">
                        <label for="#" class="form-label">Lộ Trình</label>
                        <input type="text" name="number_session" class="form-input" placeholder="Số buổi" />
                        <p style="color: red;"><?php if(!empty($error['image'])) echo $error['image'] ?></p>
                    </div>

                    <div class="form-group">
                        <label for="#" class="form-label">Lịch Trình</label>
                        <input type="text" name="schedule_id" class="form-input" />
                        <p style="color: red;"><?php if(!empty($error['pass'])) echo $error['pass'] ?></p>
                    </div>
                    <div class="form-group">
                        <label for="#" class="form-label">Trạng Thái</label>
                        <input type="text" name="status" class="form-input" />
                        <p style="color: red;"><?php if(!empty($error['pass-confirm'])) echo $error['pass-confirm'] ?></p>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="subscribe" value="Đăng ký" style="background-color: blue; color: white;">
                    </div>
                </form>
            </div>
        </main>