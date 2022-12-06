 <!-- content -->
 <div class="content">
                <div class="container">
                    <div class="container">
                        <div class="page-title">
                            <h4 class="mt-5 font-weight-bold text-center">
                                Quản lý bình luận
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
                                                <th>STT</th>
                                                <th>Người dùng</th>
                                                <th>Nội dung đánh giá</th>
                                                <th>Khóa học</th>
                                                <th>
                                                    Thao tác
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php

                                                $i=0;
                                                    foreach ($list_comment as $value) {

                                                   
                                                ?>

                                            <tr>
                                                <td>
                                                    <input type="checkbox" name="" value="" />
                                                </td>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $value['name'];   ?></td>
                                                <td><?php echo $value['rate_detail'];   ?></td>
                                                <td><?php echo $value['class_name'];   ?></td>
                                                <td class="text-end">
                                                   
                                                    <a href="index.php?ctrl=del-comment&&id_class_detail=<?php echo $value['id'] ?>" class="btn btn-outline-danger btn-rounded" onclick=""><i
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
            <!-- end content -->