
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
                                    <th>ID</th>
                                    <th>Tên lớp</th>
                                    <th>Môn học</th>
                                    <th>Phòng học</th>
                                    <th>Thời gian</th>
                                    <th>Mã Lớp</th> 
                                    <th>Số buổi</th> 
                                    <th>Giảng viên</th> 
                                    <th>Học viên</th> 
                                    <th>Học phí</th> 
                                    <th>Trạng thái</th> 
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                               
                                <?php

                                    $i=0;
                                        foreach ($list_detail_class as $value) {
                                           $i++;
                                            
                                           extract($value);
                                           $edit_class = "index.php?ctrl=edit_class_detail&&id=".$id;
                                           $del_class = "index.php?ctrl=del_class_detail&&id=".$id;

                                        echo '<tr>
                                        <td>'.$i.'</td>
                                        <td>'.$id.'</td>
                                        <td>'.$class_name.'</td>
                                        <td>'.$subject.'</td>
                                        <td>'.$rooms_name.'</td>
                                        <td>'.$schedule_detail.'</td>
                                        <td>'.$class_code.'</td>
                                        <td>'.$number_session.'</td>
                                        <td>'.$name_teacher.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$status.'</td>
                                        <td class="text-end">
                                        <a href="'.$edit_class.'" class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-pen"></i></a>
                                        <a href="'.$del_class.'" class="btn btn-outline-danger btn-rounded"><i
                                                class="fas fa-trash"></i></a>
                                        </td>
            
                                        
                                    </tr>';
                                       


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
