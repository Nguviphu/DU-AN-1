<?php
    require "../dao/pdo.php";
    require "../dao/pdo_course.php";
    require "layout/header.php";

    if(isset($_GET['ctr']) && ($_GET['ctr']!="")) {
        $ctr = $_GET['ctr'];
        switch ($ctr) {
    
            case 'add_subjects':
                if(isset($_POST['btn_add_subjects'])&& ($_POST['btn_add_subjects'])){
                      $subject_title = $_POST['subject_title'];
                      insert_monHoc($subject_title);
                    $thongbao = "Thêm thành công";
                }
                require "danh-muc/add_khoahoc.php";
                break;
            case 'list_subjects':
                $sql="select * from categories_subjects order by id";
                $list_all_monHoc = loadall_monHoc();
                require "danh-muc/danhsach_khoahoc.php";
                break;

            case 'delete_subjects':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_monHoc($_GET['id']);
                }
                 $list_all_monHoc = loadall_monHoc();
                 require "danh-muc/danhsach_khoahoc.php";
                break;

            case 'edit_subjects':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $edit = loadone_monHoc($_GET['id']);
                }
                require "danh-muc/update_khoahoc.php";
                break;

            case 'update_subjects':
                if(isset($_POST['btn_update_subjects'])&&($_POST['btn_update_subjects'])){
                    $subject_title = $_POST['subject_title'];
                    $id = $_POST['id'];
                    update_monHoc($id,$subject_title);
                  $thongbao = "Cập nhật thành công";
              }
                $list_all_monHoc = loadall_monHoc();
                 require "danh-muc/danhsach_khoahoc.php";
                break;
            default:   
                require "erro.php";
                break;
                
    }
    }else{
        require "layout/home.php";
    }
    require "layout/footer.php";

?>