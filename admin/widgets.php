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
                            <h4 class="page-title">ویجت ها</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">ویجت ها</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">

                    <div class="row">

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header bg-danger">
                                    <h4 class="box-title text-white">گزارشات فروش</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body px-0 bg-danger rounded-0">
                                    <div id="spark1" class="text-dark"></div>
                                </div>
                                <div class="box-body up-mar60 pb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-warning-light px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Equalizer d-block fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                                <a href="#" class="text-warning fw-500 fs-18">
                                                    گزارش ماهیانه
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-primary-light px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Add-user d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="text-primary fw-500 fs-18">
                                                    کل بازدید کنندگان
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-danger-light px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Cart2 d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="text-danger fw-500 fs-18">
                                                    فروش محصولات
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-success-light px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Mail-opened d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="text-success fw-500 fs-18">
                                                    گزارش سفارشات
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header bg-primary">
                                    <h4 class="box-title text-white">گزارشات فروش</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body px-0 bg-primary rounded-0">
                                    <div id="spark2" class="text-dark"></div>
                                </div>
                                <div class="box-body up-mar60 pb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Equalizer d-block fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                                <a href="#" class="text-warning fw-500 fs-18">
                                                    گزارش ماهیانه
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Add-user d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="text-primary fw-500 fs-18">
                                                    کل بازدیدکنندگان
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Cart2 d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="text-danger fw-500 fs-18">
                                                    فروش محصولات
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Mail-opened d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="text-success fw-500 fs-18">
                                                    گزارش سفارشات
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header bg-success">
                                    <h4 class="box-title text-white">گزارشات فروش</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body px-0 bg-success rounded-0">
                                    <div id="spark3" class="text-dark"></div>
                                </div>
                                <div class="box-body up-mar60 pb-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Equalizer d-block fs-40"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                                <a href="#" class="fw-500 fs-18">
                                                    گزارش ماهیانه
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Add-user d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="fw-500 fs-18">
                                                    کل بازدیدکنندگان
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Cart2 d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="fw-500 fs-18">
                                                    فروش محصولات
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-lightest px-30 py-40 rounded20 mb-20">
                                                <span class="icon-Mail-opened d-block fs-40"><span class="path1"></span><span class="path2"></span></span>
                                                <a href="#" class="fw-500 fs-18">
                                                    گزارش سفارشات
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header bg-success">
                                    <h4 class="box-title text-white">گزارش درآمدها</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body px-0 py-0 bg-success rounded-0">
                                    <div id="revenue1" class="text-dark"></div>
                                </div>
                                <div class="box-body up-mar40 bg-white position-relative">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">میانگین سود</div>
                                                <div class="fs-18 fw-600">150K</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">هزینه</div>
                                                <div class="fs-18 fw-600">15,250k</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">مالیات</div>
                                                <div class="fs-18 fw-600">50k</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">بالاترین درآمد</div>
                                                <div class="fs-18 fw-600">44,850k</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header bg-warning">
                                    <h4 class="box-title text-white">گزارش کلی</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body px-0 py-0 bg-warning rounded-0">
                                    <div id="revenue2" class="text-dark"></div>
                                </div>
                                <div class="box-body up-mar40 bg-white position-relative">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">میانگین سود</div>
                                                <div class="fs-18 fw-600">150K</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">سود</div>
                                                <div class="fs-18 fw-600">15,250k</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">مالیات</div>
                                                <div class="fs-18 fw-600">50k</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">بالاترین درآمد</div>
                                                <div class="fs-18 fw-600">44,850k</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header bg-danger">
                                    <h4 class="box-title text-white">گزارش درامد ها</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body px-0 py-0 bg-danger rounded-0">
                                    <div id="revenue3" class="text-dark"></div>
                                </div>
                                <div class="box-body up-mar40 bg-white position-relative">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">میانگین سود</div>
                                                <div class="fs-18 fw-600">150K</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">هزیته ها</div>
                                                <div class="fs-18 fw-600">15,250k</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">مالیات</div>
                                                <div class="fs-18 fw-600">50k</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="px-30 py-20">
                                                <div class="text-fade fw-600">بالاترین درآمد</div>
                                                <div class="fs-18 fw-600">44,850k</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-25 bg-danger-light h-80 w-80 l-h-80 rounded text-center">
                                            <img src="images\svg-icon\color-svg\002-google.svg" class="h-50 align-self-center" alt="">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pe-15">
                                            <a href="#" class="text-dark fw-600 hover-danger fs-18">
                                                توضیحات این بخش و خدمات<br>

                                            </a>
                                            <span class="text-fade fw-600 fs-16">
                                                15 Jan 2019
                                            </span>
                                        </div>

                                        <div class="d-flex flex-column w-p100 mt-30">
                                            <span class="text-dark me-10 fs-16 fw-600 pb-15">
                                                نوارپیشرفت
                                            </span>

                                            <div class="progress progress-xs w-p100">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column mt-10">
                                            <div class="text-dark me-2 fs-16 fw-600 pb-10">
                                                تیم
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="me-15 bg-danger-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                                </a>
                                                <a href="#" class="me-15 bg-danger-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images\avatar\avatar-2.png" class="h-50 align-self-end" alt="">
                                                </a>
                                                <a href="#" class="me-15 bg-danger-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                                </a>
                                                <a href="#" class="me-15 bg-danger-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-25 bg-warning-light h-80 w-80 l-h-80 rounded text-center">
                                            <img src="images\svg-icon\color-svg\003-settings.svg" class="h-50 align-self-center" alt="">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pe-15">
                                            <a href="#" class="text-dark fw-600 hover-warning fs-18">
                                                توضیحات این بخش و خدمات<br>

                                            </a>
                                            <span class="text-fade fw-600 fs-16">
                                                15 Jan 2019
                                            </span>
                                        </div>

                                        <div class="d-flex flex-column w-p100 mt-30">
                                            <span class="text-dark me-10 fs-16 fw-600 pb-15">
                                                نوار پیشرفت
                                            </span>

                                            <div class="progress progress-xs w-p100">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column mt-10">
                                            <div class="text-dark me-2 fs-16 fw-600 pb-10">
                                                تیم
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="me-15 bg-warning-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                                </a>
                                                <a href="#" class="me-15 bg-warning-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images\avatar\avatar-2.png" class="h-50 align-self-end" alt="">
                                                </a>
                                                <a href="#" class="me-15 bg-warning-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                                </a>
                                                <a href="#" class="me-15 bg-warning-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="me-25 bg-info-light h-80 w-80 l-h-80 rounded text-center">
                                            <img src="images\svg-icon\color-svg\005-paint-palette.svg" class="h-50 align-self-center" alt="">
                                        </div>

                                        <div class="d-flex flex-column flex-grow-1 my-lg-0 my-10 pe-15">
                                            <a href="#" class="text-dark fw-600 hover-info fs-18">
                                                توضیحات این بخش و خدمات<br>

                                            </a>
                                            <span class="text-fade fw-600 fs-16">
                                                15 Jan 2019
                                            </span>
                                        </div>

                                        <div class="d-flex flex-column w-p100 mt-30">
                                            <span class="text-dark me-10 fs-16 fw-600 pb-15">
                                                نوار پیشرفت
                                            </span>

                                            <div class="progress progress-xs w-p100">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column mt-10">
                                            <div class="text-dark me-2 fs-16 fw-600 pb-10">
                                                تیم
                                            </div>
                                            <div class="d-flex">
                                                <a href="#" class="me-15 bg-info-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                                </a>
                                                <a href="#" class="me-15 bg-info-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                                </a>
                                                <a href="#" class="me-15 bg-info-light h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                    <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex-grow-1 pb-15">
                                        <div class="d-flex align-items-center pe-2 mb-30">
                                            <span class="text-fade fw-600 fs-16 flex-grow-1">
                                                7 ساعت پیش
                                            </span>
                                            <div class="bg-info-light h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30 align-self-center" alt="">
                                            </div>
                                        </div>

                                        <a href="#" class="text-dark fw-600 hover-primary fs-18">
                                            توضیحات تست<br>

                                        </a>
                                        <p class="fs-16 mt-15">
                                            انواع مختلفی از نوار پیشرفت وجود دارد<br> متن تست<br> اما بی معنی.
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column mt-10">
                                        <div class="d-flex">
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex-grow-1 pb-15">
                                        <div class="d-flex align-items-center pe-2 mb-30">
                                            <span class="text-fade fw-600 fs-16 flex-grow-1">
                                                7 ساعت پیش
                                            </span>
                                            <div class="bg-danger-light h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images/svg-icon/color-svg/008-python.svg" class="h-30 align-self-center" alt="">
                                            </div>
                                        </div>

                                        <a href="#" class="text-dark fw-600 hover-primary fs-18">
                                            توضیحات تست<br>

                                        </a>
                                        <p class="fs-16 mt-15">
                                            انواع مختلفی از نوار پیشرفت وجود دارد<br> متن تست<br> اما بی معنی.
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column mt-10">
                                        <div class="d-flex">
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images\avatar\avatar-5.png" class="h-50 align-self-end" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body">
                                    <div class="flex-grow-1 pb-15">
                                        <div class="d-flex align-items-center pe-2 mb-30">
                                            <span class="text-fade fw-600 fs-16 flex-grow-1">
                                                5 ساعت پیش
                                            </span>
                                            <div class="bg-primary-light h-50 w-50 l-h-50 rounded text-center">
                                                <img src="images/svg-icon/color-svg/007-color-palette.svg" class="h-30 align-self-center" alt="">
                                            </div>
                                        </div>

                                        <a href="#" class="text-dark fw-600 hover-primary fs-18">
                                            توضیحات تست<br>

                                        </a>
                                        <p class="fs-16 mt-15">
                                            انواع مختلفی از نوار پیشرفت وجود دارد<br> متن تست<br> اما بی معنی.
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column mt-10">
                                        <div class="d-flex">
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                            </a>
                                            <a href="#" class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">گزارش درامد ها</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body py-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="py-10">
                                                <div class="text-fade fw-600">میانگین سود</div>
                                                <div class="fs-18 fw-600">150K</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="py-10">
                                                <div class="text-fade fw-600">هزینه ها</div>
                                                <div class="fs-18 fw-600">15,250k</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="py-10">
                                                <div class="text-fade fw-600">مالیات</div>
                                                <div class="fs-18 fw-600">50k</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="py-10">
                                                <div class="text-fade fw-600">بالاترین درآمد</div>
                                                <div class="fs-18 fw-600">44,850k</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div id="revenue4" class="text-dark"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">گزارش درامد ها</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body">

                                    <div id="revenue5" class="text-dark"></div>

                                    <p class="text-center fs-16 pb-20">
                                        انواع مختلفی از نوار پیشرفت وجود دارد<br> of متن تست.
                                    </p>
                                    <a href="#" class="btn btn-info w-p100">گزارشات کلی</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">گزارش درامد ها</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body pt-0">

                                    <div id="revenue6" class="text-dark"></div>

                                    <div class="d-flex align-items-center mb-20">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                            <a href="#" class="text-dark hover-primary mb-1 fs-16">متن تست </a>
                                            <span class="text-fade">به همراه ادامه توضیحات</span>
                                        </div>
                                        <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                    </div>
                                    <div class="d-flex align-items-center mb-20">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                            <a href="#" class="text-dark hover-danger mb-1 fs-16">متن تست</a>
                                            <span class="text-fade">به همراه ادامه توضیحات</span>
                                        </div>
                                        <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                            <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                            <a href="#" class="text-dark hover-success mb-1 fs-16">متن تست</a>
                                            <span class="text-fade">به همراه ادامه توضیحات</span>
                                        </div>
                                        <span class="badge badge-xl badge-light"><span class="fw-600">+125</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">خلاصه گزارشات</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body">
                                    <div id="revenue7" class="text-dark"></div>
                                </div>
                                <div class="box-body py-0">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center mb-30">
                                                <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                                    <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">تعریف پروژه</a>
                                                    <span class="text-fade">مدیر پروژه</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center mb-30">
                                                <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                                    <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">طراحی اولیه</a>
                                                    <span class="text-fade">کارگردان هنری</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center mb-30">
                                                <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                                    <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="#" class="text-dark hover-success mb-1 fs-16">توابع محلی</a>
                                                    <span class="text-fade">دولوپر ارشد</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center mb-30">
                                                <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                                    <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="#" class="text-dark hover-info mb-1 fs-16">توسعه</a>
                                                    <span class="text-fade">طراحی استاندارد</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">خلاصه گزارشات</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body">
                                    <div class="row pt-50">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center mb-30">
                                                <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                                    <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">تعریف پروژه</a>
                                                    <span class="text-fade">مدیر پروژه</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center mb-30">
                                                <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                                    <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">طراحی اولیه</a>
                                                    <span class="text-fade">کارگردان هنری</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center mb-30">
                                                <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                                    <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="#" class="text-dark hover-success mb-1 fs-16">توابع محلی</a>
                                                    <span class="text-fade">دولوپر ارشد</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="d-flex align-items-center mb-30">
                                                <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                                    <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                                </div>
                                                <div class="d-flex flex-column fw-500">
                                                    <a href="#" class="text-dark hover-info mb-1 fs-16">توسعه</a>
                                                    <span class="text-fade">طراحی استاندارد</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div id="revenue8" class="text-dark"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">خلاصه گزارشات</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body">
                                    <div id="revenue9" class="text-dark"></div>
                                </div>
                                <div class="box-body">
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-60 rounded100 text-center">
                                            <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-primary mb-1 fs-16">تعریف پروژه</a>
                                            <span class="text-fade">مدیر پروژه</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-60 rounded100 text-center">
                                            <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-danger mb-1 fs-16">طراحی اولیه</a>
                                            <span class="text-fade">کارگردان هنری</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-30">
                                        <div class="me-15 bg-lightest h-50 w-50 l-h-60 rounded100 text-center">
                                            <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                        </div>
                                        <div class="d-flex flex-column fw-500">
                                            <a href="#" class="text-dark hover-success mb-1 fs-16">توابع محلی</a>
                                            <span class="text-fade">دولوپر ارشد</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-warning-light p-30 flex-grow-1 bg-img" style="background-position: left bottom; background-size: auto 80%; background-image: url(images/svg-icon/color-svg/custom-2.svg)">
                                        <div class="row">
                                            <div class="col-12 col-xl-7"></div>
                                            <div class="col-12 col-xl-5">
                                                <h4 class="text-warning fw-500">عضو شوید تا از تخفیفات ما بهره مند شوید</h4>

                                                <p class="text-dark my-10 fs-16">
                                                    تخفیفات و فروش آنلاین میتواند برای شما مفید باشد
                                                </p>
                                                <a href="#" class="btn btn-warning">همین الان عضو شوید!</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-danger p-30 flex-grow-1 bg-img" style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(images/svg-icon/color-svg/custom-3.svg)">

                                        <h4 class="fw-500">فعالیت کاربران</h4>

                                        <p class="my-10 fs-16">
                                            رشد کنید &amp; تا از محصولات تان<br>فروش داشته باشید
                                        </p>

                                        <a href="#" class="btn btn-danger-light">بررسی بیشتر</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-primary p-30 flex-grow-1 bg-img" style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 100%; background-image: url(images/svg-icon/color-svg/custom-4.svg)">

                                        <h4 class="fw-500">پایه</h4>

                                        <div class="mt-5">
                                            <div class="d-flex mb-10 fs-16">
                                                <span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
                                                <span class="text-white">فعالیت ها</span>
                                            </div>

                                            <div class="d-flex mb-10 fs-16">
                                                <span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
                                                <span class="text-white">فروش ها</span>
                                            </div>

                                            <div class="d-flex mb-10 fs-16">
                                                <span class="icon-Arrow-right mt-5 me-10"><span class="path1"></span><span class="path2"></span></span>
                                                <span class="text-white">ارتباطات</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="box">
                                <div class="card-body d-flex p-0">
                                    <div class="flex-grow-1 bg-success-light px-30 pt-50 pb-100 flex-grow-1 bg-img min-h-350" style="background-position: calc(100% + 0.5rem) bottom; background-size: 30% auto; background-image: url(images/svg-icon/color-svg/custom-5.svg)">

                                        <p class="text-success py-10 fs-24 fw-500">
                                            با یک برندینگ<br> طراحی سایت مدرن<br> ایجاد محتوای شروع کنید
                                        </p>

                                        <a href="#" class="btn btn-success">همین الان عضو شوید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-info px-30 pt-50 pb-100 flex-grow-1 bg-img min-h-350" style="background-position: right bottom; background-size: 40% auto; background-image: url(images/svg-icon/color-svg/custom-6.svg)">
                                        <h3 class="fw-500">شروع کنید</h3>
                                        <p class="py-15 fs-16">
                                            ارائه تخفیف برای فروشگاه آنلاین بهتر<br> می تواند وفاداری<br> در رانندگی باشد
                                        </p>
                                        <a href="#" class="btn btn-info-light">همین الان عضو شوید</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="box">
                                <div class="box-body d-flex p-0">
                                    <div class="flex-grow-1 bg-danger px-30 pt-50 pb-100 flex-grow-1 bg-img min-h-350" style="background-position: calc(100% + 0.5rem) bottom; background-size: 30% auto; background-image: url(images/svg-icon/color-svg/custom-7.svg)">

                                        <p class="py-15 pb-5 fs-24">
                                            با یک برندینگ<br> طراحی سایت مدرن<br> ایجاد محتوای شروع کنید
                                        </p>

                                        <a href="#" class="btn btn-warning">همین الان عضو شوید</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">آیتم های ترند شده
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 200px"></th>
                                                    <th class="p-0" style="min-width: 40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    65%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    83%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    47%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 47%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست </a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    71%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\005-paint-palette.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست </a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    50%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">آیتم های ترند شده
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 140px"></th>
                                                    <th class="p-0" style="min-width: 120px"></th>
                                                    <th class="p-0" style="min-width: 40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست </a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\005-paint-palette.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست </a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">فایل ها
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 140px"></th>
                                                    <th class="p-0" style="min-width: 120px"></th>
                                                    <th class="p-0" style="min-width: 40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                                            <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600">1.24MB</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                                            <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600">1.24MB</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                                            <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600">1.24MB</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                                            <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست </a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600">1.24MB</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                                            <span class="icon-Shield-user fs-24"></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست </a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            تعدادی پاراگراف
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600">1.24MB</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">آیتم های ترند شده
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 140px"></th>
                                                    <th class="p-0" style="min-width: 120px"></th>
                                                    <th class="p-0" style="min-width: 40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade d-block">
                                                            امتیاز
                                                        </span>
                                                        <ul class="list-inline mb-0">
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-social-icon btn-facebook btn-sm">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-2.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade d-block">
                                                            امتیاز
                                                        </span>
                                                        <ul class="list-inline mb-0">
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-social-icon btn-facebook btn-sm">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade d-block">
                                                            امتیاز
                                                        </span>
                                                        <ul class="list-inline mb-0">
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-social-icon btn-facebook btn-sm">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade d-block">
                                                            امتیاز
                                                        </span>
                                                        <ul class="list-inline mb-0">
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-social-icon btn-facebook btn-sm">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-5.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade d-block">
                                                            امتیاز
                                                        </span>
                                                        <ul class="list-inline mb-0">
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                            <li><i class="text-warning fa fa-star"></i></li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-social-icon btn-twitter btn-sm me-10">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-social-icon btn-facebook btn-sm">
                                                            <i class="fa fa-facebook-f"></i>
                                                        </a>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">آیتم های ترند شده
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 140px"></th>
                                                    <th class="p-0" style="min-width: 120px"></th>
                                                    <th class="p-0" style="min-width: 40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\001-glass.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-primary-light">تائید شده</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-warning-light">در حال پردازش</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success-light">موفق</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست </a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-danger-light">برگشتی</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\005-paint-palette.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست </a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-warning-light">در حال پردازش</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">موجود شده
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="table-responsive">
                                        <table class="table no-border table-vertical-center">
                                            <thead>
                                                <tr>
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 140px"></th>
                                                    <th class="p-0" style="min-width: 120px"></th>
                                                    <th class="p-0" style="min-width: 40px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="fw-600 text-primary">
                                                            +28%
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-2.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="fw-600 text-success">
                                                            +28%
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="fw-600 text-info">
                                                            +28%
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="fw-600 text-danger">
                                                            +28%
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-5.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="fw-600 text-warning">
                                                            +28%
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="btn btn-info-light btn-sm"><span class="icon-Arrow-right fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title align-items-start flex-column">
                                        وضعیت کاربران
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body py-0">
                                    <div class="table-responsive">
                                        <table class="table no-border">
                                            <thead>
                                                <tr class="text-start">
                                                    <th style="width: 50px">نویسندگان</th>
                                                    <th style="min-width: 200px"></th>
                                                    <th style="min-width: 150px">شرکت</th>
                                                    <th style="min-width: 150px">پیشرفت</th>
                                                    <th class="text-end" style="min-width: 150px">عملیات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-1.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            فوداتکو
                                                        </span>
                                                        <span class="text-fade d-block">
                                                            وب طراح
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    65%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-2.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            فوداتکو
                                                        </span>
                                                        <span class="text-fade d-block">
                                                            طراح وب
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    83%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images\avatar\avatar-3.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            فوداتکو
                                                        </span>
                                                        <span class="text-fade d-block">
                                                            طراح وب
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    47%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center overflow-hidden">
                                                            <img src="images/avatar/avatar-4.png" class="h-50 align-self-end" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            فوداتکو
                                                        </span>
                                                        <span class="text-fade d-block">
                                                            طراح وب
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex flex-column w-p100">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <span class="text-fade">
                                                                    71%
                                                                </span>
                                                                <span class="text-fade">
                                                                    پیشرفت
                                                                </span>
                                                            </div>
                                                            <div class="progress progress-xs w-p100">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title align-items-start flex-column">
                                        وضعیت کاربران
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body py-0">
                                    <div class="table-responsive">
                                        <table class="table no-border">
                                            <thead>
                                                <tr class="text-start">
                                                    <th class="p-0" style="width: 50px"></th>
                                                    <th class="p-0" style="min-width: 200px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="p-0" style="min-width: 150px"></th>
                                                    <th class="text-end p-0" style="min-width: 150px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images/svg-icon/color-svg/007-color-palette.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-primary-light">تائید شده</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\002-google.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-warning-light">در حال پردازش</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\003-settings.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-success-light">Success</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images\svg-icon\color-svg\005-paint-palette.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-danger-light">برگشتی</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>

                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                                            <img src="images/svg-icon/color-svg/006-pottery.svg" class="h-30" alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="text-dark fw-600 hover-primary fs-16">متن تست</a>
                                                        <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-dark fw-600 d-block fs-18">
                                                            45,800k
                                                        </span>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-fade">
                                                            متن تست
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="badge badge-warning-light">در حال پردازش</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Settings-1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>

                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle mx-5"><span class="icon-Write"><span class="path1"></span><span class="path2"></span></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary-light btn-circle"><span class="icon-Trash1 fs-18"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title align-items-start flex-column">
                                        ناحیه جدید
                                        <small class="subtitle">تعدادی کاربرجدید عضو شدند</small>
                                    </h4>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table no-border">
                                            <thead>
                                                <tr class="text-uppercase bg-lightest">
                                                    <th style="min-width: 250px"><span class="text-dark">محصولات</span></th>
                                                    <th style="min-width: 100px"><span class="text-fade">قابلیت </span></th>
                                                    <th style="min-width: 100px"><span class="text-fade">بدهی</span></th>
                                                    <th style="min-width: 150px"><span class="text-fade">کاربر</span></th>
                                                    <th style="min-width: 130px"><span class="text-fade">وضعیت</span></th>
                                                    <th style="min-width: 120px"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="ps-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-20">
                                                                <div class="bg-img h-50 w-50" style="background-image: url(images/gallery/creative/img-1.jpg)"></div>
                                                            </div>

                                                            <div>
                                                                <a href="#" class="text-dark fw-600 hover-primary mb-1 fs-16">متن تست</a>
                                                                <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            مختار مینائی
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            مدیر مجموعه
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-primary-light badge-lg">تائید شده</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-20">
                                                                <div class="bg-img h-50 w-50" style="background-image: url(images/gallery/creative/img-2.jpg)"></div>
                                                            </div>

                                                            <div>
                                                                <a href="#" class="text-dark fw-600 hover-primary mb-1 fs-16">متن تست</a>
                                                                <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            مختار مینائی
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            مدیر مجموعه
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning-light badge-lg">در حال پردازش</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-20">
                                                                <div class="bg-img h-50 w-50" style="background-image: url(images/gallery/creative/img-3.jpg)"></div>
                                                            </div>

                                                            <div>
                                                                <a href="#" class="text-dark fw-600 hover-primary mb-1 fs-16">متن تست</a>
                                                                <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            مختار مینائی
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            مدیر مجموعه
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success-light badge-lg">موفق</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-20">
                                                                <div class="bg-img h-50 w-50" style="background-image: url(images/gallery/creative/img-4.jpg)"></div>
                                                            </div>

                                                            <div>
                                                                <a href="#" class="text-dark fw-600 hover-primary mb-1 fs-16">متن تست</a>
                                                                <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            مختار مینائی
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            مدیر مجموعه
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger-light badge-lg">برگشتی</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 me-20">
                                                                <div class="bg-img h-50 w-50" style="background-image: url(images/gallery/creative/img-5.jpg)"></div>
                                                            </div>

                                                            <div>
                                                                <a href="#" class="text-dark fw-600 hover-primary mb-1 fs-16">متن تست</a>
                                                                <span class="text-fade d-block">به همراه ادامه توضیحات</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45,800k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            پرداخت شده
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            45k
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-fade fw-600 d-block fs-16">
                                                            مختار مینائی
                                                        </span>
                                                        <span class="text-dark fw-600 d-block fs-16">
                                                            مدیر مجموعه
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning-light badge-lg">در حال پردازش</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Bookmark"></span></a>
                                                        <a href="#" class="waves-effect waves-light btn btn-primary btn-circle mx-5"><span class="icon-Arrow-right"><span class="path1"></span><span class="path2"></span></span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box bg-gradient-primary">
                                <div class="box-header">
                                    <h4 class="box-title text-white">پکیج ها</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                <div class="box-body">
                                    <div class="px-10 py-30 bg-white text-dark">
                                        <h5 class="px-10 mb-15 fw-700">درآمد ماهیانه</h5>
                                        <ul class="flexbox flex-justified">
                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>کل</small>
                                            </li>

                                            <li class="be-1 bs-1 px-10">
                                                <h6 class="mb-0 text-bold">+74%</h6>
                                                <small>تغییر</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">98</h6>
                                                <small>لایسنس ها</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="px-10 py-30 my-20 bg-white text-dark">
                                        <h5 class="px-10 mb-15 fw-700">مالیات </h5>
                                        <ul class="flexbox flex-justified">
                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>کل</small>
                                            </li>

                                            <li class="be-1 bs-1 px-10">
                                                <h6 class="mb-0 text-bold">+74%</h6>
                                                <small>تغییر</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">98</h6>
                                                <small>لایسنس ها</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="px-10 py-30 bg-white text-dark">
                                        <h5 class="px-10 mb-15 fw-700">همکاران فروش</h5>
                                        <ul class="flexbox flex-justified">
                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>کل</small>
                                            </li>

                                            <li class="be-1 bs-1 px-10">
                                                <h6 class="mb-0 text-bold">+74%</h6>
                                                <small>تغییر</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">98</h6>
                                                <small>لایسنس ها</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-body box-inverse bg-info p-0 bbsr-0 bber-0">
                                    <div class="box-header no-border">
                                        <h4>کل درآمد</h4>
                                        <ul class="box-controls pull-right">
                                            <li class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                    <div class="box-body p-10">
                                        <h1 class="text-center fs-50"><small></small>84,125,859</h1>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="text-center py-10 bb-1 bb-dashed">
                                        <h4>درآمد ماهیانه</h4>
                                        <ul class="flexbox flex-justified text-center my-20">
                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>شیراز</small>
                                            </li>

                                            <li class="be-1 bs-1 px-10">
                                                <h6 class="mb-0 text-bold">7458</h6>
                                                <small>اصفهان</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">3254</h6>
                                                <small>تهران</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center py-10 bb-1 bb-dashed">
                                        <h4>مالیات info</h4>
                                        <ul class="flexbox flex-justified text-center my-20">
                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>شیراز</small>
                                            </li>

                                            <li class="be-1 bs-1 px-10">
                                                <h6 class="mb-0 text-bold">7458</h6>
                                                <small>اصفهان</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">3254</h6>
                                                <small>تهران</small>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-center py-10">
                                        <h4>همکاران فروش</h4>
                                        <ul class="flexbox flex-justified text-center my-20">
                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">8952</h6>
                                                <small>شیراز</small>
                                            </li>

                                            <li class="be-1 bs-1 px-10">
                                                <h6 class="mb-0 text-bold">7458</h6>
                                                <small>اصفهان</small>
                                            </li>

                                            <li class="px-10">
                                                <h6 class="mb-0 text-bold">3254</h6>
                                                <small>تهران</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="bg-img box-inverse bbsr-0 bber-0" style="background-image: url(images/gallery/thumb/14.jpg);" data-overlay="5">
                                    <div class="box-header no-border">
                                        <h4>تاریخ</h4>
                                        <ul class="box-controls pull-right">
                                            <li class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="btn btn-danger-light px-10 base-font">اکسپورت</a>
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
                                    <div class="box-body">
                                        <div class="flexbox flex-justified text-center mt-50">
                                            <div class="b-1 rounded py-20">
                                                <p class="mb-0 fa-3x">30%</p>
                                                <p class="mb-0 fw-300">فروش مستقیم</p>
                                            </div>
                                            <div class="b-1 rounded py-20">
                                                <p class="mb-0 fa-3x">40%</p>
                                                <p class="mb-0 fw-300">فروش حراجی</p>
                                            </div>
                                            <div class="b-1 rounded py-20">
                                                <p class="mb-0 fa-3x">50%</p>
                                                <p class="mb-0 fw-300">فروش با آفر</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided">
                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg" src="images\avatar\1.jpg" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="#">Austin</a></h6>
                                                <small class="text-fader">CEO</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-sm btn-primary-light" href="#">تماس</a>
                                            </div>
                                        </div>
                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg" src="images\avatar\2.jpg" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="#">Thomas</a></h6>
                                                <small class="text-fader">MD</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-sm btn-primary-light" href="#">تماس</a>
                                            </div>
                                        </div>
                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg" src="images\avatar\3.jpg" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="#">Chase</a></h6>
                                                <small class="text-fader">HR</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-sm btn-primary-light" href="#">تماس</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-12">

                            <div class="box">
                                <div class="box-body bg-img bbsr-0 bber-0" style="background-image: url(images/gallery/thumb/5.jpg);" data-overlay="5">
                                    <div class="d-md-flex align-items-center text-white">
                                        <div>
                                            <h4 class="mb-0">افرادی که ممکن شما بشناسید</h4>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="javascript: void(0)"><i class="mdi mdi-menu text-white fs-20"></i></a>
                                        </div>
                                    </div>
                                    <form class="mt-30 mb-20">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search by Email" aria-label="">
                                            <button class="btn btn-primary-light" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-body">
                                    <div class="row my-20">
                                        <div class="col-4 text-center">
                                            <img src="images\avatar\3.jpg" alt="" class="img-fluid user-img">
                                            <h6 class="fs-12 mt-5">مختار مینائی</h6>
                                            <button class="btn btn-primary-light btn-sm">تماس</button>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="images\avatar\1.jpg" alt="" class="img-fluid user-img">
                                            <h6 class="fs-12 mt-5">رضا رحیمی</h6>
                                            <button class="btn btn-primary-light btn-sm">تماس</button>
                                        </div>
                                        <div class="col-4 text-center">
                                            <img src="images\avatar\2.jpg" alt="" class="img-fluid user-img">
                                            <h6 class="fs-12 mt-5">لیلا رحمتی</h6>
                                            <button class="btn btn-primary-light btn-sm">تماس</button>
                                        </div>
                                    </div>
                                    <div class="row row-cols-2 g-2">
                                        <div class="col text-center">
                                            <button class="btn btn-twitter text-white">دعوت با تویتر <i class="fa fa-twitter ms-10"></i></button>
                                        </div>
                                        <div class="col text-center">
                                            <button class="btn btn-facebook text-white">دعوت با فیس بوک <i class="fa fa-facebook-f ms-10"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-8">
                            <div class="box bg-img box-inverse" style="background-image: url(images/gallery/full/3.jpg);" data-overlay="5">
                                <div class="box-header with-border">
                                    <h4 class="box-title">آخرین ها</h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="#"></a></li>
                                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body mt-90">
                                    <span class="badge" data-overlay="5">جدید</span>
                                    <h2 class="fw-200 mb-0">توضیحات این بخش و خدمات</h2>
                                    <p>انواع مختلفی از نوار پیشرفت وجود دارد</p>
                                    <ul class="flexbox flex-justified mt-50">
                                        <li>
                                            <p class="fs-20 text-success mb-0 fw-300"> <i class="fa fa-caret-up text-success"></i> +1.952%
                                                <small class="fs-12">41,425.81</small>
                                            </p>
                                            <p> رشد</p>
                                        </li>

                                        <li>
                                            <p class="fs-20 text-danger mb-0 fw-300"> <i class="fa fa-caret-down text-danger"></i> -0.952%
                                                <small class="fs-12">54,425.81</small>
                                            </p>
                                            <p> رکود</p>
                                        </li>

                                        <li>
                                            <p class="fs-20 text-success mb-0 fw-300"> <i class="fa fa-caret-up text-success"></i> +1.12%
                                                <small class="fs-12">85,425.81</small>
                                            </p>
                                            <p> رشد</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-3">
                            <div class="box bg-img box-inverse" style="background-image: url(images/gallery/thumb/14.jpg);" data-overlay="5">
                                <div class="box-header no-border">
                                    <h4><i class="fa fa-android"></i></h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body mt-90">
                                    <span class="badge" data-overlay="5">New</span>
                                    <h2 class="fw-200 mb-0">کشورهای محبوب</h2>
                                    <p class="text-light">انواع مختلفی از نوار پیشرفت وجود دارد</p>
                                </div>
                            </div>
                            <div class="box bg-danger bg-temple-dark">
                                <div class="box-header no-border">
                                    <h4><i class="fa fa-map text-white"></i></h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close text-white" href="#"></a></li>
                                    </ul>
                                </div>
                                <div class="box-body mt-90">
                                    <span class="badge badge-warning">جدید</span>
                                    <h2 class="fw-200 mb-0">کشورهای محبوب</h2>
                                    <p>انواع مختلفی از نوار پیشرفت وجود دارد</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="box">
                                <div class="box-header no-border bg-primary">
                                    <h4>تاریخ</h4>
                                    <ul class="box-controls pull-right">
                                        <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="#" class="btn btn-outline btn-white px-10">وضعیت</a>
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
                                <div class="box-body bg-primary bar-0">
                                    <div class="flexbox flex-justified text-center mt-50">
                                        <div class="b-1 rounded py-20">
                                            <p class="mb-0 fa-3x">30%</p>
                                            <p class="mb-0 fw-300">فروش مستقیم</p>
                                        </div>
                                        <div class="b-1 rounded py-20">
                                            <p class="mb-0 fa-3x">40%</p>
                                            <p class="mb-0 fw-300">فروش حراجی</p>
                                        </div>
                                        <div class="b-1 rounded py-20">
                                            <p class="mb-0 fa-3x">50%</p>
                                            <p class="mb-0 fw-300">فروش با آفر</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body p-0">
                                    <div class="media-list media-list-hover media-list-divided">
                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg" src="images\avatar\1.jpg" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="#">مختار مینائی</a></h6>
                                                <small class="text-fader">سئو</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-primary-light btn-sm" href="#">تماس</a>
                                            </div>
                                        </div>
                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg" src="images\avatar\2.jpg" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="#">هانیه حمیدی</a></h6>
                                                <small class="text-fader">مدیریت</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-primary-light btn-sm" href="#">تماس</a>
                                            </div>
                                        </div>
                                        <div class="media media-single">
                                            <a href="#">
                                                <img class="avatar avatar-lg" src="images\avatar\3.jpg" alt="...">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="#">رامین احدی</a></h6>
                                                <small class="text-fader">مدیریت</small>
                                            </div>
                                            <div class="media-right">
                                                <a class="btn btn-primary-light btn-sm" href="#">تماس</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-5 col-12">
                            <!-- DIRECT CHAT PRIMARY -->
                            <div class="box direct-chat direct-chat-info">
                                <div class="box-header with-border">
                                    <h4 class="box-title">چت مستقیم</h4>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="#"></a></li>
                                        <li><a class="box-btn-slide" href="#"></a></li>
                                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                                        <li><a class="" data-bs-toggle="tooltip" title="تماس" data-widget="chat-pane-toggle"><i class="ti-comments"></i></a></li>
                                        <li><span data-bs-toggle="tooltip" title="1 New Messages" class="badge badge-pill badge-info">5</span></li>
                                    </ul>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages">
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg mb-30">
                                            <div class="clearfix mb-15">
                                                <span class="direct-chat-name">مختار مینائی</span>
                                                <span class="direct-chat-timestamp pull-right">April 14, 2017</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img avatar" src="images\user1-128x128.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                <p>سلام</p>
                                                <p>چ خبر اوضاع چطور</p>
                                                <p class="direct-chat-timestamp"><time datetime="2018">23:58</time></p>
                                            </div>

                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right mb-30">
                                            <div class="clearfix mb-15">
                                                <span class="direct-chat-name pull-right">شما</span>
                                            </div>
                                            <div class="direct-chat-text">
                                                <p>سلام من خوبن.</p>
                                                <p>چ خبر.</p>
                                                <p class="direct-chat-timestamp"><time datetime="2018">00:06</time></p>
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                    </div>
                                    <!--/.direct-chat-messages-->

                                    <!-- Contacts are loaded here -->
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="images\user1-128x128.jpg" alt="User Image">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            Bryson
                                                            <small class="contacts-list-date pull-right">April 14, 2017</small>
                                                        </span>
                                                        <span class="contacts-list-email">info@.multipurpose.com</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="images\user7-128x128.jpg" alt="User Image">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            Vincent
                                                            <small class="contacts-list-date pull-right">March 14, 2017</small>
                                                        </span>
                                                        <span class="contacts-list-email">sonu@gmail.com</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                        </ul>
                                        <!-- /.contatcts-list -->
                                    </div>
                                    <!-- /.direct-chat-pane -->
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="پیام تان را بگذارید...." class="form-control">
                                            <div class="input-group-addon">
                                                <div class="align-self-end gap-items">
                                                    <span class="publisher-btn file-group">
                                                        <i class="fa fa-paperclip file-browser"></i>
                                                        <input type="file">
                                                    </span>
                                                    <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                                    <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-footer-->
                            </div>
                            <!--/.direct-chat -->
                        </div>


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

    <script src="src\js\template.js"></script>
    <script src="src\js\pages\dashboard.js"></script>

</body>

</html>