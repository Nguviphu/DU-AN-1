<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white text-uppercase">
                        Tạo lịch học
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" id="add_khoahoc">
                            <div class="mb-3">
                                <label for="" class="form-label">Mã lịch học</label>
                                <input type="text" name="" class="form-control" disabled />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mã lớp học</label>
                                <select name="class_code" id="" class="form-control">
                                    <option value="" class="form-control">Chọn mã lớp</option>
                                    <?php
                                    $listall_lophoc = loadall_lopHoc();
                                    foreach ($listall_lophoc as $lophoc) {
                                        extract($lophoc);
                                        echo '<option class="form-control" value="' . $class_code . '">' . $class_code . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Thời gian</label>
                                <input type="datetime-local" name="date_time" class="form-control" required />
                            </div>
                            <p style="color: red;font-weight: bold;">
                                <?php
                                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                                ?>
                            </p>
                            <div class="mb-3 text-center">
                                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                <input type="submit" name="btn_add_calendar" value="Thêm mới" class="btn btn-primary mr-3" />
                                <a href="index.php?ctrl=list_calendar"><input type="button" class="btn btn-success" value="Danh sách" /></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of content -->