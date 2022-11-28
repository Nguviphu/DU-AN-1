<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center bg-danger text-white text-uppercase">
                        Cập nhật lớp học
                    </div>
                    <div class="card-body">
                        <form action="index.php?act=updatelophoc" method="POST" id="edit_lophoc">
                            <div class="mb-3">
                                <label for="" class="form-label">ID</label>
                                <input type="text" name="ma_loai" class="form-control" readonly value="<?= $id ?>"/>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mã lớp</label>
                                <input type="text" name="class_code" class="form-control" required value="" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Giáo viên</label>
                                <input type="text" name="teacher" class="form-control" required value=""/>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Môn học</label>
                                <input type="text" name="subject" class="form-control"  required value=""/>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Lộ trình</label>
                                <input type="text" name="number_session" class="form-control" required value=""/>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Lịch trình</label>
                                <input type="text" name="schedule_id" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Trạng thái</label>
                                <input type="text" name="status" class="form-control" />
                            </div>
                            <div class="mb-3 text-center">
                                <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3" />
                                <a href="index.php?act=listlophoc"><input type="button" class="btn btn-success" value="Danh sách" /></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>