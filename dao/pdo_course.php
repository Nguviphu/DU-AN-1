<?php
function insert_monHoc($tenloai){
    $sql = "INSERT INTO `categories_subjects` (`subject_title`) VALUES ('')";
    pdo_execute($sql);
}

function delete_monHoc($id){
    $sql = "delete from categories_subjects where id=".$id;
    pdo_execute($sql);
}

function loadall_monHoc(){
    $sql="select * from categories_subjects order by id";
    $list_all_monHoc=pdo_query($sql);
    return $list_all_monHoc;
}
function loadone_monHoc($id){
    $sql="select * from categories_subjects where id=".$id;
    $list_one_monHoc=pdo_query_one($sql);
    return $list_one_monHoc;
}
function update_monHoc($id,$subject_title){
    $sql = "update categories_subjects set name='".$subject_title."' where id=".$id;
    pdo_execute($sql);
}
?>