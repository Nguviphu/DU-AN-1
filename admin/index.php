<?php
include "../dao/pdo.php";
include '../dao/class_dao.php';
include "layout/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addlophoc':
            if (isset($_POST['subscribe']) && ($_POST['subscribe'])) {
                $class_code = $_POST['class_code'];
                    $teacher = $_POST['teacher'];
                    $subject = $_POST['subject'];
                    $number_session = $_POST['number_session'];
                    $schedule = $_POST['schedule_id'];
                    $status = $_POST['status'];
                    add_class($class_code, $teacher, $subject, $number_session, $schedule, $status);
                $message = "✔️ Thêm thành công";
            }
            include "./classes/add_class.php";
            break;

        case 'listlophoc':
            $classes = class_list();
            include './classes/list.php';
            break;

        case "xoa_lh":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                xoa_lophoc($_GET['id']);
            }
            $classes = all_lophoc();
            include "classes/list.php";
            break;

        case "sua_lh":
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                $id = $_GET['id'];
                $lophoc = lay_lophoc_theo_id($id);
            }
            include "./classes/update.php";
            break;

        // case "updatelophoc";
        //     if (isset($_POST['btn_update']) && ($_POST['btn_update'])) {
        //         $id = $_POST['id'];
        //         $class_code = $_POST['class_code'];
        //         $subject = $_POST['subject'];
        //         $teacher = $_POST['teacher'];
        //         $number_session = $_POST['number_session'];
        //         $schedule = $_POST['schedule_id'];
        //         $status = $_POST['status'];
        //         update_lophoc($id, $class_code, $subject, $teacher, $number_session, $schedule, $status);
        //         $message = "Cập nhật thành công";
        //     }
        //     $classes = all_lophoc();
        //     include "./classes/update.php";
        //     break;
        default:
            include "layout/home.php";
            break;
    }
} else {
    include "layout/home.php";
}

require_once "layout/footer.php";
