
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./public/image/LogoES.png" />
  <title>TRUNG TÂM ANH NGỮ ESILK</title>
  <link rel="stylesheet" href="./public/css/reset.css" />
  <link rel="stylesheet" href="./public/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <!-- Header -->
    <header class="header">
      <div class="header-container-fulid">
        <!-- header-brand -->
        <div class="header-brand">
          <h1 class="header-caption">
            TRUNG TÂM ANH NGỮ ESILK
          </h1>



              <?php

              if (isset($_SESSION['info_user'])) {
              extract($_SESSION['info_user']);

              

              ?>


          <div class="user-use" style="width: 500px;">
          <h5>Xin chào học viên: <span style="font-size: 18px; text-transform: uppercase; color: #C31D39;"><?=$name ?></span></h5>
          </div>



          <div class="header-user">
            <i class="fa fa-user header-icon">
              <!-- header-dropdown -->
              <div class="header-dropdown-content">
                <a href="index.php?ctrl=dangxuat" class="header-dropdown-link">Đăng xuất</a>
                
              </div>
            </i>
            <span class="header-text">Tài khoản</span>
            <i class="fa-solid fa-chevron-down header-icon"></i>
          </div>







          <?php

              }else {


            ?>

          <div class="header-user">
            <i class="fa fa-user header-icon">
              <!-- header-dropdown -->
              <div class="header-dropdown-content">
                <a href="index.php?ctrl=dangky" class="header-dropdown-link">Đăng ký</a>
                <a href="index.php?ctrl=dangnhap" class="header-dropdown-link">Đăng nhập</a>
              </div>
            </i>
            <span class="header-text">Tài khoản</span>
            <i class="fa-solid fa-chevron-down header-icon"></i>
          </div>


            <?php
              }
            ?>

         
          <!-- header-user -->
          
        </div>

        <!-- header-controller -->
        <div class="header-control">
          <!-- header-logo -->
          <a href="index.php" class="header-image">
            <img src="./public/image/LogoES.png" alt="" class="header-img" />
          </a>

          <!-- header-search-bar -->
          <form class="header-search">
            <input type="text" class="header-input" placeholder="Tìm kiếm ..." />
            <div class="header-search-icon">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </form>


          <!-- header-login -->
          <div class="header-act">
            <div class="header-act-icon">
              <a href="#">
                <i class="fa fa-user header-user-icon"></i>
              </a>
            </div>
            <div class="header-act-icon">
              <a href="#">
                <i class="fa-solid far fa-phone-alt"></i> HOTLINE
              </a>
            </div>
          </div>
        </div>

        <!-- header-navigation -->

        <nav class="header-nav">
          <ul class="header-menu">
            <li class="header-item">
              <a href="index.php" class="header-link">Trang chủ</a>
            </li>
            <li class="header-item">
              <a href="index.php?ctrl=introduce" class="header-link">Giới thiệu</a>
            </li>
            <li class="header-item">
              <a href="#" class="header-link">Khoá học</a>
            </li>
            <li class="header-item">
              <a href="#" class="header-link">Lịch học</a>
            </li>
            <li class="header-item">
              <a href="index.php?ctrl=blog" class="header-link">Blog</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End-header -->