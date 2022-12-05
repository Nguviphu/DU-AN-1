<?php

        if (isset($_SESSION['info_user'])) {

        

?>

            <!-- content -->
 <div class="content">
    <div class="container">
        <div class="container">
            <div class="page-title">
                <h4 class="mt-5 font-weight-bold text-center">
                    Danh sách lịch học
                </h4>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <form action="?btn_delete_all" method="post" class="table-responsive">
                        
                        <table width="100%" class="table table-hover table-bordered text-center">
                            <thead class="thead-dark">
                                <?php 
                                    if(in_array('Đã thanh toán', $arr_status)) {

                                    
                                ?>

                                <tr>
                                    <th>STT</th>
                                    <th>Mã Lớp</th>
                                    <th>Phòng học</th>
                                    <th>Thời gian</th>
                                    <th>Chi tiết</th>
                                    
                                </tr>


                                <?php
                                        }else{
                                            echo '<h2>Hiện không có lịch học nào để hiển thị</h2>';
                                        }
                                ?>
                            </thead>
                            <tbody>

                                <?php
                                    $i =0;
                                foreach ($all_schedule as $schedule) {
                                    $i++;
    
                                    ?>

                                    <?php
                                        if ($schedule['status']==="Đã thanh toán") {
                                           
                                        
                                    ?>

                                   

                                <tr>
                                   
                                   <td><?php echo $i;  ?></td>
                                   <td><?php echo $schedule['class_code'];  ?></td>
                                   <td><?php echo $schedule['rooms_name'];  ?></td>
                                   <td><?php echo $schedule['schedule_detail'];  ?></td>
                                   <th><a style="text-decoration: none;" href="index.php?ctrl=schedule-detail&user=<?php echo $schedule['id']; ?>">Chi tiết</a></th>
                                   
                               </tr>
                                    <?php
                                    
                                }else{
                                    ?>

                                    <?php
                                    echo '<h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Lớp học  "'.$schedule['class_name'].'" hiện đang chờ người quản trị xác nhận thanh toán để hiện thị lịch học. Vui lòng chờ đợi!</h5>';
                                        }
                                    ?>


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


        <?php  }else { ?>

                <h3 style="color: #D0001E;">Bạn chưa là học viên của hệ thống.</h3>
                <p>Hãy nhanh tay đăng ký <i class="fa-solid fa-marker"></i> để trở thành học viên của <mark style="color: #D0001E;">Trung Tâm Anh Ngữ Esilk</mark> bạn nhé!</p>


            <?php  } ?>
