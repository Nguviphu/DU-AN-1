<?php
    
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
    ?>