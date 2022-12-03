<?php
require_once "pdo.php";

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

// Đổi mật khẩu
function change_password($name, $mat_khau_moi)
{
    $sql = "UPDATE student SET password = '$mat_khau_moi' WHERE name = '$name'";
    pdo_execute($sql);
}

// Lấy tài khoản ra từ tên
function get_account_by_name($name)
{
    $sql = "SELECT * FROM student WHERE name = '$name'";
    $tai_khoan_hv = pdo_query_one($sql);
    return $tai_khoan_hv;
}


function cap_nhat_tai_khoan($name, $phone, $email, $image)
{
  if ($image != "") {
    $sql = "UPDATE student SET 'name' = '$name', phone = '$phone', email = '$email', 'image' = '$image' WHERE 'name' = '$name'";
  } else {
    $sql = "UPDATE student SET 'name' = '$name', phone = '$phone', email = '$email' WHERE 'name' = '$name'";
  }
  pdo_execute($sql);
}