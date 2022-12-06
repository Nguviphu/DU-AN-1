<?php

    // load bình luận

    function select_all_comment() {
        $sql = "SELECT student.name, rate_it.rate_detail, classes.class_name, class_detail.id, rate_it.id FROM `class_detail` 
        INNER JOIN student on class_detail.student_id=student.id
        INNER JOIN rate_it on class_detail.id = rate_it.id_class_detail
        INNER JOIN classes on class_detail.class_id=classes.id";
        return pdo_query($sql);
    }


    // lấy bình luận của những học viên khác
    
    function select_all_comment2($id) {
        $sql = "SELECT student.name, rate_it.rate_detail, classes.class_name, class_detail.id, rate_it.id FROM `class_detail` 
        INNER JOIN student on class_detail.student_id=student.id
        INNER JOIN rate_it on class_detail.id = rate_it.id_class_detail
        INNER JOIN classes on class_detail.class_id=classes.id 
        where class_detail.student_id <>".$id;
        return pdo_query($sql);
    }




    // xóa bình luận

    function del_comment($id) {

        $sql = "DELETE FROM rate_it where id=".$id;
        pdo_execute($sql, $id);


    }


?>