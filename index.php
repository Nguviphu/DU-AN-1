   <?php

   session_start();
   ob_start();

   include_once "dao/pdo.php";
   include_once "dao/teacher.php";
   include_once "dao/user.php";
   include_once "dao/schedule.php";
   include_once "dao/course-assessment.php";
   include_once "dao/comment.php";
   include_once "view/header.php";

   if (isset($_GET['ctrl']) && ($_GET['ctrl']) != "") {

      $ctrl = $_GET['ctrl'];

      switch ($ctrl) {



         case 'schedule-detail':

            if(isset($_GET['user']) && ($_GET['user']) > 0){
                  // $id_user = $_SESSION['info_user']['id'];
                  $id_user = $_GET['user'];

                  $detail_schedule =  select_detail_schedule_for_one_user($id_user);

                  // print_r($detail_schedule);
                 
            }

            include_once "view/schedule-detail.php";
            break;



         case 'schedule':

            if(isset($_SESSION['info_user'])) {
               $all_schedule = select_all_schedule_for_one_user($_SESSION['info_user']['id']);
               $arr_status = select_status($all_schedule);
            }
            // print_r($all_schedule);

            
            // print_r($arr_status);
           
            
            include_once "view/schedule.php";
            break;


        

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
               } 
               elseif (!preg_match("/^0[0-9]{9}$/", $_POST['sdt'])) {
                  $error['sdt'] = "SĐT chưa đúng định dạng";
               }

               elseif (in_array($_POST['sdt'], $arr_phone)) {
                  $error['sdt'] = "SĐT đã tồn tại trong hệ thống";
               } 
               
               else {
                  $phone = $_POST['sdt'];
               }


               if (empty($_POST['email'])) {
                  $error['email'] = "Email không được để trống";
               } elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $_POST['email'])) {

                  $error['email'] = "Email chưa đúng định dạng";
               }
               
               elseif (in_array($_POST['email'], $arr_email)) {
                  $error['sdt'] = "Email đã tồn tại trong hệ thống";
               } 

               else {
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
                  $thongbao = "✔️ Đăng ký thành công";
               } else {
                  $thongbao = "Tài khoản không tồn tại! Kiểm tra lại";
               }
            }


            include_once "view/log-in.php";
            break;


         case 'dangxuat':
            session_unset();
            header('location: index.php');

            break;
         case 'dklop':
            include 'dao/class_dao.php';
            $classes = class_list();
            // print_r($classes);
            include 'view/danhsachlop.php';
            break;

            case 'sign-sourse':
             
               include 'dao/class_dao.php';
               if(isset($_GET['idlop']) && ($_GET['idlop']) > 0){
                
                  $one_classes = select_one_class($_GET['idlop']);
                  
              
               }

               
          
               include_once "view/sign-sourse-2.php";
               break;


               case 'sign-sourse-2':
                  include 'dao/class_dao.php';

                  $class_student = sellect_class_for_student($_SESSION['info_user']['id']);
                  $arr_class_id = select_class_id($class_student);
   

                  if(isset($_POST['submit-course']) && ($_POST['submit-course'])) {

                     
                     
                       
                     if(in_array($_POST['class'], $arr_class_id)){

                        $error['class'] = "Bạn đã đăng kí lớp học này trước đó.";
                     
                     }else{
                     $id_class = $_POST['class'];

                     }
                     
                     $id_student= $_SESSION['info_user']['id'];
                     $id_room = $_POST['room'];
                     $id_teacher = $_POST['teacher'];
                     $id_schedule = $_POST['schedule'];
                     $status = $_POST['status'];
                     
                     
                     if(!empty(!empty($id_class) && !empty($id_student) && !empty($id_room) && !empty($id_teacher) && !empty($status))) {

                        $course_curent =  insert_class_detail($id_class, $id_student, $id_room, $id_schedule, $id_teacher, $status);
                        
                       
                        if(isset($_POST['submit-course']) && ($_POST['submit-course'])) {
                           include_once "view/pay.php";
                        }
                        
                            
                        
                     }

                     
                    
                    
                  
                  }
                  
                  
                  include_once "view/sign-sourse-2.php";
                  break;
   







            case 'pay':
               include 'dao/class_dao.php';
              

               
               include_once "view/pay.php";
               break;

               case 'finish-pay':

                  include_once "view/finish-pay.php";
                  break;

               case 'course-assessment':
                  $list_comment = select_all_comment();
                  if(isset($_SESSION['info_user'])) {
                     $list_comment2 = select_all_comment2($_SESSION['info_user']['id']);

                  }


                  if(isset($_SESSION['info_user']['id'])) {
                  $list_course_assessment  = select_course_for_one_user($_SESSION['info_user']['id']);
                 
                  }

                  include_once "view/course-assessment.php";
                  break;

                  case 'rate-it':
                     



                     if(isset($_GET['id_class_detail']) && ($_GET['id_class_detail']) > 0) {
                        
                        $id_class_detail =  select_id_detail($_GET['id_class_detail']);

                       
                     }


                     if(isset($_POST['send']) && ($_POST['send'])) {

                        

                        if(empty($_POST['rate_it_content'])) {
                           $error['rate_it_content'] = "Bạn chưa viết đánh giá nào cả!";

                        }else{
                           $rate_it = $_POST['rate_it_content'];
                        }
                        


                        if(empty($_POST['id_class_detail'])) {
                           $error['id_class_detail'] = "Trống mã!";

                        }else{
                           $id = $_POST['id_class_detail'];
                        }
                        
                        
                       

                        if(!empty(!empty($rate_it) && !empty($id))) {
                           insert_table_rate_it($rate_it, $id);

                           if(isset($_POST['send']) && ($_POST['send'])) {

                              include_once "view/thanks.php";

                           }
                        }

                        

                     }
                     
                  
                     include_once "view/rate-it.php";
                     break;


                     case 'thanks':

                       
                        include_once "view/thanks.php";
                        break;


         default:
            require_once "view/home.php";
            break;
      }
   } else {
      include_once "view/home.php";
   }




   include_once "view/footer.php";
   ob_end_flush(); 
   ?>
