<?php



    
    // lấy khóa học của 1 học viên
    function select_course_for_one_user($id) {

        $sql = "SELECT classes.class_name, teacher.name_teacher, rooms.rooms_name, class_detail.status,
        classes.class_code, classes.number_session, schedule.schedule_detail, class_detail.id,
        classes.price FROM class_detail INNER JOIN classes on class_detail.class_id=classes.id 
        INNER JOIN rooms on class_detail.room_id=rooms.id_room INNER JOIN schedule on class_detail.schedule_id=schedule.id 
        INNER JOIN teacher on class_detail.teacher_id=teacher.id_teacher 
        where class_detail.status='Đã thanh toán' and class_detail.student_id=".$id;

        return pdo_query($sql);
    }


    // gửi đánh giá

    function insert_table_rate_it($rate_it, $id_class_detail) {
        $sql = "insert into rate_it(rate_detail, id_class_detail) values('".$rate_it."', '".$id_class_detail."')";
        pdo_execute($sql, $rate_it);


    }

    // lấy id_class_detail

    function select_id_detail($id) {
        $sql = "SELECT id FROM `class_detail` WHERE id=".$id;
        return pdo_query_one($sql);
    }




?>