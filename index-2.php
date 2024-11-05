﻿<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "./assets/includes/header.php" ?>

    <title>Eduon - Online Courses & Training HTML Template</title>
</head>

<body>

    <div class="loader-wrapper">
        <div class="loader">
            <div class="dot-wrap">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </div>


    <div class="modal-newsletter-area">
        <div class="modal fade" id="exampleModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <i class="bx bx-x"></i>
                    </button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-sm-5 p-0">
                                <div class="newsletter-img">
                                    <img src="assets\img\newsletter-img.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-7 pl-0">
                                <div class="modal-newsletter-wrap">
                                    <h3>Subscribe to our newsletter</h3>
                                    <p>Sign up for our mailing list to get the latest updates & offers.</p>
                                    <form class="newsletter-form" data-toggle="validator">
                                        <input type="email" class="form-control" placeholder="Enter email address"
                                            name="EMAIL" required="" autocomplete="off">
                                        <button class="default-btn" type="submit">
                                            Subscribe Now
                                        </button>
                                        <div id="validator-newsletter-2" class="form-result"></div>
                                        <div class="agree-label">
                                            <input type="checkbox" id="chb1">
                                            <label for="chb1">
                                                Do not show this popup again
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area navbar-area-two">

        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="assets\img\logo.png" class="main-logo" alt="Logo">
                <img src="assets\img\logo-2.png" class="white-logo" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets\img\logo.png" class="main-logo" alt="Logo">
                        <img src="assets\img\logo-2.png" class="white-logo" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Home
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.php" class="nav-link active">Home Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.php" class="nav-link">Home Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Courses
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="courses.php" class="nav-link">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-course.php" class="nav-link">Single Course</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="feedback.php" class="nav-link">Feedback</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Events
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="events.php" class="nav-link">Events</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="single-event.php" class="nav-link">Single Event</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="instructors.php" class="nav-link">Instructors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User
                                            <i class="bx bx-chevron-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="my-account.php" class="nav-link">My Account</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="log-in.php" class="nav-link">Log In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="registration.php" class="nav-link">Registration</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="recover-password.php" class="nav-link">Recover Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="gallery.php" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.php" class="nav-link">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.php" class="nav-link">Terms & Conditions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.php" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="404.php" class="nav-link">404 Error Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Shop
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.php" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cart.php" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.php" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-product.php" class="nav-link">Single Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.php" class="nav-link">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog-column-one.php" class="nav-link">Blog Column One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-column-two.php" class="nav-link">Blog Column Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-column-three.php" class="nav-link">Blog Column Three</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-left-sidebar.php" class="nav-link">Blog Left Sidebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-blog.php" class="nav-link">Single Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>
                        </ul>

                        <div class="others-option">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>
                                <div class="search-overlay search-popup">
                                    <div class="search-box">
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">
                                            <button class="search-button" type="submit"><i
                                                    class="bx bx-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-icon">
                                <a href="cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="my-account.php" class="default-btn">
                                    Login / Register
                                </a>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-option justify-content-center d-flex align-items-center">
                            <div class="option-item">
                                <i class="search-btn bx bx-search"></i>
                                <i class="close-btn bx bx-x"></i>
                                <div class="search-overlay search-popup">
                                    <div class="search-box">
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">
                                            <button class="search-button" type="submit"><i
                                                    class="bx bx-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-icon">
                                <a href="cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="my-account.php" class="default-btn">
                                    Login / Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <section class="banner-area-two">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container-fluid social">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="banner-content">
                                <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.3s">Expert IT
                                    training when and where you need it</h1>
                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s">Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Voluptas architecto doloremque fugiat!
                                    Tempora, molestias minus mollitia optio laboriosam nulla, sed, numquam ad tempore
                                </p>
                                <a href="courses.php" class="default-btn wow fadeInLeft" data-wow-delay="0.9s">
                                    View Courses
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="banner-img wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                                <img src="assets\img\banner-img\banner-img-2.png" alt="Image">
                                <div class="banner-shape-1">
                                    <img src="assets\img\banner-img\shape-img-1.png" alt="Image">
                                </div>
                                <div class="banner-shape-2">
                                    <img src="assets\img\banner-img\shape-img-2.png" alt="Image">
                                </div>
                                <div class="banner-shape-3">
                                    <img src="assets\img\banner-img\shape-img-3.png" alt="Image">
                                </div>
                                <div class="banner-shape-4">
                                    <img src="assets\img\banner-img\shape-img-4.png" alt="Image">
                                </div>
                                <div class="banner-shape-5 rotated">
                                    <img src="assets\img\banner-img\shape-img-5.png" alt="Image">
                                </div>
                                <div class="banner-shape-6">
                                    <img src="assets\img\banner-img\shape-img-6.png" alt="Image">
                                </div>
                                <div class="banner-shape-7 rotated">
                                    <img src="assets\img\banner-img\shape-img-7.png" alt="Image">
                                </div>
                                <div class="banner-shape-8">
                                    <img src="assets\img\banner-img\shape-img-8.png" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="affordable-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Affordable</span>
                <h2>Your benefit with Eduon</h2>
                <img src="assets\img\section-title-shape.png" alt="Image">
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-affordable one">
                        <i class="flaticon-investment"></i>
                        <h3>Save time & money</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-affordable two">
                        <i class="flaticon-balance"></i>
                        <h3>Balance learning with life</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-affordable three">
                        <i class="flaticon-online-education"></i>
                        <h3>Gain valuable knowledge</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-affordable four">
                        <i class="flaticon-route"></i>
                        <h3>Finish what you started</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="courses-two-area f5f6fa-bg-color ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Popular Courses</span>
                <h2>Popular online courses</h2>
                <img src="assets\img\section-title-shape.png" alt="Image">
            </div>
            <div class="courses-slider-two owl-theme owl-carousel">
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="assets\img\course-img\course-img-1.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$35</span>
                        <span class="tag">Education</span>
                        <a href="single-course.php">
                            <h3>Programming foundations: real-world examples</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">44 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="assets\img\course-img\course-img-2.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$39</span>
                        <span class="tag">School</span>
                        <a href="single-course.php">
                            <h3>Teaching assistant certificate in learning in schools</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">44 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="assets\img\course-img\course-img-3.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$29</span>
                        <span class="tag">Language</span>
                        <a href="single-course.php">
                            <h3>English: spelling, punctuation and grammar</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">39 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="assets\img\course-img\course-img-4.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$49</span>
                        <span class="tag">Teaching</span>
                        <a href="single-course.php">
                            <h3>Introduction to cybersecurity for teachers</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">50 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="assets\img\course-img\course-img-5.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$39</span>
                        <span class="tag">Teaching</span>
                        <a href="single-course.php">
                            <h3>Learning Implementing Formative Assessment</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">44 Students</li>
                        </ul>
                    </div>
                </div>
                <div class="single-course">
                    <a href="single-course.php">
                        <img src="assets\img\course-img\course-img-1.jpg" alt="Image">
                    </a>
                    <div class="course-content">
                        <span class="price">$59</span>
                        <span class="tag">Education</span>
                        <a href="single-course.php">
                            <h3>Teaching languages in primary schools: putting research</h3>
                        </a>
                        <ul class="rating">
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                        </ul>
                        <ul class="lessons">
                            <li>0 Lessons</li>
                            <li class="float">44 Students</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="categories-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Categories</span>
                <h2>Top categories</h2>
                <img src="assets\img\section-title-shape.png" alt="Image">
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="assets\img\categories-img\categories-img-1.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Design</h3>
                                </a>
                                <span>Over 200+ courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="assets\img\categories-img\categories-img-2.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Development</h3>
                                </a>
                                <span>Over 300 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="assets\img\categories-img\categories-img-3.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Business</h3>
                                </a>
                                <span>Over 150 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="assets\img\categories-img\categories-img-4.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Marketing</h3>
                                </a>
                                <span>Over 200+ courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="assets\img\categories-img\categories-img-5.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>IT & Software</h3>
                                </a>
                                <span>Over 250 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="assets\img\categories-img\categories-img-6.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Data Science</h3>
                                </a>
                                <span>Over 50 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="assets\img\categories-img\categories-img-7.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Photography</h3>
                                </a>
                                <span>Over 700 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-categories">
                        <img src="assets\img\categories-img\categories-img-8.jpg" alt="Image">
                        <div class="categories-content-wrap">
                            <div class="categories-content">
                                <a href="courses.php">
                                    <h3>Music</h3>
                                </a>
                                <span>Over 150 courses</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a href="courses.php" class="default-btn">All Catagories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-area">
        <div class="container">
            <div class="feature-wrap">
                <div class="row m-0">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature">
                            <i class="flaticon-online"></i>
                            <h3>Go at your own course</h3>
                            <p>Enjoy lifetime access to courses on Eduon website</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature">
                            <i class="flaticon-expert"></i>
                            <h3>Learn from our experts</h3>
                            <p>Enjoy lifetime access to courses on Eduon website</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                        <div class="single-feature">
                            <i class="flaticon-online-class"></i>
                            <h3>Find video courses</h3>
                            <p>Enjoy lifetime access to courses on Eduon website</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feedback-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Feedback</span>
                <h2>What students say</h2>
                <img src="assets\img\section-title-shape.png" alt="Image">
            </div>
            <div class="feedback-slider owl-theme owl-carousel">
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.</p>
                    <div class="feedback-title">
                        <img src="assets\img\feedback-img\feedback-img-1.jpg" alt="Image">
                        <h3>Jessica Molony</h3>
                        <span>Designer</span>
                    </div>
                </div>
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.</p>
                    <div class="feedback-title">
                        <img src="assets\img\feedback-img\feedback-img-2.jpg" alt="Image">
                        <h3>Juhon Dew</h3>
                        <span>Marketer </span>
                    </div>
                </div>
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.</p>
                    <div class="feedback-title">
                        <img src="assets\img\feedback-img\feedback-img-3.jpg" alt="Image">
                        <h3>Kilva Smith</h3>
                        <span>Designer</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="feedback-shape-1">
            <img src="assets\img\feedback-img\feedback-shape-1.png" alt="Image">
        </div>
        <div class="feedback-shape-2">
            <img src="assets\img\feedback-img\feedback-shape-2.png" alt="Image">
        </div>
    </section>


    <section class="event-area-two ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Education Events</span>
                <h2>Upcoming events</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6">
                            <div class="single-event">
                                <a href="single-event.php">
                                    <img src="assets\img\event-img\event-img-1.png" alt="Image">
                                </a>
                                <div class="event-content">
                                    <ul>
                                        <li>
                                            <i class="bx bx-calendar"></i>
                                            Aug 13, 2020
                                        </li>
                                        <li>
                                            <i class="bx bx-time"></i>
                                            Monday 3:00AM - 5:00PM
                                        </li>
                                    </ul>
                                    <a href="single-event.php">
                                        <h3>Comprehensive literacy and reading recovery conference</h3>
                                    </a>
                                    <span>
                                        <i class="bx bxs-location-plus"></i>
                                        Washington, DC
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6">
                            <div class="single-event">
                                <a href="single-event.php">
                                    <img src="assets\img\event-img\event-img-2.png" alt="Image">
                                </a>
                                <div class="event-content">
                                    <ul>
                                        <li>
                                            <i class="bx bx-calendar"></i>
                                            Sep 14, 2020
                                        </li>
                                        <li>
                                            <i class="bx bx-time"></i>
                                            Monday 4:00AM - 6:00PM
                                        </li>
                                    </ul>
                                    <a href="single-event.php">
                                        <h3>Future of higher education: an invitation to lead</h3>
                                    </a>
                                    <span>
                                        <i class="bx bxs-location-plus"></i>
                                        New Orleans, LA
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-sm-6 offset-sm-3 offset-lg-0">
                            <div class="single-event">
                                <a href="single-event.php">
                                    <img src="assets\img\event-img\event-img-3.png" alt="Image">
                                </a>
                                <div class="event-content">
                                    <ul>
                                        <li>
                                            <i class="bx bx-calendar"></i>
                                            Oct 01, 2020
                                        </li>
                                        <li>
                                            <i class="bx bx-time"></i>
                                            Monday 3:00AM - 5:00PM
                                        </li>
                                    </ul>
                                    <a href="single-event.php">
                                        <h3>National reading recovery & literacy conference</h3>
                                    </a>
                                    <span>
                                        <i class="bx bxs-location-plus"></i>
                                        Bellevue, WA
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-img">
                        <img src="assets\img\event-img\event-img-5.png" alt="Image">
                        <div class="video-content">
                            <a href="https://www.youtube.com/watch?v=iLS_YP1uEK8" class="video-btn popup-youtube">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                        <div class="event-shape-1 rotated">
                            <img src="assets\img\event-img\event-shape-1.png" alt="Image">
                        </div>
                        <div class="event-shape-2">
                            <img src="assets\img\event-img\event-shape-2.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="teachers-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our Teachers</span>
                <h2>Our international teachers</h2>
                <img src="assets\img\section-title-shape.png" alt="Image">
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="assets\img\teachers-img\teachers-img-1.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Earl McGowan</h3>
                            <span>IT & Software</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="assets\img\teachers-img\teachers-img-2.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Chris Miller</h3>
                            <span>Mathematic</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="assets\img\teachers-img\teachers-img-3.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Mark Dent</h3>
                            <span>Programmer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="assets\img\teachers-img\teachers-img-4.jpg" alt="Image">
                        <div class="teachers-content">
                            <ul>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i
                                            class="bx bxl-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank"><i
                                            class="bx bxl-linkedin-square"></i></a>
                                </li>
                            </ul>
                            <h3>Lena Bodie</h3>
                            <span>English</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counter-area f5f6fa-bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-1">
                            <img src="assets\img\counter-shape\counter-shape-1.png" alt="Image">
                            <h2>
                                <span class="odometer" data-count="100">00</span>
                                <span class="target">%</span>
                            </h2>
                        </div>
                        <p>Success rate</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-2">
                            <img src="assets\img\counter-shape\counter-shape-2.png" alt="Image">
                            <h2>
                                <span class="odometer" data-count="5253">00</span>
                            </h2>
                        </div>
                        <p>Students enrolled</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-3">
                            <img src="assets\img\counter-shape\counter-shape-3.png" alt="Image">
                            <h2>
                                <span class="odometer" data-count="325">00</span>
                            </h2>
                        </div>
                        <p>Certified teachers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-4">
                            <img src="assets\img\counter-shape\counter-shape-4.png" alt="Image">
                            <h2>
                                <span class="odometer" data-count="565">00</span>
                            </h2>
                        </div>
                        <p>Complete courses</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="news-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our News</span>
                <h2>Explore recent news</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <a href="single-blog.php">
                            <img src="assets\img\news-img\news-img-5.jpg" alt="Image">
                        </a>
                        <div class="news-content">
                            <span class="tag">Career Advice</span>
                            <a href="single-blog.php">
                                <h3>Leading the way with lifelong learning</h3>
                            </a>
                            <ul class="lessons">
                                <li>By: <a href="single-blog.php">Admin</a></li>
                                <li class="float">Posted aon 13/07/2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <a href="single-blog.php">
                            <img src="assets\img\news-img\news-img-6.jpg" alt="Image">
                        </a>
                        <div class="news-content">
                            <span class="tag">Market Trends</span>
                            <a href="single-blog.php">
                                <h3>All aspire students are now student card eligible!</h3>
                            </a>
                            <ul class="lessons">
                                <li>By: <a href="single-blog.php">Admin</a></li>
                                <li class="float">Posted aon 12/07/2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-news">
                        <a href="single-blog.php">
                            <img src="assets\img\news-img\news-img-7.jpg" alt="Image">
                        </a>
                        <div class="news-content">
                            <span class="tag">Research</span>
                            <a href="single-blog.php">
                                <h3>Determining the true goal of a good education is difficult</h3>
                            </a>
                            <ul class="lessons">
                                <li>By: <a href="single-blog.php">Admin</a></li>
                                <li class="float">Posted aon 11/07/2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="partner-area f5f6fa-bg-color ptb-100">
        <div class="container">
            <div class="partner-wrap owl-theme owl-carousel">
                <div class="partner-item">
                    <a href="about.php">
                        <img src="assets\img\partner-logo\partner-logo-1.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="about.php">
                        <img src="assets\img\partner-logo\partner-logo-2.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="about.php">
                        <img src="assets\img\partner-logo\partner-logo-3.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="about.php">
                        <img src="assets\img\partner-logo\partner-logo-4.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="about.php">
                        <img src="assets\img\partner-logo\partner-logo-5.png" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-top-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Find Us</h3>
                        <ul class="address">
                            <li class="location">
                                <i class="bx bxs-location-plus"></i>
                                6890 Blvd, The Bronx, NY 1058 New York, USA
                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                                <a href="/cdn-cgi/l/email-protection#046c6168686b446160716b6a2a676b69"><span
                                        class="__cf_email__"
                                        data-cfemail="69010c050506290c0d1c0607470a0604">[email&#160;protected]</span></a>
                                <a href="/cdn-cgi/l/email-protection#4e3e3b2c22272d0e2b2a3b2120602d2123"><span
                                        class="__cf_email__"
                                        data-cfemail="49393c2b25202a092c2d3c2627672a2624">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i>
                                <a href="tel:+1(514)312-5678">+1 (514) 312-5678</a>
                                <a href="tel:+1(514)312-6688">+1 (514) 312-6688</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Useful links</h3>
                        <ul class="link">
                            <li>
                                <a href="courses.php">All Courses</a>
                            </li>
                            <li>
                                <a href="about.php">About us</a>
                            </li>
                            <li>
                                <a href="faq.php">Help (FAQ)</a>
                            </li>
                            <li>
                                <a href="terms-conditions.php">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="privacy-policy.php">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Top online courses</h3>
                        <ul class="link">
                            <li>
                                <a href="courses.php">AI for everyone</a>
                            </li>
                            <li>
                                <a href="courses.php">Networks and deep learning</a>
                            </li>
                            <li>
                                <a href="courses.php">Learning with python</a>
                            </li>
                            <li>
                                <a href="courses.php">Financial markets</a>
                            </li>
                            <li>
                                <a href="courses.php">Speak English professionally</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Popular subjects</h3>
                        <ul class="link">
                            <li>
                                <a href="courses.php">Data science</a>
                            </li>
                            <li>
                                <a href="courses.php">Computer science</a>
                            </li>
                            <li>
                                <a href="courses.php">Business and Management</a>
                            </li>
                            <li>
                                <a href="courses.php">Business and Management</a>
                            </li>
                            <li>
                                <a href="courses.php">Nature & Environment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <footer class="footer-bottom-area">
        <div class="container">
            <div class="copyright-wrap">
                <p>© Eduon is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
            </div>
        </div>
    </footer>


    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
        <i class="bx bx-chevrons-up"></i>
    </div>


    <?php include "assets/includes/footer.php" ?>
</body>

</html>