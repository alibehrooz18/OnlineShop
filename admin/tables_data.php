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
    <link rel="stylesheet" href="assets\vendor_components\datatable\datatables.min.css">
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed rtl">

    <div class="wrapper">
        <div id="loader"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start d-md-none d-block">
                <!-- Logo -->
                <a href="index.html" class="logo">
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
                    <a href="index.html" class="logo">
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
                                <a class="dropdown-item" href="extra_profile.html"><i class="ti-user"></i> پروفایل</a>
                                <a class="dropdown-item" href="mailbox.html"><i class="ti-email"></i> دریافت پیام</a>
                                <a class="dropdown-item" href="contact_app_chat.html"><i class="ti-link"></i> گفتگو</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="auth_login.html"><i class="ti-lock"></i> خروج</a>
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
                                <a href="index.html">
                                    <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
                                    <span>داشبورد</span>
                                </a>
                            </li>
                            <li>
                                <a href="offers.html">
                                    <i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
                                    <span>آفر</span>
                                </a>
                            </li>
                            <li>
                                <a href="people.html">
                                    <i class="icon-Flag"><span class="path1"></span><span class="path2"></span></i>
                                    <span>کاربران</span>
                                </a>
                            </li>
                            <li>
                                <a href="jobs-details.html">
                                    <i class="icon-Alarm-clock"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <span>جزئیات مشاغل</span>
                                </a>
                            </li>
                            <li>
                                <a href="contact_app_chat.html">
                                    <i class="icon-Chat2"></i>
                                    <span>چت </span>
                                </a>
                            </li>
                            <li>
                                <a href="contact_userlist_grid.html">
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
                                            <li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد پروفایل</a></li>
                                            <li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد پیشرفته</a></li>
                                            <li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد ساده</a></li>
                                            <li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد رنگی</a></li>
                                            <li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>کارد گروهی</a></li>
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
                                            <li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بخش بندی</a></li>
                                            <li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نشان ها</a></li>
                                            <li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بردر</a></li>
                                            <li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دکمه ها</a></li>
                                            <li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رنگ</a></li>
                                            <li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ دان</a></li>
                                            <li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ دان بخش بندی</a></li>
                                            <li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پراگرس بار</a></li>
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
                                            <li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فونت اوسام</a></li>
                                            <li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون</a></li>
                                            <li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های قطعه</a></li>
                                            <li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تم ایکون ها</a></li>
                                            <li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های خطوط ساده</a></li>
                                            <li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های ارز دیجیتال</a></li>
                                            <li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های پرچم</a></li>
                                            <li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایکون های هواشناسی</a></li>
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
                                            <li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نوارها</a></li>
                                            <li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اسلایدر ها</a></li>
                                            <li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تایپو گرافی</a></li>
                                            <li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تب ها</a></li>
                                            <li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلوچارت </a></li>
                                            <li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلوچارت افقی</a></li>
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
                                            <li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سوئیچ بوت استرپ</a></li>
                                            <li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پیج بندی </a></li>
                                            <li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رسانه های پیشرفته</a></li>
                                            <li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رنج اسلایدر</a></li>
                                            <li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>رتبه بندی</a></li>
                                            <li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>انیمیشن</a></li>
                                            <li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تمام صفحه</a></li>
                                            <li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>آهنگ</a></li>
                                            <li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تودرتو</a></li>
                                            <li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پورتلت های قابل کشیدن</a></li>
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
                                            <li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم اجزا</a></li>
                                            <li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم لایه </a></li>
                                            <li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم ویزارد</a></li>
                                            <li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرم اعتبار سنجی</a></li>
                                            <li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فرمت کننده</a></li>
                                            <li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر Xeditable</a></li>
                                            <li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دراپ زون</a></li>
                                            <li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر کد</a></li>
                                            <li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویرایشگر </a></li>
                                            <li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مارک داون</a></li>
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
                                            <li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول ساده</a></li>
                                            <li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>دیتا تیبل</a></li>
                                            <li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول قابل ویرایش</a></li>
                                            <li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>جدول رنگی</a></li>
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
                                            <li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>چارت جاوااسکریپتی</a></li>
                                            <li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فلت</a></li>
                                            <li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار خطی</a></li>
                                            <li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>موریس</a></li>
                                            <li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار دایره ای</a></li>
                                            <li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار لیستی</a></li>
                                            <li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار محوری</a></li>
                                            <li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار میله ای</a></li>
                                            <li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار داده ها</a></li>
                                            <li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار خطی</a></li>
                                            <li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودارهای پایه</a></li>
                                            <li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار نواری</a></li>
                                            <li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار پای و دونات</a></li>
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
                                            <li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تقویم</a></li>
                                            <li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست تماس</a></li>
                                            <li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>فعالیت ها</a></li>
                                            <li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صندوق ایمیل</a></li>
                                            <li><a href="contact_userlist_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مخاطبین</a></li>
                                            <li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>چت</a></li>
                                            <li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پشتیبانی</a></li>
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
                                                    <li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پست</a></li>
                                                    <li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نمودار</a></li>
                                                    <li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست</a></li>
                                                    <li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اجتماعی</a></li>
                                                    <li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>امار</a></li>
                                                    <li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>هواشناسی</a></li>
                                                    <li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ویجت ها</a></li>
                                                    <li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ایمیل ها</a></li>
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
                                                    <li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نقشه گوگل</a></li>
                                                    <li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>نقشه وکتور</a></li>
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
                                                    <li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>مدال ها</a></li>
                                                    <li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سویت الرت</a></li>
                                                    <li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>تواستر</a></li>
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
                                            <li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صورتحساب</a></li>
                                            <li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست فاکتورها</a></li>
                                            <li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پروفایل کاربری</a></li>
                                            <li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>لیست کاربران</a></li>
                                            <li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>سوالات</a></li>
                                            <li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>خالی</a></li>
                                            <li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صفحه به زودی</a></li>
                                            <li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>اسکرول سفارشی</a></li>
                                            <li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>گالری</a></li>
                                            <li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>پنجره لایت باکس</a></li>
                                            <li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>قیمت</a></li>
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
                                    <li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ورود</a></li>
                                    <li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ثبت نام</a></li>
                                    <li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>قفل صفحه</a></li>
                                    <li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>بازیابی رمز عبور</a></li>
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
                                    <li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i> خطای۴۰۴</a></li>
                                    <li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>خطای ۵۰۰</a></li>
                                    <li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>صفحات ضروری</a></li>
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
                            <h4 class="page-title">دیتا تیبل</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">جداول</li>
                                        <li class="breadcrumb-item active" aria-current="page">دیتا تیبل</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">

                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">هدرهای ترکیبی (rowspan و colspan)</h4>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">نام</th>
                                                    <th colspan="2">اطلاعات پرسنلی</th>
                                                    <th colspan="3">ارتباط</th>
                                                </tr>
                                                <tr>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                    <th>کد پرسنلی</th>
                                                    <th>تاریخ استخدام.</th>
                                                    <th>حقوق</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>رضا افشار</td>
                                                    <td>مدیر سیستم</td>
                                                    <td>مشهد</td>
                                                    <td>61</td>
                                                    <td>1396/04/25</td>
                                                    <td>3,321,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>نسترن کریمی</td>
                                                    <td>حسابدار</td>
                                                    <td>تبریز</td>
                                                    <td>63</td>
                                                    <td>1396/07/25</td>
                                                    <td>2,176,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پدرام شریفی</td>
                                                    <td>طراح وب</td>
                                                    <td>تهران</td>
                                                    <td>66</td>
                                                    <td>1394/01/12</td>
                                                    <td>2,860,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مریم رسولی</td>
                                                    <td>توسعه دهنده جاوا اسکریپت</td>
                                                    <td>مشهد</td>
                                                    <td>22</td>
                                                    <td>1397/03/29</td>
                                                    <td>2,443,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>حسین میری</td>
                                                    <td>حسابدار</td>
                                                    <td>تبریز</td>
                                                    <td>33</td>
                                                    <td>1397/11/28</td>
                                                    <td>3,712,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پریسا توکلی</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>کرمانشاه</td>
                                                    <td>61</td>
                                                    <td>1397/12/02</td>
                                                    <td>2,143,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>علیرضا غفاری</td>
                                                    <td>مدیر فروش</td>
                                                    <td>تهران</td>
                                                    <td>59</td>
                                                    <td>1397/08/06</td>
                                                    <td>3,175,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>رها معتمدی</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>تبریز</td>
                                                    <td>55</td>
                                                    <td>1398/10/14</td>
                                                    <td>2,765,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>سمیرا قربانی</td>
                                                    <td>توسعه دهنده جاوا اسکریپت</td>
                                                    <td>تهران</td>
                                                    <td>39</td>
                                                    <td>1394/09/15</td>
                                                    <td>3254,650,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>فرهاد مشرف</td>
                                                    <td>مهندس نرم افزار</td>
                                                    <td>مشهد</td>
                                                    <td>23</td>
                                                    <td>1397/12/13</td>
                                                    <td>2,872,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>کامران مولایی</td>
                                                    <td>مدیر دفتر</td>
                                                    <td>مازندران</td>
                                                    <td>30</td>
                                                    <td>1397/12/19</td>
                                                    <td>2,967,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>فریبا علوی</td>
                                                    <td>مدیر پشتیبانی</td>
                                                    <td>مشهد</td>
                                                    <td>22</td>
                                                    <td>1395/03/03</td>
                                                    <td>3,342,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>نغمه سبحانی</td>
                                                    <td>تولید محتوا</td>
                                                    <td>تهران</td>
                                                    <td>36</td>
                                                    <td>1397/10/16</td>
                                                    <td>4,150,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مینا اخباری</td>
                                                    <td>دیجیتال مارکتینگ</td>
                                                    <td>مازندران</td>
                                                    <td>43</td>
                                                    <td>1397/12/18</td>
                                                    <td>3,313,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>تینا گوهری</td>
                                                    <td>تولید محتوا</td>
                                                    <td>مازندران</td>
                                                    <td>19</td>
                                                    <td>1398/03/17</td>
                                                    <td>2,358,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مهدی علیپور</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>مازندران</td>
                                                    <td>66</td>
                                                    <td>1397/11/27</td>
                                                    <td>3,198,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پرویز تیموری</td>
                                                    <td>مسئول سئو</td>
                                                    <td>کرمانشاه</td>
                                                    <td>64</td>
                                                    <td>1398/06/09</td>
                                                    <td>2,765,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>لیلا مومنی</td>
                                                    <td>مدیر سیستم</td>
                                                    <td>کرمانشاه</td>
                                                    <td>59</td>
                                                    <td>1394/04/10</td>
                                                    <td>3,237,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>بهنام دانشگر</td>
                                                    <td>مهندس نرم افزار</td>
                                                    <td>مازندران</td>
                                                    <td>41</td>
                                                    <td>1397/10/13</td>
                                                    <td>2,132,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>دریا کاشفی</td>
                                                    <td>مدیر پشتیبانی</td>
                                                    <td>مشهد</td>
                                                    <td>35</td>
                                                    <td>1397/09/26</td>
                                                    <td>3,750,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>هومن غفاری</td>
                                                    <td>مدیر توسعه</td>
                                                    <td>کرمانشاه</td>
                                                    <td>30</td>
                                                    <td>1396/09/03</td>
                                                    <td>2,345,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>یلدا نجفی</td>
                                                    <td>مسئول سئو</td>
                                                    <td>کرمانشاه</td>
                                                    <td>40</td>
                                                    <td>1394/06/25</td>
                                                    <td>2,650,000 تومان</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                    <th>کد پرسنلی</th>
                                                    <th>تاریخ استخدام.</th>
                                                    <th>حقوق</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">

                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">جدول باستون قابل سرچ</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example5" class="table table-bordered table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                    <th>سن</th>
                                                    <th>تاریخ پذیرش</th>
                                                    <th>حقوق</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>رضا افشار</td>
                                                    <td>مدیر سیستم</td>
                                                    <td>مشهد</td>
                                                    <td>61</td>
                                                    <td>1396/04/25</td>
                                                    <td>3,321,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>نسترن کریمی</td>
                                                    <td>حسابدار</td>
                                                    <td>تبریز</td>
                                                    <td>63</td>
                                                    <td>1396/07/25</td>
                                                    <td>2,176,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پدرام شریفی</td>
                                                    <td>طراح وب</td>
                                                    <td>تهران</td>
                                                    <td>66</td>
                                                    <td>1394/01/12</td>
                                                    <td>2,860,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مریم رسولی</td>
                                                    <td>توسعه دهنده جاوا اسکریپت</td>
                                                    <td>مشهد</td>
                                                    <td>22</td>
                                                    <td>1397/03/29</td>
                                                    <td>2,443,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>حسین میری</td>
                                                    <td>حسابدار</td>
                                                    <td>تبریز</td>
                                                    <td>33</td>
                                                    <td>1397/11/28</td>
                                                    <td>3,712,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پریسا توکلی</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>کرمانشاه</td>
                                                    <td>61</td>
                                                    <td>1397/12/02</td>
                                                    <td>2,143,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>علیرضا غفاری</td>
                                                    <td>مدیر فروش</td>
                                                    <td>تهران</td>
                                                    <td>59</td>
                                                    <td>1397/08/06</td>
                                                    <td>3,175,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>رها معتمدی</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>تبریز</td>
                                                    <td>55</td>
                                                    <td>1398/10/14</td>
                                                    <td>2,765,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>سمیرا قربانی</td>
                                                    <td>توسعه دهنده جاوا اسکریپت</td>
                                                    <td>تهران</td>
                                                    <td>39</td>
                                                    <td>1394/09/15</td>
                                                    <td>3254,650,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>فرهاد مشرف</td>
                                                    <td>مهندس نرم افزار</td>
                                                    <td>مشهد</td>
                                                    <td>23</td>
                                                    <td>1397/12/13</td>
                                                    <td>2,872,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>کامران مولایی</td>
                                                    <td>مدیر دفتر</td>
                                                    <td>مازندران</td>
                                                    <td>30</td>
                                                    <td>1397/12/19</td>
                                                    <td>2,967,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>فریبا علوی</td>
                                                    <td>مدیر پشتیبانی</td>
                                                    <td>مشهد</td>
                                                    <td>22</td>
                                                    <td>1395/03/03</td>
                                                    <td>3,342,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>نغمه سبحانی</td>
                                                    <td>تولید محتوا</td>
                                                    <td>تهران</td>
                                                    <td>36</td>
                                                    <td>1397/10/16</td>
                                                    <td>4,150,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مینا اخباری</td>
                                                    <td>دیجیتال مارکتینگ</td>
                                                    <td>مازندران</td>
                                                    <td>43</td>
                                                    <td>1397/12/18</td>
                                                    <td>3,313,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>تینا گوهری</td>
                                                    <td>تولید محتوا</td>
                                                    <td>مازندران</td>
                                                    <td>19</td>
                                                    <td>1398/03/17</td>
                                                    <td>2,358,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مهدی علیپور</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>مازندران</td>
                                                    <td>66</td>
                                                    <td>1397/11/27</td>
                                                    <td>3,198,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پرویز تیموری</td>
                                                    <td>مسئول سئو</td>
                                                    <td>کرمانشاه</td>
                                                    <td>64</td>
                                                    <td>1398/06/09</td>
                                                    <td>2,765,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>لیلا مومنی</td>
                                                    <td>مدیر سیستم</td>
                                                    <td>کرمانشاه</td>
                                                    <td>59</td>
                                                    <td>1394/04/10</td>
                                                    <td>3,237,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>بهنام دانشگر</td>
                                                    <td>مهندس نرم افزار</td>
                                                    <td>مازندران</td>
                                                    <td>41</td>
                                                    <td>1397/10/13</td>
                                                    <td>2,132,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>دریا کاشفی</td>
                                                    <td>مدیر پشتیبانی</td>
                                                    <td>مشهد</td>
                                                    <td>35</td>
                                                    <td>1397/09/26</td>
                                                    <td>3,750,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>هومن غفاری</td>
                                                    <td>مدیر توسعه</td>
                                                    <td>کرمانشاه</td>
                                                    <td>30</td>
                                                    <td>1396/09/03</td>
                                                    <td>2,345,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>یلدا نجفی</td>
                                                    <td>مسئول سئو</td>
                                                    <td>کرمانشاه</td>
                                                    <td>40</td>
                                                    <td>1394/06/25</td>
                                                    <td>2,650,000 تومان</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                    <th>سن</th>
                                                    <th>تاریخ پذیرش</th>
                                                    <th>حقوق</th>


                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                        <div class="col-12">

                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">جدول فرم</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example6" class="display table table-bordered table-separated" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>سن</th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>مختار مینائی</td>
                                                    <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                                                    <td><input type="text" id="row-1-position" name="row-1-position" value="مهندس سیستم"></td>
                                                    <td><select size="1" id="row-1-office" name="row-1-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>رامین همتی</td>
                                                    <td><input type="text" id="row-2-age" name="row-2-age" value="63"></td>
                                                    <td><input type="text" id="row-2-position" name="row-2-position" value="حسابداری"></td>
                                                    <td><select size="1" id="row-2-office" name="row-2-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td><input type="text" id="row-3-age" name="row-3-age" value="66"></td>
                                                    <td><input type="text" id="row-3-position" name="row-3-position" value="نویسنده ارشد"></td>
                                                    <td><select size="1" id="row-3-office" name="row-3-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td><input type="text" id="row-4-age" name="row-4-age" value="22"></td>
                                                    <td><input type="text" id="row-4-position" name="row-4-position" value="Senior Javascript Developer"></td>
                                                    <td><select size="1" id="row-4-office" name="row-4-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>

                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td><input type="text" id="row-39-age" name="row-39-age" value="62"></td>
                                                    <td><input type="text" id="row-39-position" name="row-39-position" value="Financial Controller"></td>
                                                    <td><select size="1" id="row-39-office" name="row-39-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td><input type="text" id="row-40-age" name="row-40-age" value="37"></td>
                                                    <td><input type="text" id="row-40-position" name="row-40-position" value="Office Manager"></td>
                                                    <td><select size="1" id="row-40-office" name="row-40-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td><input type="text" id="row-41-age" name="row-41-age" value="65"></td>
                                                    <td><input type="text" id="row-41-position" name="row-41-position" value="Director"></td>
                                                    <td><select size="1" id="row-41-office" name="row-41-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td><input type="text" id="row-42-age" name="row-42-age" value="64"></td>
                                                    <td><input type="text" id="row-42-position" name="row-42-position" value="Support Engineer"></td>
                                                    <td><select size="1" id="row-42-office" name="row-42-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td><input type="text" id="row-43-age" name="row-43-age" value="38"></td>
                                                    <td><input type="text" id="row-43-position" name="row-43-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-43-office" name="row-43-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td><input type="text" id="row-44-age" name="row-44-age" value="37"></td>
                                                    <td><input type="text" id="row-44-position" name="row-44-position" value="Support Engineer"></td>
                                                    <td><select size="1" id="row-44-office" name="row-44-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td><input type="text" id="row-45-age" name="row-45-age" value="61"></td>
                                                    <td><input type="text" id="row-45-position" name="row-45-position" value="Developer"></td>
                                                    <td><select size="1" id="row-45-office" name="row-45-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td><input type="text" id="row-46-age" name="row-46-age" value="47"></td>
                                                    <td><input type="text" id="row-46-position" name="row-46-position" value="Support Engineer"></td>
                                                    <td><select size="1" id="row-46-office" name="row-46-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td><input type="text" id="row-47-age" name="row-47-age" value="64"></td>
                                                    <td><input type="text" id="row-47-position" name="row-47-position" value="Data Coordinator"></td>
                                                    <td><select size="1" id="row-47-office" name="row-47-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td><input type="text" id="row-48-age" name="row-48-age" value="63"></td>
                                                    <td><input type="text" id="row-48-position" name="row-48-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-48-office" name="row-48-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td><input type="text" id="row-49-age" name="row-49-age" value="56"></td>
                                                    <td><input type="text" id="row-49-position" name="row-49-position" value="Software Engineer"></td>
                                                    <td><select size="1" id="row-49-office" name="row-49-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td><input type="text" id="row-50-age" name="row-50-age" value="43"></td>
                                                    <td><input type="text" id="row-50-position" name="row-50-position" value="Junior Javascript Developer"></td>
                                                    <td><select size="1" id="row-50-office" name="row-50-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td><input type="text" id="row-51-age" name="row-51-age" value="46"></td>
                                                    <td><input type="text" id="row-51-position" name="row-51-position" value="Sales Assistant"></td>
                                                    <td><select size="1" id="row-51-office" name="row-51-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td><input type="text" id="row-52-age" name="row-52-age" value="47"></td>
                                                    <td><input type="text" id="row-52-position" name="row-52-position" value="Regional Director"></td>
                                                    <td><select size="1" id="row-52-office" name="row-52-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td><input type="text" id="row-53-age" name="row-53-age" value="21"></td>
                                                    <td><input type="text" id="row-53-position" name="row-53-position" value="Systems Administrator"></td>
                                                    <td><select size="1" id="row-53-office" name="row-53-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td><input type="text" id="row-54-age" name="row-54-age" value="30"></td>
                                                    <td><input type="text" id="row-54-position" name="row-54-position" value="Developer"></td>
                                                    <td><select size="1" id="row-54-office" name="row-54-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td><input type="text" id="row-55-age" name="row-55-age" value="51"></td>
                                                    <td><input type="text" id="row-55-position" name="row-55-position" value="Regional Director"></td>
                                                    <td><select size="1" id="row-55-office" name="row-55-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td><input type="text" id="row-56-age" name="row-56-age" value="29"></td>
                                                    <td><input type="text" id="row-56-position" name="row-56-position" value="Javascript Developer"></td>
                                                    <td><select size="1" id="row-56-office" name="row-56-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td><input type="text" id="row-57-age" name="row-57-age" value="27"></td>
                                                    <td><input type="text" id="row-57-position" name="row-57-position" value="Customer Support"></td>
                                                    <td><select size="1" id="row-57-office" name="row-57-office">
                                                            <option value="Edinburgh">
                                                                تهران
                                                            </option>
                                                            <option value="London">
                                                                اصفهان
                                                            </option>
                                                            <option value="New York" selected="selected">
                                                                شیراز
                                                            </option>
                                                            <option value="San Francisco">
                                                                همدان
                                                            </option>
                                                            <option value="Tokyo">
                                                                سقز
                                                            </option>
                                                        </select></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>سن </th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                        <div class="col-12">

                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">دیتا تیبل با ویژگی های کامل</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                    <th>سن</th>
                                                    <th>تاریخ پذیرش</th>
                                                    <th>حقوق</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>رضا افشار</td>
                                                    <td>مدیر سیستم</td>
                                                    <td>مشهد</td>
                                                    <td>61</td>
                                                    <td>1396/04/25</td>
                                                    <td>3,321,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>نسترن کریمی</td>
                                                    <td>حسابدار</td>
                                                    <td>تبریز</td>
                                                    <td>63</td>
                                                    <td>1396/07/25</td>
                                                    <td>2,176,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پدرام شریفی</td>
                                                    <td>طراح وب</td>
                                                    <td>تهران</td>
                                                    <td>66</td>
                                                    <td>1394/01/12</td>
                                                    <td>2,860,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مریم رسولی</td>
                                                    <td>توسعه دهنده جاوا اسکریپت</td>
                                                    <td>مشهد</td>
                                                    <td>22</td>
                                                    <td>1397/03/29</td>
                                                    <td>2,443,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>حسین میری</td>
                                                    <td>حسابدار</td>
                                                    <td>تبریز</td>
                                                    <td>33</td>
                                                    <td>1397/11/28</td>
                                                    <td>3,712,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پریسا توکلی</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>کرمانشاه</td>
                                                    <td>61</td>
                                                    <td>1397/12/02</td>
                                                    <td>2,143,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>علیرضا غفاری</td>
                                                    <td>مدیر فروش</td>
                                                    <td>تهران</td>
                                                    <td>59</td>
                                                    <td>1397/08/06</td>
                                                    <td>3,175,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>رها معتمدی</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>تبریز</td>
                                                    <td>55</td>
                                                    <td>1398/10/14</td>
                                                    <td>2,765,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>سمیرا قربانی</td>
                                                    <td>توسعه دهنده جاوا اسکریپت</td>
                                                    <td>تهران</td>
                                                    <td>39</td>
                                                    <td>1394/09/15</td>
                                                    <td>3254,650,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>فرهاد مشرف</td>
                                                    <td>مهندس نرم افزار</td>
                                                    <td>مشهد</td>
                                                    <td>23</td>
                                                    <td>1397/12/13</td>
                                                    <td>2,872,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>کامران مولایی</td>
                                                    <td>مدیر دفتر</td>
                                                    <td>مازندران</td>
                                                    <td>30</td>
                                                    <td>1397/12/19</td>
                                                    <td>2,967,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>فریبا علوی</td>
                                                    <td>مدیر پشتیبانی</td>
                                                    <td>مشهد</td>
                                                    <td>22</td>
                                                    <td>1395/03/03</td>
                                                    <td>3,342,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>نغمه سبحانی</td>
                                                    <td>تولید محتوا</td>
                                                    <td>تهران</td>
                                                    <td>36</td>
                                                    <td>1397/10/16</td>
                                                    <td>4,150,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مینا اخباری</td>
                                                    <td>دیجیتال مارکتینگ</td>
                                                    <td>مازندران</td>
                                                    <td>43</td>
                                                    <td>1397/12/18</td>
                                                    <td>3,313,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>تینا گوهری</td>
                                                    <td>تولید محتوا</td>
                                                    <td>مازندران</td>
                                                    <td>19</td>
                                                    <td>1398/03/17</td>
                                                    <td>2,358,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مهدی علیپور</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>مازندران</td>
                                                    <td>66</td>
                                                    <td>1397/11/27</td>
                                                    <td>3,198,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پرویز تیموری</td>
                                                    <td>مسئول سئو</td>
                                                    <td>کرمانشاه</td>
                                                    <td>64</td>
                                                    <td>1398/06/09</td>
                                                    <td>2,765,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>لیلا مومنی</td>
                                                    <td>مدیر سیستم</td>
                                                    <td>کرمانشاه</td>
                                                    <td>59</td>
                                                    <td>1394/04/10</td>
                                                    <td>3,237,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>بهنام دانشگر</td>
                                                    <td>مهندس نرم افزار</td>
                                                    <td>مازندران</td>
                                                    <td>41</td>
                                                    <td>1397/10/13</td>
                                                    <td>2,132,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>دریا کاشفی</td>
                                                    <td>مدیر پشتیبانی</td>
                                                    <td>مشهد</td>
                                                    <td>35</td>
                                                    <td>1397/09/26</td>
                                                    <td>3,750,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>هومن غفاری</td>
                                                    <td>مدیر توسعه</td>
                                                    <td>کرمانشاه</td>
                                                    <td>30</td>
                                                    <td>1396/09/03</td>
                                                    <td>2,345,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>یلدا نجفی</td>
                                                    <td>مسئول سئو</td>
                                                    <td>کرمانشاه</td>
                                                    <td>40</td>
                                                    <td>1394/06/25</td>
                                                    <td>2,650,000 تومان</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                    <th>سن</th>
                                                    <th>تاریخ پذیرش</th>
                                                    <th>حقوق</th>


                                                </tr>

                                                <tfoot>
                                                    <tr>
                                                        <th>نام </th>
                                                        <th>تخصص</th>
                                                        <th>شهر</th>
                                                        <th>سن</th>
                                                        <th>تاریخ پذیرش</th>
                                                        <th>حقوق</th>
                                                    </tr>
                                                </tfoot>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->

                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">دیتا تیبل با قابلیت خروجی گرفتن</h3>
                                    <h6 class="box-subtitle"> Copy, CSV, Excel, PDF & Print</h6>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                            <thead>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                    <th>سن</th>
                                                    <th>تاریخ پذیرش</th>
                                                    <th>حقوق</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>رضا افشار</td>
                                                    <td>مدیر سیستم</td>
                                                    <td>مشهد</td>
                                                    <td>61</td>
                                                    <td>1396/04/25</td>
                                                    <td>3,321,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>نسترن کریمی</td>
                                                    <td>حسابدار</td>
                                                    <td>تبریز</td>
                                                    <td>63</td>
                                                    <td>1396/07/25</td>
                                                    <td>2,176,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پدرام شریفی</td>
                                                    <td>طراح وب</td>
                                                    <td>تهران</td>
                                                    <td>66</td>
                                                    <td>1394/01/12</td>
                                                    <td>2,860,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مریم رسولی</td>
                                                    <td>توسعه دهنده جاوا اسکریپت</td>
                                                    <td>مشهد</td>
                                                    <td>22</td>
                                                    <td>1397/03/29</td>
                                                    <td>2,443,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>حسین میری</td>
                                                    <td>حسابدار</td>
                                                    <td>تبریز</td>
                                                    <td>33</td>
                                                    <td>1397/11/28</td>
                                                    <td>3,712,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پریسا توکلی</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>کرمانشاه</td>
                                                    <td>61</td>
                                                    <td>1397/12/02</td>
                                                    <td>2,143,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>علیرضا غفاری</td>
                                                    <td>مدیر فروش</td>
                                                    <td>تهران</td>
                                                    <td>59</td>
                                                    <td>1397/08/06</td>
                                                    <td>3,175,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>رها معتمدی</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>تبریز</td>
                                                    <td>55</td>
                                                    <td>1398/10/14</td>
                                                    <td>2,765,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>سمیرا قربانی</td>
                                                    <td>توسعه دهنده جاوا اسکریپت</td>
                                                    <td>تهران</td>
                                                    <td>39</td>
                                                    <td>1394/09/15</td>
                                                    <td>3254,650,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>فرهاد مشرف</td>
                                                    <td>مهندس نرم افزار</td>
                                                    <td>مشهد</td>
                                                    <td>23</td>
                                                    <td>1397/12/13</td>
                                                    <td>2,872,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>کامران مولایی</td>
                                                    <td>مدیر دفتر</td>
                                                    <td>مازندران</td>
                                                    <td>30</td>
                                                    <td>1397/12/19</td>
                                                    <td>2,967,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>فریبا علوی</td>
                                                    <td>مدیر پشتیبانی</td>
                                                    <td>مشهد</td>
                                                    <td>22</td>
                                                    <td>1395/03/03</td>
                                                    <td>3,342,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>نغمه سبحانی</td>
                                                    <td>تولید محتوا</td>
                                                    <td>تهران</td>
                                                    <td>36</td>
                                                    <td>1397/10/16</td>
                                                    <td>4,150,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مینا اخباری</td>
                                                    <td>دیجیتال مارکتینگ</td>
                                                    <td>مازندران</td>
                                                    <td>43</td>
                                                    <td>1397/12/18</td>
                                                    <td>3,313,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>تینا گوهری</td>
                                                    <td>تولید محتوا</td>
                                                    <td>مازندران</td>
                                                    <td>19</td>
                                                    <td>1398/03/17</td>
                                                    <td>2,358,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>مهدی علیپور</td>
                                                    <td>طراح گرافیک</td>
                                                    <td>مازندران</td>
                                                    <td>66</td>
                                                    <td>1397/11/27</td>
                                                    <td>3,198,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>پرویز تیموری</td>
                                                    <td>مسئول سئو</td>
                                                    <td>کرمانشاه</td>
                                                    <td>64</td>
                                                    <td>1398/06/09</td>
                                                    <td>2,765,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>لیلا مومنی</td>
                                                    <td>مدیر سیستم</td>
                                                    <td>کرمانشاه</td>
                                                    <td>59</td>
                                                    <td>1394/04/10</td>
                                                    <td>3,237,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>بهنام دانشگر</td>
                                                    <td>مهندس نرم افزار</td>
                                                    <td>مازندران</td>
                                                    <td>41</td>
                                                    <td>1397/10/13</td>
                                                    <td>2,132,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>دریا کاشفی</td>
                                                    <td>مدیر پشتیبانی</td>
                                                    <td>مشهد</td>
                                                    <td>35</td>
                                                    <td>1397/09/26</td>
                                                    <td>3,750,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>هومن غفاری</td>
                                                    <td>مدیر توسعه</td>
                                                    <td>کرمانشاه</td>
                                                    <td>30</td>
                                                    <td>1396/09/03</td>
                                                    <td>2,345,000 تومان</td>
                                                </tr>
                                                <tr>
                                                    <td>یلدا نجفی</td>
                                                    <td>مسئول سئو</td>
                                                    <td>کرمانشاه</td>
                                                    <td>40</td>
                                                    <td>1394/06/25</td>
                                                    <td>2,650,000 تومان</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>نام</th>
                                                    <th>تخصص</th>
                                                    <th>شهر</th>
                                                    <th>سن</th>
                                                    <th>تاریخ پذیرش</th>
                                                    <th>حقوق</th>


                                                </tr>


                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
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
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="accounting.html">
                                    <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">حسابداری</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist_grid.html">
                                    <i class="icon-Mail-attachment fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">اعضا</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="projects.html">
                                    <i class="icon-Box2 fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">پروژه ها</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="contact_userlist.html">
                                    <i class="icon-Group fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">مشتریان</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="mailbox.html">
                                    <i class="icon-Chart-bar fs-36"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                    <span class="fs-16">ایمیل</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="setting.html">
                                    <i class="icon-Color-profile fs-36"><span class="path1"></span><span class="path2"></span></i>
                                    <span class="fs-16">تنظیمات</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="ecommerce_orders.html">
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

    <script src="assets\vendor_components\datatable\datatables.min.js"></script>
    <!-- CRMi App -->
    <script src="src\js\template.js"></script>
    <script src="src\js\pages\dashboard.js"></script>
    <script src="src\js\pages\data-table.js"></script>
</body>

</html>