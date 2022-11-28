<?php
require_once "../dao/pdo.php";
require_once "layout/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'addlophoc':
            if (isset($_POST['subscribe'])) {
                include '../dao/class_dao.php';
                $class_code = $_POST['class_code'];
                $teacher = $_POST['teacher'];
                $subject = $_POST['subject'];
                $number_session = $_POST['number_session'];
                $schedule = $_POST['schedule_id'];
                $status = $_POST['status'];
                add_class($class_code, $teacher, $subject, $number_session, $schedule, $status);
                $message = "tạo thành công";
            }
            include "classes/add_class.php";
            break;
        case 'list':
            include '../dao/class_dao.php';
            $classes = class_list();
            include './classes/list.php';
            break;

        default:
            include "layout/home.php";
            break;
    }
} else {
    include "layout/home.php";
}

require_once "layout/footer.php";
