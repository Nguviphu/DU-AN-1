
            <!-- content -->
            <div class="content">
                <div class="container">
                    <div class="container">
                        <div class="page-title">
                            <h4 class="mt-5 font-weight-bold text-center">
                                Danh sách giáo viên
                            </h4>
                        </div>
                        <div class="box box-primary">
                            <div class="box-body">
                                <form action="index.php?ctr=list_teacher" method="post" class="table-responsive">
                                    <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="">
                                        Xóa mục đã chọn
                                    </button>
                                
                                    <table width="100%" class="table table-hover table-bordered text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th><input type="checkbox" id="select-all" /></th>
                                                <th>STT</th>
                                                <th>Mã giáo viên</th>
                                                <th>Tên giáo viên</th>
                                                <th>
                                                    <a href="index.php?ctrl=add_teacher" class="btn btn-success text-white">Thêm mới <i
                                                            class="fas fa-plus-circle"></i></a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                        <?php  

                                                        $i = 0;

                                                        foreach ($list_teacher as $teacher) {

                                                            extract($teacher);
                                                            $i++;

                                                            $del_teacher = "index.php?ctrl=del_teacher&id=".$teacher['id_teacher'];
                                                            $edit_teacher = "index.php?ctrl=edit_teacher&id=".$teacher['id_teacher'];

                                                            echo '
                                                            <tr>
                                                            <td>
                                                                <input type="checkbox" name="" value="" />
                                                            </td>
                                                            <td>'.$i.'</td>
                                                            <td>'.$id_teacher.'</td>
                                                            <td>'.$name_teacher.'</td>
                                                            <td class="text-end">
                                                                <a href="'.$edit_teacher.'" class="btn btn-outline-info btn-rounded"><i
                                                                        class="fas fa-pen"></i></a>
                                                                <a href="'.$del_teacher.'" class="btn btn-outline-danger btn-rounded"><i
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
