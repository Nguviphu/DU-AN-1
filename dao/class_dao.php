<?php
function add_class($class_code,$teacher,$subject,$number_session,$schedule,$status){
    $sql = "INSERT INTO `classes`(`class_code`, `subject_id`, `teacher`, `number_session`, `schedule_id`, `status`, `price`) 
    VALUES ('$class_code', '$subject','$teacher','$number_session','$schedule','$status',null)";
    return pdo_execute($sql);
}
function class_list(){
$sql= "SELECT classes.id, classes.class_name, rooms.rooms_name, classes.class_code, classes.number_session, classes.price, classes.status, teacher.name_teacher, schedule.schedule_detail FROM `classes` INNER JOIN rooms on classes.room_id=rooms.id_room
 INNER JOIN schedule on classes.schedule_id=schedule.id INNER JOIN teacher on classes.teacher_id=teacher.id_teacher";
return pdo_query($sql);
}


function list_class_subject_schedule() {
    $sql = "select classes.id, classes.class_code, subjects.name, classes.teacher, classes.number_session, schedule.schedule_detail,
    classes.status from classes, subjects, schedule where classes.subject_id = subjects.id_subject and classes.schedule_id=schedule.id";

    return pdo_query($sql);

}

function sellect_class_for_student($id_student){
    $sql= "SELECT class_id FROM class_detail where student_id=".$id_student;
    return pdo_query($sql);
    }


// lấy mảng id lớp

function select_class_id($array) {

    // Lấy ra mảng số điện thoại

    $key = 'class_id';
               
    $arr_class_id = array_map(function($item) use ($key) {
       return $item[$key];
    }, $array);

    return $arr_class_id;
}

// function list_class_subject_schedule_2() {
//     $sql = "select classes.id, classes.class_code, subjects.name, classes.teacher, classes.number_session, schedule.schedule_detail,
//     classes.status from classes, subjects, schedule where classes.subject_id = subjects.id_subject and classes.schedule_id=schedule.id";

//     return pdo_query($sql);

// }




function dklop($id_lop,$id_student,$id_room){
$sql = "INSERT INTO `class_detail`(`student_id`, `class_id`, `room_id`) 
VALUES ('$id_student','$id_lop','$id_room')";
return pdo_execute($sql);
}

function select_one_class($id){
    $sql = "select * from classes b inner join rooms c on b.room_id = c.id_room  where id=".$id;
    return pdo_query_one($sql);
    }


function select_all_schedule() {
    $sql = "SELECT * FROM `schedule`";
   return pdo_query($sql);
}


function select_all_subjects() {
    $sql = "SELECT * FROM `subjects`";
   return pdo_query($sql);
}

 //   Phần 2
 function insert_lopHoc($class_code,$room, $schedule, $class_name,$subject,$teacher,$number_session,$status,$price){
    $sql = "INSERT INTO `classes` (`class_code`, `room_id`,`schedule_id`, `class_name`,`subject`,`teacher_id`,`number_session`,`status`,`price`) 
    VALUES ('$class_code', '$room', '$schedule', '$class_name', '$subject','$teacher','$number_session','$status','$price')";
    pdo_execute($sql);
}

function delete_lopHoc($id){
    $sql = "delete from classes where id=".$id;
    pdo_execute($sql);
}

function loadall_lopHoc(){
    $sql="SELECT * FROM ((classes b inner join rooms c on b.room_id=c.id_room) inner join teacher on teacher.id_teacher=b.teacher_id)";
    $list_all_lopHoc=pdo_query($sql);
    return $list_all_lopHoc;
}
function loadone_lopHoc($id){
    $sql= "select classes.id, classes.teacher_id ,rooms.rooms_name, classes.room_id ,classes.class_code, classes.class_name, classes.subject, teacher.name_teacher, classes.number_session, classes.price, classes.status
    from ((classes  inner join rooms  on classes.room_id = rooms.id_room) inner join teacher on classes.teacher_id = teacher.id_teacher)  where id=".$id;;
    $list_one_lopHoc=pdo_query_one($sql);
    return $list_one_lopHoc;
}
function update_lopHoc($id,$class_code, $room, $class_name,$subject,$teacher,$number_session,$status,$price){
    $sql = "UPDATE `classes` SET `class_code` = '$class_code', `room_id` = '$room', `class_name` = '$class_name', `subject` = '$subject', `teacher_id` = '$teacher', `number_session` = '$number_session', `status` = '$status', `price` = '$price' 
    WHERE `classes`.`id` = ".$id;
    pdo_execute($sql);

}

// lấy toàn bộ phòng học

    function select_all_room() {
        $sql = "select * from rooms where 1";
        return pdo_query($sql);
    }

    // lấy toàn thời gian

    function select_schedule() {
        $sql = "select * from schedule where 1";
        return pdo_query($sql);
    }


    // thêm dữ liệu vào bảng class_detail

    function insert_class_detail($id_class, $id_student, $id_room,$id_schedule, $id_teacher, $status) {
        $sql = "insert into class_detail(class_id, student_id, room_id, schedule_id, teacher_id, status) values('".$id_class."', '".$id_student."', '".$id_room."', '".$id_schedule."' ,'".$id_teacher."', '".$status."')";
        pdo_execute($sql, $id_class, $id_student, $id_room, $id_schedule ,$id_teacher, $status);
    }


     // lấy khóa học chi tiết của tất cả các sinh viên

     function select_course_for_all_user($idsv) {

        $sql = "SELECT classes.class_name,classes.subject, teacher.name_teacher, student.name ,rooms.rooms_name, class_detail.status, classes.class_code, classes.number_session, schedule.schedule_detail, class_detail.id, classes.price, class_detail.student_id
        FROM class_detail 
        INNER JOIN classes on class_detail.class_id=classes.id 
        INNER JOIN rooms on class_detail.room_id=rooms.id_room 
        INNER JOIN schedule on class_detail.schedule_id=schedule.id 
        INNER JOIN teacher on class_detail.teacher_id=teacher.id_teacher 
        INNER JOIN student on class_detail.student_id = student.id where class_detail.status='Đã thanh toán'";
        
        if(isset($idsv) && ($idsv > 0)) {

            $sql.= " and class_detail.student_id= '".$idsv."'";

        }
      

        return pdo_query($sql);
    }



    // lấy khóa học chi tiết của 1 sinh viên

    function select_course_for_one_user2($id) {

        $sql = "SELECT classes.class_name,classes.subject, teacher.name_teacher, student.name ,rooms.rooms_name, class_detail.status, classes.class_code, classes.number_session, schedule.schedule_detail, class_detail.id, classes.price, class_detail.schedule_id, class_detail.student_id
        FROM class_detail 
        INNER JOIN classes on class_detail.class_id=classes.id 
        INNER JOIN rooms on class_detail.room_id=rooms.id_room 
        INNER JOIN schedule on class_detail.schedule_id=schedule.id 
        INNER JOIN teacher on class_detail.teacher_id=teacher.id_teacher 
        INNER JOIN student on class_detail.student_id = student.id where class_detail.id=".$id; 
      

        return pdo_query_one($sql);
    }






    // update class_detail

    function update_class_detail($status, $id) {

        $sql = "update class_detail set  status = '".$status."' where class_detail.id=".$id; 
      

        pdo_execute($sql);
    }


    // Xóa class_detail của một học viên

    function del_class_detail($id) {
        $sql = "delete from class_detail where class_detail.id=".$id;
        pdo_execute($sql);
    }


    // lấy tất cả trạng thái từ bảng detail

    function select_all_status() {

        $sql = "SELECT status FROM `class_detail` WHERE 1";
        return pdo_query($sql);
    }

    // lấy ra 1 mảng trạng thái

    function select_arr_status($array) {

        $key = "status";

        $arr_status =  array_map(function($item) use ($key) {
            return $item[$key];
        }, $array);

        return $arr_status;
    }



    // lấy ra lớp học chi tiết của học viên đang chờ xác nhận thanh toán

    function confirm_pay($idsv) {

        $sql = "SELECT classes.class_name,classes.subject, teacher.name_teacher, student.name ,rooms.rooms_name, 
        class_detail.status, classes.class_code, classes.number_session, schedule.schedule_detail, class_detail.id, 
        classes.price, class_detail.student_id 
        FROM class_detail 
        INNER JOIN classes on class_detail.class_id=classes.id 
        INNER JOIN rooms on class_detail.room_id=rooms.id_room 
        INNER JOIN schedule on class_detail.schedule_id=schedule.id 
        INNER JOIN teacher on class_detail.teacher_id=teacher.id_teacher 
        INNER JOIN student on class_detail.student_id = student.id where class_detail.status='Đang chờ xác nhận'";

        if(isset($idsv) && ($idsv > 0)) {

        $sql.= " and class_detail.student_id= '".$idsv."'";

        }





        return pdo_query($sql);
    }
