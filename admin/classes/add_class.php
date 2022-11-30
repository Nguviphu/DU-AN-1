<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white text-uppercase">
                        Thêm mới lớp học
                    </div>
                    <div class="card-body">
                        <form action="index.php?act=addlophoc" method="POST" id="add_lophoc">
                            <div class="mb-3">
                                <label for="" class="form-label">ID</label>
                                <input type="text" name="ma_loai" class="form-control" disabled />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mã lớp</label>
                                <input type="text" name="class_code" class="form-control" placeholder="VD: CBxx or NCxx" required />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Giáo viên</label>
                                <input type="text" name="teacher" class="form-control" placeholder="Tên Giáo Viên" required />
                            </div>
                            <!-- <div class="mb-3">
                                <label for="" class="form-label">Môn học</label>
                                <input type="text" name="subject" class="form-control" placeholder="Cơ bản or Nâng cao" required />
                            </div> -->

                            <div class="mb-3">
                                <label for="" class="form-label">Môn học</label>
                                <select name="subject" class="form-control" id="" required>
                                    <option value=""></option>
                                    <option value="">Cơ bản 1</option>
                                    <option value="">Cơ bản 2</option>
                                    <option value="">Nâng cao 1</option>
                                    <option value="">Nâng cao 2</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Lộ trình</label>
                                <input type="text" name="number_session" class="form-control" placeholder="Số buổi" required />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Lịch trình</label>
                                <select name="schedule_id" class="form-control" id="" required>
                                    <option value=""></option>
                                    <option value="">Ca 1 ( Thứ 2 - 4 - 6) 7h15-9h15</option>
                                    <option value="">Ca 2 ( Thứ 2 - 4 - 6) 9h25-11h25</option>
                                    <option value="">Ca 3 ( Thứ 2 - 4 - 6) 16h30-18h30</option>
                                    <option value="">Ca 4 ( Thứ 2 - 4 - 6) 19h00-21h00</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Trạng thái</label>
                                <select name="status" class="form-control" id="" required>
                                    <option value=""></option>
                                    <option value="">Đang học</option>
                                    <option value="">Đã xong</option>
                                </select>
                            </div>
                            <div class="mb-3 text-center">
                                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                <input type="submit" name="subscribe" value="Thêm mới" class="btn btn-primary mr-3" />
                                <a href="index.php?act=listlophoc"><input type="button" class="btn btn-success" value="Danh sách" /></a>
                            </div>
                        </form>
                        <?php if (isset($message) && ($message != "")) {
                            echo "<h3 class='alert-text'>$message</h3>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of content -->