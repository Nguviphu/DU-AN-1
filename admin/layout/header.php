<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Trung tâm ANH NGỮ ESILK</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../public/css/all.min.css" type="text/css" />
    <link rel="stylesheet" href="../public/css/dashboard.css" type="text/css" />
    <link rel="stylesheet" href="../public/css/custom.css" type="text/css" />
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="#">
                    <img src="../public/image/LogoES.png" alt="logo" class="img-fluid logo">
                </a>
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="#"><i class="fas fa-store"></i>Xem trang web</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-home"></i>Trang chủ</a>
                </li>

                <!-- Môn học -->
                <li>
                    <a href="#subjects" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Quản lý môn học
                        <i class="fas fa-angle-right float-xl-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="subjects">
                        <li>
                            <a href="#">
                                <i class="fas fa-plus"></i>Thêm môn học</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-list-ul"></i>Danh sách môn học</a>
                        </li>
                    </ul>
                </li>

                <!-- Lịch học -->

                <li>
                    <a href="#schedule" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i
                            class="fas fa-table"></i>Quản lý lịch học
                        <i class="fas fa-angle-right float-xl-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="schedule">
                        <li>
                            <a href="#"><i class="fas fa-plus"></i>Update lịch học</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-list-ul"></i>Danh sách lịch học</a>
                        </li>
                    </ul>
                </li>


                <!-- Giáo viên -->

                <li>
<a href="#teacher" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                        <i class="fas fa-user-friends"></i>Quản lý giáo viên
                        <i class="fas fa-angle-right float-xl-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="teacher">
                        <li>
                            <a href="#">
                                <i class="fas fa-list-ul"></i>Danh sách giáo viên</a>
                        </li>
                    </ul>
                </li>


                <!-- Học viên -->

                <li>
                    <a href="#student" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down">
                        <i class="fas fa-user-friends"></i>Quản lý học viên
                        <i class="fas fa-angle-right float-xl-right"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="student">
                        <li>
                        <li>
                            <a href="#">
                                <i class="fas fa-plus"></i>Thêm học viên</a>
                        </li>
                        <a href="#">
                            <i class="fas fa-list-ul"></i>Danh sách học viên</a>
                </li>
            </ul>
            </li>

            <!-- Bình luận -->
            <li>
                <a href="#"> <i class="fas fa-comments"></i>Quản lý bình luận</a>
            </li>

            <li>
                <a href="#"><i class="fas fa-cog"></i>Cài đặt</a>
            </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>Admin</span>
                                    <i style="font-size: 0.8em" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li>
                                        <a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Hồ
                                                sơ</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Thông
                                                báo</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item"><i class="fas fa-cog"></i> Cài đặt</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li>
                                            <a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Đăng
                                                xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->