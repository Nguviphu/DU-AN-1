
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header text-center bg-dark text-white text-uppercase">
                                    Thêm khoá học
                                </div>
                                <div class="card-body">
                                    <form action="#" method="POST" id="add_khoahoc">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mã khoá học</label>
                                            <input type="text" name="" class="form-control" disabled />
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tên khoá học</label>
                                            <input type="text" name="subject_title" class="form-control" required />
                                        </div>
                                        <p style="color: red;font-weight: bold;">
                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                                            ?>
                                        </p>
                                        <div class="mb-3 text-center">
                                            <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                            <input type="submit" name="btn_add_subjects" value="Thêm mới"
                                                class="btn btn-primary mr-3" />
                                            <a href="index.php?ctrl=list_subjects"><input type="button" class="btn btn-success"
                                                    value="Danh sách" /></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of content -->
