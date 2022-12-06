<?php  
        if(isset($detail_schedule) && !empty($detail_schedule)) {
            extract($detail_schedule);
        }
?>
 
 
 <!-- content -->
 <div class="content">
    <div class="container">
        <div class="container">
            <div class="page-title">
                <h4 class="mt-5 font-weight-bold text-center">
                    Chi tiết lịch học
                </h4>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <form action="?btn_delete_all" method="post" class="table-responsive">
                        
                        <table width="100%" class="table table-hover table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>STT</th>
                                    <th>Thời gian</th>
                                    <th>Phòng học</th>
                                    <th>Môn học</th>
                                    <th>Mã Lớp</th> 
                                    <th>Giảng viên</th>

                                    
                                    
                                </tr>
                            </thead>
                            <tbody>

                                
                               
                                <tr>
                                    <td>1</td>
                                    <td><?=$schedule_detail ?></td>
                                    <td><?=$rooms_name ?></td>
                                    <td><?=$subject  ?></td>
                                    <td><?=$class_code  ?></td>
                                    <th><?=$name_teacher  ?></th>
                                    
                                    
                                </tr>

                                
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->
