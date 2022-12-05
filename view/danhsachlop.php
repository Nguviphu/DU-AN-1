

   <?php  
        if (is_array($classes) && isset($classes) && !empty($classes)) {
           
        
   ?>

             <!-- Content -->
    <h5 class="title-hocphi">Tham gia lớp học cùng với ESILK với học phí cực kì hợp lí!</h5>
        <br>

        <div class="porto-u-main-heading">
            <h2 style="font-weight:700;color:#000000;font-size:30px;line-height:40px;">Danh sách khóa học của hệ thống.</h2>
            
        <video width="1300" hieght="500"  autoplay loop preload>
        <source src="./public/video/to Esilk.mp4" type="video/mp4">
       
        Your browser does not support HTML video.
      </video>
        </div>
        <div class="porto-price-boxes pricing-table  pricing-table-flat">
           
            <div class="row">
            <?php foreach($classes as $value){
                    $id_lophoc = $value['id'];
                ?>
                <div class=" col-lg-3 col-md-6 ">
                    <form action="index.php?ctrl=dklop" method="POST">

                    <div class="border-item box-course">

                    <div class="porto-price-box plan  plan-custom plan-btn-bottom">
                        <h3><strong style="color: #D0001E;"><?=$value['class_name'];?></strong>
                        </h3>
                        <ul class="list_course">
                            <li><span>Giáo viên:</span> <strong  style="color: #000000;"><?=$value['name_teacher'];?></strong></li>
                            <input type="text" name="rooms_name" value="Phòng học: <?=$value['rooms_name'];?>" id="" disabled>
                            <input type="text" name="rooms_name" value="Mã lớp: <?=$value['class_code'];?>" id="" disabled>
                            <li><span>Số buổi:</span> <strong  style="color: #000000;"><?=$value['number_session'];?></strong> buổi</li>
                            <li><span>Thời gian:</span> <strong  style="color: #000000;"><?=$value['schedule_detail'];?></strong></li>
                            <li><span>Học phí:</span> <mark><strong><?=$value['price'];?> VNĐ</strong></mark></li>
                            <li><mark style="background-color: yellow; padding: 3px 50px;"><strong style="color: red;"><?=$value['status'];?></strong></mark></li>
                        </ul> 
                        <input type="hidden" name="id_lop" value="<?=$value['id'];?>">
                        <input type="hidden" name="id_room" value="<?=$value['room_id'];  ?>" class="form-control" />

                        <?php if (isset($_SESSION['info_user'])) {
                           
                         ?>

                            
                            <a href="index.php?ctrl=sign-sourse&idlop=<?php echo $id_lophoc ?>"><input type="button" class="bg-primary text-light submit" name="submit" value="Đăng ký lớp học"></a>

                            <?php }else{

                             ?>

                            <a href="index.php?ctrl=dangnhap"><button type="button" title="" target="_self"
                            class="btn btn-modern btn-borders btn-lg btn-primary btn-bottom">Đăng ký lớp học</button></a>
                                    
                             <?php  } ?>
                    </div>
                    </div>
                    </form>
                    
                </div>
            <?php } ?>
            </div>
        </div>
        <br>
        <br>
        <!-- End content -->


        

   <?php

        }else{

        
    ?>
        <h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Khóa học hiện đang trống! Học viên vui lòng quay lại sau.</h5>

<?php
        }

?>