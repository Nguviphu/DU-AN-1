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

// lấy ra số điện thoại và email từ bảng user

function select_all_phone_email() {
        $sql = "select phone, email from student";
        return pdo_query($sql);
}


function select_phone($array) {

    // Lấy ra mảng số điện thoại

    $key = 'phone';
               
    $arr_sdt = array_map(function($item) use ($key) {
       return $item[$key];
    }, $array);

    return $arr_sdt;
}



function select_email($array) {

   // Lấy ra mảng email

   $key = 'email';
               
   $arr_email = array_map(function($item) use ($key) {
      return $item[$key];
   }, $array);


   return $arr_email;

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



?>