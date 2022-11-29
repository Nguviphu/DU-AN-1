<?php 
  if(is_array($loadone_monHoc)){
     extract($loadone_monHoc);
  }
?>
              
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header text-center bg-dark text-white text-uppercase">
                                    Thêm khoá học
                                </div>
                                <div class="card-body">
                                    <form action="index.php?ctrl=update_subjects" method="POST" id="add_khoahoc">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mã khoá học</label>
                                            <input type="text" name="" class="form-control" disabled  value="<?php echo $id ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tên khoá học</label>
                                            <input type="text" name="subject_title" class="form-control" value="<?php if(isset($subject_title)&&($subject_title!="")) echo $subject_title;?>"/>
                                        </div>
                                        <p style="color: red;font-weight: bold;">
                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                                            ?>
                                        </p>
                                        <div class="mb-3 text-center">
                                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                                            <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                            <input type="submit" name="btn_update_subjects" value="Cập Nhật"
                                                class="btn btn-primary mr-3" />
                                            <a href="index.php?ctr=list_subjects"><input type="button" class="btn btn-success"
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
