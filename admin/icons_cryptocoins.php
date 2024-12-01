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
                                <a href="jobs-details.php">
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
                            <h4 class="page-title">آیکون های ارز دیجیتال</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">آیکون ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">ارز دیجیتال</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-body">
                        <div class="row">
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ADA" title="ADA"></i>
                                        <span class="name">ADA</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ADA-alt" title="ADA"></i>
                                        <span class="name">ADA-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ADC" title="ADC"></i>
                                        <span class="name">ADC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ADC-alt" title="ADC"></i>
                                        <span class="name">ADC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc AEON" title="AEON"></i>
                                        <span class="name">AEON</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc AEON-alt" title="AEON"></i>
                                        <span class="name">AEON-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc AMP" title="AMP"></i>
                                        <span class="name">AMP</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc AMP-alt" title="AMP"></i>
                                        <span class="name">AMP-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ANC" title="ANC"></i>
                                        <span class="name">ANC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ANC-alt" title="ANC"></i>
                                        <span class="name">ANC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ARCH" title="ARCH"></i>
                                        <span class="name">ARCH</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ARCH-alt" title="ARCH"></i>
                                        <span class="name">ARCH-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ARDR" title="ARDR"></i>
                                        <span class="name">ARDR</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ARDR-alt" title="ARDR"></i>
                                        <span class="name">ARDR-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ARK" title="ARK"></i>
                                        <span class="name">ARK</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ARK-alt" title="ARK"></i>
                                        <span class="name">ARK-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc AUR" title="AUR"></i>
                                        <span class="name">AUR</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc AUR-alt" title="AUR"></i>
                                        <span class="name">AUR-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BANX" title="BANX"></i>
                                        <span class="name">BANX</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BANX-alt" title="BANX"></i>
                                        <span class="name">BANX-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BAT" title="BAT"></i>
                                        <span class="name">BAT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BAT-alt" title="BAT"></i>
                                        <span class="name">BAT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BAY" title="BAY"></i>
                                        <span class="name">BAY</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BAY-alt" title="BAY"></i>
                                        <span class="name">BAY-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BC" title="BC"></i>
                                        <span class="name">BC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BC-alt" title="BC"></i>
                                        <span class="name">BC-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BCN" title="BCN"></i>
                                        <span class="name">BCN</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BCN-alt" title="BCN"></i>
                                        <span class="name">BCN-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BFT" title="BFT"></i>
                                        <span class="name">BFT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BFT-alt" title="BFT"></i>
                                        <span class="name">BFT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BRK" title="BRK"></i>
                                        <span class="name">BRK</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BRX-alt" title="BRX-alt"></i>
                                        <span class="name">BRX-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BSD" title="BSD"></i>
                                        <span class="name">BSD</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BSD-alt" title="BSD-alt"></i>
                                        <span class="name">BSD-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTA" title="BTA"></i>
                                        <span class="name">BTA</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTC" title="BTC"></i>
                                        <span class="name">BTC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTC-alt" title="BTC"></i>
                                        <span class="name">BTC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTCD" title="BTCD"></i>
                                        <span class="name">BTCD</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTCD-alt" title="BTCD"></i>
                                        <span class="name">BTCD-alt</span>
                                    </a>
                                </div>
                            </div>


                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTM" title="BTM"></i>
                                        <span class="name">BTM</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTM-alt" title="BTM"></i>
                                        <span class="name">BTM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTS" title="BTS"></i>
                                        <span class="name">BTS</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc BTS-alt" title="BTS"></i>
                                        <span class="name">BTS-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc CLAM" title="CLAM"></i>
                                        <span class="name">CLAM</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc CLAM-alt" title="CLAM"></i>
                                        <span class="name">CLAM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc CLOAK" title="CLOAK"></i>
                                        <span class="name">CLOAK</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc CLOAK-alt" title="CLOAK"></i>
                                        <span class="name">BTS-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DAO" title="DAO"></i>
                                        <span class="name">DAO</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DAO-alt" title="DAO"></i>
                                        <span class="name">DAO-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DASH" title="DASH"></i>
                                        <span class="name">DASH</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DASH-alt" title="DASH"></i>
                                        <span class="name">DASH-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DCR" title="DCR"></i>
                                        <span class="name">DCR</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DCR-alt" title="DCR"></i>
                                        <span class="name">DCR-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DCT" title="DCT"></i>
                                        <span class="name">DCT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DCT-alt" title="DCT"></i>
                                        <span class="name">DCT-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DGB" title="DGB"></i>
                                        <span class="name">DGB</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DGB-alt" title="DGB"></i>
                                        <span class="name">DGB-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DGD" title="DGD"></i>
                                        <span class="name">DGD</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DGX" title="DGX"></i>
                                        <span class="name">DGX-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DMD" title="DMD"></i>
                                        <span class="name">DMD</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DMD-alt" title="DMD"></i>
                                        <span class="name">DMD-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DOGE" title="DOGE"></i>
                                        <span class="name">DOGE</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc DOGE-alt" title="DOGE"></i>
                                        <span class="name">DOGE-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc EMC" title="EMC"></i>
                                        <span class="name">EMC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc EMC-alt" title="EMC"></i>
                                        <span class="name">EMC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc EOS" title="EOS"></i>
                                        <span class="name">EOS</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc EOS-alt" title="EOS"></i>
                                        <span class="name">EOS-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ERC" title="ERC"></i>
                                        <span class="name">ERC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ERC-alt" title="ERC"></i>
                                        <span class="name">ERC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ETC" title="ETC"></i>
                                        <span class="name">ETC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ETC-alt" title="ETC"></i>
                                        <span class="name">ETC-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ETH" title="ETH"></i>
                                        <span class="name">ETH</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ETH-alt" title="ETH"></i>
                                        <span class="name">ETH-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FC2" title="FC2"></i>
                                        <span class="name">FC2</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FC2-alt" title="FC2"></i>
                                        <span class="name">FC2-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FCT" title="FCT"></i>
                                        <span class="name">FCT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FCT-alt" title="FCT"></i>
                                        <span class="name">FCT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FLO" title="FLO"></i>
                                        <span class="name">FLO</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FLO-alt" title="FLO"></i>
                                        <span class="name">FLO-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FRK" title="FRK"></i>
                                        <span class="name">FRK</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FRK-alt" title="FRK"></i>
                                        <span class="name">FRK-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FTC" title="FTC"></i>
                                        <span class="name">FTC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc FTC-alt" title="FTC"></i>
                                        <span class="name">FTC-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GAME" title="GAME"></i>
                                        <span class="name">GAME</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GAME-alt" title="GAME"></i>
                                        <span class="name">GAME-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GBYTE" title="GBYTE"></i>
                                        <span class="name">GBYTE</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GBYTE-alt" title="GBYTE"></i>
                                        <span class="name">GBYTE-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GDC" title="GDC"></i>
                                        <span class="name">GDC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GDC-alt" title="GDC"></i>
                                        <span class="name">GDC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GEMZ" title="GEMZ"></i>
                                        <span class="name">GEMZ</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GEMZ-alt" title="GEMZ"></i>
                                        <span class="name">GEMZ-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GLD" title="GLD"></i>
                                        <span class="name">GLD</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GLD-alt" title="GLD"></i>
                                        <span class="name">GLD-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GNO" title="GNO"></i>
                                        <span class="name">GNO</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GNO-alt" title="GNO"></i>
                                        <span class="name">GNO-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GNT" title="GNT"></i>
                                        <span class="name">GNT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GNT-alt" title="GNT"></i>
                                        <span class="name">GNT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GOLOS" title="GOLOS"></i>
                                        <span class="name">GOLOS</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GOLOS-alt" title="GOLOS"></i>
                                        <span class="name">GOLOS-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GRC" title="GRC"></i>
                                        <span class="name">GRC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GRC-alt" title="GRC"></i>
                                        <span class="name">GRC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc GRS" title="GRS"></i>
                                        <span class="name">GRS</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc HEAT" title="HEAT"></i>
                                        <span class="name">HEAT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc HEAT-alt" title="HEAT"></i>
                                        <span class="name">HEAT-alt</span>
                                    </a>
                                </div>
                            </div>


                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ICN" title="ICN"></i>
                                        <span class="name">ICN</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ICN-alt" title="ICN"></i>
                                        <span class="name">ICN-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc IFC" title="IFC"></i>
                                        <span class="name">IFC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc IFC-alt" title="IFC"></i>
                                        <span class="name">IFC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc INCNT" title="INCNT"></i>
                                        <span class="name">INCNT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc INCNT-alt" title="INCNT"></i>
                                        <span class="name">INCNT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc IOC" title="IOC"></i>
                                        <span class="name">IOC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc IOC-alt" title="IOC"></i>
                                        <span class="name">IOC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc IOTA" title="IOTA"></i>
                                        <span class="name">IOTA</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc IOTA-alt" title="IOTA"></i>
                                        <span class="name">IOTA-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc JBS" title="JBS"></i>
                                        <span class="name">JBS</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc JBS-alt" title="JBS"></i>
                                        <span class="name">JBS-alt</span>
                                    </a>
                                </div>
                            </div>


                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc KMD" title="KMD"></i>
                                        <span class="name">KMD</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc KMD-alt" title="KMD"></i>
                                        <span class="name">KMD-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc KOBO" title="KOBO"></i>
                                        <span class="name">KOBO</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc KORE" title="KORE"></i>
                                        <span class="name">KORE</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc KORE-alt" title="KORE"></i>
                                        <span class="name">KORE-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc LBC" title="LBC"></i>
                                        <span class="name">LBC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc LBC-alt" title="LBC"></i>
                                        <span class="name">LBC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc LDOGE" title="LDOGE"></i>
                                        <span class="name">LDOGE</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc LDOGE-alt" title="LDOGE"></i>
                                        <span class="name">LDOGE-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc LSK" title="LSK"></i>
                                        <span class="name">LSK</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc LSK-alt" title="LSK"></i>
                                        <span class="name">LSK-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc LTC" title="LTC"></i>
                                        <span class="name">LTC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc LTC-alt" title="LTC"></i>
                                        <span class="name">LTC-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MAID" title="MAID"></i>
                                        <span class="name">MAID</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MAID-alt" title="MAID"></i>
                                        <span class="name">MAID-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MCO" title="MCO"></i>
                                        <span class="name">MCO</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MCO-alt" title="MCO"></i>
                                        <span class="name">MCO-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MINT" title="MINT"></i>
                                        <span class="name">MINT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MINT-alt" title="MINT"></i>
                                        <span class="name">MINT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MONA" title="MONA"></i>
                                        <span class="name">MONA</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MONA-alt" title="MONA"></i>
                                        <span class="name">MONA-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MRC" title="MRC"></i>
                                        <span class="name">MRC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MSC" title="MSC"></i>
                                        <span class="name">MSC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MSC-alt" title="MSC"></i>
                                        <span class="name">MSC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MTR" title="MTR"></i>
                                        <span class="name">MTR</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MTR-alt" title="MTR"></i>
                                        <span class="name">MTR-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MUE" title="MUE"></i>
                                        <span class="name">MUE</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc MUE-alt" title="MUE"></i>
                                        <span class="name">MUE-alt</span>
                                    </a>
                                </div>
                            </div>


                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NBT" title="NBT"></i>
                                        <span class="name">NBT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NEO" title="NEO"></i>
                                        <span class="name">NEO</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NEO-alt" title="NEO"></i>
                                        <span class="name">NEO-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NEOS" title="NEOS"></i>
                                        <span class="name">NEOS</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NEOS-alt" title="NEOS"></i>
                                        <span class="name">NEOS-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NEU" title="NEU"></i>
                                        <span class="name">NEU</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NEU-alt" title="NEU"></i>
                                        <span class="name">NEU-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NLG" title="NLG"></i>
                                        <span class="name">NLG</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NLG-alt" title="NLG"></i>
                                        <span class="name">NLG-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NMC" title="NMC"></i>
                                        <span class="name">NMC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NMC-alt" title="NMC"></i>
                                        <span class="name">NMC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NOTE" title="NOTE"></i>
                                        <span class="name">NOTE</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NOTE-alt" title="NOTE"></i>
                                        <span class="name">NOTE-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NVC" title="NVC"></i>
                                        <span class="name">NVC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NVC-alt" title="NVC"></i>
                                        <span class="name">NVC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NXT" title="NXT"></i>
                                        <span class="name">NXT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc NXT-alt" title="NXT"></i>
                                        <span class="name">NXT-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc OK" title="OK"></i>
                                        <span class="name">OK</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc OK" title="OK-alt"></i>
                                        <span class="name">OK-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc OMG" title="OMG"></i>
                                        <span class="name">OMG</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc OMG" title="OMG-alt"></i>
                                        <span class="name">OMG-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc OMNI" title="OMNI"></i>
                                        <span class="name">OMNI</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc OMNI" title="OMNI-alt"></i>
                                        <span class="name">OMNI-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc OPAL" title="OPAL"></i>
                                        <span class="name">OPAL</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc OPAL-alt" title="OPAL"></i>
                                        <span class="name">OPAL-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PART" title="PART"></i>
                                        <span class="name">PART</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PART-alt" title="PART"></i>
                                        <span class="name">PART-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PIGGY" title="PIGGY"></i>
                                        <span class="name">PIGGY</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PIGGY-alt" title="PIGGY"></i>
                                        <span class="name">PIGGY-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PINK" title="PINK"></i>
                                        <span class="name">PINK</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PINK-alt" title="PINK"></i>
                                        <span class="name">PINK-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PIVX" title="PIVX"></i>
                                        <span class="name">PIVX</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PIVX-alt" title="PIVX"></i>
                                        <span class="name">PIVX-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc POT" title="POT"></i>
                                        <span class="name">POT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc POT-alt" title="POT"></i>
                                        <span class="name">POT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PPC" title="PPC"></i>
                                        <span class="name">PPC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc PPC-alt" title="POT"></i>
                                        <span class="name">PPC-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc QRK" title="QRK"></i>
                                        <span class="name">QRK</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc QRK-alt" title="QRK"></i>
                                        <span class="name">QRK-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc QTUM" title="QTUM"></i>
                                        <span class="name">QTUM</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc QTUM-alt" title="QTUM"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RADS" title="RADS"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RADS-alt" title="RADS"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RBIES" title="RBIES"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RBIES-alt" title="RBIES"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RBT" title="RBT"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RBT-alt" title="RBT"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RBY" title="RBY"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RBY-alt" title="RBY"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RDD" title="RDD"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RDD-alt" title="RDD"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc REP" title="REP"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc REP-alt" title="REP"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RISE" title="RISE"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc RISE-alt" title="RISE"></i>
                                        <span class="name">QTUM-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SALT" title="SALT"></i>
                                        <span class="name">SALT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SALT-alt" title="SALT"></i>
                                        <span class="name">SALT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SAR" title="SAR"></i>
                                        <span class="name">SAR</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SAR-alt" title="SAR"></i>
                                        <span class="name">SAR-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SCOT" title="SCOT"></i>
                                        <span class="name">SCOT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SCOT-alt" title="SCOT"></i>
                                        <span class="name">SCOT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SDC" title="SDC"></i>
                                        <span class="name">SDC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SDC-alt" title="SDC"></i>
                                        <span class="name">SDC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SIA" title="SIA"></i>
                                        <span class="name">SIA</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SIA-alt" title="SIA"></i>
                                        <span class="name">SIA-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SJCX" title="SJCX"></i>
                                        <span class="name">SJCX</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SJCX-alt" title="SJCX"></i>
                                        <span class="name">SJCX-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SLG" title="SLG"></i>
                                        <span class="name">SLG</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SLG-alt" title="SLG"></i>
                                        <span class="name">SLG-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SLS" title="SLS"></i>
                                        <span class="name">SLS</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SLS-alt" title="SLS"></i>
                                        <span class="name">SLS-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SNRG" title="SNRG"></i>
                                        <span class="name">SNRGt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SNRG-alt" title="SNRG"></i>
                                        <span class="name">SNRG-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc START" title="START"></i>
                                        <span class="name">START</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc START-alt" title="START"></i>
                                        <span class="name">START-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc STEEM" title="STEEM"></i>
                                        <span class="name">STEEM</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc STEEM-alt" title="STEEM"></i>
                                        <span class="name">STEEM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc STR" title="STR"></i>
                                        <span class="name">STR</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc STR-alt" title="STR"></i>
                                        <span class="name">STR-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc STRAT" title="STRAT"></i>
                                        <span class="name">STRAT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc STRAT-alt" title="STRAT"></i>
                                        <span class="name">STRAT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SWIFT" title="SWIFT"></i>
                                        <span class="name">SWIFT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SWIFT-alt" title="SWIFT"></i>
                                        <span class="name">SWIFT-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SYNC" title="SYNC"></i>
                                        <span class="name">SYNC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SYNC-alt" title="SYNC"></i>
                                        <span class="name">SYNC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SYS" title="SYS"></i>
                                        <span class="name">SYS</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc SYS-alt" title="SYS"></i>
                                        <span class="name">SYS-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc TRIG" title="TRIG"></i>
                                        <span class="name">TRIG</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc TRIG-alt" title="TRIG"></i>
                                        <span class="name">TRIG-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc TX" title="TX"></i>
                                        <span class="name">TX</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc TX-alt" title="TX"></i>
                                        <span class="name">TX-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc UBQ" title="UBQ"></i>
                                        <span class="name">UBQ</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc UBQ-alt" title="TX"></i>
                                        <span class="name">UBQ-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc UNITY" title="UNITY"></i>
                                        <span class="name">UNITY</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc UNITY-alt" title="TX"></i>
                                        <span class="name">UNITY-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc USDT" title="USDT"></i>
                                        <span class="name">USDT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc USDT-alt" title="TX"></i>
                                        <span class="name">USDT-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VIOR" title="VIOR"></i>
                                        <span class="name">VIOR</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VIOR-alt" title="VIOR"></i>
                                        <span class="name">VIOR-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VNL" title="VNL"></i>
                                        <span class="name">VNL</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VNL-alt" title="VNL"></i>
                                        <span class="name">VNL-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VPN" title="VPN"></i>
                                        <span class="name">VPN</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VPN-alt" title="VPN"></i>
                                        <span class="name">VPN-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VRC" title="VRC"></i>
                                        <span class="name">VRC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VRC-alt" title="VRC"></i>
                                        <span class="name">VRC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VTC" title="VTC"></i>
                                        <span class="name">VTC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc VTC-alt" title="VTC"></i>
                                        <span class="name">VTC-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc WAVES" title="WAVES"></i>
                                        <span class="name">WAVES</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc WAVES-alt" title="WAVES"></i>
                                        <span class="name">WAVES-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XAI" title="XAI"></i>
                                        <span class="name">XAI</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XAI-alt" title="XAI"></i>
                                        <span class="name">XAI-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XBS" title="XBS"></i>
                                        <span class="name">XBS</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XBS-alt" title="XBS"></i>
                                        <span class="name">XBS-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XCP" title="XCP"></i>
                                        <span class="name">XCP</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XCP-alt" title="XCP"></i>
                                        <span class="name">XCP-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XEM" title="XEM"></i>
                                        <span class="name">XEM</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XEM-alt" title="XEM"></i>
                                        <span class="name">XEM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XMR" title="XMR"></i>
                                        <span class="name">XMR</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XPM" title="XPM"></i>
                                        <span class="name">XPM</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XPM-alt" title="XPM"></i>
                                        <span class="name">XPM-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XRP" title="XRP"></i>
                                        <span class="name">XRP</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XRP-alt" title="XRP"></i>
                                        <span class="name">XRP-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XTZ" title="XTZ"></i>
                                        <span class="name">XTZ</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XTZ-alt" title="XTZ"></i>
                                        <span class="name">XTZ-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XZC" title="XZC"></i>
                                        <span class="name">XZC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc XZC-alt" title="XZC"></i>
                                        <span class="name">XZC-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc YBC" title="YBC"></i>
                                        <span class="name">YBC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc YBC-alt" title="YBC"></i>
                                        <span class="name">YBC-alt</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ZEC" title="ZEC"></i>
                                        <span class="name">ZEC</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ZEC-alt" title="ZEC"></i>
                                        <span class="name">ZEC-alt</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ZEIT" title="ZEIT"></i>
                                        <span class="name">ZEIT</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-lg-2">
                                <div class="preview">
                                    <a href="#">
                                        <i class="cc ZEIT-alt" title="ZEIT"></i>
                                        <span class="name">ZEIT-alt</span>
                                    </a>
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