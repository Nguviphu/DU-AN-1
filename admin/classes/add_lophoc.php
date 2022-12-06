<div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header text-center bg-dark text-white text-uppercase">
                                    Tạo lớp học
                                </div>
                                <div class="card-body">
                                    <form action="index.php?ctrl=add_lophoc" method="POST" id="add_khoahoc">
                                    <div class="mb-3">
                                            <label for="" class="form-label">Mã lớp</label>
                                            <input type="text" name="class_code" class="form-control" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Phòng học</label>

                                            <select name="room" id="" class="form-control">
                                                <option value="" class="form-control">Chọn môn học</option>
                                                <?php 
                                                $list_room=select_all_room() ;

                                                print_r($list_room);
                                                    foreach($list_room as $room){
                                                        extract($room);
                                                    echo '<option value="'.$id_room.'" class="form-control">'.$rooms_name.'</option>';
                                                    }
                                                ?>
                                            </select>
                                            
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tên lớp</label>
                                            <input type="text" name="class_name" class="form-control" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Môn học</label>
                                            <select name="subject" id="" class="form-control">
                                                <option value="" class="form-control">Chọn môn học</option>
                                                <?php 
                                                $listall_monhoc=loadall_monHoc();
                                                    foreach($listall_monhoc as $monhoc){
                                                        extract($monhoc);
                                                    echo '<option value="'.$subject_title.'" class="form-control">'.$subject_title.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Giáo viên</label>
                                            <select name="teacher" id="" class="form-control">
                                            <option value="" class="form-control">Chọn môn học</option>
                                                <?php 
                                                $list_teacher = select_all_teacher();
                                                    foreach($list_teacher as $teacher){
                                                        extract($teacher);
                                                    echo '<option value="'.$id_teacher.'" class="form-control">'.$name_teacher.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>



                                        <div class="mb-3">
                                            <label for="" class="form-label">Thời gian</label>
                                            <select name="schedule" id="" class="form-control">
                                            <option value="" class="form-control">Chọn thời gian</option>
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
                                            <label for="" class="form-label">Lộ trình</label>
                                            <input type="text" name="number_session" class="form-control" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Giá tiền</label>
                                            <input type="text" name="price" class="form-control" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tình trạng</label>
                                            <select name="status" id="" class="form-control">
                                            <option value="Còn lớp">Còn lớp</option>
                                            <option value="Hết lớp">Hết lớp</option>    
                                            </select>
                                        </div>
                                        
                                        <p style="color: red;font-weight: bold;">
                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                                            ?>
                                        </p>
                                        <div class="mb-3 text-center">
                                            <input type="reset" value="Nhập lại" class="btn btn-danger mr-3" />
                                            <input type="submit" name="btn_add_class" value="Tạo lớp"
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