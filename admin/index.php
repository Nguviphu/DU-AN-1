<?php
session_start();
ob_start();

if (isset($_SESSION['role']) && ($_SESSION)['role'] == 1) {

    include_once "../dao/pdo_course.php";
    include_once "../dao/pdo.php";
    include_once "../dao/class_dao.php";
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
