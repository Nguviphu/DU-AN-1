

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
                                <form action="index.php?ctr=list_subjects" method="post" class="table-responsive">
                                    <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="">
                                        Xóa mục đã chọn
                                    </button>
                                
                                    <table width="100%" class="table table-hover table-bordered text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th><input type="checkbox" id="select-all" /></th>
                                                <th>Mã khoá học</th>
                                                <th>Tên khoá học</th>
                                                <th>
                                                    <a href="index.php?ctr=add_subjects" class="btn btn-success text-white">Thêm mới <i
                                                            class="fas fa-plus-circle"></i></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach($listall_monhoc as $monhoc){
                                                    extract($monhoc);
                                                   
                                                    $edit_subjects = "index.php?ctrl=edit_subjects&id=".$id;
                                                    $delete_subjects = "index.php?ctrl=delete_subjects&id=".$id;
                                                 echo   '<tr>
                                                            <td>
                                                                <input type="checkbox" name="" value="" />
                                                            </td>
                                                            <td>'.$id.'</td>
                                                            <td>'.$subject_title.'</td>
                                                            <td class="text-end">
                                                                <a href="'.$edit_subjects.'" class="btn btn-outline-info btn-rounded"><i
                                                                        class="fas fa-pen"></i></a>
                                                                <a href="'.$delete_subjects.'" class="btn btn-outline-danger btn-rounded"><i
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


