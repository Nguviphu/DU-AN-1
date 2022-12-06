<!-- content -->
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
                    <form action="index.php?ctrl=list_lophoc" method="post" class="table-responsive">
                        <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="">
                            Xóa mục đã chọn
                        </button>

                        <table width="100%" class="table table-hover table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th><input type="checkbox" id="select-all" /></th>
                                    <th>STT</th>
                                    <th>Mã lớp</th>
                                    <th>Tên lớp</th>
                                    <th>Môn học</th>
                                    <th>Giáo viên</th>
                                    <th>Lộ trình</th>
                                    <th>Giá tiền</th>
                                    <th>Tình trạng</th>
                                    <th>
                                        <a href="index.php?ctrl=add_lophoc" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listall_lophoc as $lophoc) {
                                    extract($lophoc);

                                    $edit_class = "index.php?ctrl=edit_class&id=" . $id;
                                    $delete_class = "index.php?ctrl=delete_class&id=" . $id;
                                ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="" value="" />
                                        </td>
                                        <td><?= $id ?></td>
                                        <td><?= $class_code ?></td>
                                        <td><?= $class_name ?></td>
                                        <td><?= $subject ?></td>
                                        <td><?= $teacher ?></td>
                                        <td><?= $number_session ?></td>
                                        <td><?= $price ?></td>
                                        <td><?= $status ?></td>
                                        <td class="text-end">
                                            <a onclick="return confirm('Bạn có chắc chắn muốn sửa không?')" href="<?= $edit_class ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="<?= $delete_class ?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
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