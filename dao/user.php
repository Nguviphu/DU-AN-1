<?php

// Thêm mới user

    function insert_user($phone ,$name, $email, $image, $pass) {

    $sql = "insert into student(phone, name, email, image, password) values('".$phone."', '".$name."', '".$email."', '".$image."', '".$pass."')";

    pdo_execute($sql);
        
    
    }




?>