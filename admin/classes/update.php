<?php 
  if(is_array($list_one_lopHoc)){
     extract($list_one_lopHoc);
  }
?>
              
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header text-center bg-dark text-white text-uppercase">
                                    Cập nhật lớp học
                                </div>
                                <div class="card-body">
                                    <form action="index.php?ctrl=update_class" method="POST" id="add_khoahoc">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mã ID</label>
                                            <input type="text" name="" class="form-control" disabled  value="<?php echo $id ?>"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mã lớp</label>
                                            <input type="text" name="class_code" class="form-control" value="<?php if(isset($class_code)&&($class_code!="")) echo $class_code;?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tên lớp học</label>
                                            <input type="text" name="class_name" class="form-control" value="<?php if(isset($class_name)&&($class_name!="")) echo $class_name;?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tên môn học</label>
                                            <input type="text" name="subject" class="form-control"   value="<?php echo $subject ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Giáo viên</label>
                                            <input type="text" name="teacher" class="form-control" value="<?php if(isset($teacher)&&($teacher!="")) echo $teacher;?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Lộ trình</label>
                                            <input type="text" name="number_session" class="form-control" value="<?php if(isset($number_session)&&($number_session!="")) echo $number_session;?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Giá tiền</label>
                                            <input type="text" name="price" class="form-control" value="<?php if(isset($price)&&($price!="")) echo $price;?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tình trạng</label>
                                            <input type="text" name="status" class="form-control" value="<?php if(isset($status)&&($status!="")) echo $status;?>"/>       
                                        </div>
                                        <p style="color: red;font-weight: bold;">
                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                                            ?>
                                        </p>
                                        <div class="mb-3 text-center">
                                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                                            <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                            <input type="submit" name="btn_update_class" value="Cập Nhật"
                                                class="btn btn-primary mr-3" />
                                            <a href="index.php?ctrl=list_lophoc"><input type="button" class="btn btn-success"
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
