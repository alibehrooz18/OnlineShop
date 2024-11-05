<!DOCTYPE html>
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


    <div class="navbar-area">

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
                                <a href="#" class="nav-link">
                                    Home
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link">Home One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.php" class="nav-link">Home Two</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.php" class="nav-link">Home Three</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Courses
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="courses.php" class="nav-link">Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="single-course.php" class="nav-link active">Single Course</a>
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


    <div class="page-title-area bg-25">
        <div class="container">
            <div class="page-title-content">
                <h2>Single course</h2>
                <ul>
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li class="active">Single course</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="single-course-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-course-content">
                        <h3>Leading the way with lifelong learning</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-sm-4">
                                <div class="course-rating">
                                    <img src="assets\img\single-course\rating-img-1.jpg" alt="Image">
                                    <h4><a href="instructors.php">Instructor:</a></h4>
                                    <span>Jeremy Cioara</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="course-rating pl-0 text-center">
                                    <h4>Categories:</h4>
                                    <span>Career Advice</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="course-rating star pl-0">
                                    <h4>Reviews</h4>
                                    <div class="product-review">
                                        <div class="rating">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star-half"></i>
                                        </div>
                                        <a href="single-course.php" class="rating-count">2 reviews</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="assets\img\single-course\single-course.jpg" alt="Image">
                    </div>
                    <div class="tab single-course-tab">
                        <ul class="tabs">
                            <li>
                                <a href="javascript:;">Overview</a>
                            </li>
                            <li>
                                <a href="javascript:;">Curriculum</a>
                            </li>
                            <li>
                                <a href="javascript:;"> Instructor</a>
                            </li>
                            <li>
                                <a href="javascript:;">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab_content">
                            <div class="tabs_item">
                                <h3>Course Description</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas When an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book. It has svived not only five
                                    centuries, but also the leap into electronic typesetting, remaining essentially.</p>
                                <h3>Certification Online</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor.</p>
                                <h3>What you’ll learn?</h3>
                                <ul class="course-list">
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Quis ipsum suspendisse ultrices gravida.
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>
                                        Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                    </li>
                                </ul>
                                <h3>Who This Course is for</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                            <div class="tabs_item">
                                <div class="curriculum-content">
                                    <h3>Education introduction</h3>
                                    <div class="curriculum-list">
                                        <h4>Section 1</h4>
                                        <ul>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    Introduction
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">01 hour</span>
                                                    <span class="preview">Preview</span>
                                                </a>
                                            </li>
                                            <li class="transparent">
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    Environment setup
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">02 hours</span>
                                                    <span class="preview">Preview</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    Quiz one
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">01 min</span>
                                                    <span class="preview">4 question</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="curriculum-list">
                                        <h4>Section 2</h4>
                                        <ul>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    Utility modules
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">03 hours</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                            <li class="transparent">
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    Express framework
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">05 min</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    Web module
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">01 hour</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="curriculum-list">
                                        <h4>Section 3</h4>
                                        <ul>
                                            <li>
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    Video introduction
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">30 min</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                            <li class="transparent">
                                                <a href="instructors.php" class="meet-title">
                                                    <i class="bx bx-right-arrow"></i>
                                                    Web module
                                                </a>
                                                <a href="single-course.php" class="meet-time">
                                                    <span class="min">05 hours</span>
                                                    <i class="bx bxs-lock-alt"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="instructor-content">
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="advisor-img">
                                                <img src="assets\img\instructor-img.jpg" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="advisor-content">
                                                <a href="single-course.php">
                                                    <h3>Anna Dew</h3>
                                                </a>
                                                <span>Agile Project Expert</span>
                                                <p>Jone Smit is a celebrated photographer, author, and writer who brings
                                                    passion to everything he does.</p>
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <i class="bx bxl-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.twitter.com/" target="_blank">
                                                            <i class="bx bxl-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.youtube.com/" target="_blank">
                                                            <i class="bx bxl-youtube"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.behance.com/" target="_blank">
                                                            <i class="bx bxl-behance"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item">
                                <div class="review-content">
                                    <h3>Course rating</h3>
                                    <ul class="rating-star">
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
                                    <span>5.00 average based on 1 rating</span>
                                    <div class="rating-bar-content">
                                        <div class="single-bar">
                                            <p class="start">Star</p>
                                            <div class="rating-bar">
                                                <div class="skills html"></div>
                                            </div>
                                            <p class="percent">90%</p>
                                        </div>
                                        <div class="single-bar">
                                            <p class="start">Star</p>
                                            <div class="rating-bar">
                                                <div class="skills css"></div>
                                            </div>
                                            <p class="percent">80%</p>
                                        </div>
                                        <div class="single-bar">
                                            <p class="start">Star</p>
                                            <div class="rating-bar">
                                                <div class="skills js"></div>
                                            </div>
                                            <p class="percent">65%</p>
                                        </div>
                                        <div class="single-bar">
                                            <p class="start">Star</p>
                                            <div class="rating-bar">
                                                <div class="skills php"></div>
                                            </div>
                                            <p class="percent">60%</p>
                                        </div>
                                    </div>
                                    <div class="course-reviews-content">
                                        <h3>Reviews</h3>
                                        <ul class="course-reviews">
                                            <li>
                                                <img src="assets\img\course-reviews-img.jpg" alt="Image">
                                                <h3>Anna Dew</h3>
                                                <span>Cover all my needs</span>
                                                <p>The course identify things we want to change and then figure out the
                                                    things that need to be done to create the desired outcome. The
                                                    course helped me in clearly define problems and generate a wider
                                                    variety of quality solutions. Support more structures analysis of
                                                    options.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="account-wrap">
                        <ul>
                            <li>
                                Price <span class="bold">$29.00</span>
                            </li>
                            <li>
                                Start <span>Sep 01, 2020</span>
                            </li>
                            <li>
                                End <span>Sep 02, 2020</span>
                            </li>
                            <li>
                                Event Category <span>Education</span>
                            </li>
                            <li>
                                Total Slot: <span>100</span>
                            </li>
                            <li>
                                Booked Slot: <span>00</span>
                            </li>
                            <li>
                                Website: <a href="javascript:;">www.eduon.com</a>
                            </li>
                        </ul>
                        <a href="contact.php" class="default-btn">Book now</a>
                        <div class="social-content">
                            <p>
                                Share this course
                                <i class="bx bxs-share-alt"></i>
                            </p>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.behance.com/" target="_blank">
                                        <i class="bx bxl-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="courses-area-style pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Related Courses</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-1.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$39</span>
                            <span class="tag">Education</span>
                            <a href="single-course.php">
                                <h3>Developing strategies for online teaching and learning</h3>
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(1 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">44 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-2.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$59</span>
                            <span class="tag">Accounting</span>
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(3 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">24 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="assets\img\course-img\course-img-3.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$29</span>
                            <span class="tag">Language</span>
                            <a href="single-course.php">
                                <h3>English: spelling, punctuation, and grammar</h3>
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-course.php">(5 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">39 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include "assets/includes/footer.php" ?>
</body>

</html>