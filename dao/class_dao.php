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