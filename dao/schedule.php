<?php

    // lấy lịch học chung
    function select_all_schedule_for_one_user($id) {
        $sql = "SELECT classes.class_name, classes.class_code, rooms.rooms_name, schedule.schedule_detail, student.name, class_detail.id, class_detail.status FROM class_detail
        INNER JOIN classes on class_detail.class_id=classes.id INNER JOIN rooms on class_detail.room_id=rooms.id_room 
        INNER JOIN schedule on class_detail.schedule_id=schedule.id 
        INNER JOIN student on class_detail.student_id=student.id where class_detail.student_id=".$id;

       return pdo_query($sql);
    }

    // lấy lịch học chi tiết cho 1 học viên

    function select_detail_schedule_for_one_user($id_user) {
        $sql = "SELECT  classes.class_code, classes.subject, rooms.rooms_name, schedule.schedule_detail, teacher.name_teacher FROM class_detail 
        INNER JOIN classes on class_detail.class_id=classes.id 
        INNER JOIN rooms on class_detail.room_id=rooms.id_room 
        INNER JOIN schedule on class_detail.schedule_id=schedule.id 
        INNER JOIN teacher on class_detail.teacher_id=teacher.id_teacher where class_detail.id=$id_user;";

       return pdo_query_one($sql);
    }


    //  lấy ra mảng trạng thái rỗng hoặc chưa thanh toán


    function select_status($array) {

        $key = 'status';

        $arr_status = array_map(function($item) use ($key) {
            return $item[$key];
        }, $array);

        return $arr_status;

    }












?>