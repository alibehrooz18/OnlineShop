<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <?php include "./includes/header.php"; ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="public\css\bootstrap.rtl.min.css">

    <link rel="stylesheet" href="public\css\owl.theme.default.min.css">

    <link rel="stylesheet" href="public\css\owl.carousel.min.css">

    <link rel="stylesheet" href="public\css\magnific-popup.min.css">

    <link rel="stylesheet" href="public\css\animate.min.css">

    <link rel="stylesheet" href="public\css\boxicons.min.css">

    <link rel="stylesheet" href="public\css\flaticon.css">

    <link rel="stylesheet" href="public\css\meanmenu.min.css">

    <link rel="stylesheet" href="public\css\nice-select.min.css">

    <link rel="stylesheet" href="public\css\odometer.min.css">

    <link rel="stylesheet" href="public\css\style.css">

    <link rel="stylesheet" href="public\css\dark.css">

    <link rel="stylesheet" href="public\css\responsive.css">

    <link rel="icon" type="image/png" href="public\img\favicon.png">

    <title>Eduon - Home</title>
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


    <!-- Subscribe modal -->
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
                                    <img src="public\img\newsletter-img.jpg" alt="Image">
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

    <!-- Navbar start -->
    <div class="navbar-area">

        <div class="mobile-nav">
            <a href="index.php" class="logo">
                <img src="public\img\logo.png" class="main-logo" alt="Logo">
                <img src="public\img\logo-2.png" class="white-logo" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="index.php">
                        <img src="public\img\logo.png" class="main-logo" alt="Logo">
                        <img src="public\img\logo-2.png" class="white-logo" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="index.php" class="nav-link active">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/courses.php" class="nav-link">
                                    Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/gallery.php" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/events.php" class="nav-link">Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Shop
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="app/view/shop.php" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="app/view/wishlist.php" class="nav-link">Wishlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/contact.php" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="app/view/about.php" class="nav-link">About</a>
                            </li>
                            <!-- User should move to login botton when user login -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    User
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="app/view/my-account.php" class="nav-link">My Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="app/view/log-in.php" class="nav-link">Log In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="app/view/registration.php" class="nav-link">Registration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="app/view/recover-password.php" class="nav-link">Recover Password</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- ********************************************************************************** -->
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
                                <a href="app/view/cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="app/view/my-account.php" class="default-btn">
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
                                <a href="app/view/cart.php">
                                    <i class="flaticon-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                            <div class="register">
                                <a href="app/view/my-account.php" class="default-btn">
                                    Login / Register
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Navbar end -->


    <!-- Home banner start -->
    <section class="banner-area f5f6fa-bg-color">
        <div class="container-fluid social">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.3s">Study a recognized
                            qualification with the online learning experts</h1>
                        <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s">Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.</p>
                        <a href="app/view/courses.php" class="default-btn wow animate__animated animate__fadeInLeft"
                            data-wow-delay="0.9s">
                            View Courses
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                        <img src="public\img\banner-img\banner-img-1.jpg" alt="Image">
                    </div>
                </div>
            </div>

            <ul class="social-wrap">
                <li class="follow-us">
                    Follow Us:
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
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="bx bxl-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <i class="bx bxl-linkedin"></i>
                    </a>
                </li>
            </ul>

        </div>
    </section>
    <!-- Home banner end -->


    <!-- Partner start -->
    <div class="partner-area f5f6fa-bg-color ptb-100">
        <div class="container">
            <div class="partner-wrap owl-theme owl-carousel">
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-1.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-2.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-3.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-4.png" alt="Image">
                    </a>
                </div>
                <div class="partner-item">
                    <a href="app/view/about.php">
                        <img src="public\img\partner-logo\partner-logo-5.png" alt="Image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner end -->


    <!-- Benefits start -->
    <section class="achieve-area f5f6fa-bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Leader In Education</span>
                <h2>Achieve your goals</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-achieve">
                        <div class="achieve-shape shape-1">
                            <img src="public\img\achieve-shape\achieve-shape-1.png" alt="Image">
                            <i class="flaticon-skills"></i>
                        </div>
                        <h3>Learn the latest skills</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            sis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-achieve">
                        <div class="achieve-shape shape-2">
                            <img src="public\img\achieve-shape\achieve-shape-2.png" alt="Image">
                            <i class="flaticon-career"></i>
                        </div>
                        <h3>Get ready for a career</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            sis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-achieve">
                        <div class="achieve-shape shape-3">
                            <img src="public\img\achieve-shape\achieve-shape-3.png" alt="Image">
                            <i class="flaticon-certificate"></i>
                        </div>
                        <h3>Earn a certificate or degree</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            sis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-achieve">
                        <div class="achieve-shape shape-4">
                            <img src="public\img\achieve-shape\achieve-shape-4.png" alt="Image">
                            <i class="flaticon-group"></i>
                        </div>
                        <h3>Upskill your organization</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            sis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits end -->


    <!-- Seconde banner start -->
    <section class="education-area ebeef5-bg-color">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6">
                    <div class="education-img">
                        <img src="public\img\education-img.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="education-content ptb-100">
                        <span class="top-title">Education For All</span>
                        <h2>Why create an online course with <span>EDUON</span>?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                        </p>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                Unlimited everything
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                No transaction fees
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                No technical headaches
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                World-class support from real people
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Free migrations
                            </li>
                        </ul>
                        <a href="app/view/courses.php" class="default-btn">
                            View Courses
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Seconde banner end -->

    <!-- *********************************************** fix to get data from database ****************************************** -->
    <!-- Best course start -->
    <section class="courses-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Popular Courses</span>
                <h2>Select a course to find out more</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="public\img\course-img\course-img-1.jpg" alt="Image">
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
                                    <a href="single-product.php">(1 rating)</a>
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
                            <img src="public\img\course-img\course-img-2.jpg" alt="Image">
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
                                    <a href="single-product.php">(3 rating)</a>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="public\img\course-img\course-img-3.jpg" alt="Image">
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
                                    <a href="single-product.php">(5 rating)</a>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="public\img\course-img\course-img-4.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$49</span>
                            <span class="tag">Teaching</span>
                            <a href="single-courses.php">
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
                                    <a href="events.php">(2 rating)</a>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. </p>
                            <ul class="lessons">
                                <li>0 Lessons</li>
                                <li class="float">50 Students</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-course">
                        <a href="single-course.php">
                            <img src="public\img\course-img\course-img-5.jpg" alt="Image">
                        </a>
                        <div class="course-content">
                            <span class="price">$39</span>
                            <span class="tag">Teaching</span>
                            <a href="single-course.php">
                                <h3>Learning implementing formative assessment</h3>
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
                                    <a href="single-product.php">(1 rating)</a>
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
                            <img src="public\img\course-img\course-img-6.jpg" alt="Image">
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
                                <li>
                                    <span>0.5</span>
                                    <a href="single-product.php">(3 rating)</a>
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
            </div>
        </div>
    </section>
    <!-- Best course end -->


    <!-- Counter start -->
    <?php
    // Functions



    ?>
    <section class="counter-area ebeef5-bg-color pt-100 pb-70" dir="ltr">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter">
                        <div class="counter-shape shape-1">
                            <img src="public\img\counter-shape\counter-shape-1.png" alt="Image">
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
                            <img src="public\img\counter-shape\counter-shape-2.png" alt="Image">
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
                            <img src="public\img\counter-shape\counter-shape-3.png" alt="Image">
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
                            <img src="public\img\counter-shape\counter-shape-4.png" alt="Image">
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
    <!-- Counter end -->


    <section class="enroll-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="enroll-wrap">
                        <form class="courses-form">
                            <span>Need Any Courses</span>
                            <h3>Enroll Now</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Name" placeholder="Your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Your email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Number" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <select>
                                    <option value="">Courses Type</option>
                                    <option value="">Courses Type 1</option>
                                    <option value="">Courses Type 2</option>
                                    <option value="">Courses Type 3</option>
                                    <option value="">Courses Type 4</option>
                                    <option value="">Courses Type 5</option>
                                    <option value="">Courses Type 6</option>
                                </select>
                            </div>
                            <button type="submit" class="default-btn">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="enroll-img">
                        <img src="public\img\enroll-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="teachers-area ebeef5-bg-color pt-100">
        <div class="container">
            <div class="section-title">
                <span>Our Teachers</span>
                <h2>Our international teachers</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="public\img\teachers-img\teachers-img-1.jpg" alt="Image">
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
                            <h3>Earl Mcgowan</h3>
                            <span>IT & Software</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers">
                        <img src="public\img\teachers-img\teachers-img-2.jpg" alt="Image">
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
                        <img src="public\img\teachers-img\teachers-img-3.jpg" alt="Image">
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
                        <img src="public\img\teachers-img\teachers-img-4.jpg" alt="Image">
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

    <!-- ***************************************************** fix to get data from database ******************************************* -->
    <section class="event-area ptb-70">
        <div class="container">
            <div class="section-title">
                <span>Education Events</span>
                <h2>Upcoming events</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="single-event">
                        <a href="single-event.php">
                            <img src="public\img\event-img\event-img-1.png" alt="Image">
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
                <div class="col-lg-6 col-sm-6">
                    <div class="single-event">
                        <a href="single-event.php">
                            <img src="public\img\event-img\event-img-2.png" alt="Image">
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
                <div class="col-lg-6 col-sm-6">
                    <div class="single-event">
                        <a href="single-event.php">
                            <img src="public\img\event-img\event-img-3.png" alt="Image">
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
                <div class="col-lg-6 col-sm-6">
                    <div class="single-event">
                        <a href="single-event.php">
                            <img src="public\img\event-img\event-img-4.png" alt="Image">
                        </a>
                        <div class="event-content">
                            <ul>
                                <li>
                                    <i class="bx bx-calendar"></i>
                                    July 13, 2020
                                </li>
                                <li>
                                    <i class="bx bx-time"></i>
                                    Monday 3:00AM - 5:00PM
                                </li>
                            </ul>
                            <a href="single-event.php">
                                <h3>The great global project challenge conference</h3>
                            </a>
                            <span>
                                <i class="bx bxs-location-plus"></i>
                                London, UK
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="video-area f5f6fa-bg-color">
        <div class="container">
            <div class="video-wrap">
                <img src="public\img\video-img.jpg" alt="Image">
                <div class="video-content">
                    <a href="https://www.youtube.com/watch?v=iLS_YP1uEK8" class="video-btn popup-youtube">
                        <i class="flaticon-play-button"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <section class="feedback-area f5f6fa-bg-color ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Feedback</span>
                <h2>What students say</h2>
            </div>
            <div class="feedback-slider owl-theme owl-carousel">
                <div class="feedback-item">
                    <i class="flaticon-quotation"></i>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                        sit amet.</p>
                    <div class="feedback-title">
                        <img src="public\img\feedback-img\feedback-img-1.jpg" alt="Image">
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
                        <img src="public\img\feedback-img\feedback-img-2.jpg" alt="Image">
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
                        <img src="public\img\feedback-img\feedback-img-3.jpg" alt="Image">
                        <h3>Kilva Smith</h3>
                        <span>Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ********************************************************************************************** -->
    <section class="discover-area ebeef5-bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="discover-content">
                        <span class="top-title">Discover Courses</span>
                        <h2>Online training with on education</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas.</p>
                        <ul>
                            <li>
                                <span>1</span>
                                Explore
                            </li>
                            <li>
                                <span>2</span>
                                Compare
                            </li>
                            <li>
                                <span>3</span>
                                Decided
                            </li>
                            <li>
                                <span>4</span>
                                Enroll
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="discover-slider owl-theme owl-carousel">
                        <div class="single-course">
                            <a href="single-course.php">
                                <img src="public\img\course-img\course-img-1.jpg" alt="Image">
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
                                <img src="public\img\course-img\course-img-2.jpg" alt="Image">
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
                                <img src="public\img\course-img\course-img-3.jpg" alt="Image">
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
                                <img src="public\img\course-img\course-img-4.jpg" alt="Image">
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
                                <img src="public\img\course-img\course-img-5.jpg" alt="Image">
                            </a>
                            <div class="course-content">
                                <span class="price">$39</span>
                                <span class="tag">Teaching</span>
                                <a href="single-course.php">
                                    <h3>Learning implementing lormative assessment</h3>
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
                                <img src="public\img\course-img\course-img-6.jpg" alt="Image">
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
            </div>
        </div>
        <div class="discover-img">
            <img src="public\img\discover-img.png" alt="Image">
        </div>
    </section>


    <!-- ************************************************************************************************ -->
    <section class="news-area f5f6fa-bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Our News</span>
                <h2>Explore recent news</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-news">
                        <a href="single-blog.php">
                            <img src="public\img\news-img\news-img-1.jpg" alt="Image">
                        </a>
                        <div class="news-content">
                            <span class="tag">Development</span>
                            <a href="single-blog.php">
                                <h3>What is lifelong learning and how could it help your learning?</h3>
                            </a>
                            <ul class="lessons">
                                <li>By: <a href="single-blog.php">Admin</a></li>
                                <li class="float">Posted aon 13/07/2020</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row mb-30">
                        <div class="col-lg-4 col-sm-4 pr-0">
                            <div class="news-img bg-2"></div>
                        </div>
                        <div class="col-lg-8 col-sm-8 pl-0">
                            <div class="news-listing-content">
                                <span class="tag">Market Trends</span>
                                <a href="single-blog.php">
                                    <h3>All aspire students are now student card eligible!</h3>
                                </a>
                                <ul class="lessons">
                                    <li>By: <a href="single-blog.php">Admin</a></li>
                                    <li class="float">Posted on 12/07/2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-30">
                        <div class="col-lg-4 col-sm-4 pr-0">
                            <div class="news-img bg-3"></div>
                        </div>
                        <div class="col-lg-8 col-sm-8 pl-0">
                            <div class="news-listing-content">
                                <span class="tag">Research</span>
                                <a href="single-blog.php">
                                    <h3>Determining the true goal of a good education is difficult.</h3>
                                </a>
                                <ul class="lessons">
                                    <li>By: <a href="single-blog.php">Admin</a></li>
                                    <li class="float">Posted on 11/07/2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row r-p-mb">
                        <div class="col-lg-4 col-sm-4 pr-0">
                            <div class="news-img bg-4"></div>
                        </div>
                        <div class="col-lg-8 col-sm-8 pl-0">
                            <div class="news-listing-content">
                                <span class="tag">Career Advice</span>
                                <a href="single-blog.php">
                                    <h3>Leading the way with lifelong learning</h3>
                                </a>
                                <ul class="lessons">
                                    <li>By: <a href="single-blog.php">Admin</a></li>
                                    <li class="float">Posted on 10/07/2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="subscribe-area ebeef5-bg-color ptb-100">
        <div class="container">
            <div class="subscribe-wrap">
                <h2>Subscribe</h2>
                <p>Subscribe to our newsletter & stay updated</p>
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="Your email address" name="EMAIL" required=""
                        autocomplete="off">
                    <button class="default-btn" type="submit">
                        Subscribe Now
                    </button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
                <div class="subscribe-img">
                    <img src="public\img\subscribe-img.png" alt="Image">
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include "./includes/footer.php" ?>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="public/js/jquery.min.js"></script>

    <script src="public/js/bootstrap.bundle.min.js"></script>

    <script src="public/js/meanmenu.min.js"></script>

    <script src="public/js/owl.carousel.min.js"></script>

    <script src="public/js/wow.min.js"></script>

    <script src="public/js/nice-select.min.js"></script>

    <script src="public/js/magnific-popup.min.js"></script>

    <script src="public/js/jarallax.min.js"></script>

    <script src="public/js/appear.min.js"></script>

    <script src="public/js/odometer.min.js"></script>

    <script src="public/js/form-validator.min.js"></script>

    <script src="public/js/contact-form-script.js"></script>

    <script src="public/js/ajaxchimp.min.js"></script>

    <script src="public/js/custom.js"></script>
</body>

</html>