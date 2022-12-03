<?php
function add_class($class_code,$teacher,$subject,$number_session,$schedule,$status){
    $sql = "INSERT INTO `classes`(`class_code`, `subject`, `teacher`, `number_session`, `schedule_id`, `status`, `price`) 
    VALUES ('$class_code', '$subject','$teacher','$number_session','$schedule','$status',null)";
    return pdo_execute($sql);
}
function class_list(){
$sql= "SELECT * FROM classes";
return pdo_query($sql);
}
function dklop($id_lop,$id_student,$id_room){
$sql = "INSERT INTO `class_detail`(`student_id`, `class_id`, `room_id`) 
VALUES ('$id_student','$id_lop','$id_room')";
return pdo_execute($sql);
}


    //   Phần 2
function insert_lopHoc($class_code,$class_name,$subject,$teacher,$number_session,$status,$price){
    $sql = "INSERT INTO `classes` (`class_code`,`class_name`,`subject`,`teacher`,`number_session`,`status`,`price`) 
    VALUES ('$class_code','$class_name','$subject','$teacher','$number_session','$status','$price')";
    pdo_execute($sql);
}

function delete_lopHoc($id){
    $sql = "delete from classes where id=".$id;
    pdo_execute($sql);
}

function loadall_lopHoc(){
    $sql="select * from classes order by id";
    $list_all_lopHoc=pdo_query($sql);
    return $list_all_lopHoc;
}
function loadone_lopHoc($id){
    $sql="select * from classes where id=".$id;
    $list_one_lopHoc=pdo_query_one($sql);
    return $list_one_lopHoc;
}
function update_lopHoc($id,$class_code,$class_name,$subject,$teacher,$number_session,$status,$price){
    $sql = "UPDATE `classes` SET `class_code` = '$class_code', `class_name` = '$class_name', `subject` = '$subject', `teacher` = '$teacher', `number_session` = '$number_session', `status` = '$status', `price` = '$price' 
    WHERE `classes`.`id` = ".$id;
    pdo_execute($sql);
}
