﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images\favicon.ico">

    <title>CRMi - Dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="src\css\vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="src\css\style.css">
    <link rel="stylesheet" href="src\css\skin_color.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed rtl">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start d-md-none d-block">
                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- logo-->
                    <div class="logo-mini w-30">
                        <span class="light-logo"><img src="images\logo-letter.png" alt="logo"></span>
                        <span class="dark-logo"><img src="images\logo-letter-white.png" alt="logo"></span>
                    </div>
                    <div class="logo-lg">
                        <span class="light-logo"><img src="images\logo-dark-text.png" alt="logo"></span>
                        <span class="dark-logo"><img src="images\logo-light-text.png" alt="logo"></span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
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
                                                <button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
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
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="اعلانات">
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
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_actions_toggle">
                                <i class="icon-Layout-arrange"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_panel_toggle">
                                <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_shop_toggle">
                                <i class="icon-Cart1"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
                                <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                        <li class="btn-group">
                            <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded" src="images\svg-icon\ger.svg" alt="">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="images\svg-icon\ger.svg" alt=""> آلمانی</a>
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="images\svg-icon\spain.svg" alt=""> اسپانیایی</a>

                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="images\svg-icon\jap.svg" alt=""> ژاپنی</a>
                                <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="images\svg-icon\fra.svg" alt=""> فرانسوی</a>
                            </div>
                        </li>

                        <li class="btn-group nav-item d-xl-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="تمام صفحه">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>

                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
                                <div class="d-flex pt-1">
                                    <div class="text-end me-10">
                                        <p class="pt-5 fs-14 mb-0 fw-700 text-primary"> مختار مینائی</p>
                                        <small class="fs-10 mb-0 text-uppercase text-mute"> ادمین</small>
                                    </div>
                                    <img src="images\avatar\avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="">
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">
                    <!-- Logo -->
                    <a href="index.php" class="logo">
                        <!-- logo-->
                        <div class="logo-mini">
                            <span class="light-logo"><img src="images\logo-letter.png" alt="logo"></span>
                        </div>
                        <div class="logo-lg">
                            <span class="light-logo fs-36 fw-700">CRM<span class="text-primary">i</span></span>
                        </div>
                    </a>
                </div>
                <div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="image d-flex align-items-center">
                            <img src="images\avatar\avatar-13.png" class="rounded-0 me-10" alt="User Image">
                            <div>
                                <h4 class="mb-0 fw-600">مختار مینائی </h4>
                                <p class="mb-0">ادمین</p>
                            </div>
                        </div>
                        <div class="info">
                            <a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="extra_profile.php"><i class="ti-user"></i> پروفایل</a>
                                <a class="dropdown-item" href="mailbox.php"><i class="ti-email"></i> دریافت پیام</a>
                                <a class="dropdown-item" href="contact_app_chat.php"><i class="ti-link"></i> گفتگو</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth_login.php"><i class="ti-lock"></i> خروج</a>
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
                                <a href="index.php">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                                    <span>داشبورد</span>
                                </a>
                            </li>
                            <li>
                                <a href="my_courses.php">
                                    <i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
                                    <span>آفر</span>
                                </a>
                            </li>
                            <li>
                                <a href="people.php">
                                    <i class="icon-Flag"><span class="path1"></span><span class="path2"></span></i>
                                    <span>کاربران</span>
                                </a>
                            </li>
                            <li>
                                <a href="course-details.php">
                                    <i class="icon-Alarm-clock"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <span>جزئیات مشاغل</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact_app_chat.php">
                                    <i class="icon-Chat2"></i>
                                    <span>چت </span>
                                </a>
                            </li>
                            <li>
                                <a href="contact_userlist_grid.php">
                                    <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
                                    <span>مخاطبین</span>
                                </a>
                            </li>
                            <li class="header">اجزای سازنده</li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
                                    <span>امکانات</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="box_cards.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد پروفایل</a></li>
                                            <li><a href="box_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد پیشرفته</a></li>
                                            <li><a href="box_basic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد ساده</a></li>
                                            <li><a href="box_color.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد رنگی</a></li>
                                            <li><a href="box_group.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد گروهی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ظاهر بیسیک
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="ui_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بخش بندی</a></li>
                                            <li><a href="ui_badges.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نشان ها</a></li>
                                            <li><a href="ui_border_utilities.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بردر</a></li>
                                            <li><a href="ui_buttons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دکمه ها</a></li>
                                            <li><a href="ui_color_utilities.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رنگ</a></li>
                                            <li><a href="ui_dropdown.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ دان</a></li>
                                            <li><a href="ui_dropdown_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ دان بخش بندی</a></li>
                                            <li><a href="ui_progress_bars.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پراگرس بار</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون ها
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="icons_fontawesome.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فونت اوسام</a></li>
                                            <li><a href="icons_glyphicons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون</a></li>
                                            <li><a href="icons_material.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های قطعه</a></li>
                                            <li><a href="icons_themify.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تم ایکون ها</a></li>
                                            <li><a href="icons_simpleline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های خطوط ساده</a></li>
                                            <li><a href="icons_cryptocoins.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های ارز دیجیتال</a></li>
                                            <li><a href="icons_flag.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های پرچم</a></li>
                                            <li><a href="icons_weather.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های هواشناسی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ظاهر سفارشی
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="ui_ribbons.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نوارها</a></li>
                                            <li><a href="ui_sliders.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اسلایدر ها</a></li>
                                            <li><a href="ui_typography.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تایپو گرافی</a></li>
                                            <li><a href="ui_tab.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تب ها</a></li>
                                            <li><a href="ui_timeline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلوچارت </a></li>
                                            <li><a href="ui_timeline_horizontal.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلوچارت افقی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اجزا
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="component_bootstrap_switch.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سوئیچ بوت استرپ</a></li>
                                            <li><a href="component_date_paginator.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پیج بندی </a></li>
                                            <li><a href="component_media_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رسانه های پیشرفته</a></li>
                                            <li><a href="component_rangeslider.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رنج اسلایدر</a></li>
                                            <li><a href="component_rating.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رتبه بندی</a></li>
                                            <li><a href="component_animations.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>انیمیشن</a></li>
                                            <li><a href="extension_fullscreen.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تمام صفحه</a></li>
                                            <li><a href="extension_pace.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>آهنگ</a></li>
                                            <li><a href="component_nestable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تودرتو</a></li>
                                            <li><a href="component_portlet_draggable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پورتلت های قابل کشیدن</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Box2"><span class="path1"></span><span class="path2"></span></i>
                                    <span>فرم ها-جداول ونمودارها</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم ها
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="forms_advanced.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم اجزا</a></li>
                                            <li><a href="forms_general.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم لایه </a></li>
                                            <li><a href="forms_wizard.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم ویزارد</a></li>
                                            <li><a href="forms_validation.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم اعتبار سنجی</a></li>
                                            <li><a href="forms_mask.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرمت کننده</a></li>
                                            <li><a href="forms_xeditable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر Xeditable</a></li>
                                            <li><a href="forms_dropzone.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ زون</a></li>
                                            <li><a href="forms_code_editor.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر کد</a></li>
                                            <li><a href="forms_editors.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر </a></li>
                                            <li><a href="forms_editor_markdown.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مارک داون</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جداول
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="tables_simple.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول ساده</a></li>
                                            <li><a href="tables_data.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دیتا تیبل</a></li>
                                            <li><a href="tables_editable.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول قابل ویرایش</a></li>
                                            <li><a href="tables_color.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول رنگی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودارها
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="charts_chartjs.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>چارت جاوااسکریپتی</a></li>
                                            <li><a href="charts_flot.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلت</a></li>
                                            <li><a href="charts_inline.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار خطی</a></li>
                                            <li><a href="charts_morris.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>موریس</a></li>
                                            <li><a href="charts_peity.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار دایره ای</a></li>
                                            <li><a href="charts_chartist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار لیستی</a></li>
                                            <li><a href="charts_c3_axis.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار محوری</a></li>
                                            <li><a href="charts_c3_bar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار میله ای</a></li>
                                            <li><a href="charts_c3_data.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار داده ها</a></li>
                                            <li><a href="charts_c3_line.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار خطی</a></li>
                                            <li><a href="charts_echarts_basic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودارهای پایه</a></li>
                                            <li><a href="charts_echarts_bar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار نواری</a></li>
                                            <li><a href="charts_echarts_pie_doughnut.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار پای و دونات</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Globe"><span class="path1"></span><span class="path2"></span></i>
                                    <span>اپ و ویجت</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اپ
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="extra_calendar.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تقویم</a></li>
                                            <li><a href="contact_app.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست تماس</a></li>
                                            <li><a href="extra_taskboard.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فعالیت ها</a></li>
                                            <li><a href="mailbox.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صندوق ایمیل</a></li>
                                            <li><a href="contact_userlist_grid.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مخاطبین</a></li>
                                            <li><a href="contact_app_chat.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>چت</a></li>
                                            <li><a href="extra_app_ticket.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پشتیبانی</a></li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویجت های
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li class="treeview">
                                                <a href="#">
                                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سفارشی
                                                    <span class="pull-right-container">
                                                        <i class="fa fa-angle-right pull-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    <li><a href="widgets_blog.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پست</a></li>
                                                    <li><a href="widgets_chart.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار</a></li>
                                                    <li><a href="widgets_list.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست</a></li>
                                                    <li><a href="widgets_social.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اجتماعی</a></li>
                                                    <li><a href="widgets_statistic.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>امار</a></li>
                                                    <li><a href="widgets_weather.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>هواشناسی</a></li>
                                                    <li><a href="widgets.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویجت ها</a></li>
                                                    <li><a href="email_index.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایمیل ها</a></li>
                                                </ul>
                                            </li>
                                            <li class="treeview">
                                                <a href="#">
                                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نقشه ها
                                                    <span class="pull-right-container">
                                                        <i class="fa fa-angle-right pull-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    <li><a href="map_google.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نقشه گوگل</a></li>
                                                    <li><a href="map_vector.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نقشه وکتور</a></li>
                                                </ul>
                                            </li>
                                            <li class="treeview">
                                                <a href="#">
                                                    <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مدال ها
                                                    <span class="pull-right-container">
                                                        <i class="fa fa-angle-right pull-right"></i>
                                                    </span>
                                                </a>
                                                <ul class="treeview-menu">
                                                    <li><a href="component_modals.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مدال ها</a></li>
                                                    <li><a href="component_sweatalert.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سویت الرت</a></li>
                                                    <li><a href="component_notification.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تواستر</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="treeview">
                                        <a href="#">
                                            <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صفحه نمونه
                                            <span class="pull-right-container">
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </span>
                                        </a>
                                        <ul class="treeview-menu">
                                            <li><a href="invoice.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صورتحساب</a></li>
                                            <li><a href="invoicelist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست فاکتورها</a></li>
                                            <li><a href="extra_profile.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پروفایل کاربری</a></li>
                                            <li><a href="contact_userlist.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست کاربران</a></li>
                                            <li><a href="sample_faq.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سوالات</a></li>
                                            <li><a href="sample_blank.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>خالی</a></li>
                                            <li><a href="sample_coming_soon.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صفحه به زودی</a></li>
                                            <li><a href="sample_custom_scroll.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اسکرول سفارشی</a></li>
                                            <li><a href="sample_gallery.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>گالری</a></li>
                                            <li><a href="sample_lightbox.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پنجره لایت باکس</a></li>
                                            <li><a href="sample_pricing.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>قیمت</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>
                                    <span>احراز هویت</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="auth_login.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ورود</a></li>
                                    <li><a href="auth_register.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ثبت نام</a></li>
                                    <li><a href="auth_lockscreen.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>قفل صفحه</a></li>
                                    <li><a href="auth_user_pass.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بازیابی رمز عبور</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Warning-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <span>صفحات ضروری</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="error_404.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> خطای۴۰۴</a></li>
                                    <li><a href="error_500.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>خطای ۵۰۰</a></li>
                                    <li><a href="error_maintenance.php"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صفحات ضروری</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="sidebar-widgets">
                            <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
                                <div class="text-center">
                                    <img src="images\svg-icon\color-svg\custom-17.svg" class="sideimg p-5" alt="">
                                    <h4 class="title-bx text-primary mm">مشاهده همه گزارشات</h4>
                                    <a href="#" class="py-10 fs-14 mb-0 text-primary">
                                        بهترین پنل مدیریت <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
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
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">ویجت های ثابت</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">ویجت ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">ویجت های ثابت</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="box bg-img" style="background-image: url(images/abstract-1.svg);background-position: right top; background-size: 30% auto;">
                                <div class="box-body">
                                    <a href="#" class="box-title fw-600 text-muted hover-primary fs-18"> تایم سفر</a>
                                    <div class="fw-bold text-success mt-20 mb-10">11:30PM</div>
                                    <p class="text-mute fw-500 fs-16">
                                        یک پیشنمایش است<br> برای نمایش بیشتر ...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box bg-img" style="background-image: url(images/abstract-2.svg);background-position: right top; background-size: 30% auto;">
                                <div class="box-body">
                                    <a href="#" class="box-title fw-600 text-muted hover-primary fs-18">برنامه</a>
                                    <div class="fw-bold text-success mt-20 mb-10">16 Jan 2019</div>
                                    <p class="text-mute fw-500 fs-16">
                                        یک پیشنمایش است<br> برای نمایش بیشتر ...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box bg-img" style="background-image: url(images/abstract-3.svg);background-position: right top; background-size: 30% auto;">
                                <div class="box-body">
                                    <a href="#" class="box-title fw-600 text-muted hover-primary fs-18">جدید</a>
                                    <div class="fw-bold text-success mt-20 mb-10">HTML</div>
                                    <p class="text-mute fw-500 fs-16">
                                        یک پیشنمایش است<br> برای نمایش بیشتر ...
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body d-flex align-items-center pb-0">
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="box-title text-muted fw-600 fs-18 mb-2 hover-primary">کاربر</a>
                                        <span class="fw-500 text-fade">امتیاز بیشتر</span>
                                    </div>
                                    <img src="images\avatar\avatar-1.png" alt="" class="align-self-end h-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body d-flex align-items-center pb-0">
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="box-title text-muted fw-600 fs-18 mb-2 hover-primary">کاربرجدید</a>
                                        <span class="fw-500 text-fade">امتیاز</span>
                                    </div>
                                    <img src="images\avatar\avatar-2.png" alt="" class="align-self-end h-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body d-flex align-items-center pb-0">
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="box-title text-muted fw-600 fs-18 mb-2 hover-primary">سیستم </a>
                                        <span class="fw-500 text-fade">هرچی رو دوست داری </span>
                                    </div>
                                    <img src="images/avatar/avatar-4.png" alt="" class="align-self-end h-100">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <div class="fs-18 flexbox align-items-center">
                                    <span>کاربران</span>
                                    <i class="ion ion-ios-person-outline"></i>
                                </div>

                                <div class="progress progress-xxs mt-10 mb-10">
                                    <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="fw-300 mb-5">62,158</small>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <div class="fs-18 flexbox align-items-center">
                                    <span>کاربران</span>
                                    <span>68,951</span>
                                </div>

                                <div class="progress progress-xxs mt-10 mb-10">
                                    <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="fw-300 mb-5"><i class="fa fa-sort-down text-danger me-1"></i> %18 کاهش در ماه گذشته</small>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <div class="fs-18 flexbox align-items-center">
                                    <span>کاربران</span>
                                    <span>15,956</span>
                                </div>

                                <div class="progress progress-xxs mt-10 mb-10">
                                    <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="text-end"><small class="fw-300 mb-5"><i class="fa fa-sort-up text-success me-1"></i> %48 up</small></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="row g-0 py-2">

                                    <div class="col-12 col-lg-3">
                                        <div class="box-body be-1 border-light">
                                            <div class="flexbox mb-1">
                                                <span>
                                                    <span class="icon-User fs-40"><span class="path1"></span><span class="path2"></span></span><br>کاربران جدید
                                                </span>
                                                <span class="text-primary fs-40">845</span>
                                            </div>
                                            <div class="progress progress-xxs mt-10 mb-0">
                                                <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-3 hidden-down">
                                        <div class="box-body be-1 border-light">
                                            <div class="flexbox mb-1">
                                                <span>
                                                    <span class="icon-Selected-file fs-40"><span class="path1"></span><span class="path2"></span></span><br> سفارشات امروز
                                                </span>
                                                <span class="text-info fs-40">952</span>
                                            </div>
                                            <div class="progress progress-xxs mt-10 mb-0">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-3 d-none d-lg-block">
                                        <div class="box-body be-1 border-light">
                                            <div class="flexbox mb-1">
                                                <span>
                                                    <span class="icon-Info-circle fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span><br> مسائل باز
                                                </span>
                                                <span class="text-warning fs-40">845</span>
                                            </div>
                                            <div class="progress progress-xxs mt-10 mb-0">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-3 d-none d-lg-block">
                                        <div class="box-body">
                                            <div class="flexbox mb-1">
                                                <span>
                                                    <span class="icon-Group-folders fs-40"><span class="path1"></span><span class="path2"></span></span><br> پروژه های جدید
                                                </span>
                                                <span class="text-danger fs-40">158</span>
                                            </div>
                                            <div class="progress progress-xxs mt-10 mb-0">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <h6>
                                    <span class="text-uppercase">دآمد</span>
                                    <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">مشاهده</a></span>
                                </h6>
                                <br>
                                <p class="fs-26">845,1258</p>

                                <div class="progress progress-xxs mt-0 mb-10">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="fs-12"><i class="ion-arrow-graph-down-right text-success me-1"></i> %18 کاهش در ماه گذشته</div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <h6>
                                    <span class="text-uppercase">سفارشات</span>
                                    <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">مشاهده</a></span>
                                </h6>
                                <br>
                                <p class="fs-26">159,1258</p>

                                <div class="progress progress-xxs mt-0 mb-10">
                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="fs-12"><i class="ion-arrow-graph-down-right text-danger me-1"></i> %95 کاهش</div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <h6>
                                    <span class="text-uppercase">ویزیتور ها</span>
                                    <span class="float-end"><a class="btn btn-xs btn-primary-light" href="#">مشاهده</a></span>
                                </h6>
                                <br>
                                <p class="fs-26">84,9658</p>

                                <div class="progress progress-xxs mt-0 mb-10">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 52%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="flexbox fs-12">
                                    <span><i class="ion-arrow-graph-down-right text-success me-1"></i> %54 رشد</span>
                                    <span>+90258</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4">
                            <a href="#" class="box bg-danger bg-hover-danger">
                                <div class="box-body">
                                    <span class="text-white icon-Cart2 fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <div class="text-white fw-600 fs-18 mb-2 mt-5">کارت خرید</div>
                                    <div class="text-white fs-16">اطلاعات خرید</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="#" class="box bg-info bg-hover-info">
                                <div class="box-body">
                                    <span class="text-white icon-Layout-arrange fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <div class="text-white fw-600 fs-18 mb-2 mt-5">آپارتمان ها</div>
                                    <div class="text-white fs-16">مشاهده جزئیات</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="#" class="box bg-success bg-hover-success">
                                <div class="box-body">
                                    <span class="text-white icon-Equalizer fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                    <div class="text-white fw-600 fs-18 mb-2 mt-5">وضعیت فروش</div>
                                    <div class="text-white fs-16">70% Up for 2019</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="#" class="box">
                                <div class="box-body">
                                    <span class="text-primary icon-Cart2 fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <div class="fw-600 fs-18 mb-2 mt-5">کارت خرید</div>
                                    <div class="text-fade fs-16">مشاهده جزئیات</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="#" class="box bg-info-light bg-hover-info">
                                <div class="box-body">
                                    <span class="text-info icon-Layout-arrange fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <div class="text-info fw-600 fs-18 mb-2 mt-5">آپارتمان</div>
                                    <div class="text-mute fs-16">مشاهده جزئیات</div>
                                </div>
                            </a>
                        </div>

                        <div class="col-xl-4">
                            <a href="#" class="box bg-warning-light">
                                <div class="box-body">
                                    <span class="text-warning icon-Equalizer fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                    <div class="text-warning fw-600 fs-18 mb-2 mt-5">وضعیت فروش</div>
                                    <div class="text-mute fs-16">70% Up for 2019</div>
                                </div>
                            </a>
                        </div>

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25">
                                <div class="text-center">
                                    <h1 class="countnm fs-50 m-0">158</h1>
                                    <div class="text-uppercase">نمایشگر</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25 bg-info">
                                <div class="text-center">
                                    <h1 class="countnm fs-50 m-0">-158</h1>
                                    <div class="text-uppercase">نمایشگر</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25">
                                <div class="text-center">
                                    <div class="text-uppercase">نمایشگر</div>
                                    <h1 class="countnm fs-50 m-0">158</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25 bg-danger">
                                <div class="text-center">
                                    <div class="text-uppercase">نمایشگر</div>
                                    <h1 class="countnm fs-50 m-0">-158</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-inverse p-25 bg-img" style="background-image: url(images/gallery/thumb/15.jpg);" data-overlay="5">
                                <div class="text-center">
                                    <div class="text-uppercase">نمایشگر</div>
                                    <h1 class="countnm per fs-50 m-0">58</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box p-25">
                                <div class="text-center">
                                    <h1 class="countnm per fs-50 m-0">-58</h1>
                                    <div class="text-uppercase">نمایشگر</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="box-group">
                                <div class="box overflow-hidden">
                                    <div class="vertical-align h-200">
                                        <div class="vertical-align-middle fs-30 text-center w-p100">
                                            <span class="icon-Equalizer fs-50 me-10"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                            <span class="countnm per">75</span>
                                            <div class="fs-24 mt-3 text-fade">بیشترین سود</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden bg-primary-light">
                                    <div class="vertical-align text-center p-30 h-200">
                                        <div class="vertical-align-middle fs-40">
                                            <p class="text-primary">امروز</p>
                                            <p class="text-primary">فروش</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="box-group">
                                <div class="box overflow-hidden">
                                    <div class="vertical-align h-200">
                                        <div class="vertical-align-middle fs-30 text-center w-p100">
                                            <span class="icon-Chart-line fs-50 me-10"><span class="path1"></span><span class="path2"></span></span>
                                            <span class="countnm per">75</span>
                                            <div class="fs-24 mt-3 text-fade">بیشترین سود</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden box-inverse bg-img" style="background-image: url(images/gallery/full/10.jpg)" data-overlay="5">
                                    <div class="vertical-align text-center p-30 h-200">
                                        <div class="vertical-align-middle fs-40">
                                            <p>امروز</p>
                                            <p>فروش</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- box -->
                            <div class="box-group">
                                <div class="box overflow-hidden">
                                    <div class="bg-warning-light vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <div class="mb-5"><span class="icon-Play"></span></div>
                                            <span class="countnm text-warning">8457</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden p-0">
                                    <div class="bg-danger vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <div class="mb-5"><span class="icon-Image"></span></div>
                                            <span class="countnm">1254</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="box overflow-hidden p-0">
                                    <div class="bg-success-light vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <div class="mb-5"><span class="icon-Active-call"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                            <span class="countnm text-success">9563</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <!-- box -->
                            <div class="box-group">
                                <div class="box">
                                    <div class="vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <span class="countnm per">42</span>
                                            <div class="mb-5 text-info"><span class="icon-Play"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box p-0">
                                    <div class="vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <span class="countnm per">50</span>
                                            <div class="mb-5 text-primary"><span class="icon-Image"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box p-0">
                                    <div class="vertical-align h-150">
                                        <div class="vertical-align-middle text-center w-p100 fs-40">
                                            <span class="countnm per">84</span>
                                            <div class="mb-5 text-success"><span class="icon-Active-call"><span class="path1"></span><span class="path2"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="mt-5"><span class="icon-Shield-check fs-50"><span class="path1"></span><span class="path2"></span></span>
                                            </p>
                                            <p class="fw-600">نشان ها</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="mt-5">
                                                <span class="icon-Incoming-mail fs-50 text-success"><span class="path1"></span><span class="path2"></span></span>
                                            </p>
                                            <p class="fw-600">دریافت</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="mt-5">
                                                <span class="icon-Cart fs-50 text-danger"><span class="path1"></span><span class="path2"></span></span>
                                            </p>
                                            <p class="fw-600">کارت</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-pop text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="fs-40">
                                                <strong>499</strong>
                                            </p>
                                            <p class="fw-600">
                                                <span class="icon-Money me-5 text-info"><span class="path1"></span><span class="path2"></span></span>بدست آمده
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-pop text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="fs-40 text-success">
                                                <strong>10</strong>
                                            </p>
                                            <p class="fw-600">
                                                <span class="icon-Incoming-mail me-5 text-success"><span class="path1"></span><span class="path2"></span></span> پیام ها
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 col-md-4">
                                    <a class="box box-link-pop text-center" href="javascript:void(0)">
                                        <div class="box-body py-25">
                                            <p class="fs-40 text-danger">
                                                <strong>3</strong>
                                            </p>
                                            <p class="fw-600">
                                                <span class="icon-Cart me-5 text-danger"><span class="path1"></span><span class="path2"></span></span> محصولات
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                <div class="box-body py-25 bg-info-light bbsr-0 bber-0">
                                    <p class="fw-600 text-info">نشان ها</p>
                                </div>
                                <div class="box-body">
                                    <p class="mt-5">
                                        <span class="icon-Shield-check fs-50 text-info"><span class="path1"></span><span class="path2"></span></span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                <div class="box-body py-25 bg-success-light bbsr-0 bber-0">
                                    <p class="fw-600">دریافت</p>
                                </div>
                                <div class="box-body">
                                    <p class="mt-5">
                                        <span class="icon-Incoming-mail fs-50 text-success"><span class="path1"></span><span class="path2"></span></span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-shadow text-center" href="javascript:void(0)">
                                <div class="box-body py-25 bg-danger-light bbsr-0 bber-0">
                                    <p class="fw-600">کارت</p>
                                </div>
                                <div class="box-body">
                                    <p class="mt-5">
                                        <span class="icon-Cart fs-50 text-danger"><span class="path1"></span><span class="path2"></span></span>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-pop text-center" href="javascript:void(0)">
                                <div class="box-body">
                                    <p class="fs-40 text-danger">
                                        <strong>987&euro;</strong>
                                    </p>
                                </div>
                                <div class="box-body py-25 bg-danger-light btsr-0 bter-0">
                                    <p class="fw-600">
                                        <span class="icon-Money me-5 text-danger"><span class="path1"></span><span class="path2"></span></span> بالانس
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-pop text-center" href="javascript:void(0)">
                                <div class="box-body">
                                    <p class="fs-40 text-info">
                                        <strong>35</strong>
                                    </p>
                                </div>
                                <div class="box-body py-25 bg-info-light btsr-0 bter-0">
                                    <p class="fw-600">
                                        <span class="icon-Airplay-video me-5 text-info"><span class="path1"></span><span class="path2"></span></span> ویدئو
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="box box-link-pop text-center" href="javascript:void(0)">
                                <div class="box-body">
                                    <p class="fs-40 text-warning">
                                        <strong>15</strong>
                                    </p>
                                </div>
                                <div class="box-body py-25 bg-warning-light btsr-0 bter-0">
                                    <p class="fw-600">
                                        <span class="icon-Ticket me-5 text-warning"></span> تیکت ها
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="progress progress-sm mt-0 mb-0 bbsr-0 bber-0">
                                    <div class="progress-bar bg-primary bbsr-0 bber-0" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="card-body bg-white">
                                    <span class="text-muted me-1">کامل شده:</span>
                                    <span class="text-dark">125</span>
                                </div>

                                <div class="box-body bg-primary btsr-0 bter-0">
                                    <div class="flexbox pull-right">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> جزئیات</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> افزودن</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> رفرش</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <h5 class="m-0">وظایف</h5>
                                        <div class="fs-60 text-white">425</div>
                                        <span class="text-white">تعریف شده</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="progress progress-sm mt-0 mb-0 bbsr-0 bber-0">
                                    <div class="progress-bar bg-info bbsr-0 bber-0" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="box-body">
                                    <span class="text-muted me-1">انجام شده:</span>
                                    <span class="text-dark">176</span>
                                </div>
                                <div class="box-body bg-img box-inverse btsr-0 bter-0" style="background-image: url(images/gallery/thumb/9.jpg);" data-overlay="5">
                                    <div class="flexbox pull-right">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> جزئیات</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> افزودن</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> رفرش</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h3 class="m-0">مسائل</h3>
                                        <div class="fs-60">252</div>
                                        <span>باز</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="box bg-img box-inverse" style="background-image: url(images/gallery/thumb/14.jpg);" data-overlay="5">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>ویژگی ها</h5>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> جزئیات</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> افزودن</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> رفرش</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center my-2">
                                        <div class="fs-60 text-white">489</div>
                                        <span class="text-white">آماده</span>
                                    </div>
                                </div>

                                <div class="box-body bg-white bar-0">
                                    <span class="text-muted me-1">فوری:</span>
                                    <span class="text-dark">156</span>
                                </div>

                                <div class="progress progress-sm mt-0 mb-0 btsr-0 bter-0">
                                    <div class="progress-bar bg-danger btsr-0 bter-0" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box">

                                <div class="progress progress-sm mt-0 mb-0 bbsr-0 bber-0">
                                    <div class="progress-bar bg-info bbsr-0 bber-0" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <div class="card-body bg-lightest">
                                    <span class="text-muted me-1">کامل شده:</span>
                                    <span class="text-dark">125</span>
                                </div>

                                <div class="box-body">
                                    <div class="flexbox pull-right">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> جزئیات</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> افزودن</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> رفرش</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <h5 class="m-0">وظایف</h5>
                                        <div class="fs-60 text-info">154</div>
                                        <span class="text-muted">جزئیات</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flexbox">
                                        <h5>افر </h5>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> جزئیات</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> افزودن</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> رفرش</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center my-2">
                                        <div class="fs-60 text-red">145</div>
                                        <span class="text-muted">وظایف</span>
                                    </div>
                                </div>

                                <div class="box-body bg-lightest bar-0">
                                    <span class="text-muted me-1">دیروز:</span>
                                    <span class="text-dark">48</span>
                                </div>

                                <div class="progress progress-sm mt-0 mb-0 btsr-0 bter-0">
                                    <div class="progress-bar bg-danger btsr-0 bter-0" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box">
                                <div class="progress progress-sm mt-0 mb-0 bbsr-0 bber-0">
                                    <div class="progress-bar bg-primary  bbsr-0 bber-0" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="box-body bg-lightest bar-0">
                                    <span class="text-muted me-1">انجام شده:</span>
                                    <span class="text-dark">168</span>
                                </div>
                                <div class="box-body">
                                    <div class="flexbox pull-right">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="ion-android-more-vertical"></i></span>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#"><i class="ion-android-list"></i> جزئیات</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-add"></i> افزودن</a>
                                                <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> رفرش</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center my-2">
                                        <h5 class="m-0">مسائل</h5>
                                        <div class="fs-60 text-primary">452</div>
                                        <span class="text-muted">باز</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info rounded"><span class="icon-Equalizer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-number">90<small>%</small></span>
                                    <span class="info-box-text">ترافیک</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-info rounded"><span class="icon-Shoes"><span class="path1"></span><span class="path2"></span></span>
                                </span>

                                <div class="info-box-content text-end">
                                    <span class="info-box-number">90<small>%</small></span>
                                    <span class="info-box-text">ترافیک</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-success rounded-circle"><span class="icon-Like"><span class="path1"></span><span class="path2"></span></span>
                                </span>

                                <div class="info-box-content text-end">
                                    <span class="info-box-number">41,410</span>
                                    <span class="info-box-text">لینک کاربران</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="info-box bg-info">
                                <span class="info-box-icon push-bottom rounded"><span class="icon-User"><span class="path1"></span><span class="path2"></span></span>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">مشتری جدید</span>
                                    <span class="info-box-number">450</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 45%"></div>
                                    </div>
                                    <span class="progress-description">
                                        45% افزایش
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="info-box bg-success">
                                <span class="info-box-icon push-bottom rounded-circle"><span class="icon-Smile"><span class="path1"></span><span class="path2"></span></span>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">کل ویزیتورها</span>
                                    <span class="info-box-number">15,489</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 40%"></div>
                                    </div>
                                    <span class="progress-description">
                                        40% افزایش در ماه گذشته
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="info-box box-inverse bg-img" style="background-image: url(images/gallery/creative/img-10.jpg);" data-overlay="5">
                                <span class="info-box-icon push-bottom rounded"><span class="icon-Cloud-download"><span class="path1"></span><span class="path2"></span></span>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">دانلودها</span>
                                    <span class="info-box-number">55,005</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <span class="progress-description">
                                        85% افزایش در ماه گذشته
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <!-- small box -->
                            <div class="small-box box-inverse bg-img" style="background-image: url(images/gallery/thumb/6.jpg);" data-overlay="5">
                                <div class="inner">
                                    <h3>255</h3>
                                    <p>سفارشات</p>
                                </div>
                                <div class="icon text-white">
                                    <span class="icon-Cart2"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xl-4 col-12">
                            <!-- small box -->
                            <div class="small-box box-inverse bg-img" style="background-image: url(images/gallery/thumb/7.jpg);" data-overlay="5">
                                <div class="inner">
                                    <h3>67<sup style="font-size: 20px">%</sup></h3>
                                    <p>امتیازات فروش</p>
                                </div>
                                <div class="icon text-white">
                                    <span class="icon-Equalizer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                </div>
                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-xl-4 col-12">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>78</h3>
                                    <p>پذیرش</p>
                                </div>
                                <div class="icon">
                                    <span class="icon-Add-user text-white"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                    <div class="row mb-30">
                        <div class="col-xl-4 col-12">
                            <div class="flexbox flex-justified text-center bg-white rounded10 overflow-hidden">
                                <div class="no-shrink py-30">
                                    <span class="icon-Chart-line fs-50 text-success"><span class="path1"></span><span class="path2"></span></span>
                                </div>

                                <div class="py-30 bg-success-light">
                                    <div class="fs-30">+85</div>
                                    <span>فروش</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="flexbox flex-justified text-center bg-success rounded10 overflow-hidden">
                                <div class="no-shrink py-30">
                                    <span class="icon-Equalizer fs-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                </div>

                                <div class="py-30 bg-white text-dark">
                                    <div class="fs-30">+85</div>
                                    <span>فروش</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="flexbox flex-justified text-center bg-white rounded10 overflow-hidden">
                                <div class="no-shrink py-30">
                                    <span class="icon-Like fs-50 text-info"><span class="path1"></span><span class="path2"></span></span>
                                </div>

                                <div class="py-30 bg-info-light">
                                    <div class="fs-30">+512</div>
                                    <span>لایک ها</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box box-body text-center">
                                <div class="fs-40 fw-200">280</div>
                                <div>تراکنش</div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box box-body bg-primary">
                                <div class="flexbox">
                                    <span class="icon-User fs-50"><span class="path1"></span><span class="path2"></span></span>
                                    <span class="fs-40 fw-200">45,965</span>
                                </div>
                                <div class="text-end">کاربران</div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <div class="flexbox">
                                    <span class="icon-File text-primary fs-50"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                                    <span class="fs-40 fw-200">+859</span>
                                </div>
                                <div class="text-end">مقاله</div>
                            </div>
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-xl-4 col-12">
                            <div class="box box-body">
                                <h6 class="text-uppercase">لایک های امروز</h6>
                                <div class="flexbox mt-2">
                                    <span class="icon-Heart text-danger fs-40"></span>
                                    <span class=" fs-30">85,987</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <div class="col-xl-4 col-12">
                            <div class="box box-body bg-success">
                                <h6 class="text-uppercase">لایک های امروز</h6>
                                <div class="flexbox mt-2">
                                    <span class=" fs-30">75,951</span>
                                    <span class="icon-Like fs-40"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-xl-4 col-12">
                            <div class="box box-body bg-info">
                                <h6 class="text-uppercase">کامنت های امروز</h6>
                                <div class="flexbox mt-2">
                                    <span class="icon-Group-chat fs-40"><span class="path1"></span><span class="path2"></span></span>
                                    <span class=" fs-30">15,845</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

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
                                                <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-primary mb-1 fs-16">هزینه های جانبی</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-danger mb-1 fs-16">هزینه تنظیمات</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-success mb-1 fs-16">هزینه لابراتور</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center mb-30">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\004-dad.svg" class="h-30" alt="">
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                                <a href="#" class="text-dark hover-info mb-1 fs-16">حقوق کاربران</a>
                                                <span class="text-fade">رضا امینی</span>
                                            </div>
                                            <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\005-paint-palette.svg" class="h-30" alt="">
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
                                <div class=""><img src="images\avatar\avatar-2.png" alt="user" class="rounded bg-danger-light w-150" width="100"></div>
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
                                <img src="images\product\product-1.png" class="avatar h-100 w-100" alt="">
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
                                <img src="images\product\product-2.png" class="avatar h-100 w-100" alt="">
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
                                <img src="images\product\product-3.png" class="avatar h-100 w-100" alt="">
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
                                <img src="images\product\product-4.png" class="avatar h-100 w-100" alt="">
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
                                <img src="images\product\product-5.png" class="avatar h-100 w-100" alt="">
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
                                <img src="images\product\product-6.png" class="avatar h-100 w-100" alt="">
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
                                <img src="images\avatar\2.jpg" class="avatar avatar-lg" alt="">
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
                                <img src="images\avatar\3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                            ی سوال داشتم
                        </div>
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="images\avatar\2.jpg" class="avatar avatar-lg" alt="">
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
    <script src="src\js\vendors.min.js"></script>
    <script src="src\js\pages\chat-popup.js"></script>
    <script src="assets\icons\feather-icons\feather.min.js"></script>

    <script src="src\js\template.js"></script>
    <script src="src\js\pages\dashboard.js"></script>

</body>

</html>