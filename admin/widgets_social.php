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
                                        <li class="breadcrumb-item" aria-current="page">ویجت ها</li>
                                        <li class="breadcrumb-item active" aria-current="page">ویجت های اجتماعی</li>
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
                                <div class="box-header no-border">
                                    <h4 class="box-title">اطلاعات کاربر</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body">
                                    <div class="d-flex flex-row">
                                        <div class=""><img src="images\avatar\avatar-2.png" alt="user" class="rounded-circle bg-success-light" width="100"></div>
                                        <div class="ps-20">
                                            <h3>لیلا رحیمی</h3>
                                            <h6>طراح وب</h6>
                                            <button class="btn btn-info-light"><i class="ti-plus"></i> فالو</button>
                                        </div>
                                    </div>
                                    <div class="row mt-40">
                                        <div class="col b-r text-center">
                                            <h2 class="font-light">1254</h2>
                                            <h6>Photos</h6>
                                        </div>
                                        <div class="col b-r text-center">
                                            <h2 class="font-light">1254</h2>
                                            <h6>Videos</h6>
                                        </div>
                                        <div class="col text-center">
                                            <h2 class="font-light">1587</h2>
                                            <h6>Tasks</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="text-center aboutscroll">
                                        اطلاعات و توضیحات پروفایل کاربری
                                    </p>
                                    <ul class="list-inline text-center">
                                        <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="وبسایت"><i class="fa fa-globe fs-20"></i></a></li>
                                        <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="توییتر"><i class="fa fa-twitter fs-20"></i></a></li>
                                        <li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="فیس بوک"><i class="fa fa-facebook-square fs-20"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="box-body text-center">
                                    <div class="mb-20 mt-20">
                                        <img src="images\avatar\avatar-2.png" width="150" class="rounded-circle bg-info-light" alt="user">
                                        <h4 class="mt-20 mb-0">لیلا رحیمی</h4>
                                        <a href="mailto:dummy@gmail.com">dummy@gmail.com</a>
                                    </div>
                                    <div class="badge badge-pill badge-info-light fs-16">داشبورد</div>
                                    <div class="badge badge-pill badge-primary-light fs-16">رابط کاربری</div>
                                    <div class="badge badge-pill badge-danger-light fs-16">ظاهر پنل</div>
                                    <div class="badge badge-pill badge-warning-light fs-16" data-bs-toggle="tooltip" data-placement="top" title="3 بیشتر">+10</div>
                                </div>
                                <div class="p-25 mt-15 bt-1">
                                    <div class="row text-center">
                                        <div class="col-6 be-1">
                                            <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                                                <span class="icon-Mail fs-20 me-5"></span>پیام </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="link d-flex align-items-center justify-content-center font-medium">
                                                <span class="icon-Code1 fs-20 me-5"><span class="path1"></span><span class="path2"></span></span>نمونه کار</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box">
                                <div class="text-white box-body bg-img text-center py-50" style="background-image: url(images/gallery/creative/img-12.jpg);" data-overlay="5">
                                    <a href="#">
                                        <img class="avatar avatar-xxl rounded-circle bg-warning-light" src="images\avatar\avatar-6.png" alt="">
                                    </a>
                                    <h5 class="mt-2 mb-0"><a class="text-white" href="#">رضا حمیدی</a></h5>
                                    <span>طراح</span>
                                </div>
                                <ul class="flexbox flex-justified text-center p-20">
                                    <li>
                                        <span class="text-muted">فالور</span><br>
                                        <span class="fs-20">6.6K</span>
                                    </li>
                                    <li class="be-1 bs-1 border-light">
                                        <span class="text-muted">فالو شده</span><br>
                                        <span class="fs-20">5148</span>
                                    </li>
                                    <li>
                                        <span class="text-muted">توییت ها</span><br>
                                        <span class="fs-20">2154</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box p-30 pt-50 text-center">
                                <div>
                                    <a class="avatar avatar-xxl status-success mb-3 bg-transparent" href="#">
                                        <img src="images\avatar\avatar-1.png" class="rounded-circle bg-primary-light" alt="...">
                                    </a>
                                </div>
                                <h5 class="mt-5 "><a class="text-default hover-primary" href="#">رامین سعادت</a></h5>
                                <p><small class="fs-12">طراح</small></p>
                                <p class="text-fade fs-12 mb-50">سلام دوستان چ خبر؟.</p>
                                <div class="gap-items fs-16">
                                    <a class="text-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="text-instagram" href="#"><i class="fa fa-instagram"></i></a>
                                    <a class="text-google" href="#"><i class="fa fa-google"></i></a>
                                    <a class="text-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="box box-widget widget-user">
                                <div class="widget-user-header bg-img" style="background: url(images/gallery/creative/img-8.jpg) center center;" data-overlay="5">
                                    <h3 class="widget-user-username text-white">الهام صفایی</h3>
                                    <h6 class="widget-user-desc text-white">طراح</h6>
                                </div>
                                <div class="widget-user-image">
                                    <img class="rounded-circle bg-warning-light" src="images\avatar\avatar-2.png" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                    <div class="row mt-30">
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">12K</h5>
                                                <span class="description-text">فالور</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 be-1 bs-1">
                                            <div class="description-block">
                                                <h5 class="description-header">550</h5>
                                                <span class="description-text">فالور</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">158</h5>
                                                <span class="description-text">توییت ها</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="box box-widget widget-user-2">
                                <div class="widget-user-header bg-primary">
                                    <div class="widget-user-image">
                                        <img class="rounded-circle bg-success-light" src="images\avatar\avatar-5.png" alt="User Avatar">
                                    </div>
                                    <h3 class="widget-user-username">هدیه همتی</h3>
                                    <h6 class="widget-user-desc">دولوپر</h6>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav d-block nav-stacked">
                                        <li class="nav-item"><a href="#" class="nav-link">کل فروش <span class="pull-right badge bg-info-light">1310</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">پروژه ها <span class="pull-right badge bg-success-light">120</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">فالور <span class="pull-right badge bg-warning-light">8K</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">وظایف <span class="pull-right badge bg-danger-light">58</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="box box-widget widget-user-4">
                                <div class="widget-user-header bg-img" style="background: url('images/photo1.png');" data-overlay="5">
                                    <div class="box-body text-white">
                                        <div class="widget-user-image">
                                            <img class="rounded-circle bg-success-light" src="images\avatar\avatar-3.png" alt="User Avatar">
                                        </div>
                                        <h3 class="widget-user-username">ساناز همتی</h3>
                                        <h6 class="widget-user-desc">سئو و تولید محتوا</h6>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">12K</h5>
                                                <span class="description-text">فالور</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 be-1 bs-1">
                                            <div class="description-block">
                                                <h5 class="description-header">550</h5>
                                                <span class="description-text">فالو شده</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">1158</h5>
                                                <span class="description-text">توییت ها</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="box box-widget widget-user-4">
                                <div class="widget-user-header bg-info">
                                    <div class="overlay overlay-none">
                                        <div class="widget-user-image">
                                            <img class="rounded-circle bg-info-light" src="images\avatar\avatar-3.png" alt="User Avatar">
                                        </div>
                                        <h3 class="widget-user-username">ساناز همتی</h3>
                                        <h6 class="widget-user-desc">سئو و تولید محتوا</h6>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">12K</h5>
                                                <span class="description-text">فالور</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 be-1 bs-1">
                                            <div class="description-block">
                                                <h5 class="description-header">550</h5>
                                                <span class="description-text">فالو شده</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="description-block">
                                                <h5 class="description-header">1158</h5>
                                                <span class="description-text">توییت ها</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12">
                            <div class="box box-widget widget-user-3">
                                <div class="box-body bg-img text-white" style="background: url(images/gallery/creative/img-7.jpg);" data-overlay="5">
                                    <div class="widget-user-header">
                                        <div class="info-user">
                                            <h3 class="widget-user-username">مختار مینائئ</h3>
                                            <h6 class="widget-user-desc">دولوپر</h6>
                                        </div>
                                        <div class="widget-user-image clearfix">
                                            <img class="rounded-circle bg-primary-light" src="images\avatar\avatar-7.png" alt="User Avatar">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer no-padding">
                                    <ul class="nav d-block nav-stacked">
                                        <li class="nav-item"><a href="#" class="nav-link">کل فروش <span class="pull-right badge bg-info-light">1310</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">پروژه ها<span class="pull-right badge bg-success-light">120</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">فالور <span class="pull-right badge bg-warning-light">8K</span></a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">وظایف <span class="pull-right badge bg-danger-light">58</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">خلاصه اطلاعات کاربران</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="box box-body box-hover-shadow" href="#">
                                <div class="flexbox align-items-center">
                                    <div>
                                        <h6 class="mb-0">مختار مینائی</h6>
                                        <small>طراح وب</small>
                                    </div>
                                    <img class="avatar avatar-lg" src="images\avatar\1.jpg" alt="...">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="box box-body box-hover-shadow" href="#">
                                <div class="flexbox align-items-center">
                                    <img class="avatar avatar-lg" src="images\avatar\2.jpg" alt="...">
                                    <div class="text-end">
                                        <h6 class="mb-0">لیلا همتی</h6>
                                        <small>طراح وب</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="box box-body box-inverse box-primary" href="#">
                                <div class="flexbox align-items-center">
                                    <div>
                                        <h6 class="mb-0">رامین صدیقی</h6>
                                        <small>PHP طراح</small>
                                    </div>
                                    <img class="avatar avatar-lg avatar-bordered" src="images\avatar\4.jpg" alt="...">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a class="box box-inverse box-body bg-img" href="#" style="background-image: url(images/gallery/thumb-sm/1.jpg)" data-overlay="4">
                                <div class="flexbox align-items-center">
                                    <img class="avatar avatar-lg avatar-bordered" src="images\avatar\3.jpg" alt="...">
                                    <div class="text-end">
                                        <h6 class="mb-0">محمد عادلی</h6>
                                        <small>مدیر پروژه.</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">اطلاعات هدر</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box box-inverse bg-img" style="background-image: url(images/gallery/full/1.jpg);" data-overlay="2">
                                <div class="flexbox px-20 pt-20">
                                    <label class="toggler toggler-danger text-white">
                                        <input type="checkbox">
                                        <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-white"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> موقعیت</a>
                                            <a class="dropdown-item" href="#"><i class="ti-check"></i> فالو</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> بلاک</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-body text-center pb-50">
                                    <a href="#">
                                        <img class="avatar avatar-xxl avatar-bordered" src="images\avatar\5.jpg" alt="">
                                    </a>
                                    <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">نارین احمدی</a></h4>
                                    <span><i class="fa fa-map-marker w-20"></i> تهران</span>
                                </div>

                                <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
                                    <li>
                                        <span class="opacity-60">فالور</span><br>
                                        <span class="fs-20">8.6K</span>
                                    </li>
                                    <li>
                                        <span class="opacity-60">فالو شده</span><br>
                                        <span class="fs-20">8457</span>
                                    </li>
                                    <li>
                                        <span class="opacity-60">توییت ها</span><br>
                                        <span class="fs-20">2154</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="box card-inverse bg-img" style="background-image: url(images/gallery/full/2.jpg); padding-top: 275px">
                                <div class="flexbox align-items-center px-20" data-overlay="4">
                                    <div class="flexbox align-items-center me-auto">
                                        <a href="#">
                                            <img class="avatar avatar-xl avatar-bordered" src="images\avatar\4.jpg" alt="">
                                        </a>
                                        <div class="ps-10 d-none d-md-block">
                                            <h5 class="mb-0"><a class="hover-primary text-white" href="#">مختار مینائی</a></h5>
                                            <span>طراح</span>
                                        </div>
                                    </div>

                                    <ul class="flexbox flex-justified text-center py-20">
                                        <li class="px-10">
                                            <span class="opacity-60">فالور</span><br>
                                            <span class="fs-20">9.6K</span>
                                        </li>
                                        <li class="px-10">
                                            <span class="opacity-60">فالو شده</span><br>
                                            <span class="fs-20">9845</span>
                                        </li>
                                        <li class="ps-10">
                                            <span class="opacity-60">توییت ها</span><br>
                                            <span class="fs-20">8456</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">شبکه های اجتماعی</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse bg-google">
                                <div class="box-body">
                                    <h3 class="text-white mt-0">توضیحات و اطلاعاتی تکمیلی کاربران درج شود.</h3>
                                    <small>فروردین 1402</small>
                                    <div class="mt-20">
                                        <i class="fa fa-google-plus fs-26"></i>
                                        <ul class="list-inline float-end mb-0">
                                            <li class="list-inline-item">
                                                <i class="fa fa-thumbs-o-up"></i> 845
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fa-share"></i> 956
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse bg-twitter">
                                <div class="box-body">
                                    <h3 class="text-white mt-0">توضیحات و اطلاعاتی تکمیلی کاربران درج شود.</h3>
                                    <small>فروردین 1402</small>
                                    <div class="mt-20">
                                        <i class="fa fa-twitter fs-26"></i>
                                        <ul class="list-inline float-end mb-0">
                                            <li class="list-inline-item">
                                                <i class="fa fa-heart"></i> 845
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fa-thumbs-up"></i> 956
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse bg-facebook">
                                <div class="box-body">
                                    <h3 class="text-white mt-0">توضیحات و اطلاعاتی تکمیلی کاربران درج شود.</h3>
                                    <small>فروردین 1402</small>
                                    <div class="mt-20">
                                        <i class="fa fa-facebook fs-26"></i>
                                        <ul class="list-inline float-end mb-0">
                                            <li class="list-inline-item">
                                                <i class="fa fa-thumbs-o-up"></i> 845
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="fa fa-star"></i> 956
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box box-inverse bg-twitter">
                                <div class="box-header no-border">
                                    <span class="fa fa-twitter fs-30"></span>
                                    <div class="box-tools pull-right">
                                        <h5 class="box-title">Latest توییت ها</h5>
                                    </div>
                                </div>
                                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                    <p>توضیحات لازم را در این قسمت نمایش دهید</p>
                                    <div class="flexbox">
                                        <time class="text-white" datetime="2017-11-21 20:00">اردیبهشت 1402</time>
                                        <span><i class="fa fa-heart"></i> 45</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box box-inverse bg-facebook">
                                <div class="box-header no-border">
                                    <span class="fa fa-facebook fs-30"></span>
                                    <div class="box-tools pull-right">
                                        <h5 class="box-title">فیس بوک</h5>
                                    </div>
                                </div>

                                <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                    <p>توضیحات لازم را در این قسمت نمایش دهید</p>
                                    <div class="flexbox">
                                        <time class="text-white" datetime="2017-11-21 20:00">اردیبهشت 1402</time>
                                        <span><i class="fa fa-heart"></i> 75</span>
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="box box-inverse box-carousel slide bg-twitter">
                                <div class="box-header no-border">
                                    <span class="fa fa-twitter fs-30"></span>
                                    <div class="box-tools pull-right">
                                        <h5 class="box-title">نمایشی</h5>
                                    </div>
                                </div>
                                <div class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                                <p>توضیحات لازم را در این قسمت نمایش دهید</p>
                                                <div class="flexbox">
                                                    <time class="text-white" datetime="2017-11-22 20:00">فروردین 1402</time>
                                                    <span><i class="fa fa-heart"></i> 62</span>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="carousel-item">
                                            <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                                <p>توضیحات و اطلاعات اولیه پروفایل</p>
                                                <div class="flexbox">
                                                    <time class="text-white" datetime="2017-11-22 20:00">فروردین 1402</time>
                                                    <span><i class="fa fa-heart"></i> 45</span>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <div class="carousel-item">
                                            <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
                                                <p>توضیحات لازم را با بررسی تکمیلی عنوان کنید.</p>
                                                <div class="flexbox">
                                                    <time class="text-white" datetime="2017-11-22 20:00">فروردین 1402</time>
                                                    <span><i class="fa fa-heart"></i> 65</span>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse box-success">
                                <div class="box-body">
                                    <a class="avatar float-start me-20" href="javascript:void(0)">
                                        <img src="images\avatar\5.jpg" alt="">
                                    </a>
                                    <div>
                                        <small class="float-end">امروز, 16:05</small>
                                        <div class="fs-18">لیلا رحیمی</div>
                                        <div class="fs-14 mb-10">طراح</div>
                                        <blockquote class="blockquote my-20 fs-16 text-white">توضیحات و اطلاعاتی تکمیلی کاربران درج شود.</blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse box-primary">
                                <div class="box-body">
                                    <div>
                                        <blockquote class="blockquote cover-quote fs-16 text-white mt-0">توضیحات و اطلاعاتی تکمیلی کاربران درج شود.
                                            <div class="fs-16 mt-10">لیلا رحیمی</div>
                                            <div class="fs-14 mb-10">طراح</div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box box-inverse box-info">
                                <div class="box-body">
                                    <a class="avatar float-start me-20" href="javascript:void(0)">
                                        <img src="images\avatar\5.jpg" alt="">
                                    </a>
                                    <div>
                                        <small class="float-end">امروز, 16:05</small>
                                        <div class="fs-18">لیلا رحیمی</div>
                                        <div class="fs-14 mb-10">طراح</div>
                                        <blockquote class="blockquote cover-quote fs-16 text-white">توضیحات و اطلاعاتی تکمیلی کاربران درج شود.</blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box">
                                <div class="box-header no-border" style="position: absolute;width: 100%;z-index: 9;">
                                    <ul class="list-inline pull-left">
                                        <li>
                                            <a href="#" class="text-white"><i class="fa fa-expand"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-white"><i class="fa fa-heart-o"></i></a>
                                        </li>
                                    </ul>
                                    <span class="badge badge-dot pull-right badge-danger" data-bs-toggle="tooltip" data-bs-original-title="برچسب"></span>
                                </div>
                                <div class="box-body bg-img py-70 bbsr-0 bber-0" style="background-image: url(images/gallery/thumb/5.jpg)" data-overlay="5">
                                    <blockquote class="blockquote blockquote-inverse no-border no-margin">
                                        <p class="fs-22">توضیحات لازم را درج کنید.</p>
                                        <footer>بعضی افراد مشهور <cite title="Source Title">منبع خبر</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="box-body">
                                    <h4>عنوان شاخص</h4>
                                    <div class="flexbox">
                                        <div class="time">چند دقیقه پیش</div>
                                        <ul class="flexbox">
                                            <li><a href="#">845 <i class="fa fa-comment-o"></i></a></li>
                                            <li><a href="#">85K <i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer p-0">
                                    <div class="media-list media-list-hover">
                                        <a href="#" class="media media-single">
                                            <img class="avatar pull-left me-10" src="images\avatar\2.jpg" alt="">
                                            <div>
                                                <h5 class="mb-0">رضا احمدی</h5>
                                                <p class="text-fade mb-0">عکس جدیدی منتشر کرد</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box">
                                <div class="box-header p-0">
                                    <div class="media-list media-list-hover">
                                        <a href="#" class="media media-single">
                                            <img class="avatar pull-left me-10" src="images\avatar\4.jpg" alt="">
                                            <div>
                                                <h5 class="mb-0">رضا احمدی</h5>
                                                <p class="text-fade mb-0">عکس جدیدی منتشر کرد</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-body bg-img py-70 bar-0" style="background-image: url(images/gallery/thumb/12.jpg)" data-overlay="5">
                                    <blockquote class="blockquote blockquote-inverse no-border no-margin">
                                        <p class="fs-22">توضیحات لازم را درج کنید.</p>
                                        <footer>بعضی افراد مشهور <cite title="Source Title">منبع خبر</cite></footer>
                                    </blockquote>
                                </div>
                                <div class="box-body">
                                    <h4>عنوان شاخص</h4>
                                    <div class="flexbox">
                                        <div class="time">چند دقیقه پیش</div>
                                        <ul class="flexbox">
                                            <li><a href="#">845 <i class="fa fa-comment-o"></i></a></li>
                                            <li><a href="#">85K <i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="box">
                                <div class="box-header p-0">
                                    <div class="media-list media-list-hover">
                                        <a href="#" class="media media-single">
                                            <img class="avatar pull-left me-10" src="images\avatar\3.jpg" alt="">
                                            <div>
                                                <h5 class="mb-0">رضا احمدی</h5>
                                                <p class="text-fade mb-0">عکس جدیدی منتشر کرد</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="flexbox">
                                        <div class="time">چند دقیقه پیش</div>
                                        <ul class="flexbox">
                                            <li><a href="#">845 <i class="fa fa-comment-o"></i></a></li>
                                            <li><a href="#">85K <i class="fa fa-heart-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body bg-img py-70 btsr-0 bter-0" style="background-image: url(images/gallery/thumb/1.jpg)" data-overlay="5">
                                    <blockquote class="blockquote blockquote-inverse no-border no-margin">
                                        <p class="fs-22">توضیحات لازم را درج کنید.</p>
                                        <footer>بعضی افراد مشهور <cite title="Source Title">منبع خبر</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">اطلاعات اولیه کاربران</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-body text-center py-30">
                                <a href="#">
                                    <img class="avatar avatar-xxl" src="images\avatar\avatar-1.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">مختار مینائی</a></h5>
                                <p class="text-fade">مدیر پروژه</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-body text-center py-30 box-inverse bg-primary">
                                <a href="#">
                                    <img class="avatar avatar-xxl" src="images\avatar\avatar-1.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="#">مختار مینائی</a></h5>
                                <p class="text-white">مدیر پروژه</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-body text-center py-30 bg-img" style="background-image:url(images/gallery/creative/img-9.jpg)" data-overlay="5">
                                <a href="#">
                                    <img class="avatar avatar-xxl" src="images\avatar\avatar-1.png" alt="">
                                </a>
                                <h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="#">مختار مینائی</a></h5>
                                <p class="text-white">مدیر پروژه</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box">
                                <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-danger fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-muted"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> موقعیت</a>
                                            <a class="dropdown-item" href="#"><i class="ti-check"></i> فالو</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> بلاک</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body text-center pt-1 pb-15">
                                    <a href="#">
                                        <img class="avatar avatar-xxl" src="images\avatar\avatar-7.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="hover-primary" href="#">ساناز سعیدی</a></h5>
                                    <p class="text-fade">طراح</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-inverse bg-danger-light">
                                <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-info fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-danger"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> موقعیت</a>
                                            <a class="dropdown-item" href="#"><i class="ti-check"></i> فالو</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> بلاک</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body text-center pt-1 pb-15">
                                    <a href="#">
                                        <img class="avatar avatar-xxl" src="images\avatar\avatar-5.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="text-danger hover-danger" href="#">ساناز سعیدی</a></h5>
                                    <p class="text-danger">طراح</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2">
                            <div class="box box-inverse bg-img" style="background-image:url(images/gallery/creative/img-8.jpg)" data-overlay="5">
                                <div class="flexbox align-items-center px-20 pt-20">
                                    <label class="toggler toggler-danger fs-16">
                                        <input type="checkbox" checked="">
                                        <i class="fa fa-heart"></i>
                                    </label>
                                    <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#"><i class="ti-more-alt rotate-90 text-white"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> پروفایل</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-picture-o"></i> موقعیت</a>
                                            <a class="dropdown-item" href="#"><i class="ti-check"></i> فالو</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#"><i class="fa fa-ban"></i> بلاک</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body text-center pt-1 pb-15">
                                    <a href="#">
                                        <img class="avatar avatar-xxl" src="images\avatar\avatar-5.png" alt="">
                                    </a>
                                    <h5 class="mt-10 mb-1"><a class="text-white hover-danger" href="#">ساناز سعیدی</a></h5>
                                    <p class="text-white ">طراح</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">بلاک پست</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box">
                                <div class="media bb-1 border-fade">
                                    <img class="avatar avatar-lg" src="images\avatar\3.jpg" alt="...">
                                    <div class="media-body">
                                        <p>
                                            <strong>مختار مینائی</strong>
                                            <time class="float-end text-fade" datetime="2017">24 دقیق پیش</time>
                                        </p>
                                        <p><small>طراح</small></p>
                                    </div>
                                </div>
                                <div class="box-body bb-1 border-fade">
                                    <p class="lead">توضیحات لازم در این قسمت عنوان شود</p>
                                    <div class="gap-items-4 mt-10">
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-thumbs-up me-1"></i> 1254
                                        </a>
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-comment me-1"></i> 25
                                        </a>
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-share-alt me-1"></i> 12
                                        </a>
                                    </div>
                                </div>
                                <div class="media-list media-list-divided">
                                    <div class="media">
                                        <a class="avatar" href="#">
                                            <img src="images\avatar\4.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p>
                                                <a href="#"><strong>مهدی ساری</strong></a>
                                                <time class="float-end text-fade" datetime="2017-07-14 20:00">همین الان</time>
                                            </p>
                                            <p>اوکی خیلی خوبه.</p>

                                            <div class="media px-0 mt-20">
                                                <a class="avatar" href="#">
                                                    <img src="images\avatar\5.jpg" alt="...">
                                                </a>
                                                <div class="media-body">
                                                    <p>
                                                        <a href="#"><strong>ساناز رفیعی</strong></a>
                                                        <time class="float-end text-fade" datetime="2017-07-14 20:00">26 دقیقه پیش</time>
                                                    </p>
                                                    <p>تشکر از کامنت شما.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="media">
                                        <a class="avatar" href="#">
                                            <img src="images\avatar\2.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p>
                                                <a href="#"><strong>هدیه سعیدی</strong></a>
                                                <time class="float-end text-fade" datetime="2017-07-14 20:00">2 ساعت پیش</time>
                                            </p>
                                            <p>خیلی هم عالی.</p>
                                        </div>
                                    </div>
                                </div>
                                <form class="publisher bt-1 border-fade">
                                    <img class="avatar avatar-sm" src="images\avatar\2.jpg" alt="...">
                                    <input class="publisher-input" type="text" placeholder="کامنت بگذارید....">
                                    <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                    <span class="publisher-btn file-group">
                                        <i class="fa fa-camera file-browser"></i>
                                        <input type="file">
                                    </span>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box">
                                <div class="media bb-1 border-fade">
                                    <img class="avatar avatar-lg" src="images\avatar\4.jpg" alt="...">
                                    <div class="media-body">
                                        <p>
                                            <strong>رامین محمدی</strong>
                                            <time class="float-end text-fade" datetime="2017">دقیقه پیش</time>
                                        </p>
                                        <p><small>طراح</small></p>
                                    </div>
                                </div>
                                <a href="#">
                                    <img src="images\avatar\2.jpg" alt="..." data-provide="lity">
                                </a>
                                <div class="card-body py-12">
                                    <div class="gap-items-4">
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-thumbs-up me-1"></i> 45
                                        </a>
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-comment me-1"></i> 14
                                        </a>
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-share-alt me-1"></i> 2
                                        </a>
                                    </div>
                                </div>
                                <form class="publisher bg-transparent bt-1 border-fade">
                                    <img class="avatar avatar-sm" src="images\avatar\2.jpg" alt="...">
                                    <input class="publisher-input" type="text" placeholder="کامنت بگذارید...">
                                    <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                    <span class="publisher-btn file-group">
                                        <i class="fa fa-camera file-browser"></i>
                                        <input type="file">
                                    </span>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box">
                                <div class="media bb-1 border-fade">
                                    <img class="avatar avatar-lg" src="images\avatar\5.jpg" alt="...">
                                    <div class="media-body">
                                        <p>
                                            <strong>نسترن همتی</strong>
                                            <time class="float-end text-fade" datetime="2017">24 دقیقه پیش</time>
                                        </p>
                                        <p><small>طراح</small></p>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>یک طرح بی نظیر...</p>
                                </div>
                                <div class="row" data-provide="photoswipe">
                                    <a class="col-6" href="#">
                                        <img src="images\gallery\thumb\2.jpg" alt="...">
                                    </a>
                                    <a class="col-6" href="#">
                                        <img src="images\gallery\thumb\3.jpg" alt="...">
                                    </a>
                                </div>
                                <div class="box-body py-12">
                                    <div class="gap-items-4">
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-thumbs-up me-1"></i> 541
                                        </a>
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-comment me-1"></i> 254
                                        </a>
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-share-alt me-1"></i> 30
                                        </a>
                                    </div>
                                </div>
                                <div class="media-list media-list-divided bg-lighter">
                                    <div class="media">
                                        <a class="avatar" href="#">
                                            <img src="images\avatar\4.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <p>
                                                <a href="#"><strong>مختار مینائی</strong></a>
                                                <time class="float-end text-fade" datetime="2017-07-14 20:00">25 فروردین</time>
                                            </p>
                                            <p>خیلی خوبه ....</p>
                                        </div>
                                    </div>
                                </div>
                                <form class="publisher bg-transparent bt-1 border-fade">
                                    <img class="avatar avatar-sm" src="images\avatar\5.jpg" alt="...">
                                    <input class="publisher-input" type="text" placeholder="کامنت بگذارید....">
                                    <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                    <span class="publisher-btn file-group">
                                        <i class="fa fa-camera file-browser"></i>
                                        <input type="file">
                                    </span>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="box">
                                <div class="media bb-1 border-fade">
                                    <img class="avatar avatar-lg" src="images\avatar\3.jpg" alt="...">
                                    <div class="media-body">
                                        <p>
                                            <strong>سامان امینی</strong>
                                            <time class="float-end text-fade" datetime="2017">24 دقیقه پیش</time>
                                        </p>
                                        <p><small>طراح</small></p>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p class="lead">بسیار عالی بررسی های لازم اوکی شد!!</p>
                                </div>
                                <div class="ratio ratio-16x9">
                                    <iframe src="images\gallery\thumb\2.jpg" allowfullscreen=""></iframe>
                                </div>
                                <div class="box-body py-12">
                                    <div class="gap-items-4">
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-thumbs-up me-1"></i> 145
                                        </a>
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-comment me-1"></i> 512
                                        </a>
                                        <a class="text-fade hover-light" href="#">
                                            <i class="fa fa-share-alt me-1"></i> 42
                                        </a>
                                    </div>
                                </div>
                                <form class="publisher bg-transparent bt-1 border-fade">
                                    <img class="avatar avatar-sm" src="images\avatar\4.jpg" alt="...">
                                    <input class="publisher-input" type="text" placeholder="دیدگاه تان را بنویسید...">
                                    <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                    <span class="publisher-btn file-group">
                                        <i class="fa fa-camera file-browser"></i>
                                        <input type="file">
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <img class="avatar" src="images\user1-128x128.jpg" alt="User Image">
                                        <span class="username"><a href="#">سارینا شمسی</a></span>
                                        <span class="description">یک اصلاحیه منتشر کرد - 8:30 امروز</span>
                                    </div>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="#"></a></li>
                                        <li><a class="box-btn-slide" href="#"></a></li>
                                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                                        <li><a class="" data-bs-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-bs-original-title="Contacts"><i class="ti-comments"></i></a></li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <img class="img-fluid mb-15" src="images\photo2.png" alt="Photo">
                                    <p> طراحی زیبا و حرفه ای باغچه</p>
                                    <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-share"></i> اشتراک گذاری</button>
                                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-thumbs-o-up"></i> لایک</button>
                                    <span class="pull-right text-muted">15 لایک - 2 کامنت</span>
                                </div>
                                <div class="box-footer box-comments bbsr-0 bber-0">
                                    <div class="box-comment">
                                        <img class="avatar" src="images\user3-128x128.jpg" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                الهه حمیدی
                                                <span class="text-muted pull-right">1:03 امروز</span>
                                            </span>
                                            بله خیلی خوب که اجرا کنید کارهای لازم را
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <img class="avatar" src="images\user1-128x128.jpg" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                شکوفه تبریزی
                                                <span class="text-muted pull-right">11:03 امروز</span>
                                            </span>
                                            بله خیلی خوب که اجرا کنید کارهای لازم را
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="یک پیام بگذارید ..." class="form-control">
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
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <img class="avatar" src="images\user1-128x128.jpg" alt="User Image">
                                        <span class="username"><a href="#">سارینا شمسی</a></span>
                                        <span class="description">یک اطلاعیه منتشر کرد - 8:30 امروز</span>
                                    </div>
                                    <ul class="box-controls pull-right">
                                        <li><a class="box-btn-close" href="#"></a></li>
                                        <li><a class="box-btn-slide" href="#"></a></li>
                                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                                        <li><a class="" data-bs-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-bs-original-title="Contacts"><i class="ti-comments"></i></a></li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <p>تمامی توضیحات لازم را عنوان کنید </p>
                                    <div class="attachment-block clearfix">
                                        <img class="attachment-img" src="images\photo1.png" alt="Attachment Image">
                                        <div class="attachment-pushed">
                                            <h5 class="attachment-heading"><a href="http://www.lipsum.com/">طراحی زیبا و حرفه ای باغچه</a></h5>
                                            <div class="attachment-text">
                                                توضیحات را با ریز جزئیات منتشر کنید... <a href="#">بیشتر</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-share"></i> اشتراک گذاری</button>
                                    <button type="button" class="btn btn-sm btn-success"><i class="fa fa-thumbs-o-up"></i>لایک</button>
                                    <span class="pull-right text-muted">84 لایک - 2 کامنت</span>
                                </div>
                                <div class="box-footer box-comments bbsr-0 bber-0">
                                    <div class="box-comment">
                                        <img class="avatar" src="images\user3-128x128.jpg" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                اسما ریحانی
                                                <span class="text-muted pull-right">9:03 امروز</span>
                                            </span>
                                            بله خیلی خوب که اجرا کنید کارهای لازم را
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <img class="avatar" src="images\user1-128x128.jpg" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                لیلا صادقی
                                                <span class="text-muted pull-right">10:03 امروز</span>
                                            </span>
                                            بله خیلی خوب که اجرا کنید کارهای لازم را
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="دیدگاه تان را بنویسید ..." class="form-control">
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