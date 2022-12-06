<?php

    if(isset($arr_status) && in_array("Đang chờ xác nhận", $arr_status)) {

  


?>

 <!-- content -->
 <div class="content">
    <div class="container">
        <div class="container">
            <div class="page-title">
                <h4 class="mt-5 font-weight-bold text-center">
                    Danh sách học viên chờ xác nhận thanh toán.
                </h4>
            </div>
            <div class="box box-primary">
                <div class="box-body">

                <form style="margin-bottom: 10px; position: relative;" class="header-search" action="index.php?ctrl=confirm" method="post">
            <input style="width: 300px; padding: 5px 20px;" type="text" class="header-input-2" name="content" value="      "  placeholder="    - Mã sinh viên ..." />
            <span style="float: left; margin-top: 8px; margin-left: -295px; position: absolute;">PH - </span>
          
              <input style="padding: 5px 20px;" class="button-search" type="submit" name="search" value="Tìm kiếm">
              
          
          </form>
          
                    <form action="?btn_delete_all" method="post" class="table-responsive">
                        
                        <table width="100%" class="table table-hover table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>STT</th>
                                    <th>Mã Học viên</th>
                                    <th>Học viên</th> 
                                    <th>Khóa học đã đăng ký</th>
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
                                           $edit_class = "index.php?ctrl=edit_status&&id=".$id;
                                           $mess= "onclick ='return confirm('Bạn xác nhận thanh toán cho học viên này đúng không?')'";
                                         
                                        echo '<tr>
                                        <td>'.$i.'</td>
                                        <td>PH'.$student_id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$class_name.'</td>
                                        <td>'.$price.' VNĐ</td>
                                        <td>'.$status.'</td>
                                        <td class="text-end">
                                        <a  href="'.$edit_class.'" class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-pen"></i></a>
                                       
            
                                        
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

<?php

     }else{
        echo '<h5 class="title-hocphi" style="padding: 10px 30px; background-color: yellow; color: #D0001E;">Không có học viên nào chờ xác nhận thanh toán.</h5>';

    }
?>