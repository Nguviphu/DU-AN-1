<?php 
  if(is_array($class_detail_for_one_student)){
     extract($class_detail_for_one_student);

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
                                    <form action="index.php?ctrl=update_detail" method="POST" id="add_khoahoc">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mã ID</label>
                                            <input type="text" name="id_class_detail" class="form-control" readonly  value="<?php echo $id ?>"/>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tên lớp học</label>
                                            <input type="text" name="class_name" class="form-control" value="<?php if(isset($class_name)&&($class_name!="")) echo $class_name;?>" readonly/>
                                        </div>


                                        <div class="mb-3">
                                            <label for="" class="form-label">Tên môn học</label>
                                            <input type="text" name="subject" class="form-control"   value="<?php echo $subject ?>" readonly/>
                                        </div>



                                        <div class="mb-3">
                                            <label for="" class="form-label">Phòng học</label>
                                            <select name="room" id="" class="form-control">
                                
                                            <option value="<?=$room_id ?>" class="form-control"><?php echo $rooms_name ?></option>
                                                <?php 
                                                $all_rooms = select_all_room();
                                                    foreach($all_rooms as $room){
                                                        extract($room);

                                                        ?>


                                                    <option value="<?=$room_id ?>" class="form-control"><?=$rooms_name ?></option>

                                                    <?php
                                                    }
                                                ?>
                                            </select>

                                        </div>



                                        <div class="mb-3">
                                            <label for="" class="form-label">Thời gian</label>
                                            <select name="schedule" id="" class="form-control">
                                            <option value="<?=$schedule_id  ?>" class="form-control"><?=$schedule_detail  ?></option>
                                                <?php 
                                                $list_schedule = select_schedule();
                                                    foreach($list_schedule as $schedule){
                                                        extract($schedule);
                                                    echo '<option value="'.$id.'" class="form-control">'.$schedule_detail.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>





                                        <div class="mb-3">
                                            <label for="" class="form-label">Mã lớp</label>
                                            <input type="text" name="class_code" class="form-control" value="<?php if(isset($class_code)&&($class_code!="")) echo $class_code;?>" readonly/>
                                        </div>


                                        <div class="mb-3">
                                            <label for="" class="form-label">Lộ trình</label>
                                            <input type="text" name="number_session" class="form-control" value="<?php if(isset($number_session)&&($number_session!="")) echo $number_session;?>" readonly/>
                                        </div>


                                       
                                      
                                        <div class="mb-3">
                                           
                                            <label for="" class="form-label">Giáo viên</label>
                                            <select name="teacher" id="" class="form-control">
                                
                                            <option value="<?=$teacher_id ?>" class="form-control"><?php echo $name_teacher ?></option>
                                                <?php 
                                                $list_teacher = select_all_teacher();
                                                    foreach($list_teacher as $teacher){
                                                        extract($teacher);

                                                        ?>


                                                    <option value="<?=$id_teacher ?>" class="form-control"><?=$name_teacher ?></option>

                                                    <?php
                                                    }
                                                ?>
                                            </select>

                                            <div class="mb-3">
                                            <label for="" class="form-label">Học viên</label>
                                            <input type="text" name="student" class="form-control" value="<?php if(isset($name)&&($name!="")) echo $name;?>" readonly/>
                                        </div>


                                        <div class="mb-3">
                                            <label for="" class="form-label">Học phí</label>
                                            <input type="text" name="price" class="form-control" value="<?php if(isset($price)&&($price!="")) echo $price;?>" readonly/>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Trạng thái</label>
                                            
                                            
                                            <select name="status" id="" class="form-control">
                                
                                            <option value="<?php echo $status;?>" class="form-control"><?php if(isset($status)&&($status!="")) echo $status;?></option>
                                            
                                            <?php
                                                if(isset($status)&&($status!=="Đã thanh toán")) {

                                                    echo '<option value="Đã thanh toán" class="form-control">Đã thanh toán</option>';

                                                }


                                            ?>

                                            <?php
                                                if(isset($status)&&($status!=="Đang chờ xác nhận")) {

                                                    echo '<option value="Đang chờ xác nhận" class="form-control">Đang chờ xác nhận</option>';

                                                }


                                            ?>
                                            
                                            </select>
                                        </div>
                                        <p style="color: red;font-weight: bold;">
                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                                            ?>
                                        </p>
                                        <div class="mb-3 text-center">
                                            <!-- <input type="text" name="id" value=""> -->
                                            <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                            <input type="submit" name="btn_update_class" value="Cập Nhật"
                                                class="btn btn-primary mr-3" />
                                            <a href="index.php?ctrl=list_detail"><input type="button" class="btn btn-success"
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