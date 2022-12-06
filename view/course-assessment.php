<?php
        if(isset($list_course_assessment)) {
                
       
?>

<div class="porto-u-main-heading">
            <h2 style="font-weight:700;color:#000000;font-size:30px;line-height:40px;">Danh sách khóa học của bạn.</h2>
           
        </div>
        <div class="porto-price-boxes pricing-table  pricing-table-flat">
           
            <div class="row">

                            <?php
                                    foreach ($list_course_assessment as $value) {
                                     
                            ?>
           
                <div class=" col-lg-3 col-md-6 ">
                    <form action="" method="POST">

                           

                                    <div class="border-item">

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
                                   

                                        
                                        <a href="index.php?ctrl=rate-it&&id_class_detail=<?=$value['id'] ?>"><button type="button" title="" target="_self"
                                        class="btn btn-modern btn-borders btn-lg btn-primary btn-bottom">Đánh giá khóa học</button></a>
                                        
                                    </div>
                                    </div>

                           
                    </form>
                    
                </div>
                            <?php
                                    }
                            ?>
            </div>
        </div>
        <br>
        <br>
        <!-- End content -->


             <!-- content -->
 <div class="content">
                <div class="container">
                    <div class="container">
                        <div class="page-title">
                        <h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Các đánh giá của những học viên khác.</h5>
                            
                        </div>
                        <div class="box box-primary">
                            <div class="box-body">
                                <form action="?btn_delete_all" method="post" class="table-responsive">
                                   
                                    <table width="100%" class="table table-hover table-bordered text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                               
                                                <th class="bg-secondary">STT</th>
                                                <th class="bg-warning">Người dùng</th>
                                                <th class="bg-success">Nội dung đánh giá</th>
                                                <th class="bg-primary">Khóa học</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php

                                                $i=0;
                                                    foreach ($list_comment2 as $value) {

                                                   
                                                ?>

                                            <tr>
                                                
                                                <td class="bg-secondary"><?php echo $i++; ?></td>
                                                <td class="bg-info"><?php echo $value['name'];   ?></td>
                                                <td class="bg-info"><?php echo $value['rate_detail'];   ?></td>
                                                <td class="bg-info"><?php echo $value['class_name'];   ?></td>
                                                
                                            </tr>

                                            <?php

                                                        }


                                            ?>



                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->


        <br>
        <br>

    <?php

}else{
    echo '<h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Các khóa học đã được học viên đánh giá.</h5>';

    ?>



     <!-- content -->
 <div class="content">
                <div class="container">
                    <div class="container">
                        <div class="page-title">
                            
                        </div>
                        <div class="box box-primary">
                            <div class="box-body">
                                <form action="?btn_delete_all" method="post" class="table-responsive">
                                   
                                    <table width="100%" class="table table-hover table-bordered text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                               
                                                <th class="bg-secondary">STT</th>
                                                <th class="bg-warning">Người dùng</th>
                                                <th class="bg-success">Nội dung đánh giá</th>
                                                <th class="bg-primary">Khóa học</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php

                                                $i=0;
                                                    foreach ($list_comment as $value) {

                                                   
                                                ?>

                                            <tr>
                                                
                                                <td class="bg-secondary"><?php echo $i++; ?></td>
                                                <td class="bg-info"><?php echo $value['name'];   ?></td>
                                                <td class="bg-info"><?php echo $value['rate_detail'];   ?></td>
                                                <td class="bg-info"><?php echo $value['class_name'];   ?></td>
                                                
                                            </tr>

                                            <?php

                                                        }


                                            ?>



                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->




<?php

}

?>
