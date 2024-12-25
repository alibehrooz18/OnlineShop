﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <?php include "../includes/header.php";?>
    <?php include "../controllers/courses_controller.php";?>
   

    <title>داشبورد</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="../src/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="../src/css/style.css">
    <link rel="stylesheet" href="../src/css/skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed rtl">

    <div class="wrapper">
        <div id="loader"></div>

        <!-- Main header -->
        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start d-md-none d-block">
                <!-- Logo -->
                <a href="../index.php" class="logo">
                    <!-- logo-->
                    <div class="logo-mini w-30">
                        <span class="light-logo"><img src="../images/logo-letter.png" alt="logo"></span>
                        <span class="dark-logo"><img src="../images/logo-letter-white.png" alt="logo"></span>
                    </div>
                    <div class="logo-lg">
                        <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
                        <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                                data-toggle="push-menu" role="button">
                                <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="جستجو ....">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i
                                                        class="icon-Search"><span class="path1"></span><span
                                                            class="path2"></span></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu btn-group nav-item">
                            <a href="../../index.php" class="waves-effect waves-light nav-link btn-primary-light"
                                style="border-radius: 10px; padding: 5px;padding-top: 12px ; color: #7047ee;">
                                بازگشت به سایت
                            </a>
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon"
                                data-bs-toggle="dropdown" title="اعلانات">
                                <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
                                <div class="pulse-wave"></div>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">
                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">اعلانات</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">پاک کردن همه</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> کاربران جدیدی عضو شدند
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> خطا رخ داد
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> ثبت نام کاربران با خطا مواجه شد
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> ثبت سفارش جدید
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> خرید کاربر ناموفق بود
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> ادمین تیکت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> بررسی عضویت کاربران
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">مشاهده همه</a>
                                </li>
                            </ul>
                        </li>
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title=""
                                data-bs-toggle="modal" data-bs-target="#quick_actions_toggle">
                                <i class="icon-Layout-arrange"><span class="path1"></span><span
                                        class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title=""
                                data-bs-toggle="modal" data-bs-target="#quick_panel_toggle">
                                <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="../../app/view/cart.php" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title=""
                                data-bs-toggle="modal" data-bs-target="">
                                <i class="icon-Cart1"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title=""
                                id="live-chat">
                                <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                        <li class="btn-group">
                            <a href="#"
                                class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle"
                                data-bs-toggle="dropdown">
                                <img class="rounded" src="../images/svg-icon/ger.svg" alt="">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10"
                                        src="../images/svg-icon/ger.svg" alt=""> آلمانی</a>
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10"
                                        src="../images/svg-icon/spain.svg" alt=""> اسپانیایی</a>

                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10"
                                        src="../images/svg-icon/jap.svg" alt=""> ژاپنی</a>
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10"
                                        src="../images/svg-icon/fra.svg" alt=""> فرانسوی</a>
                            </div>
                        </li>

                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" data-provide="fullscreen"
                                class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon"
                                title="تمام صفحه">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <!-- Use get_data.php for get username and user role -->
                            <a href="#"
                                class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow"
                                title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
                                <div class="d-flex pt-1">
                                    <!-- <div class="text-end me-10">
                                        <p class="pt-5 fs-14 mb-0 fw-700 text-primary"><?php echo $user_name; ?></p>
                                        <small class="fs-10 mb-0 text-uppercase text-mute"><?php echo $user_role; ?></small>
                                    </div> -->
                                    <img src="../images/avatar/avatar-1.png"
                                        class="avatar rounded-10 bg-primary-light h-40 w-40" alt="">
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <!-- Main sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">
                    <!-- Logo -->
                    <a href="../index.php" class="logo">
                        <!-- logo-->
                        <div class="logo-mini">
                            <span class="light-logo"><img src="../images/logo-letter.png" alt="logo"></span>
                        </div>
                        <div class="logo-lg">
                            <span class="light-logo fs-36 fw-700">CRM<span class="text-primary">i</span></span>
                        </div>
                    </a>
                </div>
                <div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="image d-flex align-items-center">
                            <img src="../images/avatar/avatar-13.png" class="rounded-0 me-10" alt="User Image">
                            <div>
                                <h4 class="mb-0 fw-600"><?php echo $user_name; ?></h4>
                                <p class="mb-0"><?php echo $user_role; ?></p>
                            </div>
                        </div>
                        <div class="info">
                            <a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="../view/extra_profile.php"><i class="ti-user"></i> پروفایل</a>
                                <a class="dropdown-item" href="../view/mailbox.php"><i class="ti-email"></i> دریافت پیام</a>
                                <a class="dropdown-item" href="../view/contact_app_chat.php"><i class="ti-link"></i> گفتگو</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../logout.php"><i class="ti-lock"></i> خروج</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 97%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">منوی اصلی</li>
                            <li>
                                <a href="../index.php">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    <span>داشبورد</span>
                                </a>
                            </li>
                            <li>
                                <a href="../view/my_courses.php">
                                    <i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
                                    <span>آموزش های من</span>
                                </a>
                            </li>
                            <li>
                                <a href="../view/people.php">
                                    <i class="icon-Flag"><span class="path1"></span><span class="path2"></span></i>
                                    <span>مدیریت کاربران</span>
                                </a>
                            </li>
                            <li>
                                <a href="../view/forms_create_course.php">
                                    <i class="icon-Write fs-24"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i>
                                    <span>ایجاد آموزش</span>
                                </a>
                            </li>
                            <li>
                                <a href="../view/my_cart.php">
                                    <i class="icon-Cart1"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span></i>
                                    <span>خریدهای من</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="../view/contact_app_chat.php">
                                    <i class="icon-Chat2"></i>
                                    <span>چت </span>
                                </a>
                            </li>
                        </ul>

                        <div class="sidebar-widgets">
                            <div class="copyright text-center m-25">
                                <p><strong class="d-block"> داشبورد</strong> ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> تمامی حقوق محفوظ است
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <ul class="nav nav-tabs customtab nav-justified" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#messages" role="tab">چت </a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#contacts" role="tab">جدید</a> </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="messages" role="tabpanel">
                                            <div class="chat-box-one-side3">
                                                <div class="media-list media-list-hover">
                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>لیلا احمدی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>سلام چه خبر.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/3.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>مختار مینائی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/4.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>رضا احمدی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/5.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>سیما احمدی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>یوسف احمدی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>لیلا شمسی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>هانیه محمودی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>سروه رحمانی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/3.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>کامران راستگو</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/4.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>کاوه جدیدی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/5.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>لیلا قاسمی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/1.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>مختار مینائی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>هانیه فرهادی</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>

                                                    <div class="media">
                                                        <a class="align-self-center me-0" href="#"><img class="avatar avatar-lg" src="../images/avatar/2.jpg" alt="..."></a>
                                                        <div class="media-body">
                                                            <p>
                                                                <a class="hover-primary" href="#"><strong>شیما قیصری</strong></a>
                                                                <span class="float-end fs-10">10:00</span>
                                                            </p>
                                                            <p>قسمتی از متن گفتگو نمایش داده می شود.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="contacts" role="tabpanel">
                                            <div class="chat-box-one-side3">
                                                <div class="media-list media-list-hover">
                                                    <div class="media py-10 px-0 align-items-center">
                                                        <a class="avatar avatar-lg status-success" href="#">
                                                            <img src="../images/avatar/1.jpg" alt="...">
                                                        </a>
                                                        <div class="media-body">
                                                            <p class="fs-16">
                                                                <a class="hover-primary" href="#">سامرند رحمانی</a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="media py-10 px-0 align-items-center">
                                                        <a class="avatar avatar-lg status-danger" href="#">
                                                            <img src="../images/avatar/2.jpg" alt="...">
                                                        </a>
                                                        <div class="media-body">
                                                            <p class="fs-16">
                                                                <a class="hover-primary" href="#">شیما قدرتی</a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="media py-10 px-0 align-items-center">
                                                        <a class="avatar avatar-lg status-warning" href="#">
                                                            <img src="../images/avatar/3.jpg" alt="...">
                                                        </a>
                                                        <div class="media-body">
                                                            <p class="fs-16">
                                                                <a class="hover-primary" href="#">رضا احمدی</a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="media py-10 px-0 align-items-center">
                                                        <a class="avatar avatar-lg status-primary" href="#">
                                                            <img src="../images/avatar/4.jpg" alt="...">
                                                        </a>
                                                        <div class="media-body">
                                                            <p class="fs-16">
                                                                <a class="hover-primary" href="#">کارو هاشمی</a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="media py-10 px-0 align-items-center">
                                                        <a class="avatar avatar-lg status-success" href="#">
                                                            <img src="../images/avatar/1.jpg" alt="...">
                                                        </a>
                                                        <div class="media-body">
                                                            <p class="fs-16">
                                                                <a class="hover-primary" href="#">محسن محمودی</a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="media py-10 px-0 align-items-center">
                                                        <a class="avatar avatar-lg status-danger" href="#">
                                                            <img src="../images/avatar/2.jpg" alt="...">
                                                        </a>
                                                        <div class="media-body">
                                                            <p class="fs-16">
                                                                <a class="hover-primary" href="#">مریم تبریزی</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="row">
                                <div class="col-xxxl-8 col-lg-7 col-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <div class="media align-items-top p-0">
                                                <a class="avatar avatar-lg status-success mx-0" href="#">
                                                    <img src="../images/avatar/2.jpg" class="rounded-circle" alt="...">
                                                </a>
                                                <div class="d-lg-flex d-block justify-content-between align-items-center w-p100">
                                                    <div class="media-body mb-lg-0 mb-20">
                                                        <p class="fs-16">
                                                            <a class="hover-primary" href="#"><strong>لیلا روزبه</strong></a>
                                                        </p>
                                                        <p class="fs-12">آخرین بازدید 10:30 </p>
                                                    </div>
                                                    <div>
                                                        <ul class="list-inline mb-0 fs-18">
                                                            <li class="list-inline-item"><a href="#" class="hover-primary"><i class="fa fa-phone"></i></a></li>
                                                            <li class="list-inline-item"><a href="#" class="hover-primary"><i class="fa fa-video-camera"></i></a></li>
                                                            <li class="list-inline-item"><a href="#" class="hover-primary"><i class="fa fa-ellipsis-h"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class="chat-box-one2">
                                                <div class="card d-inline-block mb-3 float-start me-2 no-shadow bg-lighter max-w-p80">
                                                    <div class="position-absolute pt-1 pe-2 r-0">
                                                        <span class="text-extra-small text-muted">09:25</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-row pb-2">
                                                            <a class="d-flex" href="#">
                                                                <img alt="Profile" src="../images/avatar/1.jpg" class="avatar me-10">
                                                            </a>
                                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                                    <div class="min-width-zero">
                                                                        <p class="mb-0 fs-16 text-dark">مختار مینائی</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-start ps-55">
                                                            <p class="mb-0 text-semi-muted">نظر شما در مورد برنامه های ما برای عرضه این محصول چیست؟</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="card d-inline-block mb-3 float-start me-2 no-shadow bg-lighter max-w-p80">
                                                    <div class="position-absolute pt-1 pe-2 r-0">
                                                        <span class="text-extra-small text-muted">09:28</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-row pb-2">
                                                            <a class="d-flex" href="#">
                                                                <img alt="Profile" src="../images/avatar/1.jpg" class="avatar me-10">
                                                            </a>
                                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                                    <div class="min-width-zero">
                                                                        <p class="mb-0 fs-16 text-dark">مختار مینائی</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-start ps-55">
                                                            <p class="mb-0 text-semi-muted">به نظر من شما قبل از ضرب الاجل برنامه ریزی زیادی دارید. من به شما پیشنهاد می کنم مهلت خود را به عقب برگردانید تا زمانی برای اجرای یک کمپین تبلیغاتی موفق داشته باشید.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="card d-inline-block mb-3 float-end me-2 bg-primary max-w-p80">
                                                    <div class="position-absolute pt-1 pe-2 r-0">
                                                        <span class="text-extra-small">09:41</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-row pb-2">
                                                            <a class="d-flex" href="#">
                                                                <img alt="Profile" src="../images/avatar/2.jpg" class="avatar me-10">
                                                            </a>
                                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                                    <div class="min-width-zero">
                                                                        <p class="mb-0 fs-16">سارا احمدی</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-start ps-55">
                                                            <p class="mb-0 text-semi-muted">پیشنهاد می کنم این موضوع را بیشتر با تیم تبلیغاتی در میان بگذارید.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="card d-inline-block mb-3 float-end me-2 bg-primary max-w-p80">
                                                    <div class="position-absolute pt-1 pe-2 r-0">
                                                        <span class="text-extra-small">09:41</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-row pb-2">
                                                            <a class="d-flex" href="#">
                                                                <img alt="Profile" src="../images/avatar/2.jpg" class="avatar me-10">
                                                            </a>
                                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                                    <div class="min-width-zero">
                                                                        <p class="mb-0 fs-16">لیلا همتی</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-start ps-55">
                                                            <p class="mb-0 text-semi-muted">در حال حاضر خیلی سرم شلوغ است و علاوه بر همه چیز امروز چترم را فراموش کرده ام.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="card d-inline-block mb-3 float-start me-2 no-shadow bg-lighter max-w-p80">
                                                    <div class="position-absolute pt-1 pe-2 r-0">
                                                        <span class="text-extra-small text-muted">09:25</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-row pb-2">
                                                            <a class="d-flex" href="#">
                                                                <img alt="Profile" src="../images/avatar/1.jpg" class="avatar me-10">
                                                            </a>
                                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                                    <div class="min-width-zero">
                                                                        <p class="mb-0 fs-16 text-dark">مختار مینائی</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-start ps-55">
                                                            <p class="mb-0 text-semi-muted">نظر شما در مورد برنامه های ما برای عرضه این محصول چیست؟</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="card d-inline-block mb-3 float-start me-2 no-shadow bg-lighter max-w-p80">
                                                    <div class="position-absolute pt-1 pe-2 r-0">
                                                        <span class="text-extra-small text-muted">09:28</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-row pb-2">
                                                            <a class="d-flex" href="#">
                                                                <img alt="Profile" src="../images/avatar/1.jpg" class="avatar me-10">
                                                            </a>
                                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                                    <div class="min-width-zero">
                                                                        <p class="mb-0 fs-16 text-dark">مختار مینائی</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-start ps-55">
                                                            <p class="mb-0 text-semi-muted">به نظر من شما قبل از ضرب الاجل برنامه ریزی زیادی دارید. من به شما پیشنهاد می کنم مهلت خود را به عقب برگردانید تا زمانی برای اجرای یک کمپین تبلیغاتی موفق داشته باشید.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="card d-inline-block mb-3 float-end me-2 bg-primary max-w-p80">
                                                    <div class="position-absolute pt-1 pe-2 r-0">
                                                        <span class="text-extra-small">09:41</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-row pb-2">
                                                            <a class="d-flex" href="#">
                                                                <img alt="Profile" src="../images/avatar/2.jpg" class="avatar me-10">
                                                            </a>
                                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                                    <div class="min-width-zero">
                                                                        <p class="mb-0 fs-16">لیلا فهیم</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-start ps-55">
                                                            <p class="mb-0 text-semi-muted">پیشنهاد می کنم این موضوع را بیشتر با تیم تبلیغاتی در میان بگذارید.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="card d-inline-block mb-3 float-end me-2 bg-primary max-w-p80">
                                                    <div class="position-absolute pt-1 pe-2 r-0">
                                                        <span class="text-extra-small">09:41</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="d-flex flex-row pb-2">
                                                            <a class="d-flex" href="#">
                                                                <img alt="Profile" src="../images/avatar/2.jpg" class="avatar me-10">
                                                            </a>
                                                            <div class="d-flex flex-grow-1 min-width-zero">
                                                                <div class="m-2 ps-0 align-self-center d-flex flex-column flex-lg-row justify-content-between">
                                                                    <div class="min-width-zero">
                                                                        <p class="mb-0 fs-16">مریم تبریزی</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="chat-text-start ps-55">
                                                            <p class="mb-0 text-semi-muted"></p>
                                                        </div>در حال حاضر خیلی سرم شلوغ است و مهمتر از همه، امروز چترم را فراموش کردم.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer no-border">
                                            <div class="d-md-flex d-block justify-content-between align-items-center bg-white p-5 rounded10 b-1 overflow-hidden">
                                                <input class="form-control b-0 py-10" type="text" placeholder="نظرتون و بنویسید...">
                                                <div class="d-flex justify-content-between align-items-center mt-md-0 mt-30">
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary">
                                                        <i class="mdi mdi-link"></i>
                                                    </button>
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary">
                                                        <i class="mdi mdi-face"></i>
                                                    </button>
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle me-10 btn-outline-secondary">
                                                        <i class="mdi mdi-microphone"></i>
                                                    </button>
                                                    <button type="button" class="waves-effect waves-circle btn btn-circle btn-primary">
                                                        <i class="mdi mdi-send"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxxl-4 col-lg-5 col-12">
                                    <div class="box">
                                        <div class="box-header no-border">
                                            <h4 class="box-title">
                                                فعالیت های من
                                            </h4>
                                            <ul class="box-controls pull-right">
                                                <li class="dropdown">
                                                    <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#"><i class="ti-import"></i> ایمپورت</a>
                                                        <a class="dropdown-item" href="#"><i class="ti-export"></i> اکسپورت</a>
                                                        <a class="dropdown-item" href="#"><i class="ti-printer"></i> پرینت</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> تنظیمات</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="box-body px-0 pt-0">
                                            <div id="calendar" class="dask min-h-400"></div>
                                        </div>
                                        <div class="box-body p-0">
                                            <div class="events-side">
                                                <div class="media-list media-list-hover">
                                                    <div class="media media-single">
                                                        <div class="media-body">
                                                            <h6 class="fw-600"><a href="#">8 اردیبهشت</a></h6>
                                                            <p class="text-fader">تعمیرات اساسی وسایل ضروری</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-single">
                                                        <div class="media-body">
                                                            <h6 class="fw-600"><a href="#">9 اردیبهشت</a></h6>
                                                            <p class="text-fader">بررسی تمامی مشکلات کاری</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-single">
                                                        <div class="media-body">
                                                            <h6 class="fw-600"><a href="#">10 اردیبهشت</a></h6>
                                                            <p class="text-fader">ملاقات مدیران و کارکنان </p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-single">
                                                        <div class="media-body">
                                                            <h6 class="fw-600"><a href="#">11 اردیبهشت</a></h6>
                                                            <p class="text-fader">تفریح و هواخوری ایجاد شد </p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-single">
                                                        <div class="media-body">
                                                            <h6 class="fw-600"><a href="#">28 اردیبهشت</a></h6>
                                                            <p class="text-fader">تعمیرات اساسی وسایل ضروری</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-single">
                                                        <div class="media-body">
                                                            <h6 class="fw-600"><a href="#">29 اردیبهشت</a></h6>
                                                            <p class="text-fader">تعمیرات اساسی وسایل ضروری</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center bt-1 border-light p-10">
                                                <a class="text-uppercase d-block" href="#">درج اخبار جدید</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->




        <footer class="main-footer">
            <div class="pull-right d-none d-sm-inline-block">
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">خرید</a>
                    </li>
                </ul>
            </div>
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> <a href="https://www.fudatco.com/"> crmi قالب مدیریت</a>. بازطراحی و فارسی سازی توسط هلدینگ فنی مهندسی فوداتکو.
        </footer>
        <!-- Side panel -->
        <!-- quick_actions_toggle -->
        <div class="modal modal-left fade" id="quick_actions_toggle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content slim-scroll">
                    <div class="modal-body bg-white p-30">
                        <div class="d-flex align-items-center justify-content-between pb-30">
                            <h4 class="m-0">فعالیت ها<br>
                                <small class="badge fs-12 badge-primary mt-10">23 اقدام در حال بررسی</small>
                            </h4>
                            <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="accounting.php">
                                    <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">حسابداری</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist_grid.php">
                                    <i class="icon-Mail-attachment fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">اعضا</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="projects.php">
                                    <i class="icon-Box2 fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">پروژه ها</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist.php">
                                    <i class="icon-Group fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">مشتریان</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="mailbox.php">
                                    <i class="icon-Chart-bar fs-36"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    <span class="fs-16">ایمیل</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="setting.php">
                                    <i class="icon-Color-profile fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">تنظیمات</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="ecommerce_orders.php">
                                    <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-18">سفارشات</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick_actions_toggle -->

        <!-- quick_panel_toggle -->
        <div class="modal modal-left fade" id="quick_panel_toggle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content slim-scroll2">
                    <div class="modal-body bg-white py-20 px-0">
                        <div class="d-flex align-items-center justify-content-between pb-30">
                            <ul class="nav nav-tabs customtab3 px-30" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#quick_panel_logs">لاگ ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#quick_panel_notifications">اعلانات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#quick_panel_settings">تنظیمات</a>
                                </li>
                            </ul>
                            <div class="offcanvas-close">
                                <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                    <span class="fa fa-close"></span>
                                </a>
                            </div>
                        </div>
                        <div class="px-30">
                            <div class="tab-content">
                                <div class="tab-pane active" id="quick_panel_logs" role="tabpanel">
                                    <div class="mb-30">
                                        <h5 class="fw-500 mb-15">پیام های سیستمی</h5>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="../images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">هزینه های جانبی</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="../images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">هزینه تنظیمات</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="../images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">هزینه لابراتور</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="../images/svg-icon/color-svg/004-dad.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">حقوق کاربران</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="../images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-warning mb-1 fs-16">طراحی گارگاه</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                    </div>
                                    <div class="mb-30">
                                        <h5 class="fw-500 mb-15">گزارشات عملکرد</h5>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">سود پروژه ها</a>
                                                <span class="text-fade">مدیر پروژه</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">طراح </a>
                                                <span class="text-fade">کارگردان</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">توابع</a>
                                                <span class="text-fade">فول استک</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">دولوپر</a>
                                                <span class="text-fade">طراحی و توسعه</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                                <span class="icon-Shield-user fs-24"></span>
                                            </div>
                                            <div class="d-flex flex-column fw-500">
                                                <a href="#" class="text-dark hover-warning mb-1 fs-16">تست</a>
                                                <span class="text-fade">کنترل کیفی</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="quick_panel_notifications" role="tabpanel">
                                    <div>
                                        <div class="media-list">
                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">10:10</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-primary">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط مختار</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">08:40</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-success">
                                                    <p>پیام ها و هشدار ها.</p>
                                                    <span class="text-fade">توسط یلان</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">07:10</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-info">
                                                    <p>سایر پیام ها.</p>
                                                    <span class="text-fade">توسط یوسف</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">01:15</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-danger">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط نارین</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">23:12</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-warning">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط حامد</span>
                                                </div>
                                            </a>
                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">10:10</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-primary">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط مریم</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">08:40</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-success">
                                                    <p>پیام ها و هشدار ها.</p>
                                                    <span class="text-fade">توسط ناهید</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">07:10</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-info">
                                                    <p>سایر پیام ها.</p>
                                                    <span class="text-fade">توسط رامین</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">01:15</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-danger">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط هانیه</span>
                                                </div>
                                            </a>

                                            <a class="media media-single px-0" href="#">
                                                <h4 class="w-50 text-gray fw-500">23:12</h4>
                                                <div class="media-body ps-15 bs-5 rounded border-warning">
                                                    <p>متن و توضیحات تست این بخش.</p>
                                                    <span class="text-fade">توسط آیدا</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="quick_panel_settings" role="tabpanel">
                                    <div>
                                        <form class="form">
                                            <!--begin::Section-->
                                            <div>
                                                <h5 class="fw-500 mb-15">مشتریان</h5>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">اعلانان:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">بررسی وضعیت:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-primary" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">پشتیبانی:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                            <div class="dropdown-divider"></div>
                                            <!--begin::Section-->
                                            <div class="pt-2">
                                                <h5 class="fw-500 mb-15">گزارشات</h5>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">دریافت گزارشات:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">غیرفعال کردن:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">مجوز داده:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                            <div class="dropdown-divider"></div>
                                            <!--begin::Section-->
                                            <div class="pt-2">
                                                <h5 class="fw-500 mb-15">اعضا</h5>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">مجوز ثبت نام:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">مجوز نظرات:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 row align-items-center">
                                                    <label class="col-8 col-form-label">پرتابل مشتریان:</label>
                                                    <div class="col-4 d-flex justify-content-end">
                                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button">
                                                            <span class="handle"></span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Section-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick_panel_toggle -->
        <!-- quick_user_toggle -->
        <div class="modal modal-left fade" id="quick_user_toggle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content slim-scroll3">
                    <div class="modal-body p-30 bg-white">
                        <div class="d-flex align-items-center justify-content-between pb-30">
                            <h4 class="m-0">پروفایل کاربر
                                <small class="text-fade fs-12 ms-5">12 پیام</small>
                            </h4>
                            <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </a>
                        </div>
                        <div>
                            <div class="d-flex flex-row">
                                <div class=""><img src="../images/avatar/avatar-2.png" alt="user" class="rounded bg-danger-light w-150" width="100"></div>
                                <div class="ps-20">
                                    <h5 class="mb-0">هانیه مهدوی</h5>
                                    <p class="my-5 text-fade">طراح وب</p>
                                    <a href="mailto:dummy@gmail.com"><span class="icon-Mail-notification me-5 text-success"><span class="path1"></span><span class="path2"></span></span> dummy@gmail.com</a>
                                    <button class="btn btn-success-light btn-sm mt-5"><i class="ti-plus"></i> فالو</button>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider my-30"></div>
                        <div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">پروفایل من</a>
                                    <span class="text-fade">تنظیمات حساب</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">پیام های من</a>
                                    <span class="text-fade">صندوق دریافت</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-success mb-1 fs-16">فعالیت ها</a>
                                    <span class="text-fade">اعلانات</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-info mb-1 fs-16">وظایف</a>
                                    <span class="text-fade">پروژه های جدید</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider my-30"></div>
                        <div>
                            <div class="media-list">
                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">10:10</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-primary">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط مختار</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">08:40</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-success">
                                        <p>پیام ها و هشدار ها.</p>
                                        <span class="text-fade">توسط حدیث</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">07:10</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-info">
                                        <p>سایر پیام ها.</p>
                                        <span class="text-fade">توسط یوسف</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">01:15</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-danger">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط رامین</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">23:12</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-warning">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط حامد</span>
                                    </div>
                                </a>
                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">10:10</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-primary">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط مختار</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">08:40</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-success">
                                        <p>پیام ها و هشدار ها.</p>
                                        <span class="text-fade">توسط حدیث</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">07:10</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-info">
                                        <p>سایر پیام ها.</p>
                                        <span class="text-fade">توسط یوسف</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">01:15</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-danger">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط رامین</span>
                                    </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                    <h4 class="w-50 text-gray fw-500">23:12</h4>
                                    <div class="media-body ps-15 bs-5 rounded border-warning">
                                        <p>متن و توضیحات تست این بخش.</p>
                                        <span class="text-fade">توسط حامد</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick_user_toggle -->
        <!-- quick_shop_toggle -->
        <div class="modal modal-left fade" id="quick_shop_toggle" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="px-15 d-flex w-p100 align-items-center justify-content-between">
                            <h4 class="m-0">کارت خرید</h4>
                            <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                <span class="fa fa-close"></span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-body px-30 pb-30 bg-white slim-scroll4">
                        <div class="d-flex align-items-center justify-content-between pb-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="../images/product/product-1.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="../images/product/product-2.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="../images/product/product-3.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="../images/product/product-4.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="../images/product/product-5.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex align-items-center justify-content-between py-15">
                            <div class="d-flex flex-column me-2">
                                <a href="#" class="fw-600 fs-18 text-hover-primary">عنوان محصول</a>
                                <span class="text-muted">توضیحات محصول</span>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="fw-600 me-5 fs-18"> 125</span>
                                    <span class="text-muted me-5">برای</span>
                                    <span class="fw-600 me-2 fs-18">4</span>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-success-light btn-icon">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="flex-shrink-0">
                                <img src="../images/product/product-6.png" class="avatar h-100 w-100" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer modal-footer-uniform">
                        <div class="d-flex align-items-center justify-content-between mb-10">
                            <span class="fw-600 text-muted fs-16 me-2">کل</span>
                            <span class="fw-600 text-end">1248.000</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-15">
                            <span class="fw-600 text-muted fs-16 me-2">جمع کل</span>
                            <span class="fw-600 text-primary text-end">4125.000</span>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-primary">ثبت سفارش</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /quick_shop_toggle -->

    </div>
    <!-- ./wrapper -->

    <!-- Sidebar -->

    <div id="chat-box-body">
        <div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
        </div>

        <div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                        <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>
                    <div class="dropdown-menu min-w-200">
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Color me-15"></span>
                            گروه جدید</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                            مخاطبین</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                            گروه ها</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                            تماس ها</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                            تنظیمات</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                            پشتیبانی</a>
                        <a class="dropdown-item fs-16" href="#">
                            <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span>
                            حریم خصوصی</a>
                    </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">نارین همتی</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">فعال</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                        <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">سیما </a>
                                <p class="text-muted fs-12 mb-0">2 ساعت پیش</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            سلام بفرمائید
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">شما</a>
                                <p class="text-muted fs-12 mb-0">3 دقیقه پیش</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../images/avatar/3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                            ی سوال داشتم
                        </div>
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">سیما</a>
                                <p class="text-muted fs-12 mb-0">40 ثانیه پیش</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            اوکی.<br>مطرح کنید
                        </div>
                    </div>
                </div>
                <!--chat-log -->
            </div>
            <div class="chat-input">
                <form>
                    <input type="text" id="chat-input" placeholder="یک پیام ارسال کنید...">
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="../src/js/vendors.min.js"></script>
    <script src="../src/js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>

    <script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>

    <!-- CRMi App -->
    <script src="../src/js/template.js"></script>
    <script src="../src/js/pages/dashboard.js"></script>

</body>

</html>