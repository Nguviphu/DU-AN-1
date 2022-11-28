<?php
require_once "pdo.php";

function add_class($class_code, $teacher, $subject, $number_session, $schedule, $status)
{
    $sql = "INSERT INTO `classes`(`class_code`, `subject`, `teacher`, `number_session`, `schedule_id`, `status`) 
    VALUES ('$class_code', '$subject','$teacher','$number_session','$schedule','$status',null)";
    return pdo_execute($sql);
}

function class_list()
{
    $sql = "SELECT * FROM classes";
    return pdo_query($sql);
}

function xoa_lophoc($id)
{
    $sql = "DELETE FROM classes WHERE id = $id";
    return pdo_execute($sql);
}

function all_lophoc($order = "ASC")
{
    $sql = "SELECT * FROM classes ORDER BY id $order";
    $classes = pdo_query($sql);
    return $classes;
}

function lay_lophoc_theo_id($id)
{
  $sql = "SELECT * FROM classes WHERE id = $id";
  $lophoc = pdo_query_one($sql);
  return $lophoc;
}

function update_lophoc($id, $class_code, $subject, $teacher, $number_session, $schedule_id, $status){
    $sql = "UPDATE classes SET `class_code`, `subject`, `teacher`, `number_session`, `schedule_id`, `status`  = '$class_code', '$subject','$teacher','$number_session','$schedule_id,'$status' WHERE id = $id";
    pdo_query($sql);
}

function dklop($id_lop, $id_student, $id_room)
{
    $sql = "INSERT INTO `class_detail`(`student_id`, `class_id`, `room_id`) 
VALUES ('$id_student','$id_lop','$id_room')";
    return pdo_execute($sql);
}
