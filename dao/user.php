<?php

// Thêm mới user

    function insert_user($phone ,$name, $email, $image, $pass) {

    $sql = "insert into student(phone, name, email, image, password) values('".$phone."', '".$name."', '".$email."', '".$image."', '".$pass."')";

    pdo_execute($sql);
        
    
    }

// Check user

    function check_user($name, $pass) {

        $sql = "select * from student where name = '".$name."' and password = '".$pass."'";

        return pdo_query_one($sql);


    }




?>