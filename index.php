   <?php

    include_once "dao/pdo.php";
    include_once "dao/user.php";
    include_once "view/header.php";

    if (isset($_GET['ctrl']) && ($_GET['ctrl']) != "" ) {
        
        $ctrl = $_GET['ctrl'];    

        switch ($ctrl) {

            case 'introduce':

                include_once "view/introduce.php";
                break;

                case 'blog':

                    include_once "view/blog.php";
                    break;


            case 'dangky':

                if(isset($_POST['subscribe']) && ($_POST['subscribe'])) {

                    // $checkemail = "^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
                    // $checkpass = "/^0[0-9]{9}$/";
                    
                    if (empty($_POST['fullname'])) {
                       $error['fullname'] = "Tên đăng nhập không được trống";
                    }
                    else{
                        $name = $_POST['fullname'];
                    }


                    if (empty($_POST['sdt'])) {
                        $error['sdt'] = "SĐT không được trống";
                     }elseif(!preg_match("/^0[0-9]{9}$/", $_POST['sdt'])) {
                        $error['sdt'] = "SĐT chưa đúng định dạng";
                     }
                     
                     else{
                        $phone = $_POST['sdt'];
                     }


                     if (empty($_POST['email'])) {
                        $error['email'] = "Email không được để trống";
                     }elseif(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $_POST['email'])) {

                        $error['email'] = "Email chưa đúng định dạng";
                     }
                     
                     else{
                        $email = $_POST['email'];
                     }





                    
                    


                    $path_folder = "public/image/users/";

                    $path_upload_file = $path_folder.$_FILES['image']['name'];

                    move_uploaded_file($_FILES['image']['tmp_name'], $path_upload_file);
                    


                    if (empty($_POST['email'])) {
                        $error['image'] = "Ảnh không được trống";
                     }else{
                        $image = $path_upload_file;
                     }



                    
                     if (empty($_POST['pass'])) {
                        $error['pass'] = "Mật khẩu không được trống";
                     }elseif(!preg_match("/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/", $_POST['pass'])) {

                        $error['pass'] = "Mật khẩu chưa đúng định dạng";
                     }
                     else{
                        $pass = $_POST['pass'];
                     }


                    if($_POST['pass-confirm'] !== $_POST['pass']) {
                        $error['pass-confirm'] = "Mật khẩu nhập lại không khớp!";
                     }
                     

                    

                    if(!empty(!empty($name) && !empty($phone) && !empty($email) && !empty($image) && !empty($pass) && !empty($_POST['pass-confirm']))) {
                        insert_user($phone ,$name, $email, $image, $pass);
                        $thongbao = "✔️ Đăng ký thành công";
                    }
                    
                    


                }



                include_once "view/sig-in.php";
                break;

            case 'dangnhap':
                include_once "view/log-in.php";
                break;
            
            
            default:
                require_once "view/home.php";
                break;
        }
    }else{
        include_once "view/home.php";
    }



    
    include_once "view/footer.php";

?>
