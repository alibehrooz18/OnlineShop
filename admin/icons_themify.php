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
                            <h4 class="page-title">آیکون ها طراحی</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item" aria-current="page">آیکون ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">آیکون های طراحی</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">


                    <div class="box">
                        <div class="box-body">
                            <h4 class="box-title">فلش ها &amp; نمادهای جهت</h4>
                            <div class="icons-list-demo row">
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-up"></i> ti-arrow-up </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-right"></i> ti-arrow-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-left"></i> ti-arrow-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-down"></i> ti-arrow-down </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-vertical"></i> ti-arrows-vertical </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-horizontal"></i> ti-arrows-horizontal </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-up"></i> ti-angle-up </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-right"></i> ti-angle-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-left"></i> ti-angle-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-down"></i> ti-angle-down </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-up"></i> ti-angle-double-up </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-right"></i> ti-angle-double-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-left"></i> ti-angle-double-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-angle-double-down"></i> ti-angle-double-down </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-move"></i> ti-move </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-fullscreen"></i> ti-fullscreen </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-top-right"></i> ti-arrow-top-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-top-left"></i> ti-arrow-top-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-up"></i> ti-arrow-circle-up </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-right"></i> ti-arrow-circle-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-left"></i> ti-arrow-circle-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrow-circle-down"></i> ti-arrow-circle-down </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-arrows-corner"></i> ti-arrows-corner </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-v"></i> ti-split-v </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-v-alt"></i> ti-split-v-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-split-h"></i> ti-split-h </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-up"></i> ti-hand-point-up </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-right"></i> ti-hand-point-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-left"></i> ti-hand-point-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-point-down"></i> ti-hand-point-down </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-back-right"></i> ti-back-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-back-left"></i> ti-back-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-exchange-vertical"></i> ti-exchange-vertical </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <h4 class="box-title">آیکون های وب اپ</h4>
                            <div class="icons-list-demo row">
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wand"></i> ti-wand </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-save"></i> ti-save </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-save-alt"></i> ti-save-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-direction"></i> ti-direction </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-direction-alt"></i> ti-direction-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-user"></i> ti-user </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-link"></i> ti-link </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-unlink"></i> ti-unlink </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-trash"></i> ti-trash </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-target"></i> ti-target </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tag"></i> ti-tag </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-desktop"></i> ti-desktop </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tablet"></i> ti-tablet </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mobile"></i> ti-mobile </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-email"></i> ti-email </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-star"></i> ti-star </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-spray"></i> ti-spray </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-signal"></i> ti-signal </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shopping-cart"></i> ti-shopping-cart </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shopping-cart-full"></i> ti-shopping-cart-full </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-settings"></i> ti-settings </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-search"></i> ti-search </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zoom-in"></i> ti-zoom-in </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zoom-out"></i> ti-zoom-out </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cut"></i> ti-cut </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler"></i> ti-ruler </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-alt-2"></i> ti-ruler-alt-2 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-pencil"></i> ti-ruler-pencil </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ruler-alt"></i> ti-ruler-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bookmark"></i> ti-bookmark </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bookmark-alt"></i> ti-bookmark-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-reload"></i> ti-reload </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-plus"></i> ti-plus </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-minus"></i> ti-minus </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-close"></i> ti-close </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin"></i> ti-pin </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil"></i> ti-pencil </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil-alt"></i> ti-pencil-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paint-roller"></i> ti-paint-roller </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paint-bucket"></i> ti-paint-bucket </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-na"></i> ti-na </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-medall"></i> ti-medall </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-medall-alt"></i> ti-medall-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-marker"></i> ti-marker </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-marker-alt"></i> ti-marker-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-lock"></i> ti-lock </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-unlock"></i> ti-unlock </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-location-arrow"></i> ti-location-arrow </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout"></i> ti-layout </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layers"></i> ti-layers </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layers-alt"></i> ti-layers-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-key"></i> ti-key </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-image"></i> ti-image </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-heart"></i> ti-heart </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-heart-broken"></i> ti-heart-broken </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-stop"></i> ti-hand-stop </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-open"></i> ti-hand-open </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hand-drag"></i> ti-hand-drag </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag"></i> ti-flag </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag-alt"></i> ti-flag-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flag-alt-2"></i> ti-flag-alt-2 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-eye"></i> ti-eye </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-import"></i> ti-import </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-export"></i> ti-export </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cup"></i> ti-cup </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-crown"></i> ti-crown </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comments"></i> ti-comments </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comment"></i> ti-comment </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comment-alt"></i> ti-comment-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thought"></i> ti-thought </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-clip"></i> ti-clip </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-check"></i> ti-check </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-check-box"></i> ti-check-box </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-camera"></i> ti-camera </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-announcement"></i> ti-announcement </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-brush"></i> ti-brush </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-brush-alt"></i> ti-brush-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-palette"></i> ti-palette </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-briefcase"></i> ti-briefcase </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bolt"></i> ti-bolt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bolt-alt"></i> ti-bolt-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-blackboard"></i> ti-blackboard </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bag"></i> ti-bag </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-world"></i> ti-world </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wheelchair"></i> ti-wheelchair </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-car"></i> ti-car </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-truck"></i> ti-truck </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-timer"></i> ti-timer </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ticket"></i> ti-ticket </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thumb-up"></i> ti-thumb-up </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-thumb-down"></i> ti-thumb-down </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stats-up"></i> ti-stats-up </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stats-down"></i> ti-stats-down </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shine"></i> ti-shine </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-right"></i> ti-shift-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-left"></i> ti-shift-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-right-alt"></i> ti-shift-right-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shift-left-alt"></i> ti-shift-left-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shield"></i> ti-shield </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-notepad"></i> ti-notepad </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-server"></i> ti-server </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pulse"></i> ti-pulse </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-printer"></i> ti-printer </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-power-off"></i> ti-power-off </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-plug"></i> ti-plug </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pie-chart"></i> ti-pie-chart </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-panel"></i> ti-panel </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-package"></i> ti-package </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-music"></i> ti-music </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-music-alt"></i> ti-music-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mouse"></i> ti-mouse </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-mouse-alt"></i> ti-mouse-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-money"></i> ti-money </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microphone"></i> ti-microphone </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-menu"></i> ti-menu </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-menu-alt"></i> ti-menu-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-map"></i> ti-map </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-map-alt"></i> ti-map-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-location-pin"></i> ti-location-pin </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-light-bulb"></i> ti-light-bulb </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-info"></i> ti-info </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-infinite"></i> ti-infinite </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-id-badge"></i> ti-id-badge </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-hummer"></i> ti-hummer </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-home"></i> ti-home </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-help"></i> ti-help </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-headphone"></i> ti-headphone </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-harddrives"></i> ti-harddrives </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-harddrive"></i> ti-harddrive </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-gift"></i> ti-gift </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-game"></i> ti-game </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-filter"></i> ti-filter </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-files"></i> ti-files </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-file"></i> ti-file </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-zip"></i> ti-zip </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-folder"></i> ti-folder </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-envelope"></i> ti-envelope </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dashboard"></i> ti-dashboard </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud"></i> ti-cloud </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud-up"></i> ti-cloud-up </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-cloud-down"></i> ti-cloud-down </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-clipboard"></i> ti-clipboard </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-calendar"></i> ti-calendar </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-book"></i> ti-book </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bell"></i> ti-bell </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-basketball"></i> ti-basketball </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bar-chart"></i> ti-bar-chart </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-bar-chart-alt"></i> ti-bar-chart-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-archive"></i> ti-archive </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-anchor"></i> ti-anchor </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-alert"></i> ti-alert </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-alarm-clock"></i> ti-alarm-clock </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-agenda"></i> ti-agenda </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-write"></i> ti-write </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wallet"></i> ti-wallet </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-video-clapper"></i> ti-video-clapper </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-video-camera"></i> ti-video-camera </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vector"></i> ti-vector </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-support"></i> ti-support </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stamp"></i> ti-stamp </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-slice"></i> ti-slice </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-shortcode"></i> ti-shortcode </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-receipt"></i> ti-receipt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin2"></i> ti-pin2 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pin-alt"></i> ti-pin-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pencil-alt2"></i> ti-pencil-alt2 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-eraser"></i> ti-eraser </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-more"></i> ti-more </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-more-alt"></i> ti-more-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microphone-alt"></i> ti-microphone-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-magnet"></i> ti-magnet </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-double"></i> ti-line-double </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-dotted"></i> ti-line-dotted </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-line-dashed"></i> ti-line-dashed </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-ink-pen"></i> ti-ink-pen </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-info-alt"></i> ti-info-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-help-alt"></i> ti-help-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-headphone-alt"></i> ti-headphone-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-gallery"></i> ti-gallery </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-face-smile"></i> ti-face-smile </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-face-sad"></i> ti-face-sad </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-credit-card"></i> ti-credit-card </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-comments-smiley"></i> ti-comments-smiley </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-time"></i> ti-time </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-share"></i> ti-share </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-share-alt"></i> ti-share-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rocket"></i> ti-rocket </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-new-window"></i> ti-new-window </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rss"></i> ti-rss </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-rss-alt"></i> ti-rss-alt </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <h4 class="box-title">آیکون های کنترل</h4>
                            <div class="icons-list-demo row">
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-stop"></i> ti-control-stop </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-shuffle"></i> ti-control-shuffle </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-play"></i> ti-control-play </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-pause"></i> ti-control-pause </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-forward"></i> ti-control-forward </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-backward"></i> ti-control-backward </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-volume"></i> ti-volume </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-skip-forward"></i> ti-control-skip-forward </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-skip-backward"></i> ti-control-skip-backward </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-record"></i> ti-control-record </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-control-eject"></i> ti-control-eject </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <h4 class="box-title">آیکون های ویرایشگر متن</h4>
                            <div class="icons-list-demo row">
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-paragraph"></i> ti-paragraph </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-uppercase"></i> ti-uppercase </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-underline"></i> ti-underline </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-text"></i> ti-text </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-Italic"></i> ti-Italic </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-smallcap"></i> ti-smallcap </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list"></i> ti-list </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-list-ol"></i> ti-list-ol </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-right"></i> ti-align-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-left"></i> ti-align-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-justify"></i> ti-align-justify </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-align-center"></i> ti-align-center </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-right"></i> ti-quote-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-quote-left"></i> ti-quote-left </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <h4 class="box-title">آیکون های صفحات</h4>
                            <div class="icons-list-demo row">
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-width-full"></i> ti-layout-width-full </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-width-default"></i> ti-layout-width-default </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-width-default-alt"></i> ti-layout-width-default-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-tab"></i> ti-layout-tab </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-tab-window"></i> ti-layout-tab-window </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-tab-v"></i> ti-layout-tab-v </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-tab-min"></i> ti-layout-tab-min </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-slider"></i> ti-layout-slider </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-slider-alt"></i> ti-layout-slider-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-sidebar-right"></i> ti-layout-sidebar-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-sidebar-none"></i> ti-layout-sidebar-none </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-sidebar-left"></i> ti-layout-sidebar-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-placeholder"></i> ti-layout-placeholder </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-menu"></i> ti-layout-menu </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-menu-v"></i> ti-layout-menu-v </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-menu-separated"></i> ti-layout-menu-separated </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-menu-full"></i> ti-layout-menu-full </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-right"></i> ti-layout-media-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-right-alt"></i> ti-layout-media-right-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-overlay"></i> ti-layout-media-overlay </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-overlay-alt"></i> ti-layout-media-overlay-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-overlay-alt-2"></i> ti-layout-media-overlay-alt-2 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-left"></i> ti-layout-media-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-left-alt"></i> ti-layout-media-left-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-center"></i> ti-layout-media-center </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-media-center-alt"></i> ti-layout-media-center-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-list-thumb"></i> ti-layout-list-thumb </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-list-thumb-alt"></i> ti-layout-list-thumb-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-list-post"></i> ti-layout-list-post </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-list-large-image"></i> ti-layout-list-large-image </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-line-solid"></i> ti-layout-line-solid </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-grid4"></i> ti-layout-grid4 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-grid3"></i> ti-layout-grid3 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-grid2"></i> ti-layout-grid2 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-grid2-thumb"></i> ti-layout-grid2-thumb </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-cta-right"></i> ti-layout-cta-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-cta-left"></i> ti-layout-cta-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-cta-center"></i> ti-layout-cta-center </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-cta-btn-right"></i> ti-layout-cta-btn-right </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-cta-btn-left"></i> ti-layout-cta-btn-left </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-column4"></i> ti-layout-column4 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-column3"></i> ti-layout-column3 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-column2"></i> ti-layout-column2 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-accordion-separated"></i> ti-layout-accordion-separated </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-accordion-merged"></i> ti-layout-accordion-merged </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-accordion-list"></i> ti-layout-accordion-list </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-widgetized"></i> ti-widgetized </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-widget"></i> ti-widget </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-widget-alt"></i> ti-widget-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-view-list"></i> ti-view-list </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-view-list-alt"></i> ti-view-list-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-view-grid"></i> ti-view-grid </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-upload"></i> ti-upload </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-download"></i> ti-download </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-loop"></i> ti-loop </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-sidebar-2"></i> ti-layout-sidebar-2 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-grid4-alt"></i> ti-layout-grid4-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-grid3-alt"></i> ti-layout-grid3-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-grid2-alt"></i> ti-layout-grid2-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-column4-alt"></i> ti-layout-column4-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-column3-alt"></i> ti-layout-column3-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-layout-column2-alt"></i> ti-layout-column2-alt </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body">
                            <h4 class="box-title">آیکون های برند</h4>
                            <div class="icons-list-demo row">
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flickr"></i> ti-flickr </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-flickr-alt"></i> ti-flickr-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-instagram"></i> ti-instagram </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-google"></i> ti-google </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-github"></i> ti-github </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-facebook"></i> ti-facebook </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dropbox"></i> ti-dropbox </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dropbox-alt"></i> ti-dropbox-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-dribbble"></i> ti-dribbble </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-apple"></i> ti-apple </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-android"></i> ti-android </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-yahoo"></i> ti-yahoo </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-trello"></i> ti-trello </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-stack-overflow"></i> ti-stack-overflow </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-soundcloud"></i> ti-soundcloud </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-sharethis"></i> ti-sharethis </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-sharethis-alt"></i> ti-sharethis-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-reddit"></i> ti-reddit </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microsoft"></i> ti-microsoft </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-microsoft-alt"></i> ti-microsoft-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-linux"></i> ti-linux </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-jsfiddle"></i> ti-jsfiddle </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-joomla"></i> ti-joomla </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-html5"></i> ti-html5 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-css3"></i> ti-css3 </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-drupal"></i> ti-drupal </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-wordpress"></i> ti-wordpress </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tumblr"></i> ti-tumblr </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-tumblr-alt"></i> ti-tumblr-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-skype"></i> ti-skype </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-youtube"></i> ti-youtube </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vimeo"></i> ti-vimeo </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-vimeo-alt"></i> ti-vimeo-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-twitter"></i> ti-twitter </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-twitter-alt"></i> ti-twitter-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-linkedin"></i> ti-linkedin </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pinterest"></i> ti-pinterest </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-pinterest-alt"></i> ti-pinterest-alt </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-logo"></i> ti-themify-logo </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-favicon"></i> ti-themify-favicon </div>
                                <div class="col-sm-6 col-md-4 col-lg-3"> <i class="ti-themify-favicon-alt"></i> ti-themify-favicon-alt </div>
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

    <script src="src\js\template.js"></script>
    <script src="src\js\pages\dashboard.js"></script>

</body>

</html>