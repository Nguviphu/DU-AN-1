<?php
session_start();
ob_start();

if (isset($_SESSION['role']) && ($_SESSION)['role'] == 1) {

    include_once "../dao/pdo_course.php";
    include_once "../dao/pdo.php";
    include_once "../dao/class_dao.php";
    include_once "../dao/user.php";
    include_once "layout/header.php";

    if (isset($_GET['ctrl']) && ($_GET['ctrl']) != "") {

        $ctrl = $_GET['ctrl'];

        switch ($ctrl) {

            case 'add_subjects':
                if (isset($_POST['btn_add_subjects']) && ($_POST['btn_add_subjects'])) {
                    $subject_title = $_POST['subject_title'];
                    insert_monHoc($subject_title);
                    $thongbao = "Thêm thành công";
                }
                include 'danh-muc/add_khoahoc.php';
                break;

            case 'list_subjects':
                $sql = "select * from danhmuc order by id desc";
                $listall_monhoc = loadall_monHoc();
                include 'danh-muc/danhsach_khoahoc.php';
                break;

            case 'delete_subjects':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_monHoc($_GET['id']);
                }
                $listall_monhoc = loadall_monHoc();
                include 'danh-muc/danhsach_khoahoc.php';
                break;

            case 'edit_subjects':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $loadone_monHoc = loadone_monHoc($_GET['id']);
                }
                include "danh-muc/update_khoahoc.php";
                break;

            case 'update_subjects':
                if (isset($_POST['btn_update_subjects']) && ($_POST['btn_update_subjects'])) {
                    $subject_title = $_POST['subject_title'];
                    $id = $_POST['id'];
                    update_monHoc($id, $subject_title);
                    $thongbao = "Cập nhật thành công";
                }
                $listall_monhoc = loadall_monHoc();
                include "danh-muc/danhsach_khoahoc.php";
                break;

            case 'add_lophoc':
                if (isset($_POST['btn_add_class']) && ($_POST['btn_add_class'])) {
                    $class_code = $_POST['class_code'];
                    $class_name = $_POST['class_name'];
                    $subject = $_POST['subject'];
                    $teacher = $_POST['teacher'];
                    $number_session = $_POST['number_session'];
                    $status = $_POST['status'];
                    $price = $_POST['price'];
                    insert_lopHoc($class_code, $class_name, $subject, $teacher, $number_session, $status, $price);
                    $thongbao = "Thêm thành công";
                }
                include "classes/add_lophoc.php";
                break;

            case 'list_lophoc':
                $sql = "select * from danhmuc order by id desc";
                $listall_lophoc = loadall_lopHoc();
                include 'classes/list_class.php';
                break;

            case 'delete_class':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_lopHoc($_GET['id']);
                }
                $listall_lophoc = loadall_lopHoc();
                include 'classes/list_class.php';
                break;

            case 'edit_class':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $list_one_lopHoc = loadone_lopHoc($_GET['id']);
                }
                include "classes/update.php";
                break;

            case 'update_class':
                if (isset($_POST['btn_update_class']) && ($_POST['btn_update_class'])) {
                    $id = $_POST['id'];
                    $class_code = $_POST['class_code'];
                    $class_name = $_POST['class_name'];
                    $subject = $_POST['subject'];
                    $teacher = $_POST['teacher'];
                    $number_session = $_POST['number_session'];
                    $status = $_POST['status'];
                    $price = $_POST['price'];
                    update_lopHoc($id, $class_code, $class_name, $subject, $teacher, $number_session, $status, $price);
                    $thongbao = "Cập nhật thành công";
                }
                $listall_lophoc = loadall_lopHoc();
                include "classes/list_class.php";
                break;

            case 'dangxuat':
                if (isset($_SESSION['role'])) {
                    unset($_SESSION['role']);
                    header('location: login_admin.php');
                }
                break;

                // =================Quản lý giáo viên==================
            case 'list_giaovien':
                $sql = "select * from danhmuc order by id desc";
                $teacher = loadall_user();
                include "tai-khoan/teacher/list_teacher.php";
                break;

            case 'delete_giaovien':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_user($_GET['id']);
                }
                $teacher = loadall_user();
                include "tai-khoan/teacher/list_teacher.php";
                break;

            case 'edit_giaovien':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $load_one_teacher = loadone_user($_GET['id']);
                }
                include "tai-khoan/teacher/update_teacher.php";
                break;

            case 'update_teacher':
                if (isset($_POST['btn_update_teacher']) && ($_POST['btn_update_teacher'])) {
                    $id = $_POST['id'];
                    $full_name = $_POST['full_name'];
                    $user_name = $_POST['user_name'];
                    $password = $_POST['pass'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    update_user($id, $phone, $user_name, $full_name, $email, $password, $role);
                }
                $teacher = loadall_user();
                include "tai-khoan/teacher/list_teacher.php";
                break;
                // =======================================================

                // Quản lý tổng user
            case 'list_user':
                $sql = "select * from danhmuc order by id desc";
                $load_all_user = loadall_user();
                include "tai-khoan/tongHop_user/list_user.php";
                break;
            case 'delete_user':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_user($_GET['id']);
                }
                $load_all_user = loadall_user();
                include "tai-khoan/tongHop_user/list_user.php";
                break;
            case 'edit_user':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $load_one_user = loadone_user($_GET['id']);
                }
                include "tai-khoan/tongHop_user/update_user.php";
                break;

            case 'update_user':
                if (isset($_POST['btn_update_user']) && ($_POST['btn_update_user'])) {
                    $id = $_POST['id'];
                    $full_name = $_POST['full_name'];
                    $user_name = $_POST['user_name'];
                    $password = $_POST['pass'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $role = $_POST['role'];
                    update_user($id, $phone, $user_name, $full_name, $email, $password, $role);
                }
                $load_all_user = loadall_user();
                include "tai-khoan/tongHop_user/list_user.php";
                break;

                //======================= Quản lý học viên========================
            case 'list_hocvien':
                $sql = "select * from danhmuc order by id desc";
                $student = loadall_user();
                include "tai-khoan/student/list_student.php";
                break;

            case 'delete_hocvien':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_user($_GET['id']);
                }
                $student = loadall_user();
                include "tai-khoan/student/list_student.php";
                break;
            case 'edit_hocvien':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $load_one_student = loadone_user($_GET['id']);
                }
                include "tai-khoan/student/update_student.php";
                break;

            case 'update_student':
                if (isset($_POST['btn_update_student']) && ($_POST['btn_update_student'])) {
                    $id = $_POST['id'];
                    $full_name = $_POST['full_name'];
                    $user_name = $_POST['user_name'];
                    $password = $_POST['pass'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    update_user($id, $phone, $user_name, $full_name, $email, $password, $role);
                }
                $student = loadall_user();
                include "tai-khoan/student/list_student.php";
                break;
                //================================================================
            default:
                include_once "erro.php";
                break;
        }
    } else {
        include_once "layout/home.php";
    }
    include_once "layout/footer.php";
} else {
    header('location: login_admin.php');
}
