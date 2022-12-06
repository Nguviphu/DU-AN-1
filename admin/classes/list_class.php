  <!-- content -->
  <div class="content">
                <div class="container">
                    <div class="container">
                        <div class="page-title">
                            <h4 class="mt-5 font-weight-bold text-center">
                                Danh sách khoá học
                            </h4>
                        </div>
                        <div class="box box-primary">
                            <div class="box-body">
                                <form action="index.php?ctr=list_lophoc" method="post" class="table-responsive">
                                    <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="">
                                        Xóa mục đã chọn
                                    </button>
                                
                                    <table width="100%" class="table table-hover table-bordered text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th><input type="checkbox" id="select-all" /></th>
                                                <th>STT</th>
                                                <th>ID</th>
                                                <th>Phòng học</th>
                                                <th>Mã lớp</th>
                                                <th>Tên lớp</th>
                                                
                                                <th>Môn học</th>
                                                <th>Giáo viên</th>
                                                <th>Lộ trình</th>
                                                <th>Giá tiền</th>
                                                <th>Tình trạng</th>
                                                <th>
                                                    <a href="index.php?ctrl=add_lophoc" class="btn btn-success text-white">Thêm mới <i
                                                            class="fas fa-plus-circle"></i></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=0;
                                                foreach($listall_lophoc as $lophoc){

                                                    $i++;

                                                    
                                                    extract($lophoc);
                                                  
                                                    $edit_class = "index.php?ctrl=edit_class&id=".$id;
                                                    $delete_class = "index.php?ctrl=delete_class&id=".$id;
                                                 echo   '<tr>
                                                            <td>
                                                                <input type="checkbox" name="" value="" />
                                                            </td>
                                                            <td>'.$i.'</td>
                                                            <td>'.$lophoc['id'].'</td>
                                                            <td>'.$rooms_name.'</td>
                                                            <td>'.$class_code.'</td>
                                                            <td>'.$class_name.'</td>
                                                            <td>'.$subject.'</td>
                                                            <td>'.$name_teacher.'</td>
                                                            <td>'.$number_session.'</td>
                                                            <td>'.$price.'</td>
                                                            <td>'.$status.'</td>
                                                            <td class="text-end">
                                                                <a href="'.$edit_class.'" class="btn btn-outline-info btn-rounded"><i
                                                                        class="fas fa-pen"></i></a>
                                                                <a href="'.$delete_class.'" class="btn btn-outline-danger btn-rounded"><i
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