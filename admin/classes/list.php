<div class="content">
                <div class="container">
                    <div class="container">
                        <div class="page-title">
                            <h4 class="mt-5 font-weight-bold text-center">
                                Danh sách lớp học
                            </h4>
                        </div>

                       
                        <div class="box box-primary">
                            <div class="box-body">
                                <form action="?btn_delete_all" method="post" class="table-responsive">
                                    <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="">
                                        Xóa mục đã chọn
                                    </button>
                                    <table width="100%" class="table table-hover table-bordered text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th><input type="checkbox" id="select-all" /></th>
                                                <th>ID</th>
                                                <th>Mã lớp</th>
                                                <th>Giáo VIên</th>
                                                <th>Môn Học</th>
                                                <th>Số Buổi Học</th>
                                                <th>Lịch Trình</th>
                                                <th>Trạng Thái</th>
                                                <th>Học Phí</th>
                                                <th>
                                                    <a href="" class="btn btn-success text-white">Thêm mới <i
                                                            class="fas fa-plus-circle"></i></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        <?php foreach( $classes as $value) {

                                            // print_r($list_class_subject_schedule);
                                                    
                                                    ?>
                                           
                                            <tr>
                                                
                                                <td><input type="checkbox" name="" value="" /></td>
                                                
                                                <td><?php echo $value['id'];?></td>
                                                <td><?php echo $value['class_code'];?></td>
                                                <td><?php echo $value['teacher'];?></td>
                                                <td><?php echo $value['name'];?></td>
                                                <td><?php echo $value['number_session'];?></td>
                                                <td><?php echo $value['schedule_detail'];?></td>
                                                <td><?php echo $value['status'];?></td>
                                                <td>.....</td>
                                                <td class="text-end">
                                                    <a href="" class="btn btn-outline-info btn-rounded"><i
                                                            class="fas fa-pen"></i></a>
                                                    <a href="" class="btn btn-outline-danger btn-rounded" onclick=""><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                                
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