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
                            <h4 class="page-title">فونت آسام</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">آیکون ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">فونت آوسام</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="box box-body">
                        <h4 class="page-header">41 آیکون جدید in 4.7</h4>
                        <div class="row fontawesome-icon-list m-0">

                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-address-book" aria-hidden="true"></i> fa-address-book</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-address-book-o" aria-hidden="true"></i> fa-address-book-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-address-card" aria-hidden="true"></i> fa-address-card</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-address-card-o" aria-hidden="true"></i> fa-address-card-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bandcamp" aria-hidden="true"></i> fa-bandcamp</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bath" aria-hidden="true"></i> fa-bath</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bathtub" aria-hidden="true"></i> fa-bathtub <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-drivers-license" aria-hidden="true"></i> fa-drivers-license <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-drivers-license-o" aria-hidden="true"></i> fa-drivers-license-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-eercast" aria-hidden="true"></i> fa-eercast</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-envelope-open" aria-hidden="true"></i> fa-envelope-open</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> fa-envelope-open-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-etsy" aria-hidden="true"></i> fa-etsy</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-free-code-camp" aria-hidden="true"></i> fa-free-code-camp</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-grav" aria-hidden="true"></i> fa-grav</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-handshake-o" aria-hidden="true"></i> fa-handshake-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-id-badge" aria-hidden="true"></i> fa-id-badge</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-id-card" aria-hidden="true"></i> fa-id-card</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-id-card-o" aria-hidden="true"></i> fa-id-card-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-imdb" aria-hidden="true"></i> fa-imdb</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-linode" aria-hidden="true"></i> fa-linode</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-meetup" aria-hidden="true"></i> fa-meetup</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-microchip" aria-hidden="true"></i> fa-microchip</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-podcast" aria-hidden="true"></i> fa-podcast</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-quora" aria-hidden="true"></i> fa-quora</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-ravelry" aria-hidden="true"></i> fa-ravelry</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-s15" aria-hidden="true"></i> fa-s15 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-shower" aria-hidden="true"></i> fa-shower</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-snowflake-o" aria-hidden="true"></i> fa-snowflake-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-superpowers" aria-hidden="true"></i> fa-superpowers</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-telegram" aria-hidden="true"></i> fa-telegram</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer" aria-hidden="true"></i> fa-thermometer <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-0" aria-hidden="true"></i> fa-thermometer-0 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-1" aria-hidden="true"></i> fa-thermometer-1 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-2" aria-hidden="true"></i> fa-thermometer-2 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-3" aria-hidden="true"></i> fa-thermometer-3 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-4" aria-hidden="true"></i> fa-thermometer-4 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-empty" aria-hidden="true"></i> fa-thermometer-empty</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-full" aria-hidden="true"></i> fa-thermometer-full</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-half" aria-hidden="true"></i> fa-thermometer-half</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-quarter" aria-hidden="true"></i> fa-thermometer-quarter</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i> fa-thermometer-three-quarters</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-times-rectangle" aria-hidden="true"></i> fa-times-rectangle <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-times-rectangle-o" aria-hidden="true"></i> fa-times-rectangle-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-circle" aria-hidden="true"></i> fa-user-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-circle-o" aria-hidden="true"></i> fa-user-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-o" aria-hidden="true"></i> fa-user-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-vcard" aria-hidden="true"></i> fa-vcard <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-vcard-o" aria-hidden="true"></i> fa-vcard-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-close" aria-hidden="true"></i> fa-window-close</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-close-o" aria-hidden="true"></i> fa-window-close-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-maximize" aria-hidden="true"></i> fa-window-maximize</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-minimize" aria-hidden="true"></i> fa-window-minimize</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-restore" aria-hidden="true"></i> fa-window-restore</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wpexplorer" aria-hidden="true"></i> fa-wpexplorer</div>
                        </div>

                        <h4 class="page-header mt-30">آیکون های وب اپلیکیشن</h4>
                        <div class="row fontawesome-icon-list m-0">

                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-address-book" aria-hidden="true"></i> fa-address-book</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-address-book-o" aria-hidden="true"></i> fa-address-book-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-address-card" aria-hidden="true"></i> fa-address-card</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-address-card-o" aria-hidden="true"></i> fa-address-card-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-adjust" aria-hidden="true"></i> fa-adjust</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> fa-american-sign-language-interpreting</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-anchor" aria-hidden="true"></i> fa-anchor</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-archive" aria-hidden="true"></i> fa-archive</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-area-chart" aria-hidden="true"></i> fa-area-chart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-arrows" aria-hidden="true"></i> fa-arrows</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-arrows-h" aria-hidden="true"></i> fa-arrows-h</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-arrows-v" aria-hidden="true"></i> fa-arrows-v</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-asl-interpreting" aria-hidden="true"></i> fa-asl-interpreting <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i> fa-assistive-listening-systems</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-asterisk" aria-hidden="true"></i> fa-asterisk</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-at" aria-hidden="true"></i> fa-at</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-audio-description" aria-hidden="true"></i> fa-audio-description</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-automobile" aria-hidden="true"></i> fa-automobile <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-balance-scale" aria-hidden="true"></i> fa-balance-scale</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-ban" aria-hidden="true"></i> fa-ban</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bank" aria-hidden="true"></i> fa-bank <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bar-chart" aria-hidden="true"></i> fa-bar-chart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bar-chart-o" aria-hidden="true"></i> fa-bar-chart-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-barcode" aria-hidden="true"></i> fa-barcode</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bars" aria-hidden="true"></i> fa-bars</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bath" aria-hidden="true"></i> fa-bath</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bathtub" aria-hidden="true"></i> fa-bathtub <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery" aria-hidden="true"></i> fa-battery <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-0" aria-hidden="true"></i> fa-battery-0 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-1" aria-hidden="true"></i> fa-battery-1 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-2" aria-hidden="true"></i> fa-battery-2 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-3" aria-hidden="true"></i> fa-battery-3 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-4" aria-hidden="true"></i> fa-battery-4 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-empty" aria-hidden="true"></i> fa-battery-empty</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-full" aria-hidden="true"></i> fa-battery-full</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-half" aria-hidden="true"></i> fa-battery-half</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-quarter" aria-hidden="true"></i> fa-battery-quarter</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-battery-three-quarters" aria-hidden="true"></i> fa-battery-three-quarters</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bed" aria-hidden="true"></i> fa-bed</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-beer" aria-hidden="true"></i> fa-beer</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bell" aria-hidden="true"></i> fa-bell</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bell-o" aria-hidden="true"></i> fa-bell-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bell-slash" aria-hidden="true"></i> fa-bell-slash</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bell-slash-o" aria-hidden="true"></i> fa-bell-slash-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bicycle" aria-hidden="true"></i> fa-bicycle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-binoculars" aria-hidden="true"></i> fa-binoculars</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-birthday-cake" aria-hidden="true"></i> fa-birthday-cake</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-blind" aria-hidden="true"></i> fa-blind</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bluetooth" aria-hidden="true"></i> fa-bluetooth</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bluetooth-b" aria-hidden="true"></i> fa-bluetooth-b</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bolt" aria-hidden="true"></i> fa-bolt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bomb" aria-hidden="true"></i> fa-bomb</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-book" aria-hidden="true"></i> fa-book</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bookmark" aria-hidden="true"></i> fa-bookmark</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bookmark-o" aria-hidden="true"></i> fa-bookmark-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-braille" aria-hidden="true"></i> fa-braille</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-briefcase" aria-hidden="true"></i> fa-briefcase</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bug" aria-hidden="true"></i> fa-bug</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-building" aria-hidden="true"></i> fa-building</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-building-o" aria-hidden="true"></i> fa-building-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bullhorn" aria-hidden="true"></i> fa-bullhorn</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bullseye" aria-hidden="true"></i> fa-bullseye</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-bus" aria-hidden="true"></i> fa-bus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cab" aria-hidden="true"></i> fa-cab <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-calculator" aria-hidden="true"></i> fa-calculator</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-calendar" aria-hidden="true"></i> fa-calendar</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> fa-calendar-check-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i> fa-calendar-minus-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-calendar-o" aria-hidden="true"></i> fa-calendar-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> fa-calendar-plus-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-calendar-times-o" aria-hidden="true"></i> fa-calendar-times-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-camera" aria-hidden="true"></i> fa-camera</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-camera-retro" aria-hidden="true"></i> fa-camera-retro</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-car" aria-hidden="true"></i> fa-car</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> fa-caret-square-o-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-caret-square-o-left" aria-hidden="true"></i> fa-caret-square-o-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> fa-caret-square-o-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i> fa-caret-square-o-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> fa-cart-arrow-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cart-plus" aria-hidden="true"></i> fa-cart-plus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cc" aria-hidden="true"></i> fa-cc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-certificate" aria-hidden="true"></i> fa-certificate</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-check" aria-hidden="true"></i> fa-check</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-check-circle" aria-hidden="true"></i> fa-check-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-check-circle-o" aria-hidden="true"></i> fa-check-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-check-square" aria-hidden="true"></i> fa-check-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-check-square-o" aria-hidden="true"></i> fa-check-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-child" aria-hidden="true"></i> fa-child</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-circle" aria-hidden="true"></i> fa-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-circle-o" aria-hidden="true"></i> fa-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-circle-o-notch" aria-hidden="true"></i> fa-circle-o-notch</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-circle-thin" aria-hidden="true"></i> fa-circle-thin</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-clock-o" aria-hidden="true"></i> fa-clock-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-clone" aria-hidden="true"></i> fa-clone</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-close" aria-hidden="true"></i> fa-close <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cloud" aria-hidden="true"></i> fa-cloud</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cloud-download" aria-hidden="true"></i> fa-cloud-download</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cloud-upload" aria-hidden="true"></i> fa-cloud-upload</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-code" aria-hidden="true"></i> fa-code</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-code-fork" aria-hidden="true"></i> fa-code-fork</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-coffee" aria-hidden="true"></i> fa-coffee</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cog" aria-hidden="true"></i> fa-cog</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cogs" aria-hidden="true"></i> fa-cogs</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-comment" aria-hidden="true"></i> fa-comment</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-comment-o" aria-hidden="true"></i> fa-comment-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-commenting" aria-hidden="true"></i> fa-commenting</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-commenting-o" aria-hidden="true"></i> fa-commenting-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-comments" aria-hidden="true"></i> fa-comments</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-comments-o" aria-hidden="true"></i> fa-comments-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-compass" aria-hidden="true"></i> fa-compass</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-copyright" aria-hidden="true"></i> fa-copyright</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-creative-commons" aria-hidden="true"></i> fa-creative-commons</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-credit-card" aria-hidden="true"></i> fa-credit-card</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> fa-credit-card-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-crop" aria-hidden="true"></i> fa-crop</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-crosshairs" aria-hidden="true"></i> fa-crosshairs</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cube" aria-hidden="true"></i> fa-cube</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cubes" aria-hidden="true"></i> fa-cubes</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cutlery" aria-hidden="true"></i> fa-cutlery</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-dashboard" aria-hidden="true"></i> fa-dashboard <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-database" aria-hidden="true"></i> fa-database</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-deaf" aria-hidden="true"></i> fa-deaf</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-deafness" aria-hidden="true"></i> fa-deafness <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-desktop" aria-hidden="true"></i> fa-desktop</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-diamond" aria-hidden="true"></i> fa-diamond</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> fa-dot-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-download" aria-hidden="true"></i> fa-download</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-drivers-license" aria-hidden="true"></i> fa-drivers-license <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-drivers-license-o" aria-hidden="true"></i> fa-drivers-license-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-edit" aria-hidden="true"></i> fa-edit <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-ellipsis-h" aria-hidden="true"></i> fa-ellipsis-h</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> fa-ellipsis-v</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-envelope" aria-hidden="true"></i> fa-envelope</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-envelope-o" aria-hidden="true"></i> fa-envelope-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-envelope-open" aria-hidden="true"></i> fa-envelope-open</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> fa-envelope-open-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-envelope-square" aria-hidden="true"></i> fa-envelope-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-eraser" aria-hidden="true"></i> fa-eraser</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-exchange" aria-hidden="true"></i> fa-exchange</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-exclamation" aria-hidden="true"></i> fa-exclamation</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> fa-exclamation-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> fa-exclamation-triangle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-external-link" aria-hidden="true"></i> fa-external-link</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-external-link-square" aria-hidden="true"></i> fa-external-link-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-eye" aria-hidden="true"></i> fa-eye</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-eye-slash" aria-hidden="true"></i> fa-eye-slash</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-eyedropper" aria-hidden="true"></i> fa-eyedropper</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fax" aria-hidden="true"></i> fa-fax</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-feed" aria-hidden="true"></i> fa-feed <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-female" aria-hidden="true"></i> fa-female</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fighter-jet" aria-hidden="true"></i> fa-fighter-jet</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-archive-o" aria-hidden="true"></i> fa-file-archive-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-audio-o" aria-hidden="true"></i> fa-file-audio-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-code-o" aria-hidden="true"></i> fa-file-code-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-excel-o" aria-hidden="true"></i> fa-file-excel-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-image-o" aria-hidden="true"></i> fa-file-image-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-movie-o" aria-hidden="true"></i> fa-file-movie-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> fa-file-pdf-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-photo-o" aria-hidden="true"></i> fa-file-photo-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-picture-o" aria-hidden="true"></i> fa-file-picture-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i> fa-file-powerpoint-o</div>

                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-sound-o" aria-hidden="true"></i> fa-file-sound-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-video-o" aria-hidden="true"></i> fa-file-video-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-word-o" aria-hidden="true"></i> fa-file-word-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-file-zip-o" aria-hidden="true"></i> fa-file-zip-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-film" aria-hidden="true"></i> fa-film</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-filter" aria-hidden="true"></i> fa-filter</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fire" aria-hidden="true"></i> fa-fire</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fire-extinguisher" aria-hidden="true"></i> fa-fire-extinguisher</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-flag" aria-hidden="true"></i> fa-flag</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-flag-checkered" aria-hidden="true"></i> fa-flag-checkered</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-flag-o" aria-hidden="true"></i> fa-flag-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-flash" aria-hidden="true"></i> fa-flash <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-flask" aria-hidden="true"></i> fa-flask</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-folder" aria-hidden="true"></i> fa-folder</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-folder-o" aria-hidden="true"></i> fa-folder-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-folder-open" aria-hidden="true"></i> fa-folder-open</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-folder-open-o" aria-hidden="true"></i> fa-folder-open-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-frown-o" aria-hidden="true"></i> fa-frown-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-futbol-o" aria-hidden="true"></i> fa-futbol-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-gamepad" aria-hidden="true"></i> fa-gamepad</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-gavel" aria-hidden="true"></i> fa-gavel</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-gear" aria-hidden="true"></i> fa-gear <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-gears" aria-hidden="true"></i> fa-gears <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-gift" aria-hidden="true"></i> fa-gift</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-glass" aria-hidden="true"></i> fa-glass</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-globe" aria-hidden="true"></i> fa-globe</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-graduation-cap" aria-hidden="true"></i> fa-graduation-cap</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-group" aria-hidden="true"></i> fa-group <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-grab-o" aria-hidden="true"></i> fa-hand-grab-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-lizard-o" aria-hidden="true"></i> fa-hand-lizard-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-paper-o" aria-hidden="true"></i> fa-hand-paper-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-peace-o" aria-hidden="true"></i> fa-hand-peace-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> fa-hand-pointer-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-rock-o" aria-hidden="true"></i> fa-hand-rock-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-scissors-o" aria-hidden="true"></i> fa-hand-scissors-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-spock-o" aria-hidden="true"></i> fa-hand-spock-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hand-stop-o" aria-hidden="true"></i> fa-hand-stop-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-handshake-o" aria-hidden="true"></i> fa-handshake-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hard-of-hearing" aria-hidden="true"></i> fa-hard-of-hearing <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hashtag" aria-hidden="true"></i> fa-hashtag</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hdd-o" aria-hidden="true"></i> fa-hdd-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-headphones" aria-hidden="true"></i> fa-headphones</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-heart" aria-hidden="true"></i> fa-heart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-heart-o" aria-hidden="true"></i> fa-heart-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-heartbeat" aria-hidden="true"></i> fa-heartbeat</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-history" aria-hidden="true"></i> fa-history</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-home" aria-hidden="true"></i> fa-home</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hotel" aria-hidden="true"></i> fa-hotel <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hourglass" aria-hidden="true"></i> fa-hourglass</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hourglass-1" aria-hidden="true"></i> fa-hourglass-1 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hourglass-2" aria-hidden="true"></i> fa-hourglass-2 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hourglass-3" aria-hidden="true"></i> fa-hourglass-3 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hourglass-end" aria-hidden="true"></i> fa-hourglass-end</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hourglass-half" aria-hidden="true"></i> fa-hourglass-half</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hourglass-o" aria-hidden="true"></i> fa-hourglass-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hourglass-start" aria-hidden="true"></i> fa-hourglass-start</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-i-cursor" aria-hidden="true"></i> fa-i-cursor</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-id-badge" aria-hidden="true"></i> fa-id-badge</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-id-card" aria-hidden="true"></i> fa-id-card</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-id-card-o" aria-hidden="true"></i> fa-id-card-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-image" aria-hidden="true"></i> fa-image <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-inbox" aria-hidden="true"></i> fa-inbox</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-industry" aria-hidden="true"></i> fa-industry</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-info" aria-hidden="true"></i> fa-info</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-info-circle" aria-hidden="true"></i> fa-info-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-institution" aria-hidden="true"></i> fa-institution <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-key" aria-hidden="true"></i> fa-key</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-keyboard-o" aria-hidden="true"></i> fa-keyboard-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-language" aria-hidden="true"></i> fa-language</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-laptop" aria-hidden="true"></i> fa-laptop</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-leaf" aria-hidden="true"></i> fa-leaf</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-legal" aria-hidden="true"></i> fa-legal <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-lemon-o" aria-hidden="true"></i> fa-lemon-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-level-down" aria-hidden="true"></i> fa-level-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-level-up" aria-hidden="true"></i> fa-level-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-life-bouy" aria-hidden="true"></i> fa-life-bouy <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-life-buoy" aria-hidden="true"></i> fa-life-buoy <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-life-ring" aria-hidden="true"></i> fa-life-ring</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-life-saver" aria-hidden="true"></i> fa-life-saver <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> fa-lightbulb-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-line-chart" aria-hidden="true"></i> fa-line-chart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-location-arrow" aria-hidden="true"></i> fa-location-arrow</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-lock" aria-hidden="true"></i> fa-lock</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-low-vision" aria-hidden="true"></i> fa-low-vision</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-magic" aria-hidden="true"></i> fa-magic</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-magnet" aria-hidden="true"></i> fa-magnet</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-mail-forward" aria-hidden="true"></i> fa-mail-forward <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-mail-reply" aria-hidden="true"></i> fa-mail-reply <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-mail-reply-all" aria-hidden="true"></i> fa-mail-reply-all <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-male" aria-hidden="true"></i> fa-male</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-map" aria-hidden="true"></i> fa-map</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-map-marker" aria-hidden="true"></i> fa-map-marker</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-map-o" aria-hidden="true"></i> fa-map-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-map-pin" aria-hidden="true"></i> fa-map-pin</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-map-signs" aria-hidden="true"></i> fa-map-signs</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-meh-o" aria-hidden="true"></i> fa-meh-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-microchip" aria-hidden="true"></i> fa-microchip</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-microphone" aria-hidden="true"></i> fa-microphone</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-microphone-slash" aria-hidden="true"></i> fa-microphone-slash</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-minus" aria-hidden="true"></i> fa-minus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-minus-circle" aria-hidden="true"></i> fa-minus-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-minus-square" aria-hidden="true"></i> fa-minus-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-minus-square-o" aria-hidden="true"></i> fa-minus-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-mobile" aria-hidden="true"></i> fa-mobile</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-mobile-phone" aria-hidden="true"></i> fa-mobile-phone <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-money" aria-hidden="true"></i> fa-money</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-moon-o" aria-hidden="true"></i> fa-moon-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-mortar-board" aria-hidden="true"></i> fa-mortar-board <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-motorcycle" aria-hidden="true"></i> fa-motorcycle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-mouse-pointer" aria-hidden="true"></i> fa-mouse-pointer</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-music" aria-hidden="true"></i> fa-music</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-navicon" aria-hidden="true"></i> fa-navicon <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-newspaper-o" aria-hidden="true"></i> fa-newspaper-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-object-group" aria-hidden="true"></i> fa-object-group</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-object-ungroup" aria-hidden="true"></i> fa-object-ungroup</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-paint-brush" aria-hidden="true"></i> fa-paint-brush</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-paper-plane" aria-hidden="true"></i> fa-paper-plane</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> fa-paper-plane-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-paw" aria-hidden="true"></i> fa-paw</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-pencil" aria-hidden="true"></i> fa-pencil</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-pencil-square" aria-hidden="true"></i> fa-pencil-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> fa-pencil-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-percent" aria-hidden="true"></i> fa-percent</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-phone" aria-hidden="true"></i> fa-phone</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-phone-square" aria-hidden="true"></i> fa-phone-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-photo" aria-hidden="true"></i> fa-photo <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-picture-o" aria-hidden="true"></i> fa-picture-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-pie-chart" aria-hidden="true"></i> fa-pie-chart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-plane" aria-hidden="true"></i> fa-plane</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-plug" aria-hidden="true"></i> fa-plug</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-plus" aria-hidden="true"></i> fa-plus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-plus-circle" aria-hidden="true"></i> fa-plus-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-plus-square" aria-hidden="true"></i> fa-plus-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-plus-square-o" aria-hidden="true"></i> fa-plus-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-podcast" aria-hidden="true"></i> fa-podcast</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-power-off" aria-hidden="true"></i> fa-power-off</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-print" aria-hidden="true"></i> fa-print</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-puzzle-piece" aria-hidden="true"></i> fa-puzzle-piece</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-qrcode" aria-hidden="true"></i> fa-qrcode</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-question" aria-hidden="true"></i> fa-question</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-question-circle" aria-hidden="true"></i> fa-question-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-question-circle-o" aria-hidden="true"></i> fa-question-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-quote-left" aria-hidden="true"></i> fa-quote-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-quote-right" aria-hidden="true"></i> fa-quote-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-random" aria-hidden="true"></i> fa-random</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-recycle" aria-hidden="true"></i> fa-recycle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-refresh" aria-hidden="true"></i> fa-refresh</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-registered" aria-hidden="true"></i> fa-registered</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-remove" aria-hidden="true"></i> fa-remove <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-reorder" aria-hidden="true"></i> fa-reorder <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-reply" aria-hidden="true"></i> fa-reply</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-reply-all" aria-hidden="true"></i> fa-reply-all</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-retweet" aria-hidden="true"></i> fa-retweet</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-road" aria-hidden="true"></i> fa-road</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-rocket" aria-hidden="true"></i> fa-rocket</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-rss" aria-hidden="true"></i> fa-rss</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-rss-square" aria-hidden="true"></i> fa-rss-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-s15" aria-hidden="true"></i> fa-s15 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-search" aria-hidden="true"></i> fa-search</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-search-minus" aria-hidden="true"></i> fa-search-minus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-search-plus" aria-hidden="true"></i> fa-search-plus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-send" aria-hidden="true"></i> fa-send <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-send-o" aria-hidden="true"></i> fa-send-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-server" aria-hidden="true"></i> fa-server</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-share" aria-hidden="true"></i> fa-share</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-share-alt" aria-hidden="true"></i> fa-share-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-share-alt-square" aria-hidden="true"></i> fa-share-alt-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-share-square" aria-hidden="true"></i> fa-share-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-share-square-o" aria-hidden="true"></i> fa-share-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-shield" aria-hidden="true"></i> fa-shield</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-ship" aria-hidden="true"></i> fa-ship</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-shopping-bag" aria-hidden="true"></i> fa-shopping-bag</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-shopping-basket" aria-hidden="true"></i> fa-shopping-basket</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-shopping-cart" aria-hidden="true"></i> fa-shopping-cart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-shower" aria-hidden="true"></i> fa-shower</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sign-in" aria-hidden="true"></i> fa-sign-in</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sign-language" aria-hidden="true"></i> fa-sign-language</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sign-out" aria-hidden="true"></i> fa-sign-out</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-signal" aria-hidden="true"></i> fa-signal</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-signing" aria-hidden="true"></i> fa-signing <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sitemap" aria-hidden="true"></i> fa-sitemap</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sliders" aria-hidden="true"></i> fa-sliders</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-smile-o" aria-hidden="true"></i> fa-smile-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-snowflake-o" aria-hidden="true"></i> fa-snowflake-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-soccer-ball-o" aria-hidden="true"></i> fa-soccer-ball-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort" aria-hidden="true"></i> fa-sort</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-alpha-asc" aria-hidden="true"></i> fa-sort-alpha-asc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-alpha-desc" aria-hidden="true"></i> fa-sort-alpha-desc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-amount-asc" aria-hidden="true"></i> fa-sort-amount-asc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i> fa-sort-amount-desc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-asc" aria-hidden="true"></i> fa-sort-asc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-desc" aria-hidden="true"></i> fa-sort-desc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-down" aria-hidden="true"></i> fa-sort-down <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i> fa-sort-numeric-asc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-numeric-desc" aria-hidden="true"></i> fa-sort-numeric-desc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sort-up" aria-hidden="true"></i> fa-sort-up <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-space-shuttle" aria-hidden="true"></i> fa-space-shuttle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-spinner" aria-hidden="true"></i> fa-spinner</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-spoon" aria-hidden="true"></i> fa-spoon</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-square" aria-hidden="true"></i> fa-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-square-o" aria-hidden="true"></i> fa-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-star" aria-hidden="true"></i> fa-star</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-star-half" aria-hidden="true"></i> fa-star-half</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-star-half-empty" aria-hidden="true"></i> fa-star-half-empty <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-star-half-full" aria-hidden="true"></i> fa-star-half-full <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-star-half-o" aria-hidden="true"></i> fa-star-half-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-star-o" aria-hidden="true"></i> fa-star-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sticky-note" aria-hidden="true"></i> fa-sticky-note</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> fa-sticky-note-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-street-view" aria-hidden="true"></i> fa-street-view</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-suitcase" aria-hidden="true"></i> fa-suitcase</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sun-o" aria-hidden="true"></i> fa-sun-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-support" aria-hidden="true"></i> fa-support <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tablet" aria-hidden="true"></i> fa-tablet</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tachometer" aria-hidden="true"></i> fa-tachometer</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tag" aria-hidden="true"></i> fa-tag</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tags" aria-hidden="true"></i> fa-tags</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tasks" aria-hidden="true"></i> fa-tasks</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-taxi" aria-hidden="true"></i> fa-taxi</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-television" aria-hidden="true"></i> fa-television</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-terminal" aria-hidden="true"></i> fa-terminal</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer" aria-hidden="true"></i> fa-thermometer <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-0" aria-hidden="true"></i> fa-thermometer-0 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-1" aria-hidden="true"></i> fa-thermometer-1 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-2" aria-hidden="true"></i> fa-thermometer-2 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-3" aria-hidden="true"></i> fa-thermometer-3 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-4" aria-hidden="true"></i> fa-thermometer-4 <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-empty" aria-hidden="true"></i> fa-thermometer-empty</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-full" aria-hidden="true"></i> fa-thermometer-full</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-half" aria-hidden="true"></i> fa-thermometer-half</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-quarter" aria-hidden="true"></i> fa-thermometer-quarter</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i> fa-thermometer-three-quarters</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thumb-tack" aria-hidden="true"></i> fa-thumb-tack</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thumbs-down" aria-hidden="true"></i> fa-thumbs-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> fa-thumbs-o-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> fa-thumbs-o-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-thumbs-up" aria-hidden="true"></i> fa-thumbs-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-ticket" aria-hidden="true"></i> fa-ticket</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-times" aria-hidden="true"></i> fa-times</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-times-circle" aria-hidden="true"></i> fa-times-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-times-circle-o" aria-hidden="true"></i> fa-times-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-times-rectangle" aria-hidden="true"></i> fa-times-rectangle <span class="text-muted">(alias)</span></div>

                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-times-rectangle-o" aria-hidden="true"></i> fa-times-rectangle-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tint" aria-hidden="true"></i> fa-tint</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-toggle-down" aria-hidden="true"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-toggle-left" aria-hidden="true"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-toggle-off" aria-hidden="true"></i> fa-toggle-off</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-toggle-on" aria-hidden="true"></i> fa-toggle-on</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-toggle-right" aria-hidden="true"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-toggle-up" aria-hidden="true"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-trademark" aria-hidden="true"></i> fa-trademark</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-trash" aria-hidden="true"></i> fa-trash</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-trash-o" aria-hidden="true"></i> fa-trash-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tree" aria-hidden="true"></i> fa-tree</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-trophy" aria-hidden="true"></i> fa-trophy</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-truck" aria-hidden="true"></i> fa-truck</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tty" aria-hidden="true"></i> fa-tty</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tv" aria-hidden="true"></i> fa-tv <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-umbrella" aria-hidden="true"></i> fa-umbrella</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-universal-access" aria-hidden="true"></i> fa-universal-access</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-university" aria-hidden="true"></i> fa-university</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-unlock" aria-hidden="true"></i> fa-unlock</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-unlock-alt" aria-hidden="true"></i> fa-unlock-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-unsorted" aria-hidden="true"></i> fa-unsorted <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-upload" aria-hidden="true"></i> fa-upload</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user" aria-hidden="true"></i> fa-user</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-circle" aria-hidden="true"></i> fa-user-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-circle-o" aria-hidden="true"></i> fa-user-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-o" aria-hidden="true"></i> fa-user-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-plus" aria-hidden="true"></i> fa-user-plus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-secret" aria-hidden="true"></i> fa-user-secret</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-user-times" aria-hidden="true"></i> fa-user-times</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-users" aria-hidden="true"></i> fa-users</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-vcard" aria-hidden="true"></i> fa-vcard <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-vcard-o" aria-hidden="true"></i> fa-vcard-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-video-camera" aria-hidden="true"></i> fa-video-camera</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> fa-volume-control-phone</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-volume-down" aria-hidden="true"></i> fa-volume-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-volume-off" aria-hidden="true"></i> fa-volume-off</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-volume-up" aria-hidden="true"></i> fa-volume-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-warning" aria-hidden="true"></i> fa-warning <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wheelchair" aria-hidden="true"></i> fa-wheelchair</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> fa-wheelchair-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wifi" aria-hidden="true"></i> fa-wifi</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-close" aria-hidden="true"></i> fa-window-close</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-close-o" aria-hidden="true"></i> fa-window-close-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-maximize" aria-hidden="true"></i> fa-window-maximize</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-minimize" aria-hidden="true"></i> fa-window-minimize</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-window-restore" aria-hidden="true"></i> fa-window-restore</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wrench" aria-hidden="true"></i> fa-wrench</div>

                        </div>

                        <h4 class="page-header mt-30">آیکون های دسترسی</h4>
                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-american-sign-language-interpreting" aria-hidden="true"></i> fa-american-sign-language-interpreting</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-asl-interpreting" aria-hidden="true"></i> fa-asl-interpreting <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i> fa-assistive-listening-systems</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-audio-description" aria-hidden="true"></i> fa-audio-description</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-blind" aria-hidden="true"></i> fa-blind</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-braille" aria-hidden="true"></i> fa-braille</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-cc" aria-hidden="true"></i> fa-cc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-deaf" aria-hidden="true"></i> fa-deaf</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-deafness" aria-hidden="true"></i> fa-deafness <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-hard-of-hearing" aria-hidden="true"></i> fa-hard-of-hearing <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-low-vision" aria-hidden="true"></i> fa-low-vision</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-question-circle-o" aria-hidden="true"></i> fa-question-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-sign-language" aria-hidden="true"></i> fa-sign-language</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-signing" aria-hidden="true"></i> fa-signing <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-tty" aria-hidden="true"></i> fa-tty</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-universal-access" aria-hidden="true"></i> fa-universal-access</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> fa-volume-control-phone</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wheelchair" aria-hidden="true"></i> fa-wheelchair</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> fa-wheelchair-alt</div>
                        </div>

                        <h4 class="page-header mt-30">آیکون های دست</h4>
                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-grab-o"></i> fa-hand-grab-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-lizard-o"></i> fa-hand-lizard-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-o-down"></i> fa-hand-o-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-o-left"></i> fa-hand-o-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-o-right"></i> fa-hand-o-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-o-up"></i> fa-hand-o-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-paper-o"></i> fa-hand-paper-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-peace-o"></i> fa-hand-peace-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-pointer-o"></i> fa-hand-pointer-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-rock-o"></i> fa-hand-rock-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-scissors-o"></i> fa-hand-scissors-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-spock-o"></i> fa-hand-spock-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-stop-o"></i> fa-hand-stop-o <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-thumbs-down"></i> fa-thumbs-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-thumbs-up"></i> fa-thumbs-up</div>
                        </div>

                        <h4 class="page-header mt-30">Transportation Icons</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-ambulance"></i> fa-ambulance</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-automobile"></i> fa-automobile
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bicycle"></i> fa-bicycle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bus"></i> fa-bus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cab"></i> fa-cab <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-car"></i> fa-car</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-fighter-jet"></i> fa-fighter-jet</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-motorcycle"></i> fa-motorcycle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-plane"></i> fa-plane</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-rocket"></i> fa-rocket</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-ship"></i> fa-ship</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-space-shuttle"></i> fa-space-shuttle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-subway"></i> fa-subway</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-taxi"></i> fa-taxi</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-train"></i> fa-train</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-truck"></i> fa-truck</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-wheelchair"></i> fa-wheelchair</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> wheelchair-alt</div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های نماد</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-genderless"></i> fa-genderless</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-intersex"></i> fa-intersex
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-mars"></i> fa-mars</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-mars-double"></i> fa-mars-double</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-mars-stroke"></i> fa-mars-stroke</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-mars-stroke-h"></i> fa-mars-stroke-h</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-mars-stroke-v"></i> fa-mars-stroke-v</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-mercury"></i> fa-mercury</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-neuter"></i> fa-neuter</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-transgender"></i> fa-transgender</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-transgender-alt"></i> fa-transgender-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-venus"></i> fa-venus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-venus-double"></i> fa-venus-double</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-venus-mars"></i> fa-venus-mars</div>
                        </div>
                        <h2 class="page-header mt-30">آیکون های نوع فایل</h2>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file"></i> fa-file</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-archive-o"></i> fa-file-archive-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-audio-o"></i> fa-file-audio-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-code-o"></i> fa-file-code-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-excel-o"></i> fa-file-excel-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-image-o"></i> fa-file-image-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-movie-o"></i> fa-file-movie-o
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-o"></i> fa-file-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-pdf-o"></i> fa-file-pdf-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-photo-o"></i> fa-file-photo-o
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-picture-o"></i> fa-file-picture-o
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-powerpoint-o"></i> fa-file-powerpoint-o
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-sound-o"></i> fa-file-sound-o
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-text"></i> fa-file-text</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-text-o"></i> fa-file-text-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-video-o"></i> fa-file-video-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-word-o"></i> fa-file-word-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-zip-o"></i> fa-file-zip-o
                                <span class="text-muted">(alias)</span>
                            </div>
                        </div>
                        <h2 class="page-header mt-30">آیکون های اسپینر</h2>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-circle-o-notch"></i> fa-circle-o-notch</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cog"></i> fa-cog</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-gear"></i> fa-gear <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-refresh"></i> fa-refresh</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-spinner"></i> fa-spinner</div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های فرم</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-check-square"></i> fa-check-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-check-square-o"></i> fa-check-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-circle"></i> fa-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-circle-o"></i> fa-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-dot-circle-o"></i> fa-dot-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-minus-square"></i> fa-minus-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-minus-square-o"></i> fa-minus-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-plus-square"></i> fa-plus-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-plus-square-o"></i> fa-plus-square-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-square"></i> fa-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-square-o"></i> fa-square-o</div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های پرداخت</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-amex"></i> fa-cc-amex</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-diners-club"></i> fa-cc-diners-club</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-discover"></i> fa-cc-discover</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-jcb"></i> fa-cc-jcb</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-mastercard"></i> fa-cc-mastercard</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-paypal"></i> fa-cc-paypal</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-stripe"></i> fa-cc-stripe</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-visa"></i> fa-cc-visa</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-credit-card"></i> fa-credit-card</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> fa-credit-card-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-google-wallet"></i> fa-google-wallet</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-paypal"></i> fa-paypal</div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های نمودار</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-area-chart"></i> fa-area-chart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bar-chart"></i> fa-bar-chart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bar-chart-o"></i> fa-bar-chart-o
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-line-chart"></i> fa-line-chart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-pie-chart"></i> fa-pie-chart</div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های ارز دیجیتال</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bitcoin"></i> fa-bitcoin
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-btc"></i> fa-btc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cny"></i> fa-cny <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-dollar"></i> fa-dollar
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-eur"></i> fa-eur</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-euro"></i> fa-euro <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-gbp"></i> fa-gbp</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-gg"></i> fa-gg</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-gg-circle"></i> fa-gg-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-ils"></i> fa-ils</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-inr"></i> fa-inr</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-jpy"></i> fa-jpy</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-krw"></i> fa-krw</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-money"></i> fa-money</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-rouble"></i> fa-rouble
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-rub"></i> fa-rub</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-shekel"></i> fa-shekel
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-sheqel"></i> fa-sheqel
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-try"></i> fa-try</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-turkish-lira"></i> fa-turkish-lira
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-usd"></i> fa-usd</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-won"></i> fa-won <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-yen"></i> fa-yen <span class="text-muted">(alias)</span>
                            </div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های ویرایشگر متن</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-align-center"></i> fa-align-center</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-align-justify"></i> fa-align-justify</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-align-left"></i> fa-align-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-align-right"></i> fa-align-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bold"></i> fa-bold</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chain"></i> fa-chain <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chain-broken"></i> fa-chain-broken</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-clipboard"></i> fa-clipboard</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-columns"></i> fa-columns</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-copy"></i> fa-copy <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cut"></i> fa-cut <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-dedent"></i> fa-dedent
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-eraser"></i> fa-eraser</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file"></i> fa-file</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-o"></i> fa-file-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-text"></i> fa-file-text</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-file-text-o"></i> fa-file-text-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-files-o"></i> fa-files-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-floppy-o"></i> fa-floppy-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-font"></i> fa-font</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-header"></i> fa-header</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-indent"></i> fa-indent</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-italic"></i> fa-italic</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-link"></i> fa-link</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-list"></i> fa-list</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-list-alt"></i> fa-list-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-list-ol"></i> fa-list-ol</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-list-ul"></i> fa-list-ul</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-outdent"></i> fa-outdent</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-paperclip"></i> fa-paperclip</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-paragraph"></i> fa-paragraph</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-paste"></i> fa-paste <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-repeat"></i> fa-repeat</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-rotate-left"></i> fa-rotate-left
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-rotate-right"></i> fa-rotate-right
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-save"></i> fa-save <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-scissors"></i> fa-scissors</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-strikethrough"></i> fa-strikethrough</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-subscript"></i> fa-subscript</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-superscript"></i> fa-superscript</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-table"></i> fa-table</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-text-height"></i> fa-text-height</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-text-width"></i> fa-text-width</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-th"></i> fa-th</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-th-large"></i> fa-th-large</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-th-list"></i> fa-th-list</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-underline"></i> fa-underline</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-undo"></i> fa-undo</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-unlink"></i> fa-unlink
                                <span class="text-muted">(alias)</span>
                            </div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های جهت دار</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angle-double-down"></i> fa-angle-double-down
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angle-double-left"></i> fa-angle-double-left
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angle-double-right"></i> fa-angle-double-right
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angle-double-up"></i> fa-angle-double-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angle-down"></i> fa-angle-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angle-left"></i> fa-angle-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angle-right"></i> fa-angle-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angle-up"></i> fa-angle-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-circle-down"></i> fa-arrow-circle-down
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-circle-left"></i> fa-arrow-circle-left
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-circle-right"></i> fa-arrow-circle-right
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-down"></i> fa-arrow-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-left"></i> fa-arrow-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-right"></i> fa-arrow-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrow-up"></i> fa-arrow-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrows"></i> fa-arrows</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrows-alt"></i> fa-arrows-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrows-h"></i> fa-arrows-h</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrows-v"></i> fa-arrows-v</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-caret-down"></i> fa-caret-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-caret-left"></i> fa-caret-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-caret-right"></i> fa-caret-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-caret-square-o-down"></i> fa-caret-square-o-down
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-caret-square-o-left"></i> fa-caret-square-o-left
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-caret-square-o-right"></i> fa-caret-square-o-right
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-caret-square-o-up"></i> fa-caret-square-o-up
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-caret-up"></i> fa-caret-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chevron-circle-down"></i> fa-chevron-circle-down
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chevron-circle-left"></i> fa-chevron-circle-left
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chevron-circle-right"></i> fa-chevron-circle-right
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chevron-circle-up"></i> fa-chevron-circle-up
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chevron-down"></i> fa-chevron-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chevron-left"></i> fa-chevron-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chevron-right"></i> fa-chevron-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chevron-up"></i> fa-chevron-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-exchange"></i> fa-exchange</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-o-down"></i> fa-hand-o-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-o-left"></i> fa-hand-o-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-o-right"></i> fa-hand-o-right</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hand-o-up"></i> fa-hand-o-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-long-arrow-down"></i> fa-long-arrow-down</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-long-arrow-left"></i> fa-long-arrow-left</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-long-arrow-right"></i> fa-long-arrow-right
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-long-arrow-up"></i> fa-long-arrow-up</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-toggle-down"></i> fa-toggle-down
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-toggle-left"></i> fa-toggle-left
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-toggle-right"></i> fa-toggle-right
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-toggle-up"></i> fa-toggle-up
                                <span class="text-muted">(alias)</span>
                            </div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های پخش کننده ویدیو</h4>

                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-arrows-alt"></i> fa-arrows-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-backward"></i> fa-backward</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-compress"></i> fa-compress</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-eject"></i> fa-eject</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-expand"></i> fa-expand</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-fast-backward"></i> fa-fast-backward</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-fast-forward"></i> fa-fast-forward</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-forward"></i> fa-forward</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-pause"></i> fa-pause</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-pause-circle" aria-hidden="true"></i>pause-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-pause-circle-o" aria-hidden="true"></i>pause-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-play"></i> fa-play</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-play-circle"></i> fa-play-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-play-circle-o"></i> fa-play-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-random"></i> fa-random</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-step-backward"></i> fa-step-backward</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-step-forward"></i> fa-step-forward</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-stop"></i> fa-stop</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-stop-circle" aria-hidden="true"></i>stop-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-stop-circle-o" aria-hidden="true"></i>stop-circle-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-youtube-play"></i> fa-youtube-play</div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های برند</h4>

                        <div class="alert alert-info">
                            <ul class="margin-bottom-none padding-left-lg">
                                <li>همه نمادهای مارک علامت تجاری صاحبان مربوطه هستند.</li>
                                <li>استفاده از این علائم تجاری نشان دهنده تایید دارنده علامت تجاری توسط Font Awesome نیست و بالعکس.
                                </li>
                            </ul>
                        </div>
                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-500px"></i> fa-500px</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-adn"></i> fa-adn</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-amazon"></i> fa-amazon</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-android"></i> fa-android</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-angellist"></i> fa-angellist</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-apple"></i> fa-apple</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-behance"></i> fa-behance</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-behance-square"></i> fa-behance-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bitbucket"></i> fa-bitbucket</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bitbucket-square"></i> fa-bitbucket-square
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-bitcoin"></i> fa-bitcoin
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-black-tie"></i> fa-black-tie</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-btc"></i> fa-btc</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-buysellads"></i> fa-buysellads</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-amex"></i> fa-cc-amex</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-diners-club"></i> fa-cc-diners-club</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-discover"></i> fa-cc-discover</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-jcb"></i> fa-cc-jcb</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-mastercard"></i> fa-cc-mastercard</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-paypal"></i> fa-cc-paypal</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-stripe"></i> fa-cc-stripe</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-cc-visa"></i> fa-cc-visa</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-chrome"></i> fa-chrome</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-codepen"></i> fa-codepen</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-connectdevelop"></i> fa-connectdevelop</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-contao"></i> fa-contao</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-css3"></i> fa-css3</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-dashcube"></i> fa-dashcube</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-delicious"></i> fa-delicious</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-deviantart"></i> fa-deviantart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-digg"></i> fa-digg</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-dribbble"></i> fa-dribbble</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-dropbox"></i> fa-dropbox</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-drupal"></i> fa-drupal</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-empire"></i> fa-empire</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-expeditedssl"></i> fa-expeditedssl</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-facebook"></i> fa-facebook</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-facebook-f"></i> fa-facebook-f
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-facebook-official"></i> fa-facebook-official
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-facebook-square"></i> fa-facebook-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-firefox"></i> fa-firefox</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-flickr"></i> fa-flickr</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-fonticons"></i> fa-fonticons</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-forumbee"></i> fa-forumbee</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-foursquare"></i> fa-foursquare</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-ge"></i> fa-ge
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-get-pocket"></i> fa-get-pocket</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-gg"></i> fa-gg</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-gg-circle"></i> fa-gg-circle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-git"></i> fa-git</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-git-square"></i> fa-git-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-github"></i> fa-github</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-github-alt"></i> fa-github-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-github-square"></i> fa-github-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-gittip"></i> fa-gittip
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-google"></i> fa-google</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-google-plus"></i> fa-google-plus</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-google-plus-square"></i> fa-google-plus-square
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-google-wallet"></i> fa-google-wallet</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-gratipay"></i> fa-gratipay</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hacker-news"></i> fa-hacker-news</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-houzz"></i> fa-houzz</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-html5"></i> fa-html5</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-instagram"></i> fa-instagram</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-internet-explorer"></i> fa-internet-explorer
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-ioxhost"></i> fa-ioxhost</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-joomla"></i> fa-joomla</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-jsfiddle"></i> fa-jsfiddle</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-lastfm"></i> fa-lastfm</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-lastfm-square"></i> fa-lastfm-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-leanpub"></i> fa-leanpub</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-linkedin"></i> fa-linkedin</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-linkedin-square"></i> fa-linkedin-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-linux"></i> fa-linux</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-maxcdn"></i> fa-maxcdn</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-meanpath"></i> fa-meanpath</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-medium"></i> fa-medium</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-odnoklassniki"></i> fa-odnoklassniki</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-odnoklassniki-square"></i> fa-odnoklassniki-square
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-opencart"></i> fa-opencart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-openid"></i> fa-openid</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-opera"></i> fa-opera</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-optin-monster"></i> fa-optin-monster</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-pagelines"></i> fa-pagelines</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-paypal"></i> fa-paypal</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-pied-piper"></i> fa-pied-piper</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-pied-piper-alt"></i> fa-pied-piper-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-pinterest"></i> fa-pinterest</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-pinterest-p"></i> fa-pinterest-p</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-pinterest-square"></i> fa-pinterest-square
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-qq"></i> fa-qq</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-ra"></i> fa-ra
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-rebel"></i> fa-rebel</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-reddit"></i> fa-reddit</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-reddit-square"></i> fa-reddit-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-renren"></i> fa-renren</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-safari"></i> fa-safari</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-sellsy"></i> fa-sellsy</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-share-alt"></i> fa-share-alt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-share-alt-square"></i> fa-share-alt-square
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-shirtsinbulk"></i> fa-shirtsinbulk</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-simplybuilt"></i> fa-simplybuilt</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-skyatlas"></i> fa-skyatlas</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-skype"></i> fa-skype</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-slack"></i> fa-slack</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-slideshare"></i> fa-slideshare</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-soundcloud"></i> fa-soundcloud</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-spotify"></i> fa-spotify</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-stack-exchange"></i> fa-stack-exchange</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-stack-overflow"></i> fa-stack-overflow</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-steam"></i> fa-steam</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-steam-square"></i> fa-steam-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-stumbleupon"></i> fa-stumbleupon</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-stumbleupon-circle"></i> fa-stumbleupon-circle
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-tencent-weibo"></i> fa-tencent-weibo</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-trello"></i> fa-trello</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-tripadvisor"></i> fa-tripadvisor</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-tumblr"></i> fa-tumblr</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-tumblr-square"></i> fa-tumblr-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-twitch"></i> fa-twitch</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-twitter"></i> fa-twitter</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-twitter-square"></i> fa-twitter-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-viacoin"></i> fa-viacoin</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-vimeo"></i> fa-vimeo</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-vimeo-square"></i> fa-vimeo-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-vine"></i> fa-vine</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-vk"></i> fa-vk</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-wechat"></i> fa-wechat
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-weibo"></i> fa-weibo</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-weixin"></i> fa-weixin</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-whatsapp"></i> fa-whatsapp</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-wikipedia-w"></i> fa-wikipedia-w</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-windows"></i> fa-windows</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-wordpress"></i> fa-wordpress</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-xing"></i> fa-xing</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-xing-square"></i> fa-xing-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-y-combinator"></i> fa-y-combinator</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-y-combinator-square"></i> fa-y-combinator-square <span class="text-muted">(alias)</span></div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-yahoo"></i> fa-yahoo</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-yc"></i> fa-yc
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-yc-square"></i> fa-yc-square
                                <span class="text-muted">(alias)</span>
                            </div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-yelp"></i> fa-yelp</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-youtube"></i> fa-youtube</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-youtube-play"></i> fa-youtube-play</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-youtube-square"></i> fa-youtube-square</div>
                        </div>
                        <h4 class="page-header mt-30">آیکون های پزشکی</h4>
                        <div class="row fontawesome-icon-list m-0">
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-ambulance"></i> fa-ambulance</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-h-square"></i> fa-h-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-heart"></i> fa-heart</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-heart-o"></i> fa-heart-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-heartbeat"></i> fa-heartbeat</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-hospital-o"></i> fa-hospital-o</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-medkit"></i> fa-medkit</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-plus-square"></i> fa-plus-square</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-stethoscope"></i> fa-stethoscope</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-user-md"></i> fa-user-md</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-fw fa-wheelchair"></i> fa-wheelchair</div>
                            <div class="fa-hover col-xl-3 col-lg-4 col-md-6 col-12"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> wheelchair-alt</div>
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