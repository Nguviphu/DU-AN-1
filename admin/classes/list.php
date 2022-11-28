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
                    <form action="" method="post" class="table-responsive">
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
                                    <th>
                                        <a href="index.php?act=addlophoc" class="btn btn-success text-white">Thêm mới <i class="fas fa-plus-circle"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($classes as $class) {
                                    extract($class);
                                    $sua_lh = "index.php?act=sua_lh&id=" . $id;
                                    $xoa_lh = "index.php?act=xoa_lh&id=" . $id;
                                ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="" value="" />
                                        </td>
                                        <td><?= $id ?></td>
                                        <td><?= $class_code ?></td>
                                        <td><?= $teacher ?></td>
                                        <td><?= $subject ?></td>
                                        <td><?= $number_session ?></td>
                                        <td><?= $schedule_id ?></td>
                                        <td><?= $status ?></td>
                                        <td class="text-end">
                                            <a href="<?= $sua_lh ?>"  class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="<?= $xoa_lh ?>" class="btn btn-outline-danger btn-rounded" onclick="return confirm('Bạn có chắc muốn xóa chứ ?')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>