<?php

// Thêm mới user

function insert_user($phone, $name, $email, $image, $pass)
{

    $sql = "insert into student(phone, name, email, image, password) values('" . $phone . "', '" . $name . "', '" . $email . "', '" . $image . "', '" . $pass . "')";

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
    if (count($kq) > 0) {
        return $kq[0]['role'];
    } else {
        return 0;
    }
}
