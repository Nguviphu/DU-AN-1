<?php 



  if(isset($one_classes) &&  is_array($one_classes) && !empty($one_classes)){
     extract($one_classes);
   
?>
    
    
    <div class="box-pay-total">
                <marquee behavior="" direction=""><h3 style="color: #D0001E;">Quý học viên vui lòng check lại thông tin khóa học của mình và thực hiện thanh toán tại trang sau.</h3></marquee>
                  
                <img src="./public/image/Hoàn thành 12.gif" alt="">
                <div class="banner-pay">
                        <img src="./public/image/banner/bavkground-mbbank3.png" alt="">
                        

                </div>

             
                        <div class="card">
                                <div class="card-header text-center bg-dark text-white text-uppercase">
                                    Thông tin khóa học
                                </div>
                                <div class="card-body">
                                    <form action="index.php?ctrl=sign-sourse-2" method="post" id="add_khoahoc">
                                        <div class="mb-3">
                                            <label for="" class="form-label" style="color: #D0001E;">ID Lớp học</label>
                                            <input type="text" name="class" class="form-control" value="<?php echo $id; ?>"  readonly /> <br>
                                            
                                        </div>


                                        <div class="mb-3">
                                            <label for="" class="form-label" style="color: #D0001E;">ID Giảng viên</label>
                                            <input type="text" name="teacher" class="form-control" value="<?php echo $teacher_id; ?>"  readonly /> <br>
                                            
                                        </div>


                                        <div class="mb-3">
                                            <label for="" class="form-label" style="color: #D0001E;">ID Thời gian</label>
                                            <input type="text" name="schedule" class="form-control" value="<?php echo $schedule_id; ?>"  readonly /> <br>
                                            
                                        </div>



                                        <div class="mb-3">
                                                <label for="" class="form-label" style="color: #D0001E;">Mã học viên</label>
                                                <input type="text" name="student" class="form-control" value="<?php echo $_SESSION['info_user']['id'] ?>" disabled />
                                            </div>

                                            <div class="mb-3">
                                                <label for="" class="form-label" style="color: #D0001E;">Mã phòng học</label>
                                                <input type="text" name="room" class="form-control" value="<?php echo $room_id; ?>"  readonly />
                                            </div>

                                        <div class="mb-3">
                                        <label for="" class="form-label" style="color: #D0001E;">SĐT học viên</label>
                                        <input type="text" name="" value="<?php echo $_SESSION['info_user']['phone'] ?>"  class="form-control" disabled />
                                        </div>



                                        <div class="mb-3">
                                            <label for="" class="form-label" style="color: #D0001E;">Mã lớp học</label>
                                            <input type="text" name="" value="<?php echo $class_code  ?>" class="form-control" disabled />
                                        </div>

                                        <div class="mb-3">
                                                <label for="" class="form-label" style="color: #D0001E;">Tên phòng họp</label>
                                                <input type="text" name="" value="<?php echo $rooms_name  ?>" class="form-control" disabled />
                                            </div>

                                            <p style="color: red;font-weight: bold;">
                                            <?php
                                                if(isset($thongbao)&&($thongbao!="")) echo $thongbao; 
                                            ?>
                                        </p>

                                        <input type="hidden" name="status" value="Đang chờ xác nhận">

                                        <div class="mb-3 text-center">
                                           
                                         <input type="submit" name="submit-course" value="Đăng kí và thanh toán" class="btn btn-primary mr-3" />
                                            <!-- <a href="/public/admin/danhsach_khoahoc.html"><input type="button"
                                                    class="btn btn-success" value="Danh sách" /></a> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        
              

               
                
        </div>
        
        <?php

  

  }elseif(isset($error['class']) && !empty($error['class'])){

    ?>


<h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;"><?php   echo $error['class'] ?></h5>

<?php
  }else{
                if(!isset($_POST['submit-course'])) {
                    echo '<h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Khóa học không tồn tại hoặc bạn chưa chọn khóa học nào. Bạn vui lòng kiểm tra lại.</h5>';
                }
        ?>

    

    <?php
  }
    ?>
        
