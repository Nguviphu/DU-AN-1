<?php

// Thêm mới user

function insert_user($phone, $name, $full_name, $email, $image, $pass)
{

    $sql = "INSERT INTO `student` (`phone`, `name`, `full_name`, `email`, `image`, `password`) 
    VALUES ('$phone', '$name', '$full_name', '$email', '$image', '$pass')";

    pdo_execute($sql);
}

// Check user
function check_user($name, $pass)
{

    $sql = "select * from student where name = '" . $name . "' and password = '" . $pass . "'";

    return pdo_query_one($sql);
}

function CheckUser($name, $pass)
{
    $conn = pdo_get_connect();
    $sql = $conn->prepare("select * from student where name = '" . $name . "' and password = '" . $pass . "'");
    $sql->execute();
    $result = $sql->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $sql->fetchAll();
    if (count($kq) == 1) {
        return $kq[0]['role'];
    } else {
        return 0;
    }
}

// lấy ra số điện thoại và email từ bảng user

function select_all_phone_email()
{
    $sql = "select phone, email from student";
    return pdo_query($sql);
}


function select_phone($array)
{

    // Lấy ra mảng số điện thoại
    $key = 'phone';
    $arr_sdt = array_map(function ($item) use ($key) {
        return $item[$key];
    }, $array);
    return $arr_sdt;
}

function select_email($array)
{
    // Lấy ra mảng email

    $key = 'email';

    $arr_email = array_map(function ($item) use ($key) {
        return $item[$key];
    }, $array);
    return $arr_email;
}


function delete_user($id)
{
    $sql = "delete from student where id=" . $id;
    pdo_execute($sql);
}

function loadall_user()
{
    $sql = "select * from student order by id";
    $list_all_teacher = pdo_query($sql);
    return $list_all_teacher;
}
function loadone_user($id)
{
    $sql = "select * from student where id=" . $id;
    $list_one_teacher = pdo_query_one($sql);
    return $list_one_teacher;
}

function update_user($id, $phone, $name, $full_name, $email, $pass, $role)
{
    $sql = "UPDATE `student` SET `phone` = '$phone', `name` = '$name', `full_name` = '$full_name', `email` = '$email',  `password` = '$pass', `role` = '$role' WHERE `student`.`id` = " . $id;
    pdo_execute($sql);
}
