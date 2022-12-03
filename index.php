   <?php

   session_start();
   ob_start();

   include_once "dao/pdo.php";
   include_once "dao/user.php";
   include_once "dao/class_dao.php";
   include_once "view/header.php";

   if (isset($_GET['ctrl']) && ($_GET['ctrl']) != "") {

      $ctrl = $_GET['ctrl'];

      switch ($ctrl) {

         case 'introduce':

            include_once "view/introduce.php";
            break;
         case 'blog':

            include_once "view/blog.php";
            break;


         case 'dangky':

            $check_phone_email = select_all_phone_email();
            $arr_phone = select_phone($check_phone_email);
            $arr_email = select_email($check_phone_email);

            if (isset($_POST['subscribe']) && ($_POST['subscribe'])) {

               // $checkemail = "^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
               // $checkpass = "/^0[0-9]{9}$/";

               if (empty($_POST['fullname'])) {
                  $error['fullname'] = "Tên đăng nhập không được trống";
               } else {
                  $name = $_POST['fullname'];
               }


               if (empty($_POST['sdt'])) {
                  $error['sdt'] = "SĐT không được trống";
               } elseif (!preg_match("/^0[0-9]{9}$/", $_POST['sdt'])) {
                  $error['sdt'] = "SĐT chưa đúng định dạng";
               } elseif (in_array($_POST['sdt'], $arr_phone)) {
                  $error['sdt'] = "SĐT đã tồn tại trong hệ thống";
               } else {
                  $phone = $_POST['sdt'];
               }


               if (empty($_POST['email'])) {
                  $error['email'] = "Email không được để trống";
               } elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $_POST['email'])) {

                  $error['email'] = "Email chưa đúng định dạng";
               } elseif (in_array($_POST['email'], $arr_email)) {
                  $error['sdt'] = "Email đã tồn tại trong hệ thống";
               } else {
                  $email = $_POST['email'];
               }

               $path_folder = "public/image/users/";

               $path_upload_file = $path_folder . $_FILES['image']['name'];

               move_uploaded_file($_FILES['image']['tmp_name'], $path_upload_file);

               if (empty($_POST['email'])) {
                  $error['image'] = "Ảnh không được trống";
               } else {
                  $image = $path_upload_file;
               }
               if (empty($_POST['pass'])) {
                  $error['pass'] = "Mật khẩu không được trống";
               } elseif (!preg_match("/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/", $_POST['pass'])) {

                  $error['pass'] = "Mật khẩu chưa đúng định dạng";
               } else {
                  $pass = $_POST['pass'];
               }
               if ($_POST['pass-confirm'] !== $_POST['pass']) {
                  $error['pass-confirm'] = "Mật khẩu nhập lại không khớp!";
               }
               if (!empty(!empty($name) && !empty($phone) && !empty($email) && !empty($image) && !empty($pass) && !empty($_POST['pass-confirm']))) {
                  insert_user($phone, $name, $email, $image, $pass);
                  $thongbao = "✔️ Đăng ký thành công";
               }
            }
            include_once "view/sig-in.php";
            break;

         case 'dangnhap':
            if (isset($_POST['login']) && ($_POST['login'])) {
               $name = $_POST['name_user'];
               $pass = $_POST['pass_user'];
               $check_user = check_user($name, $pass);
               // extract($check_user);
               if (is_array($check_user)) {

                  $_SESSION['info_user'] = $check_user;
                  header('location: index.php');
                  extract($check_user);
                  $thongbao = "✔️ Đăng nhập thành công";
               } else {
                  $thongbao = "Tài khoản không tồn tại! Kiểm tra lại";
               }
            }
            include_once "view/log-in.php";
            break;

         case 'dangxuat':
            session_unset();
            header("location: index.php");
            break;

         case 'dklop':

            if (isset($_POST['btn_dk'])) {
               if (isset($_SESSION['info_user'])) {
                  $id_user = $_SESSION['info_user']['id'];
                  $id_lop = $_POST['id_lop'];
                  $id_room = 1;
                  $thongbao = "Đã Đăng Ký Thành Công";
                  dklop($id_lop, $id_user, $id_room);
               } else {
                  header('location: index.php?ctrl=dangnhap');
               }
            }
            $classes = class_list();
            include 'view/danhsachlop.php';
            break;

         case "doi_mk":
            if (isset($_POST['btn_change'])) {
               $name = $_POST['name'];
               $mat_khau = $_POST['mat_khau'];
               $mat_khau2 = $_POST['mat_khau2'];
               $mat_khau3 = $_POST['mat_khau3'];
               if ($mat_khau2 != $mat_khau3) {
                  $thongbao = "Vui lòng xác nhận lại mật khẩu mới !";
               } else {
                  $tai_khoan = get_account_by_name($name);
                  if ($tai_khoan) {
                     if ($tai_khoan['password'] == $mat_khau) {
                        try {
                           change_password($name, $mat_khau2);
                           $thongbao = "Đổi mật khẩu thành công";
                        } catch (Exception $exc) {
                           $thongbao = "Đổi mật khẩu thất bại !";
                        }
                     } else {
                        $thongbao = "Vui lòng nhập lại mật khẩu hiện tại !";
                     }
                  } else {
                     $thongbao = "Sai tên đăng nhập";
                  }
               }
            }
            include "view/doi_mk.php";
            break;

         case "update_user":
            if (isset($_POST['btn_update'])) {
               $name = $_POST['name'];
               $phone = $_POST['phone'];
               $email = $_POST['email'];
               $image = $_FILES['image']['name'];
               $target_dir = "./public/image/user";
               $target_file = $target_dir . basename($_FILES['image']['name']);

               if (move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                  $thongbao = "Đăng tải ảnh thành công";
               } else {
                  $thongbao = "Đăng tải ảnh lên thất bại !";
               }
               $tai_khoan = get_account_by_name($name);
               cap_nhat_tai_khoan($name, $phone, $email, $image);
               $_SESSION['tai_khoan'] = $tai_khoan;
               $thongbao = "Cập nhật tài khoản thành công";
            }
            include "view/update_user.php";
            break;

         default:
            require_once "view/home.php";
            break;
      }
   } else {
      include_once "view/home.php";
   }






   include_once "view/footer.php";

   ?>
