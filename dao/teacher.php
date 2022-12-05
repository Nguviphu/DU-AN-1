<?php

    // Thêm giáo viên

    function insert_teacher($name) {
        $sql = "insert into teacher(name_teacher) values('".$name."')";
        pdo_execute($sql);
    }

    // lấy danh sách giáo viên

    function select_all_teacher() {
        $sql = "select * from teacher where 1";
        return pdo_query($sql);
    }

    // Xóa

    function del_teacher($id) {

        $sql = "delete from teacher where id_teacher=".$id;
        pdo_execute($sql, $id);

    }

    // lấy thông tin 1 giáo viên

    function load_one_teacher($id) {
        $sql = "select * from teacher where id_teacher=".$id;
        return pdo_query_one($sql);
    }


    // Update info giáo viên

    function update_teacher($name, $id) {
        $sql = "update teacher set name_teacher = '".$name."' where id_teacher=".$id;
        pdo_execute($sql, $name, $id);
    }
?>