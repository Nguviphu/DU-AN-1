<?php
function insert_calendar($class_code, $date_time)
{
    $sql = "INSERT INTO `calendar` (`class_code`, `date_time`) 
        VALUES ('$class_code', '$date_time')";
    pdo_execute($sql);
}

function delete_calendar($id)
{
    $sql = "delete from calendar where id=" . $id;
    pdo_execute($sql);
}

function loadall_calendar()
{
    $sql = "select * from calendar order by id";
    $list_all_calendar = pdo_query($sql);
    return $list_all_calendar;
}
