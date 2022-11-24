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
                    $name = $_POST['fullname'];
                    $phone = $_POST['sdt'];
                    $email = $_POST['email'];


                    $path_folder = "public/image/users/";

                    $path_upload_file = $path_folder.$_FILES['image']['name'];

                    move_uploaded_file($_FILES['image']['tmp_name'], $path_upload_file);

                    $image = $path_upload_file;

                    $pass = $_POST['pass'];

                    insert_user($phone ,$name, $email, $image, $pass);
                    
                    $thongbao = "✔️ Đăng ký thành công";


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
