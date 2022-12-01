<!-- content -->
<div class="content">
    <div class="container">
        <div class="container">
            <div class="page-title">
                <h4 class="mt-5 font-weight-bold text-center">
                    Danh sách học viên
                </h4>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <form action="index.php?ctrl=list_hocvien" method="post" class="table-responsive">
                        <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="">
                            Xóa mục đã chọn
                        </button>

                        <table width="100%" class="table table-hover table-bordered text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th><input type="checkbox" id="select-all" /></th>
                                    <th>STT</th>
                                    <th>Mã ID</th>
                                    <th>Họ tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Mật khẩu</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>
                                        Công cụ
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stt = 0;
                                foreach ($student as $item) {
                                    $stt++;
                                    extract($item);
                                    $edit_hocvien = "index.php?ctrl=edit_hocvien&id=" . $id;
                                    $delete_hocvien = "index.php?ctrl=delete_hocvien&id=" . $id;
                                    if ($role == 0) {
                                ?>
                                        <tr>
                                            <td>
                                                <a href=""><input type="checkbox" name="" value=""></a>
                                            </td>
                                            <td><?= $stt ?></td>
                                            <td><?= $id ?></td>
                                            <td><?= $full_name ?></td>
                                            <td><?= $name ?></td>
                                            <td><? $password ?></td>
                                            <td><?= $email ?></td>
                                            <td><?= $phone ?></td>
                                            <td class="text-end">
                                                <a onclick="return confirm('Bạn có chắc chắn muốn sửa không?')" href="<?= $edit_hocvien ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="<?= $delete_hocvien ?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
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